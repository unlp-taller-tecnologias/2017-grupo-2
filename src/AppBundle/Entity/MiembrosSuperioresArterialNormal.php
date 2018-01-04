<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MiembrosSuperioresArterialNormal
 *
 * @ORM\Table(name="miembros_superiores_arterial_normal")
 * @ORM\Entity
 */
class MiembrosSuperioresArterialNormal extends Estudio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="extension", type="integer", nullable=false)
     */
    private $extension;

    /**
     * @var integer
     *
     * @ORM\Column(name="velocidad_pico_sistolica", type="integer", nullable=false)
     */
    private $velocidadPicoSistolica;

    /**
     * @var integer
     *
     * @ORM\Column(name="indice_de_pre_estenosis", type="integer", nullable=false)
     */
    private $indiceDePreEstenosis;

     /**
     * @var integer
     *
     * @ORM\Column(name="flujos_distales", type="integer", nullable=false)
     */
    private $flujosDistales;

    /**
     * @var integer
     *
     * @ORM\Column(name="estenosis", type="integer", nullable=false)
     */
    private $estenosis;

    /**
     * @var integer
     *
     * @ORM\Column(name="caracteristicas", type="integer", nullable=false)
     */
    private $caracteristicas;

    /**
     * @var integer
     *
     * @ORM\Column(name="arteria", type="integer", nullable=false)
     */
    private $arteria;

    public function __construct($medico,$paciente , $entityManager) {
      parent::__construct();
    //  $entityManager = $event->getEntityManager();
      $configuracion = $entityManager->getRepository('AppBundle:EstudioConfiguracion')->find(19);
      parent::setEstudioConfiguracion($configuracion);
      parent::setPaciente($paciente);
      parent::setMedico($medico);
    }
    /**
     * Set extension
     *
     * @param integer $extension
     * @return MiembrosSuperioresArterialNormal
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get extension
     *
     * @return integer
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set velocidadPicoSistolica
     *
     * @param integer $velocidadPicoSistolica
     * @return MiembrosSuperioresArterialNormal
     */
    public function setVelocidadPicoSistolica($velocidadPicoSistolica)
    {
        $this->velocidadPicoSistolica = $velocidadPicoSistolica;

        return $this;
    }

    /**
     * Get velocidadPicoSistolica
     *
     * @return integer
     */
    public function getVelocidadPicoSistolica()
    {
        return $this->velocidadPicoSistolica;
    }

    /**
     * Set indiceDePreEstenosis
     *
     * @param integer $indiceDePreEstenosis
     * @return MiembrosSuperioresArterialNormal
     */
    public function setIndiceDePreEstenosis($indiceDePreEstenosis)
    {
        $this->indiceDePreEstenosis = $indiceDePreEstenosis;

        return $this;
    }

    /**
     * Get indiceDePreEstenosis
     *
     * @return integer
     */
    public function getIndiceDePreEstenosis()
    {
        return $this->indiceDePreEstenosis;
    }

    /**
     * Set flujosDistales
     *
     * @param integer $flujosDistales
     *
     * @return MiembrosSuperioresArterialNormal
     */
    public function setFlujosDistales($flujosDistales)
    {
        $this->flujosDistales = $flujosDistales;

        return $this;
    }

    /**
     * Get flujosDistales
     *
     * @return integer
     */
    public function getFlujosDistales()
    {
        return $this->flujosDistales;
    }

    /**
     * Set estenosis
     *
     * @param integer $estenosis
     *
     * @return MiembrosSuperioresArterialNormal
     */
    public function setEstenosis($estenosis)
    {
        $this->estenosis = $estenosis;

        return $this;
    }

    /**
     * Get estenosis
     *
     * @return integer
     */
    public function getEstenosis()
    {
        return $this->estenosis;
    }

    /**
     * Set caracteristicas
     *
     * @param integer $caracteristicas
     *
     * @return MiembrosSuperioresArterialNormal
     */
    public function setCaracteristicas($caracteristicas)
    {
        $this->caracteristicas = $caracteristicas;

        return $this;
    }

    /**
     * Get caracteristicas
     *
     * @return integer
     */
    public function getCaracteristicas()
    {
        return $this->caracteristicas;
    }

    /**
     * Set arteria
     *
     * @param integer $arteria
     *
     * @return MiembrosSuperioresArterialNormal
     */
    public function setArteria($arteria)
    {
        $this->arteria = $arteria;

        return $this;
    }

    /**
     * Get arteria
     *
     * @return integer
     */
    public function getArteria()
    {
        return $this->arteria;
    }
}
