<?php

namespace App\Controllers;

use App\Contracts\PersonInterface;
use App\Contracts\PhoneInterface;

class Person implements PersonInterface
{
    public function __construct(
        private string $name,
        private string $email,
        private string $password = '',
        /**
         * @var array<PhoneInterface>|null
         */
        private ?array $phones = null,

    ) {
        $this->setPassword($password);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Person
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): Person
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): Person
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);

        return $this;
    }

    public function getPhones(): ?array
    {
        return $this->phones;
    }

    public function setPhones(PhoneInterface $phone): Person
    {
        $this->phones[] = $phone;

        return $this;
    }
}
