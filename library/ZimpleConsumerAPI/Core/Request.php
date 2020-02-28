<?php

declare(strict_types=1);

namespace Zimple\Core;


use Zimple\Common\ApiResponse;
use Zimple\Exception\ApiConnectionException;
use Zimple\Exception\AuthenticationException;
use Zimple\Exception\UnknownApiErrorException;

class Request
{
    private $path;

    private $url;

    private $environment;

    protected $data = [];

    protected $response_data;

    protected $code;

    public function factory($env, $path)
    {
        $this->environment = $env;
        $this->path = $path;
    }

    public function addData($k, $v)
    {
        $this->data[$k] = $v;
    }

    public function request($method, $params)
    {
        $this->url = $this->environment. $this->path;

        list($rbody, $rcode, $rheaders) = HTTP::request($method, $this->url, "application/json", $params);
        $json = $this->response($rbody, $rcode, $rheaders);
        return new ApiResponse($rbody, $rcode, $rheaders, $json);
    }

    public function launch($method)
    {
        return $this->request($method, $this->data);
    }

    public function handleErrorResponse($rbody, $rcode, $rheaders, $resp)
    {
        $msg = isset($resp['message']) ? $resp['message'] : null;

        switch ($rcode){
            case 401:
                return AuthenticationException::factory($msg, $rcode, $rbody, $resp, $rheaders);

            default:
                return UnknownApiErrorException::factory($msg, $rcode, $rbody, $resp, $rheaders);
        }
    }

    private function response($rbody, $rcode, $rheaders)
    {
        $resp = json_decode($rbody, true);
        $jsonError = json_last_error();

        if ($rcode<200 || $rcode >= 300){
            $this->handleErrorResponse($rbody, $rcode, $rheaders, $resp);
        }

        return $resp;
    }
}