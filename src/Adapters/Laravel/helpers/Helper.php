<?php

use FoxLaby\SMSLaby\Send;

/**
 * Use as a function
 * @param string $hash_key
 * @return object
 */
function smslaby($hash_key)
{
    return (new Send($hash_key));
}