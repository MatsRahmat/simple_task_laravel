<?php

namespace App\Enums;

enum StatusEnum: string {
    case Pending = "pending";
    case InProgres = "in_progress";
    case Done = "done";

    public static function toArray(): array {
        return array_map(fn($case) => $case->value, self::cases());
    }
}
