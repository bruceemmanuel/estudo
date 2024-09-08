<?php

use App\Controllers\Email;
use App\Controllers\Person;
use App\Controllers\Phone;
use App\Enums\PhoneTypes;

date_default_timezone_set('Brazil/East');

require_once __DIR__.'/vendor/autoload.php';

$bruce = new Person(
    name: 'Bruce Emmanuel Sueira',
    email: 'bruce.dts@gmail.com',
);

$bruce->setPassword('123456');

$bruce->setPhones(new Phone(
    number: '971820696',
    ddd: '31',
    type: PhoneTypes::MOBILE,
    is_whatsapp: 1
));

$email = new Email;
$email->setEmail('bruce.dts@gmail.com')
    ->setTo('bruce.dts@gmail.com')
    ->setSubject('Email de Teste')
    ->setMessage('Esta é a mensagem inicial');

dd($bruce, $email);
