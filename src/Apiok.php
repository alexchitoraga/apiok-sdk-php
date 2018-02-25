<?php

namespace Alexchitoraga\Apiok;

/**
 * @method array deleteGuests($uids) Удалить пользователя из списка гостей
 * @method array getAdditionalInfo($uids) Возвращает дополнительную информацию о пользователях
 * @method array getCallsLeft($methods, $uid = null) Метод позволяет приложению проверить, не превышен ли предел вызова методов для указанного пользователя
 * @method array getGames() Возвращает список установленных приложений у пользователя
 * @method array getGuests($pagingAnchor = null, $pagingDirection = null, $count = null) Возвращает список гостей указанного пользователя
 * @method array getHolidays($uid = null) Метод позволяет получать список праздников пользователя.
 * @method array getInfo($uids, $fields, $empty_pictures = false) Возвращает большой массив информации, связанной с пользователем, для каждого переданного идентификатора пользователя
 * @method array getInfoBy($uid, $fields, $register_as_guest = false) Возвращает большой массив информации, связанной с пользователем, с учетом его связи с вызывающим юзером
 * @method array getInvitableFriends() Возвращает список друзей для приглашения в игры с пометкой о возможности автовыбора из приложения
 * @method array getLoggedInUser() Возвращает информацию о текущем пользователе
 * @method array getMobileOperator($uid = null) Метод проверяет, имеет ли пользователь привязанный номер телефона, и, если имеет, возвращает идентификатор оператора мобильной связи
 * @method array getSettings($uid = null) Возвращает настройки профиля пользователя на портале
 * @method array hasAppPermission($ext_perm, $uid = null) Проверяет, имеет ли приложение разрешение на выполнение вызова определенных методов для указанного пользователя
 * @method array isAppUser($uid = null) Проверяет, установил ли пользователь приложение
 * @method array removeAppPermissions($ext_perm, $uid = null) Удаление разрешений из списка разрешений пользователя на вызов приложения
 * @method array setSettings($smsNotifAdd = null, $smsNotifRemove = null, $smsNotifStartTime = null, $smsNotifEndTime = null) Сохраняет настройки в профиле пользователя на портале
 * @method array setStatus($status = null, $location = null) Устанавливает или очищает статус пользователя
 * @method array updateMask($uid = null, $mask = null, $orUpdate = false) Производит логическую побитовую операцию ( OR или AND ) переданного числового значения над маской пользователя и устанавливает полученный результат в маску пользователя. Если параметр mask не указан, то возвращает текущее значение маски пользователя.
 * @method array updateMasks($uids, $mask = null, $orUpdate = false) Производит логическую побитовую операцию ( OR или AND ) переданного числового значения над масками указанных пользователей и и сохраняет результат. Если параметр mask не указан, то возвращает текущее значение масок указанных пользователей.
 * @method array updateMasksV2($uids, $or_mask = null, $and_mask = null) Производит битовые операции над масками указанных пользователей и и сохраняет результат. Если параметр маски для операции не указаны, то возвращает текущее значение масок указанных пользователей.
 */

class Apiok
{
    /**
     * APIOK Configurations
     *
     * @var $config
     * */
    protected $config;

    function __construct($config = array())
    {
        $this->config = $config;
    }

    /**
     * Call REST functions
     *
     * @param string $name Function name
     * @param array $arguments Arguments
     * @return mixed
     * @throws \ErrorException
     */
    function __call($name, $arguments)
    {
        preg_match("/^([a-z]*)/", $name, $output_array);
        $class_name = '\Alexchitoraga\Apiok\Rest\\' . ucfirst($output_array[0]);

        preg_match("/[a-z]*([A-Za-z]*)/", $name, $output_array);
        $method_name = lcfirst($output_array[1]);

        $rest_class = new $class_name;

        if (!method_exists($rest_class, $method_name))
            throw new \ErrorException('Method ' . $method_name . '() not exists');

        $data = call_user_func_array([$rest_class, $method_name], $arguments);

        $response = $this->sendApiRequest($data['method'], $data['params']);

        return $response;
    }

    /**
     * Send API Request to OK Server
     *
     * @param string $method Method name
     * @param array $params Method params
     * @return array Response from API
     */
    protected function sendApiRequest(string $method, array $params)
    {
        $request_url = $this->getRequestUrl($method, $params);
        $curl = curl_init('http://api.odnoklassniki.ru/fb.do?' . $request_url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($curl);
        curl_close($curl);
        return json_decode($data, true);
    }

    /**
     * Get Request Url based on method and params
     *
     * @param string $method API method
     * @param array $params Method params
     * @return string Request Url
     */
    protected function getRequestUrl($method, array $params)
    {
        $params['method'] = $method;
        $params['session_key'] = $this->config['session_key'];
        $params['application_key'] = $this->config['application_key'];
        $params['sig'] = $this->getSignature($params);
        $params['access_token'] = $this->config['access_token'];

        return http_build_query($params, null, '&');
    }

    /**
     * Generate special signature for APIOK
     *
     * @param array $params Method params
     * @return string OK Signature
     */
    protected function getSignature(array $params)
    {
        ksort($params);
        $request = urldecode(http_build_query($params, null, null));
        $request .= md5($this->config['access_token'] . $this->config['secret_key']);
        return md5($request);
    }

}