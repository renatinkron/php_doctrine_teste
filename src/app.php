<?php
namespace Renato\TestOrm;

use Renato\TestOrm\Repository\UserRepository;

$repository = new UserRepository();
$users = $repository->findAll();

foreach ($users as $usuario) {
    echo "ID: " . $usuario->id . ", Nome: " . $usuario->nome . ", Email: " . $usuario->email . "<br>";
}