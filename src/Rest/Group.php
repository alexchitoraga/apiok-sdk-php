<?php

namespace Alexchitoraga\Apiok\Rest;

class Group
{
    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/group/group.getCounters)<br/>
     * Возвращает основные счётчики объектов группы - количество членов группы, фотографий, фотоальбомов и т.п.<br/><br/>
     * **Авторизация**: Сессия опциональна (для External (Внешних) приложений - обязательна)<br/><br/>
     *
     * @param String $group_id Идентификатор группы, счётчики которой нужно получить.
     * @param ApiGroupCounterType $counterTypes Список счётчиков, разделённых запятой, которые нужно получить.
     * @param String $uid Идентификатор пользователя, если вызов выполняется вне сессии
     * @return array
     */
    public function getCounters($group_id, $counterTypes, $uid = null)
    {
        $params['group_id'] = $group_id;
        $params['counterTypes'] = $counterTypes;
        if ($uid) $params['uid'] = $uid;

        return array('method' => 'group.getCounters', 'params' => $params);
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/group/group.getInfo)<br/>
     * Получение информации о группах<br/><br/>
     * **Авторизация**: Сессия опциональна (для External (Внешних) приложений - обязательна)<br/><br/>
     *
     * @param String $uids Список идентификаторов групп, разделённых запятой, о которых нужно запросить информацию
     * @param GroupBeanFields $fields Список запрашиваемых полей
     * @param Boolean $move_to_top Если вызов происходит от имени пользователя, а пользователь состоит в запрашиваемой группе, то данная группа перемещается на верх в списке групп пользователя. Имеет смысл, только если запрашиваемая группа единственная. По умолчанию false.
     * @return array
     */
    public function getInfo($uids, $fields, $move_to_top = false)
    {
        $params['uids'] = $uids;
        $params['fields'] = $fields;
        if ($move_to_top) $params['move_to_topv'] = $move_to_top;

        return array('method' => 'group.getInfo', 'params' => $params);
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/group/group.getMembers)<br/>
     * Получение списка пользователей группы. Для получения всех участников группы в порядке вступления необходимо в качестве аргумента statuses перечислить все статусы (ADMIN, MODERATOR, ACTIVE). Если передать пустое значение, то пользователи вернутся в порядке возрастания id.<br/><br/>
     * **Авторизация**: Сессия обязательна<br/><br/>
     * Необходимые права:
     * - GROUP_CONTENT
     * - VALUABLE_ACCESS
     *
     * @param String $uid Идентификатор группы, список пользователей которой необходимо получить.
     * @param String $anchor Идентификатор постраничного вывода.
     * @param PagingDirection $direction Направление постраничного вывода.
     * @param GroupMemberStatus $statuses Список статусов участников группы. Может быть пустым - в этом случае возвращаются все действующие участники.
     * @param Integer $count Количество возвращаемых результатов.
     * @return array
     */
    public function getMembers($uid, $anchor = null, $direction = null, $statuses = null, $count = null)
    {
        $params['uid'] = $uid;
        if ($anchor) $params['anchor'] = $anchor;
        if ($direction) $params['direction'] = $direction;
        if ($statuses) $params['statuses'] = $statuses;
        if ($count) $params['count'] = $count;

        return array('method' => 'group.getMembers', 'params' => $params);
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/group/group.getStatOverview)<br/>
     * Получает основные счетчики статистики групп<br/><br/>
     * **Авторизация**: Сессия обязательна<br/><br/>
     * Необходимые права:
     * - GROUP_CONTENT
     * - VALUABLE_ACCESS
     *
     * @param String $gid Идентификатор группы, по которой необходимо получить статистику
     * @param StatGroupOverviewFields $fields Список запрашиваемых полей
     * @param GroupStatPeriod $period Может быть пустым - в этом случае возвращается статистика за неделю
     * @param Long $start_time Время в миллисекундах начала месяца, за который нужно получить статистику. Поле используется только, если параметр period = MONTH. Все доступные значения этого параметра (месяца, по которым доступна статистика) возвращаются в response этого метода в поле months_ms.
     * @return array
     */
    public function getStatOverview($gid, $fields, $period = null, $start_time = null)
    {
        $params['gid'] = $gid;
        $params['fields'] = $fields;
        if ($period) $params['period'] = $period;
        if ($start_time) $params['start_time'] = $start_time;

        return array('method' => 'group.getStatOverview', 'params' => $params);
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/group/group.getStatPeople)<br/>
     * Метод для получения статистики по аудитории группы: демография по полу и возрасту, география по странам и городам, и т.д.<br/>Данные в статистике возвращаются за последние 7 дней. За исключением демографии по участникам, она - среди всех участников группы (НО демография по охвату и пользователям, дававшим обратную связь - за последние 7 дней).<br/><br/>
     * **Авторизация**: Сессия обязательна<br/><br/>
     * Необходимые права:
     * - GROUP_CONTENT
     * - VALUABLE_ACCESS
     *
     * @param String $gid Идентификатор группы, по которой необходимо получить статистику
     * @param StatGroupPeopleFields $fields Список запрашиваемых полей
     * @param GroupStatDemoType $demo_type Может быть пустым - в этом случае возвращается демография по участникам группы
     * @return array
     */
    public function getStatPeople($gid, $fields, $demo_type = null)
    {
        $params['gid'] = $gid;
        $params['fields'] = $fields;
        if ($demo_type) $params['demo_type'] = $demo_type;

        return array('method' => 'group.getStatPeople', 'params' => $params);
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/group/group.getStatTopic)<br/>
     * Метод для получения статистики по топику, используя его идентификатор<br/><br/>
     * **Авторизация**: Сессия обязательна<br/><br/>
     * Необходимые права:
     * - GROUP_CONTENT
     * - VALUABLE_ACCESS
     *
     * @param String $topic_id Идентификатор топика, по которой необходимо получить статистику
     * @param StatTopicBeanFields $fields Список запрашиваемых полей
     * @return array
     */
    public function getStatTopic($topic_id, $fields)
    {
        $params['topic_id'] = $topic_id;
        $params['fields'] = $fields;

        return array('method' => 'group.getStatTopic', 'params' => $params);
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/group/group.getStatTopics)<br/>
     * Метод для получения статистики по топикам. Возвращает список топиков из группы по выбранному диапазону со статистикой.<br/><br/>
     * **Авторизация**: Сессия обязательна<br/><br/>
     * Необходимые права:
     * - GROUP_CONTENT
     * - VALUABLE_ACCESS
     *
     * @param String $gid Идентификатор группы, по которой необходимо получить статистику
     * @param StatTopicBeanFields $fields Список запрашиваемых полей
     * @param Integer $count Количество возвращаемых результатов
     * @param String $anchor Идентификатор постраничного вывода
     * @param Long $start_time Время в миллисекундах начала периода, за который нужно получить топики. Может быть пустым - возвращаются данные с самого начала сбора статистики по этой группе.
     * @param Long $end_time Время в миллисекундах конца периода, за который нужно получить топики. Может быть пустым - возвращаются данные до текущей даты включительно.
     * @return array
     */
    public function getStatTopics($gid, $fields, $count = null, $anchor = null, $start_time = null, $end_time = null)
    {
        $params['gid'] = $gid;
        $params['fields'] = $fields;
        if ($count) $params['count'] = $count;
        if ($anchor) $params['anchor'] = $anchor;
        if ($start_time) $params['start_time'] = $start_time;
        if ($end_time) $params['end_time'] = $end_time;

        return array('method' => 'group.getStatTopics', 'params' => $params);
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/group/group.getStatTrends)<br/>
     * Получает историю счетчиков статистики по дням<br/><br/>
     * **Авторизация**: Сессия обязательна<br/><br/>
     * Необходимые права:
     * - GROUP_CONTENT
     * - VALUABLE_ACCESS
     *
     * @param String $gid Идентификатор группы, по которой необходимо получить статистику
     * @param StatTopicBeanFields $fields Список запрашиваемых полей
     * @param Long $start_time Время в миллисекундах начала периода, за который нужно получить топики. Может быть пустым - возвращаются данные с самого начала сбора статистики по этой группе.
     * @param Long $end_time Время в миллисекундах конца периода, за который нужно получить топики. Может быть пустым - возвращаются данные до текущей даты включительно.
     * @return array
     */
    public function getStatTrends($gid, $fields, $start_time = null, $end_time = null)
    {
        $params['gid'] = $gid;
        $params['fields'] = $fields;
        if ($start_time) $params['start_time'] = $start_time;
        if ($end_time) $params['end_time'] = $end_time;

        return array('method' => 'group.getStatTrends', 'params' => $params);
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/group/group.getUserGroupsByIds)<br/>
     * Получение информации о принадлежности пользователей конкретной группе<br/><br/>
     * **Авторизация**: Сессия опциональна (для External (Внешних) приложений - обязательна)<br/><br/>
     *
     * @param String $group_id Идентификатор группы
     * @param String $uids Список идентификаторов пользователей, разделённых запятой, принадлежность группе которых нужно проверить. Максимальное количество идентификаторов в одном запросе - 100.
     * @return array
     */
    public function getUserGroupsByIds($group_id, $uids)
    {
        $params['group_id'] = $group_id;
        $params['uids'] = $uids;

        return array('method' => 'group.getUserGroupsByIds', 'params' => $params);
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/group/group.getUserGroupsV2)<br/>
     * Получение списка групп пользователя<br/><br/>
     * **Авторизация**: Сессия опциональна (для External (Внешних) приложений - обязательна)<br/><br/>
     *
     * @param String $uid Идентификатор пользователя, список групп которого необходимо получить
     * @param String $anchor Идентификатор постраничного вывода
     * @param PagingDirection $direction Направление постраничного вывода
     * @param Integer $count Количество возвращаемых результатов
     * @return array
     */
    public function getUserGroupsV2($uid = null, $anchor = null, $direction = null, $count = null)
    {
        if ($uid) $params['uid'] = $uid;
        if ($anchor) $params['anchor'] = $anchor;
        if ($direction) $params['direction'] = $direction;
        if ($count) $params['count'] = $count;

        return array('method' => 'group.getUserGroupsV2', 'params' => $params);
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/group/group.pinGroupFeed)<br/>
     * Операция припинивания или отпинивания события в групповой ленте<br/><br/>
     * **Авторизация**: Сессия обязательна<br/><br/>
     * Необходимые права:
     * - GROUP_CONTENT
     * - VALUABLE_ACCESS
     *
     * @param String $pin_id Идентификатор припинивания, который можно получить в событии в ленте атрибут feed.pin_id
     * @return array
     */
    public function pinGroupFeed($pin_id)
    {
        $params['pin_id'] = $pin_id;

        return array('method' => 'group.pinGroupFeed', 'params' => $params);
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/group/group.setMainPhoto)<br/>
     * Установка главной фотографии группы. Используется как 3й шаг процесса загрузки фотографий на сервер.<br/><br/>
     * **Авторизация**: Сессия обязательна<br/><br/>
     * Необходимые права:
     * - GROUP_CONTENT
     * - PHOTO_CONTENT
     * - VALUABLE_ACCESS
     *
     * @param String $group_id Идентификатор группы
     * @param String $photo_id Идентификатор загруженной фотографии из результата метода photosV2.getUploadUrl
     * @return array
     */
    public function setMainPhoto($group_id, $photo_id)
    {
        $params['group_id'] = $group_id;
        $params['photo_id'] = $photo_id;

        return array('method' => 'group.setMainPhoto', 'params' => $params);
    }
}