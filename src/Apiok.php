<?php

namespace Alexchitoraga\Apiok;

/**
 * @method array usersGetInfo($uids, $fields, $empty_pictures = false) Возвращает большой массив информации, связанной с пользователем, для каждого переданного идентификатора пользователя
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