<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */


declare(strict_types=1);

namespace Apideck\Unify\Hooks;

class HookContext
{
    /**
     * @var string $operationID
     */
    public string $operationID;
    /**
     * @var ?array<string> $oauth2Scopes;
     */
    public ?array $oauth2Scopes;
    /**
     * @var ?\Closure(): ?mixed $securitySource
     */
    public ?\Closure $securitySource;

    /**
     * @param  string  $operationID
     * @param  ?array<string>  $oauth2Scopes
     * @param  ?\Closure(): ?mixed  $securitySource
     */
    public function __construct(string $operationID, ?array $oauth2Scopes, ?\Closure $securitySource)
    {
        $this->operationID = $operationID;
        $this->oauth2Scopes = $oauth2Scopes;
        $this->securitySource = $securitySource;
    }
}
