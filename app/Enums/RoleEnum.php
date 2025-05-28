<?php

namespace App\Enums;

enum RoleEnum: string {
    case Admin = "admin";
    case Manager = "manager";
    case Staff = "staff";

    public static function toArray(): array{
        return array_map(fn($case) => $case->value, self::cases());
    }
}