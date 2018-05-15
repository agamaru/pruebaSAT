<?php
/**
 * Created by PhpStorm.
 * User: elsiore
 * Date: 15/05/18
 * Time: 19:27
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="cliente")
 */
class Cliente
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $nombreCliente;

    /**
     * @ORM\Column(type="string")
     */
    private $direccion;

    /**
     * @ORM\Column(type="string")
     */
    private $telefono;

    /**
     * @ORM\Column(type="string")
     */
    private $email;
}