<?php

namespace FoxLaby\SMSLaby;

class Config implements \ArrayAccess
{
    private $container = [];

    public function __construct($hash_key) {
        $this->container = [
            'url' => 'http://sms.foxlaby.test/api/send',
            'hash_key' => $hash_key,
            'headers' => [
                'X-hash-fox' => $hash_key,
            ]
        ];
    }

    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetExists($offset) {
        return isset($this->container[$offset]);
    }

    public function offsetUnset($offset) {
        unset($this->container[$offset]);
    }

    public function offsetGet($offset) {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
}