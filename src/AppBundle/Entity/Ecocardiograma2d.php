<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecocardiograma2d
 *
 * @ORM\Table(name="ecocardiograma_2d")
 * @ORM\Entity
 */
class Ecocardiograma2d extends Estudio
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
     * @var text
     *
     * @ORM\Column(name="situs", type="text", nullable=true)
     */
    private $situs;

    /**
     * @var text
     *
     * @ORM\Column(name="conexion_auriculoventricular", type="text", nullable=true)
     */
    private $conexionAuriculoventricular;

    /**
     * @var text
     *
     * @ORM\Column(name="conexion_ventriculo_arterial", type="text", nullable=true)
     */
    private $conexionVentriculoArterial;

    /**
     * @var integer
     *
     * @ORM\Column(name="ddvi", type="integer", nullable=true)
     */
    private $ddvi;

        /**
     * @var integer
     *
     * @ORM\Column(name="dsvi", type="integer", nullable=true)
     */
    private $dsvi;

        /**
     * @var integer
     *
     * @ORM\Column(name="siv", type="integer", nullable=true)
     */
    private $siv;

        /**
     * @var integer
     *
     * @ORM\Column(name="pp", type="integer", nullable=true)
     */
    private $pp;

        /**
     * @var integer
     *
     * @ORM\Column(name="fey", type="integer", nullable=true)
     */
    private $fey;

        /**
     * @var integer
     *
     * @ORM\Column(name="al_area", type="integer", nullable=true)
     */
    private $alArea;

        /**
     * @var integer
     *
     * @ORM\Column(name="al_vol", type="integer", nullable=true)
     */
    private $alVol;

        /**
     * @var integer
     *
     * @ORM\Column(name="aorta", type="integer", nullable=true)
     */
    private $aorta;

        /**
     * @var integer
     *
     * @ORM\Column(name="ap_vao", type="integer", nullable=true)
     */
    private $apVao;

        /**
     * @var integer
     *
     * @ORM\Column(name="tsvi", type="integer", nullable=true)
     */
    private $tsvi;

        /**
     * @var integer
     *
     * @ORM\Column(name="vel_max_ao", type="integer", nullable=true)
     */
    private $velMaxAo;

            /**
     * @var integer
     *
     * @ORM\Column(name="grad_max_ao", type="integer", nullable=true)
     */
    private $gradMaxAo;

            /**
     * @var integer
     *
     * @ORM\Column(name="grad_med_ao", type="integer", nullable=true)
     */
    private $gradMedAo;

            /**
     * @var integer
     *
     * @ORM\Column(name="insuficiencia", type="integer", nullable=true)
     */
    private $insuficiencia;

                /**
     * @var integer
     *
     * @ORM\Column(name="thp", type="integer", nullable=true)
     */
    private $thp;

                /**
     * @var integer
     *
     * @ORM\Column(name="adt", type="integer", nullable=true)
     */
    private $adt;

                /**
     * @var integer
     *
     * @ORM\Column(name="aa", type="integer", nullable=true)
     */
    private $aa;

                /**
     * @var integer
     *
     * @ORM\Column(name="vel_onda_e", type="integer", nullable=true)
     */
    private $velOndaE;

                /**
     * @var integer
     *
     * @ORM\Column(name="vel_onda_a", type="integer", nullable=true)
     */
    private $velOndaA;

                /**
     * @var integer
     *
     * @ORM\Column(name="grad_medio_trasmitral", type="integer", nullable=true)
     */
    private $gradMedioaTrasmitral;

                /**
     * @var integer
     *
     * @ORM\Column(name="insuficiencia_trasmitral", type="integer", nullable=true)
     */
    private $insuficienciaTrasmitral;

                /**
     * @var integer
     *
     * @ORM\Column(name="ore", type="integer", nullable=true)
     */
    private $ore;

                /**
     * @var integer
     *
     * @ORM\Column(name="vol_regurgitante", type="integer", nullable=true)
     */
    private $volRegurgitante;

                /**
     * @var integer
     *
     * @ORM\Column(name="dpdt", type="integer", nullable=true)
     */
    private $dpdt;

                /**
     * @var integer
     *
     * @ORM\Column(name="vel_max_pulmonar", type="integer", nullable=true)
     */
    private $velMaxPulmonar;

                /**
     * @var integer
     *
     * @ORM\Column(name="grad_max_pulmonar", type="integer", nullable=true)
     */
    private $gradMaxPulomonar;

                /**
     * @var integer
     *
     * @ORM\Column(name="insuficiencia_pulmonar", type="integer", nullable=true)
     */
    private $insuficiencia_pulmonar;

                /**
     * @var integer
     *
     * @ORM\Column(name="tpo_pico", type="integer", nullable=true)
     */
    private $tpoPico;

                /**
     * @var integer
     *
     * @ORM\Column(name="qpqs", type="integer", nullable=true)
     */
    private $qpqs;

                /**
     * @var integer
     *
     * @ORM\Column(name="insuficiencia_tricuspide", type="integer", nullable=true)
     */
    private $insuficienciaTricuspide;

                /**
     * @var integer
     *
     * @ORM\Column(name="vel_regurgitante", type="integer", nullable=true)
     */
    private $velRegurgitante;

                /**
     * @var integer
     *
     * @ORM\Column(name="grad_pico", type="integer", nullable=true)
     */
    private $gradPico;

                /**
     * @var integer
     *
     * @ORM\Column(name="pap", type="integer", nullable=true)
     */
    private $pap;

                /**
     * @var integer
     *
     * @ORM\Column(name="pad", type="integer", nullable=true)
     */
    private $pad;

                /**
     * @var integer
     *
     * @ORM\Column(name="onda_septal", type="integer", nullable=true)
     */
    private $ondaSeptal;

                /**
     * @var integer
     *
     * @ORM\Column(name="onda_lateral", type="integer", nullable=true)
     */
    private $ondaLateral;

                /**
     * @var integer
     *
     * @ORM\Column(name="onda_e", type="integer", nullable=true)
     */
    private $ondaE;

                /**
     * @var integer
     *
     * @ORM\Column(name="onda_a", type="integer", nullable=true)
     */
    private $ondaA;

                /**
     * @var integer
     *
     * @ORM\Column(name="relacion_e", type="integer", nullable=true)
     */
    private $relacionE;

                /**
     * @var integer
     *
     * @ORM\Column(name="onda_vd", type="integer", nullable=true)
     */
    private $ondaVd;




    /**
     * @var text
     *
     * @ORM\Column(name="ventriculoIzq_l1", type="array", nullable=true)
     */
    private $ventriculoIzqL1;



    /**
     * @var text
     *
     * @ORM\Column(name="ventriculoIzq_l2", type="array", nullable=true)
     */
    private $ventriculoIzqL2;


    /**
     * @var text
     *
     * @ORM\Column(name="ventriculoIzq_l3", type="array", nullable=true)
     */
    private $ventriculoIzqL3;


    /**
     * @var text
     *
     * @ORM\Column(name="ventriculoIzq_l1_imvi", type="text", nullable=true)
     */
      private $ventriculoIzqL1Imvi;


    /**
     * @var text
     *
     * @ORM\Column(name="ventriculoIzq_l1_epr", type="text", nullable=true)
     */
    private $ventriculoIzqL1Epr;



    /**
     * @var text
     *
     * @ORM\Column(name="ventriculoIzq_l4_c1", type="text", nullable=true)
     */
    private $ventriculoIzqL4C1;



    /**
     * @var text
     *
     * @ORM\Column(name="raizAorta_l1", type="array", nullable=true)
     */
    private $raizAortaL1;



    /**
     * @var text
     *
     * @ORM\Column(name="aorta_l1", type="array", nullable=true)
     */
    private $aortaL1;


    /**
     * @var text
     *
     * @ORM\Column(name="aorta_l2", type="array", nullable=true)
     */
    private $aortaL2;


    /**
     * @var text
     *
     * @ORM\Column(name="aorta_l3", type="array", nullable=true)
     */
    private $aortaL3;


    /**
     * @var text
     *
     * @ORM\Column(name="valvula_mitral_l1", type="array", nullable=true)
     */
    private $valvulaMitralL1;


    /**
     * @var text
     *
     * @ORM\Column(name="valvula_mitral_l2", type="array", nullable=true)
     */
    private $valvulaMitralL2;



    /**
     * @var text
     *
     * @ORM\Column(name="auricula_izq_l1", type="array", nullable=true)
     */
    private $auriculaIzqL1;


    /**
     * @var text
     *
     * @ORM\Column(name="valvula_pulmonar_l1", type="array", nullable=true)
     */
    private $valvulaPulmonarL1;


    /**
     * @var text
     *
     * @ORM\Column(name="valvula_pulmonar_l2", type="array", nullable=true)
     */
    private $valvulaPulmonarL2;


    /**
     * @var text
     *
     * @ORM\Column(name="valvula_tricupside_l1", type="array", nullable=true)
     */
    private $valvulatricuspideL1;

    /**
     * @var text
     *
     * @ORM\Column(name="valvula_tricupside_l2", type="array", nullable=true)
     */
    private $valvulatricuspideL2;



    /**
     * @var text
     *
     * @ORM\Column(name="cavidad_derecha_l1_c1", type="text", nullable=true)
     */
    private $cavidadDerechaL1C1;


    /**
     * @var text
     *
     * @ORM\Column(name="cavidad_derecha_l1_c2", type="text", nullable=true)
     */
    private $cavidadDerechaL1C2;


    /**
     * @var text
     *
     * @ORM\Column(name="cavidad_derecha_l1_c3", type="text", nullable=true)
     */
    private $cavidadDerechaL1C3;


    /**
     * @var text
     *
     * @ORM\Column(name="vena_cava_inferior_l1", type="array", nullable=true)
     */
    private $venaCavaInferiorL1;


    /**
     * @var text
     *
     * @ORM\Column(name="pericardio_l1", type="array", nullable=true)
     */
    private $pericardioL1;

    /**
     * @var text
     *
     * @ORM\Column(name="conclusion_l1", type="array", nullable=true)
     */
    private $conclusionL1;


    public function __construct($medico,$paciente , $entityManager) {
      parent::__construct();
    //  $entityManager = $event->getEntityManager();
      $configuracion = $entityManager->getRepository('AppBundle:EstudioConfiguracion')->find(12);
      parent::setEstudioConfiguracion($configuracion);
      parent::setPaciente($paciente);
      parent::setMedico($medico);
    }

    /**
     * Set situs
     *
     * @param string $situs
     *
     * @return Ecocardiograma2d
     */
    public function setSitus($situs)
    {
        $this->situs = $situs;

        return $this;
    }

    /**
     * Get situs
     *
     * @return string
     */
    public function getSitus()
    {
        return $this->situs;
    }

    /**
     * Set conexionAuriculoventricular
     *
     * @param string $conexionAuriculoventricular
     *
     * @return Ecocardiograma2d
     */
    public function setConexionAuriculoventricular($conexionAuriculoventricular)
    {
        $this->conexionAuriculoventricular = $conexionAuriculoventricular;

        return $this;
    }

    /**
     * Get conexionAuriculoventricular
     *
     * @return string
     */
    public function getConexionAuriculoventricular()
    {
        return $this->conexionAuriculoventricular;
    }

    /**
     * Set conexionVentriculoArterial
     *
     * @param string $conexionVentriculoArterial
     *
     * @return Ecocardiograma2d
     */
    public function setConexionVentriculoArterial($conexionVentriculoArterial)
    {
        $this->conexionVentriculoArterial = $conexionVentriculoArterial;

        return $this;
    }

    /**
     * Get conexionVentriculoArterial
     *
     * @return string
     */
    public function getConexionVentriculoArterial()
    {
        return $this->conexionVentriculoArterial;
    }

    /**
     * Set ddvi
     *
     * @param integer $ddvi
     *
     * @return Ecocardiograma2d
     */
    public function setDdvi($ddvi)
    {
        $this->ddvi = $ddvi;

        return $this;
    }

    /**
     * Get ddvi
     *
     * @return integer
     */
    public function getDdvi()
    {
        return $this->ddvi;
    }

    /**
     * Set dsvi
     *
     * @param integer $dsvi
     *
     * @return Ecocardiograma2d
     */
    public function setDsvi($dsvi)
    {
        $this->dsvi = $dsvi;

        return $this;
    }

    /**
     * Get dsvi
     *
     * @return integer
     */
    public function getDsvi()
    {
        return $this->dsvi;
    }

    /**
     * Set siv
     *
     * @param integer $siv
     *
     * @return Ecocardiograma2d
     */
    public function setSiv($siv)
    {
        $this->siv = $siv;

        return $this;
    }

    /**
     * Get siv
     *
     * @return integer
     */
    public function getSiv()
    {
        return $this->siv;
    }

    /**
     * Set pp
     *
     * @param integer $pp
     *
     * @return Ecocardiograma2d
     */
    public function setPp($pp)
    {
        $this->pp = $pp;

        return $this;
    }

    /**
     * Get pp
     *
     * @return integer
     */
    public function getPp()
    {
        return $this->pp;
    }

    /**
     * Set fey
     *
     * @param integer $fey
     *
     * @return Ecocardiograma2d
     */
    public function setFey($fey)
    {
        $this->fey = $fey;

        return $this;
    }

    /**
     * Get fey
     *
     * @return integer
     */
    public function getFey()
    {
        return $this->fey;
    }

    /**
     * Set alArea
     *
     * @param integer $alArea
     *
     * @return Ecocardiograma2d
     */
    public function setAlArea($alArea)
    {
        $this->alArea = $alArea;

        return $this;
    }

    /**
     * Get alArea
     *
     * @return integer
     */
    public function getAlArea()
    {
        return $this->alArea;
    }

    /**
     * Set alVol
     *
     * @param integer $alVol
     *
     * @return Ecocardiograma2d
     */
    public function setAlVol($alVol)
    {
        $this->alVol = $alVol;

        return $this;
    }

    /**
     * Get alVol
     *
     * @return integer
     */
    public function getAlVol()
    {
        return $this->alVol;
    }

    /**
     * Set aorta
     *
     * @param integer $aorta
     *
     * @return Ecocardiograma2d
     */
    public function setAorta($aorta)
    {
        $this->aorta = $aorta;

        return $this;
    }

    /**
     * Get aorta
     *
     * @return integer
     */
    public function getAorta()
    {
        return $this->aorta;
    }

    /**
     * Set apVao
     *
     * @param integer $apVao
     *
     * @return Ecocardiograma2d
     */
    public function setApVao($apVao)
    {
        $this->apVao = $apVao;

        return $this;
    }

    /**
     * Get apVao
     *
     * @return integer
     */
    public function getApVao()
    {
        return $this->apVao;
    }

    /**
     * Set tsvi
     *
     * @param integer $tsvi
     *
     * @return Ecocardiograma2d
     */
    public function setTsvi($tsvi)
    {
        $this->tsvi = $tsvi;

        return $this;
    }

    /**
     * Get tsvi
     *
     * @return integer
     */
    public function getTsvi()
    {
        return $this->tsvi;
    }

    /**
     * Set velMaxAo
     *
     * @param integer $velMaxAo
     *
     * @return Ecocardiograma2d
     */
    public function setVelMaxAo($velMaxAo)
    {
        $this->velMaxAo = $velMaxAo;

        return $this;
    }

    /**
     * Get velMaxAo
     *
     * @return integer
     */
    public function getVelMaxAo()
    {
        return $this->velMaxAo;
    }

    /**
     * Set gradMaxAo
     *
     * @param integer $gradMaxAo
     *
     * @return Ecocardiograma2d
     */
    public function setGradMaxAo($gradMaxAo)
    {
        $this->gradMaxAo = $gradMaxAo;

        return $this;
    }

    /**
     * Get gradMaxAo
     *
     * @return integer
     */
    public function getGradMaxAo()
    {
        return $this->gradMaxAo;
    }

    /**
     * Set gradMedAo
     *
     * @param integer $gradMedAo
     *
     * @return Ecocardiograma2d
     */
    public function setGradMedAo($gradMedAo)
    {
        $this->gradMedAo = $gradMedAo;

        return $this;
    }

    /**
     * Get gradMedAo
     *
     * @return integer
     */
    public function getGradMedAo()
    {
        return $this->gradMedAo;
    }

    /**
     * Set insuficiencia
     *
     * @param integer $insuficiencia
     *
     * @return Ecocardiograma2d
     */
    public function setInsuficiencia($insuficiencia)
    {
        $this->insuficiencia = $insuficiencia;

        return $this;
    }

    /**
     * Get insuficiencia
     *
     * @return integer
     */
    public function getInsuficiencia()
    {
        return $this->insuficiencia;
    }

    /**
     * Set thp
     *
     * @param integer $thp
     *
     * @return Ecocardiograma2d
     */
    public function setThp($thp)
    {
        $this->thp = $thp;

        return $this;
    }

    /**
     * Get thp
     *
     * @return integer
     */
    public function getThp()
    {
        return $this->thp;
    }

    /**
     * Set adt
     *
     * @param integer $adt
     *
     * @return Ecocardiograma2d
     */
    public function setAdt($adt)
    {
        $this->adt = $adt;

        return $this;
    }

    /**
     * Get adt
     *
     * @return integer
     */
    public function getAdt()
    {
        return $this->adt;
    }

    /**
     * Set aa
     *
     * @param integer $aa
     *
     * @return Ecocardiograma2d
     */
    public function setAa($aa)
    {
        $this->aa = $aa;

        return $this;
    }

    /**
     * Get aa
     *
     * @return integer
     */
    public function getAa()
    {
        return $this->aa;
    }

    /**
     * Set velOndaE
     *
     * @param integer $velOndaE
     *
     * @return Ecocardiograma2d
     */
    public function setVelOndaE($velOndaE)
    {
        $this->velOndaE = $velOndaE;

        return $this;
    }

    /**
     * Get velOndaE
     *
     * @return integer
     */
    public function getVelOndaE()
    {
        return $this->velOndaE;
    }

    /**
     * Set velOndaA
     *
     * @param integer $velOndaA
     *
     * @return Ecocardiograma2d
     */
    public function setVelOndaA($velOndaA)
    {
        $this->velOndaA = $velOndaA;

        return $this;
    }

    /**
     * Get velOndaA
     *
     * @return integer
     */
    public function getVelOndaA()
    {
        return $this->velOndaA;
    }

    /**
     * Set gradMedioaTrasmitral
     *
     * @param integer $gradMedioaTrasmitral
     *
     * @return Ecocardiograma2d
     */
    public function setGradMedioaTrasmitral($gradMedioaTrasmitral)
    {
        $this->gradMedioaTrasmitral = $gradMedioaTrasmitral;

        return $this;
    }

    /**
     * Get gradMedioaTrasmitral
     *
     * @return integer
     */
    public function getGradMedioaTrasmitral()
    {
        return $this->gradMedioaTrasmitral;
    }

    /**
     * Set insuficienciaTrasmitral
     *
     * @param integer $insuficienciaTrasmitral
     *
     * @return Ecocardiograma2d
     */
    public function setInsuficienciaTrasmitral($insuficienciaTrasmitral)
    {
        $this->insuficienciaTrasmitral = $insuficienciaTrasmitral;

        return $this;
    }

    /**
     * Get insuficienciaTrasmitral
     *
     * @return integer
     */
    public function getInsuficienciaTrasmitral()
    {
        return $this->insuficienciaTrasmitral;
    }

    /**
     * Set ore
     *
     * @param integer $ore
     *
     * @return Ecocardiograma2d
     */
    public function setOre($ore)
    {
        $this->ore = $ore;

        return $this;
    }

    /**
     * Get ore
     *
     * @return integer
     */
    public function getOre()
    {
        return $this->ore;
    }

    /**
     * Set volRegurgitante
     *
     * @param integer $volRegurgitante
     *
     * @return Ecocardiograma2d
     */
    public function setVolRegurgitante($volRegurgitante)
    {
        $this->volRegurgitante = $volRegurgitante;

        return $this;
    }

    /**
     * Get volRegurgitante
     *
     * @return integer
     */
    public function getVolRegurgitante()
    {
        return $this->volRegurgitante;
    }

    /**
     * Set dpdt
     *
     * @param integer $dpdt
     *
     * @return Ecocardiograma2d
     */
    public function setDpdt($dpdt)
    {
        $this->dpdt = $dpdt;

        return $this;
    }

    /**
     * Get dpdt
     *
     * @return integer
     */
    public function getDpdt()
    {
        return $this->dpdt;
    }

    /**
     * Set velMaxPulmonar
     *
     * @param integer $velMaxPulmonar
     *
     * @return Ecocardiograma2d
     */
    public function setVelMaxPulmonar($velMaxPulmonar)
    {
        $this->velMaxPulmonar = $velMaxPulmonar;

        return $this;
    }

    /**
     * Get velMaxPulmonar
     *
     * @return integer
     */
    public function getVelMaxPulmonar()
    {
        return $this->velMaxPulmonar;
    }

    /**
     * Set gradMaxPulomonar
     *
     * @param integer $gradMaxPulomonar
     *
     * @return Ecocardiograma2d
     */
    public function setGradMaxPulomonar($gradMaxPulomonar)
    {
        $this->gradMaxPulomonar = $gradMaxPulomonar;

        return $this;
    }

    /**
     * Get gradMaxPulomonar
     *
     * @return integer
     */
    public function getGradMaxPulomonar()
    {
        return $this->gradMaxPulomonar;
    }

    /**
     * Set insuficienciaPulmonar
     *
     * @param integer $insuficienciaPulmonar
     *
     * @return Ecocardiograma2d
     */
    public function setInsuficienciaPulmonar($insuficienciaPulmonar)
    {
        $this->insuficiencia_pulmonar = $insuficienciaPulmonar;

        return $this;
    }

    /**
     * Get insuficienciaPulmonar
     *
     * @return integer
     */
    public function getInsuficienciaPulmonar()
    {
        return $this->insuficiencia_pulmonar;
    }

    /**
     * Set tpoPico
     *
     * @param integer $tpoPico
     *
     * @return Ecocardiograma2d
     */
    public function setTpoPico($tpoPico)
    {
        $this->tpoPico = $tpoPico;

        return $this;
    }

    /**
     * Get tpoPico
     *
     * @return integer
     */
    public function getTpoPico()
    {
        return $this->tpoPico;
    }

    /**
     * Set qpqs
     *
     * @param integer $qpqs
     *
     * @return Ecocardiograma2d
     */
    public function setQpqs($qpqs)
    {
        $this->qpqs = $qpqs;

        return $this;
    }

    /**
     * Get qpqs
     *
     * @return integer
     */
    public function getQpqs()
    {
        return $this->qpqs;
    }

    /**
     * Set insuficienciaTricuspide
     *
     * @param integer $insuficienciaTricuspide
     *
     * @return Ecocardiograma2d
     */
    public function setInsuficienciaTricuspide($insuficienciaTricuspide)
    {
        $this->insuficienciaTricuspide = $insuficienciaTricuspide;

        return $this;
    }

    /**
     * Get insuficienciaTricuspide
     *
     * @return integer
     */
    public function getInsuficienciaTricuspide()
    {
        return $this->insuficienciaTricuspide;
    }

    /**
     * Set velRegurgitante
     *
     * @param integer $velRegurgitante
     *
     * @return Ecocardiograma2d
     */
    public function setVelRegurgitante($velRegurgitante)
    {
        $this->velRegurgitante = $velRegurgitante;

        return $this;
    }

    /**
     * Get velRegurgitante
     *
     * @return integer
     */
    public function getVelRegurgitante()
    {
        return $this->velRegurgitante;
    }

    /**
     * Set gradPico
     *
     * @param integer $gradPico
     *
     * @return Ecocardiograma2d
     */
    public function setGradPico($gradPico)
    {
        $this->gradPico = $gradPico;

        return $this;
    }

    /**
     * Get gradPico
     *
     * @return integer
     */
    public function getGradPico()
    {
        return $this->gradPico;
    }

    /**
     * Set pap
     *
     * @param integer $pap
     *
     * @return Ecocardiograma2d
     */
    public function setPap($pap)
    {
        $this->pap = $pap;

        return $this;
    }

    /**
     * Get pap
     *
     * @return integer
     */
    public function getPap()
    {
        return $this->pap;
    }

    /**
     * Set pad
     *
     * @param integer $pad
     *
     * @return Ecocardiograma2d
     */
    public function setPad($pad)
    {
        $this->pad = $pad;

        return $this;
    }

    /**
     * Get pad
     *
     * @return integer
     */
    public function getPad()
    {
        return $this->pad;
    }

    /**
     * Set ondaSeptal
     *
     * @param integer $ondaSeptal
     *
     * @return Ecocardiograma2d
     */
    public function setOndaSeptal($ondaSeptal)
    {
        $this->ondaSeptal = $ondaSeptal;

        return $this;
    }

    /**
     * Get ondaSeptal
     *
     * @return integer
     */
    public function getOndaSeptal()
    {
        return $this->ondaSeptal;
    }

    /**
     * Set ondaLateral
     *
     * @param integer $ondaLateral
     *
     * @return Ecocardiograma2d
     */
    public function setOndaLateral($ondaLateral)
    {
        $this->ondaLateral = $ondaLateral;

        return $this;
    }

    /**
     * Get ondaLateral
     *
     * @return integer
     */
    public function getOndaLateral()
    {
        return $this->ondaLateral;
    }

    /**
     * Set ondaE
     *
     * @param integer $ondaE
     *
     * @return Ecocardiograma2d
     */
    public function setOndaE($ondaE)
    {
        $this->ondaE = $ondaE;

        return $this;
    }

    /**
     * Get ondaE
     *
     * @return integer
     */
    public function getOndaE()
    {
        return $this->ondaE;
    }

    /**
     * Set ondaA
     *
     * @param integer $ondaA
     *
     * @return Ecocardiograma2d
     */
    public function setOndaA($ondaA)
    {
        $this->ondaA = $ondaA;

        return $this;
    }

    /**
     * Get ondaA
     *
     * @return integer
     */
    public function getOndaA()
    {
        return $this->ondaA;
    }

    /**
     * Set relacionE
     *
     * @param integer $relacionE
     *
     * @return Ecocardiograma2d
     */
    public function setRelacionE($relacionE)
    {
        $this->relacionE = $relacionE;

        return $this;
    }

    /**
     * Get relacionE
     *
     * @return integer
     */
    public function getRelacionE()
    {
        return $this->relacionE;
    }

    /**
     * Set ondaVd
     *
     * @param integer $ondaVd
     *
     * @return Ecocardiograma2d
     */
    public function setOndaVd($ondaVd)
    {
        $this->ondaVd = $ondaVd;

        return $this;
    }

    /**
     * Get ondaVd
     *
     * @return integer
     */
    public function getOndaVd()
    {
        return $this->ondaVd;
    }

    /**
     * Set ventriculoIzqL1
     *
     * @param array $ventriculoIzqL1
     *
     * @return Ecocardiograma2d
     */
    public function setVentriculoIzqL1($ventriculoIzqL1)
    {
        $this->ventriculoIzqL1 = $ventriculoIzqL1;

        return $this;
    }

    /**
     * Get ventriculoIzqL1
     *
     * @return array
     */
    public function getVentriculoIzqL1()
    {
        return $this->ventriculoIzqL1;
    }

    /**
     * Set ventriculoIzqL2
     *
     * @param array $ventriculoIzqL2
     *
     * @return Ecocardiograma2d
     */
    public function setVentriculoIzqL2($ventriculoIzqL2)
    {
        $this->ventriculoIzqL2 = $ventriculoIzqL2;

        return $this;
    }

    /**
     * Get ventriculoIzqL2
     *
     * @return array
     */
    public function getVentriculoIzqL2()
    {
        return $this->ventriculoIzqL2;
    }

    /**
     * Set ventriculoIzqL3
     *
     * @param array $ventriculoIzqL3
     *
     * @return Ecocardiograma2d
     */
    public function setVentriculoIzqL3($ventriculoIzqL3)
    {
        $this->ventriculoIzqL3 = $ventriculoIzqL3;

        return $this;
    }

    /**
     * Get ventriculoIzqL3
     *
     * @return array
     */
    public function getVentriculoIzqL3()
    {
        return $this->ventriculoIzqL3;
    }

    /**
     * Set ventriculoIzqL1Imvi
     *
     * @param string $ventriculoIzqL1Imvi
     *
     * @return Ecocardiograma2d
     */
    public function setVentriculoIzqL1Imvi($ventriculoIzqL1Imvi)
    {
        $this->ventriculoIzqL1Imvi = $ventriculoIzqL1Imvi;

        return $this;
    }

    /**
     * Get ventriculoIzqL1Imvi
     *
     * @return string
     */
    public function getVentriculoIzqL1Imvi()
    {
        return $this->ventriculoIzqL1Imvi;
    }

    /**
     * Set ventriculoIzqL1Epr
     *
     * @param string $ventriculoIzqL1Epr
     *
     * @return Ecocardiograma2d
     */
    public function setVentriculoIzqL1Epr($ventriculoIzqL1Epr)
    {
        $this->ventriculoIzqL1Epr = $ventriculoIzqL1Epr;

        return $this;
    }

    /**
     * Get ventriculoIzqL1Epr
     *
     * @return string
     */
    public function getVentriculoIzqL1Epr()
    {
        return $this->ventriculoIzqL1Epr;
    }

    /**
     * Set ventriculoIzqL4C1
     *
     * @param string $ventriculoIzqL4C1
     *
     * @return Ecocardiograma2d
     */
    public function setVentriculoIzqL4C1($ventriculoIzqL4C1)
    {
        $this->ventriculoIzqL4C1 = $ventriculoIzqL4C1;

        return $this;
    }

    /**
     * Get ventriculoIzqL4C1
     *
     * @return string
     */
    public function getVentriculoIzqL4C1()
    {
        return $this->ventriculoIzqL4C1;
    }

    /**
     * Set raizAortaL1
     *
     * @param array $raizAortaL1
     *
     * @return Ecocardiograma2d
     */
    public function setRaizAortaL1($raizAortaL1)
    {
        $this->raizAortaL1 = $raizAortaL1;

        return $this;
    }

    /**
     * Get raizAortaL1
     *
     * @return array
     */
    public function getRaizAortaL1()
    {
        return $this->raizAortaL1;
    }

    /**
     * Set aortaL1
     *
     * @param array $aortaL1
     *
     * @return Ecocardiograma2d
     */
    public function setAortaL1($aortaL1)
    {
        $this->aortaL1 = $aortaL1;

        return $this;
    }

    /**
     * Get aortaL1
     *
     * @return array
     */
    public function getAortaL1()
    {
        return $this->aortaL1;
    }

    /**
     * Set aortaL2
     *
     * @param array $aortaL2
     *
     * @return Ecocardiograma2d
     */
    public function setAortaL2($aortaL2)
    {
        $this->aortaL2 = $aortaL2;

        return $this;
    }

    /**
     * Get aortaL2
     *
     * @return array
     */
    public function getAortaL2()
    {
        return $this->aortaL2;
    }

    /**
     * Set aortaL3
     *
     * @param array $aortaL3
     *
     * @return Ecocardiograma2d
     */
    public function setAortaL3($aortaL3)
    {
        $this->aortaL3 = $aortaL3;

        return $this;
    }

    /**
     * Get aortaL3
     *
     * @return array
     */
    public function getAortaL3()
    {
        return $this->aortaL3;
    }

    /**
     * Set valvulaMitralL1
     *
     * @param array $valvulaMitralL1
     *
     * @return Ecocardiograma2d
     */
    public function setValvulaMitralL1($valvulaMitralL1)
    {
        $this->valvulaMitralL1 = $valvulaMitralL1;

        return $this;
    }

    /**
     * Get valvulaMitralL1
     *
     * @return array
     */
    public function getValvulaMitralL1()
    {
        return $this->valvulaMitralL1;
    }

    /**
     * Set valvulaMitralL2
     *
     * @param array $valvulaMitralL2
     *
     * @return Ecocardiograma2d
     */
    public function setValvulaMitralL2($valvulaMitralL2)
    {
        $this->valvulaMitralL2 = $valvulaMitralL2;

        return $this;
    }

    /**
     * Get valvulaMitralL2
     *
     * @return array
     */
    public function getValvulaMitralL2()
    {
        return $this->valvulaMitralL2;
    }

    /**
     * Set auriculaIzqL1
     *
     * @param array $auriculaIzqL1
     *
     * @return Ecocardiograma2d
     */
    public function setAuriculaIzqL1($auriculaIzqL1)
    {
        $this->auriculaIzqL1 = $auriculaIzqL1;

        return $this;
    }

    /**
     * Get auriculaIzqL1
     *
     * @return array
     */
    public function getAuriculaIzqL1()
    {
        return $this->auriculaIzqL1;
    }

    /**
     * Set valvulaPulmonarL1
     *
     * @param array $valvulaPulmonarL1
     *
     * @return Ecocardiograma2d
     */
    public function setValvulaPulmonarL1($valvulaPulmonarL1)
    {
        $this->valvulaPulmonarL1 = $valvulaPulmonarL1;

        return $this;
    }

    /**
     * Get valvulaPulmonarL1
     *
     * @return array
     */
    public function getValvulaPulmonarL1()
    {
        return $this->valvulaPulmonarL1;
    }

    /**
     * Set valvulaPulmonarL2
     *
     * @param array $valvulaPulmonarL2
     *
     * @return Ecocardiograma2d
     */
    public function setValvulaPulmonarL2($valvulaPulmonarL2)
    {
        $this->valvulaPulmonarL2 = $valvulaPulmonarL2;

        return $this;
    }

    /**
     * Get valvulaPulmonarL2
     *
     * @return array
     */
    public function getValvulaPulmonarL2()
    {
        return $this->valvulaPulmonarL2;
    }

    /**
     * Set valvulatricuspideL1
     *
     * @param array $valvulatricuspideL1
     *
     * @return Ecocardiograma2d
     */
    public function setValvulatricuspideL1($valvulatricuspideL1)
    {
        $this->valvulatricuspideL1 = $valvulatricuspideL1;

        return $this;
    }

    /**
     * Get valvulatricuspideL1
     *
     * @return array
     */
    public function getValvulatricuspideL1()
    {
        return $this->valvulatricuspideL1;
    }

    /**
     * Set valvulatricuspideL2
     *
     * @param array $valvulatricuspideL2
     *
     * @return Ecocardiograma2d
     */
    public function setValvulatricuspideL2($valvulatricuspideL2)
    {
        $this->valvulatricuspideL2 = $valvulatricuspideL2;

        return $this;
    }

    /**
     * Get valvulatricuspideL2
     *
     * @return array
     */
    public function getValvulatricuspideL2()
    {
        return $this->valvulatricuspideL2;
    }

    /**
     * Set cavidadDerechaL1C1
     *
     * @param string $cavidadDerechaL1C1
     *
     * @return Ecocardiograma2d
     */
    public function setCavidadDerechaL1C1($cavidadDerechaL1C1)
    {
        $this->cavidadDerechaL1C1 = $cavidadDerechaL1C1;

        return $this;
    }

    /**
     * Get cavidadDerechaL1C1
     *
     * @return string
     */
    public function getCavidadDerechaL1C1()
    {
        return $this->cavidadDerechaL1C1;
    }

    /**
     * Set cavidadDerechaL1C2
     *
     * @param string $cavidadDerechaL1C2
     *
     * @return Ecocardiograma2d
     */
    public function setCavidadDerechaL1C2($cavidadDerechaL1C2)
    {
        $this->cavidadDerechaL1C2 = $cavidadDerechaL1C2;

        return $this;
    }

    /**
     * Get cavidadDerechaL1C2
     *
     * @return string
     */
    public function getCavidadDerechaL1C2()
    {
        return $this->cavidadDerechaL1C2;
    }

    /**
     * Set cavidadDerechaL1C3
     *
     * @param string $cavidadDerechaL1C3
     *
     * @return Ecocardiograma2d
     */
    public function setCavidadDerechaL1C3($cavidadDerechaL1C3)
    {
        $this->cavidadDerechaL1C3 = $cavidadDerechaL1C3;

        return $this;
    }

    /**
     * Get cavidadDerechaL1C3
     *
     * @return string
     */
    public function getCavidadDerechaL1C3()
    {
        return $this->cavidadDerechaL1C3;
    }

    /**
     * Set venaCavaInferiorL1
     *
     * @param array $venaCavaInferiorL1
     *
     * @return Ecocardiograma2d
     */
    public function setVenaCavaInferiorL1($venaCavaInferiorL1)
    {
        $this->venaCavaInferiorL1 = $venaCavaInferiorL1;

        return $this;
    }

    /**
     * Get venaCavaInferiorL1
     *
     * @return array
     */
    public function getVenaCavaInferiorL1()
    {
        return $this->venaCavaInferiorL1;
    }

    /**
     * Set pericardioL1
     *
     * @param array $pericardioL1
     *
     * @return Ecocardiograma2d
     */
    public function setPericardioL1($pericardioL1)
    {
        $this->pericardioL1 = $pericardioL1;

        return $this;
    }

    /**
     * Get pericardioL1
     *
     * @return array
     */
    public function getPericardioL1()
    {
        return $this->pericardioL1;
    }

    /**
     * Set conclusionL1
     *
     * @param array $conclusionL1
     *
     * @return Ecocardiograma2d
     */
    public function setConclusionL1($conclusionL1)
    {
        $this->conclusionL1 = $conclusionL1;

        return $this;
    }

    /**
     * Get conclusionL1
     *
     * @return array
     */
    public function getConclusionL1()
    {
        return $this->conclusionL1;
    }
}
