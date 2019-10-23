<?php

namespace FoxLaby\SMSLaby;

use FoxLaby\SMSLaby\Config;

use GuzzleHttp\Client;

class CallServer
{
    /**
     * Create a new CallServer Instance
     * @param object $config
     */
    public function __construct(Config $config) {
        $this->config = $config;
    }

    /**
     * When you run  it sends information to the server
     * @return array Results
     */
    public function run()
    {
        $client = new Client();
        $response = $client->request('post', $this->config['endpoint'], [
            'headers' => $this->config['headers'],
            'form_params' => [
                'lang' => $this->config['lang'],
                'number' => $this->config['to'],
                'body' => $this->config['message'],
                'mode' => $this->config['mode']
            ]
        ]);

        $data = $response->getBody()->getContents();
        return json_decode($data, true);
    }
}