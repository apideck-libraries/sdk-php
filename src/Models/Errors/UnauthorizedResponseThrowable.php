<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Errors;

class UnauthorizedResponseThrowable extends \RuntimeException
{
    public UnauthorizedResponse $container;

    public function __construct(string $message, int $statusCode, UnauthorizedResponse $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}