<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;


class CreateSessionResponseData
{
    /**
     *
     * @var string $sessionUri
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('session_uri')]
    public string $sessionUri;

    /**
     *
     * @var string $sessionToken
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('session_token')]
    public string $sessionToken;

    /**
     * @param  string  $sessionUri
     * @param  string  $sessionToken
     */
    public function __construct(string $sessionUri, string $sessionToken)
    {
        $this->sessionUri = $sessionUri;
        $this->sessionToken = $sessionToken;
    }
}