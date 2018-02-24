<?php

namespace Alexchitoraga\Apiok\Rest;

class Mediatopic
{
    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/mediatopic/mediatopic.getByIds)<br/>
     * Получение медиатопика по его уникальному идентификатору<br/>
     * **Авторизация**: Сессия обязательна<br/>
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
}