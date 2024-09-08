<?php

namespace App\Contracts;

interface PersonInterface
{
    public function getName(): string;

    public function setName(string $name): self;

    public function getEmail(): string;

    public function setEmail(string $email): self;

    public function getPassword(): ?string;

    public function setPassword(string $password): self;

    /**
     * @return array<PhoneInterface>|null
     */
    public function getPhones(): ?array;

    public function setPhones(PhoneInterface $phone): self;
}
