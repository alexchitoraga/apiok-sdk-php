<?php

namespace Alexchitoraga\Apiok\Rest;

class Url
{
    /**
     * [Link to Wiki](https://apiok.ru/dev/methods/rest/url/url.getInfo)<br/>
     * Получить id и тип объекта по полной ссылке<br/>
     * **Авторизация**: Сессия опциональна (для External (Внешних) приложений - обязательна)<br/>
     * Необходимые права:
     * - VALUABLE_ACCESS
     *
     * @param String $url Ссылка на профиль пользователя/приложение/группу.
     * @return array
     */
    public function getInfo($url)
    {
        $params['url'] = $url;

        return array('method' => 'url.getInfo', 'params' => $params);
    }
}