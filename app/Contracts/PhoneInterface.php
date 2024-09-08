<?php

namespace App\Contracts;

use App\Enums\PhoneTypes;

interface PhoneInterface
{
    public function getNumber(): string;

    public function setNumber(string $number): void;

    public function getDdd(): string;

    public function setDdd(string $ddd): void;

    public function getType(): PhoneTypes;

    public function setType(PhoneTypes $type): void;

    public function getIsWhatsapp(): int;

    public function setIsWhatsapp(int $is_whatsapp): void;

    public function getFullNumber(): string;
}
