<?php

namespace Tahaazare\LaravelUuidTool;
use Illuminate\Support\Str;

class UuidGenerator
{
    /**
     * @param string $type string OR int
     * @return string
     */
    public function generate($type = 'string')
    {
        return match ($type) {
            'string' => (string) Str::uuid(),
            'int' => $this->generateNumeric(),
            default => throw new \InvalidArgumentException("The UUID type is invalid: $type"),
        };
    }

    /**
     * @return string
     */
    private function generateNumeric(): string
    {
        return (string) hexdec(str_replace('-', '', Str::uuid()));
    }
}