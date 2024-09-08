<?php

namespace App\Controllers;

use App\Contracts\PhoneInterface;
use App\Enums\PhoneTypes;

class Phone implements PhoneInterface
{
    public function __construct(
        private string $number,
        private string $ddd,
        private PhoneTypes $type,
        private int $is_whatsapp = 0) {}

    public function getNumber(): string
    {
        return $this->number;
    }

    public function setNumber(string $number): void
    {
        $this->number = preg_replace('/\D/', '', $number);
    }

    public function getDdd(): string
    {
        return $this->ddd;
    }

    public function setDdd(string $ddd): void
    {
        $this->ddd = preg_replace('/\D/', '', $ddd);
    }

    public function getType(): PhoneTypes
    {
        return $this->type;
    }

    public function setType(PhoneTypes $type): void
    {
        $this->type = $type;
    }

    public function getIsWhatsapp(): int
    {
        return $this->is_whatsapp;
    }

    public function setIsWhatsapp(int $is_whatsapp): void
    {
        $this->is_whatsapp = $is_whatsapp;
    }

    public function getFullNumber(): string
    {
        return sprintf('(%s) %s', $this->ddd, $this->formatNumber($this->type));
    }

    public function FormatNumber(PhoneTypes $phoneType): string
    {
        $defaultNumber = substr($this->number, 1, 4).'-'.substr($this->number, 3, 4);

        return match ($phoneType) {
            PhoneTypes::MOBILE => substr($this->number, 0, 1).$defaultNumber,
            default => $defaultNumber
        };
    }
}
