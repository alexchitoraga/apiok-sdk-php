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
}