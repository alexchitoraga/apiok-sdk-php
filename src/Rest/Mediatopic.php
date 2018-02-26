<?php

namespace Alexchitoraga\Apiok\Rest;

class Mediatopic
{
    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/mediatopic/mediatopic.getByIds)<br/>
     * Получение медиатопика по его уникальному идентификатору<br/><br/>
     * **Авторизация**: Сессия обязательна<br/><br/>
     * Необходимые права:
     * - VALUABLE_ACCESS
     *
     * @param String $topic_ids Идентификаторы медиатопиков, разделенные запятой
     * @param FieldSets $fields Список запрашиваемых полей
     * @param Integer $media_limit Кол-во запрашиваемых блоков медиатопика. Обязательно при запросе нескольких медиатопиков. Разрешенное значение в пределе 1..3
     * @param String $features Фичи, которые поддерживает клиент
     * @return array
     */
    public function getByIds($topic_ids, $fields, $media_limit = null, $features = null)
    {
        $params['topic_ids'] = $topic_ids;
        $params['fields'] = $fields;
        if ($media_limit) $params['media_limit'] = $media_limit;
        if ($features) $params['features'] = $features;

        return ['method' => 'mediatopic.getByIds', 'params' => $params];
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/mediatopic/mediatopic.getPollAnswerVoters)<br/>
     * Возвращает пользовательей, проголосовавших за указанный вариант ответа<br/><br/>
     * **Авторизация**: Сессия обязательна<br/><br/>
     * Необходимые права:
     * - VALUABLE_ACCESS
     *
     * @param String $topic_ids Идентификаторы медиатопиков, разделенные запятой
     * @param FieldSets $fields Список запрашиваемых полей
     * @param Integer $media_limit Кол-во запрашиваемых блоков медиатопика. Обязательно при запросе нескольких медиатопиков. Разрешенное значение в пределе 1..3
     * @param String $features Фичи, которые поддерживает клиент
     * @return array
     */
    public function getPollAnswerVoters($topic_ids, $fields, $media_limit = null, $features = null)
    {
        $params['topic_ids'] = $topic_ids;
        $params['fields'] = $fields;
        if ($media_limit) $params['media_limit'] = $media_limit;
        if ($features) $params['features'] = $features;

        return ['method' => 'mediatopic.getByIds', 'params' => $params];
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/mediatopic/mediatopic.getRepublishedTopic)<br/>
     * Получение id топика после перепубликации (например, после прохождения модерации или публикации отложенного поста)<br/><br/>
     * **Авторизация**: Сессия обязательна<br/><br/>
     * Необходимые права:
     * - VALUABLE_ACCESS
     *
     * @param String $topic_is id старого топика до перепубликации
     * @return array
     */
    public function getRepublishedTopic($topic_id)
    {
        $params['topic_id'] = $topic_id;

        return ['method' => 'mediatopic.getByIds', 'params' => $params];
    }

    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/mediatopic/mediatopic.post)<br/>
     * Публикация медиатопика, который может содержать множество вложенных объектов<br/><br/>
     * **Авторизация**: Сессия обязательна<br/><br/>
     * Необходимые права:
     * - VALUABLE_ACCESS
     *
     * @param Attachment $attachment Закодированная в JSON информация о контенте медиатопика
     * @param
     * @return array
     */
    public function post($attachment, $uid = null, $type = null, $gid = null, $set_status = null, $devices = null, $text_link_preview = null, $hidden_post = null)
    {
        $params['attachment'] = $attachment;
        if ($uid) $params['uid'] = $uid;
        if ($type) $params['type'] = $type;
        if ($gid) $params['gid'] = $gid;
        if ($set_status) $params['set_status'] = $set_status;
        if ($devices) $params['devices'] = $devices;
        if ($text_link_preview) $params['text_link_preview'] = $text_link_preview;
        if ($hidden_post) $params['hidden_post'] = $hidden_post;

        return ['method' => 'mediatopic.getByIds', 'params' => $params];
    }
}
