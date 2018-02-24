<?php

namespace Alexchitoraga\Apiok\Rest;

class Group
{
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
}