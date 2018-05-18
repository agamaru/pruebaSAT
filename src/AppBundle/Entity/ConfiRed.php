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
     * @ORM\Column(type="string", nullable=true)
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

    /// Getters y setters

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getDominio()
    {
        return $this->dominio;
    }

    /**
     * @param string $dominio
     * @return ConfiRed
     */
    public function setDominio($dominio)
    {
        $this->dominio = $dominio;
        return $this;
    }

    /**
     * @return string
     */
    public function getMascaraRed()
    {
        return $this->mascaraRed;
    }

    /**
     * @param string $mascaraRed
     * @return ConfiRed
     */
    public function setMascaraRed($mascaraRed)
    {
        $this->mascaraRed = $mascaraRed;
        return $this;
    }

    /**
     * @return string
     */
    public function getIpFijaExt()
    {
        return $this->ipFijaExt;
    }

    /**
     * @param string $ipFijaExt
     * @return ConfiRed
     */
    public function setIpFijaExt($ipFijaExt)
    {
        $this->ipFijaExt = $ipFijaExt;
        return $this;
    }

    /**
     * @return string
     */
    public function getDns1()
    {
        return $this->dns1;
    }

    /**
     * @param string $dns1
     * @return ConfiRed
     */
    public function setDns1($dns1)
    {
        $this->dns1 = $dns1;
        return $this;
    }

    /**
     * @return string
     */
    public function getDns2()
    {
        return $this->dns2;
    }

    /**
     * @param string $dns2
     * @return ConfiRed
     */
    public function setDns2($dns2)
    {
        $this->dns2 = $dns2;
        return $this;
    }

    /**
     * @return string
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * @param string $cliente
     * @return ConfiRed
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
        return $this;
    }

}