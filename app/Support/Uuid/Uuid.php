<?php

namespace App\Support\Uuid;

use Illuminate\Contracts\Database\Eloquent\Castable;

class Uuid implements Castable
{
    private function __construct(
        private string $uuid,
    ) {
    }

    public static function make(string $uuid): self
    {
        return new self($uuid);
    }

    public static function new(): self
    {
        return new self(\Ramsey\Uuid\Uuid::uuid4()->toString());
    }

    public function __toString(): string
    {
        return $this->uuid;
    }

    public static function castUsing(array $arguments): UuidCaster
    {
        return new UuidCaster();
    }
}

