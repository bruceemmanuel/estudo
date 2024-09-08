<?php

namespace App\Controllers;

use App\Contracts\EmailInterface;

class Email implements EmailInterface
{
    private ?string $subject = null;

    private ?string $to = null;

    private ?string $email = null;

    private ?string $message = null;

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getTo(): ?string
    {
        return $this->to;
    }

    public function setTo(string $to): self
    {
        $this->to = $to;

        return $this;
    }
}
