<?php
/**
 * Created by PhpStorm.
 * User: elsiore
 * Date: 17/05/18
 * Time: 19:56
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="confi_red")
 */
class ConfiRed
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $dominio;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $mascaraRed;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $ipFijaExt;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $dns1;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $dns2;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $cliente;
}