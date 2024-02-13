<?php

namespace Renato\TestOrm\Infrastructure\Database\Models;

use Renato\TestOrm\domain\Usuario;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="usuarios")
 */
class UsuarioMapper extends Usuario {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    public $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $nome;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $email;
}
