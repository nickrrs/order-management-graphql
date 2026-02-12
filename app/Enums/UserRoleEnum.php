<?php

namespace App\Enums;

enum UserRoleEnum: string
{
    case ADMIN = 'admin';
    case USER = 'user';

    public static function fromLabel(string $label): UserRoleEnum
    {
        return match ($label) {
            'admin' => UserRoleEnum::ADMIN,
            'user' => UserRoleEnum::USER,
            default => throw new \InvalidArgumentException("Invalid user role: $label"),
        };
    }
}
