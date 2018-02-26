<?php

class ApiokTest extends \PHPUnit\Framework\TestCase
{
    protected $configs = [
        'session_key' => SESSION_KEY,
        'application_key' => APPLICATION_KEY,
        'access_token' => ACCESS_TOKEN,
        'secret_key' => SECRET_KEY,
    ];

    public function testCallMethodWithoutConfigs()
    {
        $apiok = new \Alexchitoraga\Apiok\Apiok();

        $this->expectException(\PHPUnit\Framework\Error\Notice::class);

        $apiok->usersGetInfo();
    }

    public function testCallWrongMethod()
    {
        $apiok = new \Alexchitoraga\Apiok\Apiok($this->configs);

        $response = $apiok->usersTest();

        $this->assertEquals(3, $response['error_code']);
    }

    public function testCallMethodWithoutArguments()
    {
        $apiok = new \Alexchitoraga\Apiok\Apiok($this->configs);

        $response = $apiok->usersGetInfo();

        $this->assertEquals(100, $response['error_code']);
    }

    public function testCallMehodWithArguments()
    {
        $apiok = new \Alexchitoraga\Apiok\Apiok($this->configs);

        $response = $apiok->urlGetInfo(['url' => 'https://ok.ru/apiok']);

        $this->assertEquals('GROUP', $response['type']);
    }

}