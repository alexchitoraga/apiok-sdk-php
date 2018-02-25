<?php

namespace Alexchitoraga\Apiok\Rest;

class Users
{
    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/users/users.getInfo)<br/>
     * Возвращает большой массив информации, связанной с пользователем, для каждого переданного идентификатора пользователя<br/>
     * **Авторизация**: Сессия опциональна (для External (Внешних) приложений - обязательна)<br/>
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
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/users/users.deleteGuests)<br/>
     * Удалить пользователя из списка гостей<br/>
     * **Авторизация**: Сессия обязательна
     * Необходимые права:
     * - VALUABLE_ACCESS
     *
     * @param String $uids Список идентификаторов пользователей, которых необходимо удалить из списка гостей, разделённых запятой
     * @return array
     */
    public function deleteGuests(string $uids): array
    {
        $params['uids'] = $uids;

        return ['method' => 'users.deleteGuests', 'params' => $params];
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/users/users.getAdditionalInfo)<br/>
     * Возвращает дополнительную информацию о пользователях<br/>
     * **Авторизация**: Сессия опциональна (для External (Внешних) приложений - обязательна)
     * Необходимые права:
     * - VALUABLE_ACCESS
     *
     * @param String $uids Список идентификаторов пользователей, разделенных запятыми. Макс. число идентификаторов составляет 100.
     * @return array
     */
    public function getAdditionalInfo(string $uids): array
    {
        $params['uids'] = $uids;

        return ['method' => 'users.getAdditionalInfo', 'params' => $params];
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/users/users.getCallsLeft)<br/>
     * Метод позволяет приложению проверить, не превышен ли предел вызова методов для указанного пользователя
     * **Авторизация**: Сессия опциональна (для External (Внешних) приложений - обязательна)
     *
     * @param ApiMethod $methods Список разделенных запятыми имен методов
     * @param String $uid Идентификатор пользователя
     * @return array
     */
    public function getCallsLeft(string $methods, string $uid = null): array
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
    public function getGames(): array
    {
        $params = [];

        return ['method' => 'users.getGames', 'params' => $params];
    }


}