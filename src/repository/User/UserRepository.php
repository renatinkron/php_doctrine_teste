<?php

namespace Renato\TestOrm\Repository;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use Renato\TestOrm\Models\UsuarioMapper;


class UserRepository {
    private $config;
    private $conn;
    private $entityManager;
    private $usuarioRepository;

    public function __construct() {
        $this->config = Setup::createAnnotationMetadataConfiguration([__DIR__."/src"], true);
        $this->conn = [
            'driver' => 'pdo_mysql',
            'host' => 'localhost',
            'dbname' => 'testes',
            'user' => 'local',
            'password' => 'password',
        ];
        $this->entityManager = EntityManager::create($this->conn, $this->config);
        $this->usuarioRepository = $this->entityManager->getRepository(UsuarioMapper::class);
    }

    public function findAll() {
        return $this->entityManager->getRepository(UsuarioMapper::class)->findAll();
    }
}
