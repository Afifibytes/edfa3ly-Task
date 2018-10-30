<?php

namespace App;

abstract class AbstractAPI implements Consumable
{
    //Common API Functionality

    protected $url;
    protected $data;
    protected $method;

    /**
     * AbstractAPI constructor.
     * @param $url
     * @param $method
     */
    public function __construct($url, $method)
    {
        $this->url = $url;
        $this->method = $method;
    }

    public function handleRequest()
    {
        $curl = curl_init();
        $this->setOptions($curl);
        $this->data = curl_exec($curl);
        curl_close($curl);
    }

    /**
     * @param $curl
     */
    private function setOptions($curl)
    {
        curl_setopt($curl, CURLOPT_URL, $this->url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $this->method);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HEADER, 0);
    }

    /**
     * @return mixed
     */
    public abstract function formatResponse();

    /**
     * @return mixed
     */
    public function getData()
    {
        $this->handleRequest();
        return $this->formatResponse();
    }
}