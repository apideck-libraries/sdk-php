<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Utils;

class FormMetadata
{
    private function __construct(
        public string $name,
        public bool $json,
        public string $style,
        public bool $explode,
        public string $dateTimeFormat,
        public bool $serializeToString
    ) {
    }

    public static function parse(string $metadata): ?FormMetadata
    {
        if (! str_starts_with($metadata, 'form:')) {
            return null;
        }

        $metadata = removePrefix($metadata, 'form:');

        $name = '';
        $json = false;
        $style = 'form';
        $explode = true;
        $dateTimeFormat = '';
        $serializeToString = false;

        $options = explode(',', $metadata);

        foreach ($options as $opt) {
            $parts = explode('=', $opt);
            if (count($parts) < 1 || count($parts) > 2) { /** @phpstan-ignore-line */
                continue;
            }

            match ($parts[0]) {
                'name' => $name = $parts[1],
                'json' => $json = $parts[1] === 'true',
                'style' => $style = $parts[1],
                'explode' => $explode = $parts[1] === 'true',
                'dateTimeFormat' => $dateTimeFormat = $parts[1],
                'serializeToString' => $serializeToString = $parts[1] === 'true',
                default => throw new \RuntimeException('Invalid part'),
            };
        }

        return new FormMetadata(
            name: $name,
            json: $json,
            style: $style,
            explode: $explode,
            dateTimeFormat: $dateTimeFormat,
            serializeToString: $serializeToString
        );
    }
}
