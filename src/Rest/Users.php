<?php

namespace Alexchitoraga\Apiok\Rest;

class Users
{
    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/users/users.deleteGuests)<br/>
     * Удалить пользователя из списка гостей<br/><br/>
     * **Авторизация**: Сессия обязательна<br/><br/>
     * Необходимые права:
     * - VALUABLE_ACCESS
     *
     * @param String $uids Список идентификаторов пользователей, которых необходимо удалить из списка гостей, разделённых запятой
     * @return array
     */
    public function deleteGuests($uids)
    {
        $params['uids'] = $uids;

        return ['method' => 'users.deleteGuests', 'params' => $params];
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/users/users.getAdditionalInfo)<br/>
     * Возвращает дополнительную информацию о пользователях<br/><br/>
     * **Авторизация**: Сессия опциональна (для External (Внешних) приложений - обязательна)<br/><br/>
     * Необходимые права:
     * - VALUABLE_ACCESS
     *
     * @param String $uids Список идентификаторов пользователей, разделенных запятыми. Макс. число идентификаторов составляет 100.
     * @return array
     */
    public function getAdditionalInfo($uids)
    {
        $params['uids'] = $uids;

        return ['method' => 'users.getAdditionalInfo', 'params' => $params];
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/users/users.getCallsLeft)<br/>
     * Метод позволяет приложению проверить, не превышен ли предел вызова методов для указанного пользователя<br/><br/>
     * **Авторизация**: Сессия опциональна (для External (Внешних) приложений - обязательна)<br/><br/>
     *
     * @param ApiMethod $methods Список разделенных запятыми имен методов
     * @param String $uid Идентификатор пользователя
     * @return array
     */
    public function getCallsLeft($methods, $uid = null)
    {
        $params['methods'] = $methods;
        if ($uid) $params['uid'] = $uid;

        return ['method' => 'users.getCallsLeft', 'params' => $params];
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/users/users.getGames)<br/>
     * Возвращает список установленных приложений у пользователя<br/><br/>
     * **Авторизация**: Сессия обязательна<br/><br/>
     * Необходимые права:
     * - VALUABLE_ACCESS
     *
     * @param UserInfoField $fields Список запрашиваемых полей
     * @return array
     */
    public function getGames()
    {
        $params = [];

        return ['method' => 'users.getGames', 'params' => $params];
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/users/users.getGuests)<br/>
     * Возвращает список гостей указанного пользователя<br/><br/>
     * **Авторизация**: Сессия обязательна<br/><br/>
     * Необходимые права:
     * - VALUABLE_ACCESS
     *
     * @param String $pagingAnchor Идентификатор постраничного вывода
     * @param PagingDirection $pagingDirection Направление постраничного вывода
     * @param Integer $count Количество возвращаемых результатов
     * @return array
     */
    public function getGuests($pagingAnchor = null, $pagingDirection = null, $count = null)
    {
        $params = [];
        if ($pagingAnchor) $params['pagingAnchor'] = $pagingAnchor;
        if ($pagingDirection) $params['pagingDirection'] = $pagingDirection;
        if ($count) $params['count'] = $count;

        return ['method' => 'users.getGuests', 'params' => $params];
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/users/users.getHolidays)<br/>
     * Метод позволяет получать список праздников пользователя.<br/><br/>
     * **Авторизация**: Сессия обязательна<br/><br/>
     * Необходимые права:
     * - VALUABLE_ACCESS
     *
     * @param String $uid Идентификатор пользователя, чьи праздники требуется получить.<br/> Если не указан, то вернутся праздники текущего пользователя.
     * @return array
     */
    public function getHolidays($uid = null)
    {
        $params = [];
        if ($uid) $params['uid'] = $uid;

        return ['method' => 'users.getHolidays', 'params' => $params];
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/users/users.getInfo)<br/>
     * Возвращает большой массив информации, связанной с пользователем, для каждого переданного идентификатора пользователя<br/><br/>
     * **Авторизация**: Сессия опциональна (для External (Внешних) приложений - обязательна)<br/><br/>
     * Необходимые права:
     * - VALUABLE_ACCESS
     *
     * @param String $uids Список разделенных запятыми идентификаторов пользователей. Макс. число идентификаторов составляет 100.
     * @param UserInfoField $fields Список запрашиваемых полей
     * @param bool $empty_pictures Если true, не возвращает изображения Odnoklassniki по умолчанию, когда фотография пользователя недоступна
     * @return array
     */
    public function getInfo($uids, $fields, $empty_pictures = false)
    {
        $params['uids'] = $uids;
        $params['fields'] = $fields;
        if ($empty_pictures) $params['emptyPictures'] = $empty_pictures;

        return ['method' => 'users.getInfo', 'params' => $params];
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/users/users.getInfoBy)<br/>
     * Возвращает большой массив информации, связанной с пользователем, с учетом его связи с вызывающим юзером<br/><br/>
     * **Авторизация**: Сессия обязательна<br/><br/>
     * Необходимые права:
     * - VALUABLE_ACCESS
     *
     * @param String $uid Идентификатор пользователя, информацию о котором требуется получить
     * @param UserInfoField $fields Список запрашиваемых полей
     * @param bool $register_as_guest Отмечать как заход в гости, по умолчанию true
     * @return array
     */
    public function getInfoBy($uid, $fields, $register_as_guest = false)
    {
        $params['uid'] = $uid;
        $params['fields'] = $fields;
        if ($register_as_guest) $params['register_as_guest'] = $register_as_guest;

        return ['method' => 'users.getInfoBy', 'params' => $params];
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/users/users.getInvitableFriends)<br/>
     * Возвращает список друзей для приглашения в игры с пометкой о возможности автовыбора из приложения<br/><br/>
     * **Авторизация**: Сессия обязательна<br/><br/>
     * Необходимые права:
     * - VALUABLE_ACCESS
     *
     * @param String $uid Идентификатор пользователя, информацию о котором требуется получить
     * @param UserInfoField $fields Список запрашиваемых полей
     * @param bool $register_as_guest Отмечать как заход в гости, по умолчанию true
     * @return array
     */
    public function getInvitableFriends()
    {
        $params = [];

        return ['method' => 'users.getInvitableFriends', 'params' => $params];
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/users/users.getLoggedInUser)<br/>
     * Возвращает информацию о текущем пользователе<br/><br/>
     * **Авторизация**: Сессия обязательна<br/><br/>
     *
     * @return array
     */
    public function getLoggedInUser()
    {
        $params = [];

        return ['method' => 'users.getLoggedInUser', 'params' => $params];
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/users/users.getMobileOperator)<br/>
     * Метод проверяет, имеет ли пользователь привязанный номер телефона, и, если имеет, возвращает идентификатор оператора мобильной связи<br/><br/>
     * **Авторизация**: Сессия опциональна (для External (Внешних) приложений - обязательна)<br/><br/>
     * Необходимые права:
     * - VALUABLE_ACCESS
     *
     * @param String $uid Идентификатор пользователя, если вызов выполняется вне сессии
     * @return array
     */
    public function getMobileOperator($uid = null)
    {
        $params = [];
        if ($uid) $params['uid'] = $uid;

        return ['method' => 'users.getMobileOperator', 'params' => $params];
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/users/users.getSettings)<br/>
     * Возвращает настройки профиля пользователя на портале<br/><br/>
     * **Авторизация**: Сессия опциональна (для External (Внешних) приложений - обязательна)<br/><br/>
     * Необходимые права:
     * - VALUABLE_ACCESS
     *
     * @param String $uid Идентификатор пользователя, если вызов выполняется вне сессии
     * @return array
     */
    public function getSettings($uid = null)
    {
        $params = [];
        if ($uid) $params['uid'] = $uid;

        return ['method' => 'users.getSettings', 'params' => $params];
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/users/users.hasAppPermission)<br/>
     * Проверяет, имеет ли приложение разрешение на выполнение вызова определенных методов для указанного пользователя<br/><br/>
     * **Авторизация**: Сессия опциональна (для External (Внешних) приложений - обязательна)<br/><br/>
     *
     * @param ApplicationPermission $ext_perm Имя разрешения, которое нужно проверить
     * @param String $uid Идентификатор пользователя
     * @return array
     */
    public function hasAppPermission($ext_perm, $uid = null)
    {
        $params['ext_perm'] = $ext_perm;
        if ($uid) $params['uid'] = $uid;

        return ['method' => 'users.hasAppPermission', 'params' => $params];
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/users/users.isAppUser)<br/>
     * Проверяет, установил ли пользователь приложение<br/><br/>
     * **Авторизация**: Сессия опциональна (для External (Внешних) приложений - обязательна)<br/><br/>
     *
     * @param String $uid Идентификатор пользователя, если не указана сессия
     * @return array
     */
    public function isAppUser($uid = null)
    {
        $params = [];
        if ($uid) $params['uid'] = $uid;

        return ['method' => 'users.isAppUser', 'params' => $params];
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/users/users.removeAppPermissions)<br/>
     * Удаление разрешений из списка разрешений пользователя на вызов приложения<br/><br/>
     * **Авторизация**: Сессия опциональна (для External (Внешних) приложений - обязательна)<br/><br/>
     *
     * @param ApplicationPermission $ext_perm Разделенный запятыми список разрешений
     * @param String $uid Идентификатор пользователя. Укажите uid при вызове этого метода без ключа сессии.
     * @return array
     */
    public function removeAppPermissions($ext_perm, $uid = null)
    {
        $params['ext_perm'] = $ext_perm;
        if ($uid) $params['uid'] = $uid;

        return ['method' => 'users.removeAppPermissions', 'params' => $params];
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/users/users.setSettings)<br/>
     * Сохраняет настройки в профиле пользователя на портале<br/><br/>
     * **Авторизация**: Сессия обязательна<br/><br/>
     * Необходимые права:
     * - VALUABLE_ACCESS
     *
     * @param String $smsNotifAdd Список типов событий, которые должны быть добавлены в список SMS-уведомлений
     * @param String $smsNotifRemove Список типов событий, которые должны быть удалены из списка SMS-уведомлений
     * @param String $smsNotifStartTime Время начала в формате «ЧЧ:ММ», когда пользователь разрешает доставку SMS-уведомлений
     * @param String $smsNotifEndTime Время окончания в формате «ЧЧ:ММ», когда пользователь разрешает доставку SMS-уведомлений
     * @return array
     */
    public function setSettings($smsNotifAdd = null, $smsNotifRemove = null, $smsNotifStartTime = null, $smsNotifEndTime = null)
    {
        $params = [];
        if ($smsNotifAdd) $params['smsNotifAdd'] = $smsNotifAdd;
        if ($smsNotifRemove) $params['smsNotifRemove'] = $smsNotifRemove;
        if ($smsNotifStartTime) $params['smsNotifStartTime'] = $smsNotifStartTime;
        if ($smsNotifEndTime) $params['smsNotifEndTime'] = $smsNotifEndTime;

        return ['method' => 'users.setSettings', 'params' => $params];
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/users/users.setStatus)<br/>
     * Устанавливает или очищает статус пользователя<br/><br/>
     * **Авторизация**: Сессия обязательна<br/><br/>
     * Необходимые права:
     * - SET_STATUS
     *
     * @param String $status Текст статуса. Если не указан, статус будет очищен.
     * @param GeoLocation $location
     * @return array
     */
    public function setStatus($status = null, $location = null)
    {
        $params = [];
        if ($status) $params['status'] = $status;
        if ($location) $params['location'] = $location;

        return ['method' => 'users.setStatus', 'params' => $params];
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/users/users.updateMask)<br/>
     * Производит логическую побитовую операцию (OR или AND) переданного числового значения над маской пользователя и устанавливает полученный результат в маску пользователя. Если параметр mask не указан, то возвращает текущее значение маски пользователя.<br/><br/>
     * **Авторизация**: Сессия опциональна (для External (Внешних) приложений - обязательна)<br/><br/>
     *
     * @param String $uid Идентификатор пользователя
     * @param Long $mask Маска. Передаётся в виде десятичного числа от 0 до 4294967295.
     * @param Boolean $orUpdate Производить OR (true) или AND (false) операцию над текущей маской пользователя.
     * @return array
     */
    public function updateMask($uid = null, $mask = null, $orUpdate = false)
    {
        $params = [];
        if ($uid) $params['uid'] = $uid;
        if ($mask) $params['mask'] = $mask;
        if ($orUpdate) $params['orUpdate'] = $mask;

        return ['method' => 'users.updateMask', 'params' => $params];
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/users/users.updateMasks)<br/>
     * Производит логическую побитовую операцию (OR или AND) переданного числового значения над масками указанных пользователей и и сохраняет результат. Если параметр mask не указан, то возвращает текущее значение масок указанных пользователей.<br/><br/>
     * **Авторизация**: Сессия запрещена<br/><br/>
     *
     * @param String $uids Список разделенных запятыми идентификаторов пользователей. Макс. число идентификаторов составляет 100.
     * @param Long $mask Маска. Передаётся в виде десятичного числа от 0 до 4294967295.
     * @param Boolean $orUpdate Производить OR (true) или AND (false) операцию над текущей маской пользователя.
     * @return array
     */
    public function updateMasks($uids, $mask = null, $orUpdate = false)
    {
        $params['uids'] = $uids;
        if ($mask) $params['mask'] = $mask;
        if ($orUpdate) $params['orUpdate'] = $mask;

        return ['method' => 'users.updateMasks', 'params' => $params];
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/users/users.updateMasksV2)<br/>
     * Производит битовые операции над масками указанных пользователей и и сохраняет результат. Если параметр маски для операции не указаны, то возвращает текущее значение масок указанных пользователей.<br/><br/>
     * **Авторизация**: Сессия запрещена<br/><br/>
     *
     * @param String $uids Список разделенных запятыми идентификаторов пользователей. Макс. число идентификаторов составляет 100.
     * @param Long $or_mask Маска. Маска которая будет добавлена (OR) к текущей маске
     * @param Long $and_mask Маска, которая будет умножена (AND) с текущей маской
     * @return array
     */
    public function updateMasksV2($uids, $or_mask = null, $and_mask = null)
    {
        $params['uids'] = $uids;
        if ($or_mask) $params['or_mask'] = $or_mask;
        if ($and_mask) $params['and_mask'] = $and_mask;

        return ['method' => 'users.updateMasksV2', 'params' => $params];
    }

}