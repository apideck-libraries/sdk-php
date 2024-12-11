<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */


declare(strict_types=1);

namespace Apideck\Unify\Hooks;

class Credentials
{
    public string $clientID;
    public string $clientSecret;
    public string $tokenURL;

    public function __construct(string $clientID, string $clientSecret, string $tokenURL)
    {
        $this->clientID = $clientID;
        $this->clientSecret = $clientSecret;
        $this->tokenURL = $tokenURL;
    }
}