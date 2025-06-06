<?php

namespace Tahaazare\LaravelUuidTool;

use Illuminate\Support\Str;

class UuidGenerator
{
    /**
     * @param string $type string OR int
     * @param int|null $length
     * @return string
     */
    public static function generate(string $type = 'string', ?int $length = null): string
    {
        return match ($type) {
            'string' => (string) Str::uuid(),
            'int' => self::generateNumeric($length),
            default => throw new \InvalidArgumentException("The UUID type is invalid: $type"),
        };
    }

    /**
     *
     * @param int|null $length
     * @return string
     */
    private static function generateNumeric(?int $length = null): string
    {
        $hex = str_replace('-', '', Str::uuid());

        $decimal = hexdec(substr($hex, 0, 12));

        $decimalStr = (string)$decimal;

        if ($length === null) {
            return $decimalStr;
        }

        if ($length <= strlen($decimalStr)) {
            return substr($decimalStr, 0, $length);
        }

        return str_pad($decimalStr, $length, '0', STR_PAD_RIGHT);
    }
}
