<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \Datetime;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Estudio
 *
 * @ORM\Table(name="estudio")
 * @ORM\Entity
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 */
abstract class Estudio
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
     * Many estudios have Many Groups.
     * @ORM\ManyToMany(targetEntity="GrupoDiagnostico", inversedBy="estudios")
     * @ORM\JoinTable(name="diagnosticos_estudios")
     */
    private $grupoDiagnostico;

    /**
     * Many Features have One Product.
     * @ORM\ManyToOne(targetEntity="MotivoSolicitud", inversedBy="estudios")
     * @ORM\JoinColumn(name="motivo_solicitud_id", referencedColumnName="id")
     */
    private $motivoSolicitud;

    /**
     * Many Features have One Product.
     * @ORM\ManyToOne(targetEntity="EstudioConfiguracion", inversedBy="estudios")
     * @ORM\JoinColumn(name="estudio_configuracion_id", referencedColumnName="id")
     */
    private $estudioConfiguracion;



    /**
    * Many estudios have One paciente.
    * @ORM\ManyToOne(targetEntity="Medico", inversedBy="estudios")
    * @ORM\JoinColumn(name="id_medico", referencedColumnName="id")
    */
    private $medico;

     /**
     * Many estudios have One paciente.
     * @ORM\ManyToOne(targetEntity="Paciente", inversedBy="estudios")
     * @ORM\JoinColumn(name="id_paciente", referencedColumnName="id")
     */
    private $paciente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_alta", type="date", nullable=false)
     */
    private $fechaAlta;

    /**
     * @var string
     *
     * @ORM\Column(name="conclusion", type="text", length=65535, nullable=true)
     */
    private $conclusion;

    /**
     * @var \string
     *
     * @ORM\Column(name="resultado", type="text", length=65535, nullable=true)
     */
    private $resultado;


        /**
         * @var integer
         *
         * @ORM\Column(name="internacion", type="string", length=15, nullable=false)
         */
        private $internacion;

    public function __construct() {

      $fecha = new Datetime(date("Y-m-d"));
      $this->setFechaAlta($fecha);
      $this->grupoDiagnostico = new ArrayCollection();

    }

    /**
    * Add estudios
    *
    */
    public function addGrupoDiagnostico(GrupoDiagnostico $grupoDiagnostico)
    {
      $this->grupoDiagnostico[] = $grupoDiagnostico;
    }

    public function setGrupoDiagnostico($grupoDiagnostico) {
      $this->grupoDiagnostico = $grupoDiagnostico;
    }

    /**
    * Get estudios
    *
    * @return Doctrine\Common\Collections\Collection
    */
    public function getGrupoDiagnostico()
    {
      return $this->grupoDiagnostico;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     *
     * @return Estudio
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    /**
     * Get fechaAlta
     *
     * @return \DateTime
     */
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    /**
     * Set conclusion
     *
     * @param string $conclusion
     *
     * @return Estudio
     */
    public function setConclusion($conclusion)
    {
        $this->conclusion = $conclusion;

        return $this;
    }

    /**
     * Get conclusion
     *
     * @return string
     */
    public function getConclusion()
    {
        return $this->conclusion;
    }

    /**
     * Set resultado
     *
     * @param string $resultado
     *
     * @return Estudio
     */
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;

        return $this;
    }

    /**
     * Get resultado
     *
     * @return string
     */
    public function getResultado()
    {
        return $this->resultado;
    }

    /**
     * Set motivoSolicitud
     *
     * @param \AppBundle\Entity\MotivoSolicitud $motivoSolicitud
     *
     * @return Estudio
     */
    public function setMotivoSolicitud(\AppBundle\Entity\MotivoSolicitud $motivoSolicitud = null)
    {
        $this->motivoSolicitud = $motivoSolicitud;

        return $this;
    }

    /**
     * Get motivoSolicitud
     *
     * @return \AppBundle\Entity\MotivoSolicitud
     */
    public function getMotivoSolicitud()
    {
        return $this->motivoSolicitud;
    }

    /**
     * Set estudioConfiguracion
     *
     * @param \AppBundle\Entity\EstudioConfiguracion $estudioConfiguracion
     *
     * @return Estudio
     */
    public function setEstudioConfiguracion(\AppBundle\Entity\EstudioConfiguracion $estudioConfiguracion = null)
    {
        $this->estudioConfiguracion = $estudioConfiguracion;

        return $this;
    }

    /**
     * Get estudioConfiguracion
     *
     * @return \AppBundle\Entity\EstudioConfiguracion
     */
    public function getEstudioConfiguracion()
    {
        return $this->estudioConfiguracion;
    }

    /**
     * Set medico
     *
     * @param \AppBundle\Entity\Medico $medico
     *
     * @return Estudio
     */
    public function setMedico(\AppBundle\Entity\Medico $medico = null)
    {
        $this->medico = $medico;

        return $this;
    }

    /**
     * Get medico
     *
     * @return \AppBundle\Entity\Medico
     */
    public function getMedico()
    {
        return $this->medico;
    }

    /**
     * Set paciente
     *
     * @param \AppBundle\Entity\Paciente $paciente
     *
     * @return Estudio
     */
    public function setPaciente(\AppBundle\Entity\Paciente $paciente = null)
    {
        $this->paciente = $paciente;

        return $this;
    }

    /**
     * Get paciente
     *
     * @return \AppBundle\Entity\Paciente
     */
    public function getPaciente()
    {
        return $this->paciente;
    }

    /**
     * Set internacion
     *
     * @param string $internacion
     * @return Paciente
     */
    public function setInternacion($internacion)
    {
        $this->internacion = $internacion;

        return $this;
    }

    /**
     * Get internacion
     *
     * @return string
     */
    public function getInternacion()
    {
        return $this->internacion;
    }
}
