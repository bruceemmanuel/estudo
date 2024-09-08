<?php

namespace App\Contracts;

interface EmailInterface
{
    public function getEmail(): ?string;

    public function setEmail(string $email): self;

    public function getSubject(): ?string;

    public function setSubject(string $subject): self;

    public function getMessage(): ?string;

    public function setMessage(string $message): self;

    public function getTo(): ?string;

    public function setTo(string $to): self;
}
