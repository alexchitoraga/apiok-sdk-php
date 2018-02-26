<?php

namespace Alexchitoraga\Apiok;

/**
 * @method array usersDeleteGuests($uids) Удалить пользователя из списка гостей
 * @method array usersGetAdditionalInfo($uids) Возвращает дополнительную информацию о пользователях
 * @method array usersGetCallsLeft($methods, $uid = null) Метод позволяет приложению проверить, не превышен ли предел вызова методов для указанного пользователя
 * @method array usersGetGames() Возвращает список установленных приложений у пользователя
 * @method array usersGetGuests($pagingAnchor = null, $pagingDirection = null, $count = null) Возвращает список гостей указанного пользователя
 * @method array usersGetHolidays($uid = null) Метод позволяет получать список праздников пользователя.
 * @method array usersGetInfo($uids, $fields, $empty_pictures = false) Возвращает большой массив информации, связанной с пользователем, для каждого переданного идентификатора пользователя
 * @method array usersGetInfoBy($uid, $fields, $register_as_guest = false) Возвращает большой массив информации, связанной с пользователем, с учетом его связи с вызывающим юзером
 * @method array usersGetInvitableFriends() Возвращает список друзей для приглашения в игры с пометкой о возможности автовыбора из приложения
 * @method array usersGetLoggedInUser() Возвращает информацию о текущем пользователе
 * @method array usersGetMobileOperator($uid = null) Метод проверяет, имеет ли пользователь привязанный номер телефона, и, если имеет, возвращает идентификатор оператора мобильной связи
 * @method array usersGetSettings($uid = null) Возвращает настройки профиля пользователя на портале
 * @method array usersHasAppPermission($ext_perm, $uid = null) Проверяет, имеет ли приложение разрешение на выполнение вызова определенных методов для указанного пользователя
 * @method array usersIsAppUser($uid = null) Проверяет, установил ли пользователь приложение
 * @method array usersRemoveAppPermissions($ext_perm, $uid = null) Удаление разрешений из списка разрешений пользователя на вызов приложения
 * @method array usersSetSettings($smsNotifAdd = null, $smsNotifRemove = null, $smsNotifStartTime = null, $smsNotifEndTime = null) Сохраняет настройки в профиле пользователя на портале
 * @method array usersSetStatus($status = null, $location = null) Устанавливает или очищает статус пользователя
 * @method array usersUpdateMask($uid = null, $mask = null, $orUpdate = false) Производит логическую побитовую операцию ( OR или AND ) переданного числового значения над маской пользователя и устанавливает полученный результат в маску пользователя. Если параметр mask не указан, то возвращает текущее значение маски пользователя.
 * @method array usersUpdateMasks($uids, $mask = null, $orUpdate = false) Производит логическую побитовую операцию ( OR или AND ) переданного числового значения над масками указанных пользователей и и сохраняет результат. Если параметр mask не указан, то возвращает текущее значение масок указанных пользователей.
 * @method array usersUpdateMasksV2($uids, $or_mask = null, $and_mask = null) Производит битовые операции над масками указанных пользователей и и сохраняет результат. Если параметр маски для операции не указаны, то возвращает текущее значение масок указанных пользователей.
 * @method array urlGetInfo($url) Получить id и тип объекта по полной ссылке
 * @method array groupGetCounters($group_id, $counterTypes, $uid = null) Возвращает основные счётчики объектов группы - количество членов группы, фотографий, фотоальбомов и т.п.
 * @method array groupGetInfo($uids, $fields, $move_to_top = false) Получение информации о группах
 * @method array groupGetMembers($uid, $anchor = null, $direction = null, $statuses = null, $count = null) Получение списка пользователей группы. Для получения всех участников группы в порядке вступления необходимо в качестве аргумента statuses перечислить все статусы (ADMIN, MODERATOR, ACTIVE). Если передать пустое значение, то пользователи вернутся в порядке возрастания id.
 * @method array groupGetStatOverview($gid, $fields, $period = null, $start_time = null) Получает основные счетчики статистики групп
 * @method array groupGetStatPeople($gid, $fields, $demo_type = null) Метод для получения статистики по аудитории группы: демография по полу и возрасту, география по странам и городам, и т.д.<br/>Данные в статистике возвращаются за последние 7 дней. За исключением демографии по участникам, она - среди всех участников группы (НО демография по охвату и пользователям, дававшим обратную связь - за последние 7 дней).
 * @method array groupGetStatTopic($topic_id, $fields) Метод для получения статистики по топику, используя его идентификатор
 * @method array groupGetStatTopics($gid, $fields, $count = null, $anchor = null, $start_time = null, $end_time = null) Метод для получения статистики по топикам. Возвращает список топиков из группы по выбранному диапазону со статистикой.
 * @method array groupGetStatTrends($gid, $fields, $start_time = null, $end_time = null) Получает историю счетчиков статистики по дням
 * @method array groupGetUserGroupsByIds($group_id, $uids) Получение информации о принадлежности пользователей конкретной группе
 * @method array groupGetUserGroupsV2($uid = null, $anchor = null, $direction = null, $count = null) Получение списка групп пользователя
 * @method array groupPinGroupFeed($pin_id) Операция припинивания или отпинивания события в групповой ленте
 * @method array groupSetMainPhoto($group_id, $photo_id) Установка главной фотографии группы. Используется как 3й шаг процесса загрузки фотографий на сервер.
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
        $class = strtolower($output_array[0]);

        preg_match("/[a-z]*([A-Za-z]*)/", $name, $output_array);
        $method = lcfirst($output_array[1]);

        $method_name = $class . '.' . $method;

        $params = array();
        if (isset($arguments[0])) {
            if (!is_array($arguments[0])) throw new \ErrorException('Params should have array type');
            $params = $arguments[0];
        }

        $response = $this->sendApiRequest($method_name, $params);

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