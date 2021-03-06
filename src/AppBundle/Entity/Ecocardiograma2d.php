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
     */
    private $raizAortaL1Libre;

    /**
     * @var text
     *
     */
    private $raizAortaL1c1;

    /**
     * @var text
     *
     */
    private $raizAortaL1c2;

    /**
     * @var text
     *
     * @ORM\Column(name="aorta_l1", type="array", nullable=true)
     */
    private $aortaL1;
    private $aortaL1Libre;

    /**
     * @var text
     *
     * @ORM\Column(name="aorta_l2", type="array", nullable=true)
     */
    private $aortaL2;

    private $aortaL2c1;
    private $aortaL2c2;
    /**
     * @var text
     *
     * @ORM\Column(name="aorta_l3", type="array", nullable=true)
     */
    private $aortaL3;

    private $aortaL3Libre;
    /**
     * @var text
     *
     * @ORM\Column(name="valvula_mitral_l1", type="array", nullable=true)
     */
    private $valvulaMitralL1;
    private $valvulaMitralL1Libre;

    /**
     * @var text
     *
     * @ORM\Column(name="valvula_mitral_l2", type="array", nullable=true)
     */
    private $valvulaMitralL2;
    private $valvulaMitralL2Libre;


    /**
     * @var text
     *
     * @ORM\Column(name="auricula_izq_l1", type="array", nullable=true)
     */
    private $auriculaIzqL1;
    private $auriculaIzqL1Libre;

    /**
     * @var text
     *
     * @ORM\Column(name="valvula_pulmonar_l1", type="array", nullable=true)
     */
    private $valvulaPulmonarL1;
    private $valvulaPulmonarL1Libre;

    /**
     * @var text
     *
     * @ORM\Column(name="valvula_pulmonar_l2", type="array", nullable=true)
     */
    private $valvulaPulmonarL2;
    private $valvulaPulmonarL2Libre;

    /**
     * @var text
     *
     * @ORM\Column(name="valvula_tricupside_l1", type="array", nullable=true)
     */
    private $valvulatricuspideL1;
    private $valvulatricuspideL1Libre;
    private $valvulatricuspideL1c1;

    /**
     * @var text
     *
     * @ORM\Column(name="valvula_tricupside_l2", type="array", nullable=true)
     */
    private $valvulatricuspideL2;
    private $valvulatricuspideL2Libre;



/**
 * @var text
 *
 * @ORM\Column(name="cavidad_derecha_l1", type="array", nullable=true)
 */
private $cavidadDerechaL1;

    /**
     * @var text
     *
     */
    private $cavidadDerechaL1c1;


    /**
     * @var text
     *
     */
    private $cavidadDerechaL1c2;


    /**
     * @var text
     *
     */
    private $cavidadDerechaL1c3;

    /**
     * @var text
     *
     */
    private $cavidadDerechaL1c4;


    /**
     * @var text
     *
     */
    private $cavidadDerechaL1c5;


    /**
     * @var text
     *
     */
    private $cavidadDerechaL1c6;

    /**
     * @var text
     *
     */
    private $cavidadDerechaL1Libre;


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
    private $pericardioL1Libre;


    public function __construct($medico,$paciente , $entityManager) {
      parent::__construct();
    //  $entityManager = $event->getEntityManager();
      $configuracion = $entityManager->getRepository('AppBundle:EstudioConfiguracion')->find(12);
      parent::setEstudioConfiguracion($configuracion);
      parent::setPaciente($paciente);
      parent::setMedico($medico);
    }


    // elimina el elemento elegido en el select y lo remplaza por el ingresado en el campo
        private function limpiarLista(&$lista,$elemento){
          if (($key = array_search($elemento, $lista)) !== false) {
            unset($lista[$key]);
          }
        }

    /**
     * Get the value of Situs
     *
     * @return text
     */
    public function getSitus()
    {
        return $this->situs;
    }

    /**
     * Set the value of Situs
     *
     * @param text situs
     *
     * @return self
     */
    public function setSitus($situs)
    {
        $this->situs = $situs;

        return $this;
    }

    /**
     * Get the value of Conexion Auriculoventricular
     *
     * @return text
     */
    public function getConexionAuriculoventricular()
    {
        return $this->conexionAuriculoventricular;
    }

    /**
     * Set the value of Conexion Auriculoventricular
     *
     * @param text conexionAuriculoventricular
     *
     * @return self
     */
    public function setConexionAuriculoventricular($conexionAuriculoventricular)
    {
        $this->conexionAuriculoventricular = $conexionAuriculoventricular;

        return $this;
    }

    /**
     * Get the value of Conexion Ventriculo Arterial
     *
     * @return text
     */
    public function getConexionVentriculoArterial()
    {
        return $this->conexionVentriculoArterial;
    }

    /**
     * Set the value of Conexion Ventriculo Arterial
     *
     * @param text conexionVentriculoArterial
     *
     * @return self
     */
    public function setConexionVentriculoArterial($conexionVentriculoArterial)
    {
        $this->conexionVentriculoArterial = $conexionVentriculoArterial;

        return $this;
    }

    /**
     * Get the value of Ddvi
     *
     * @return integer
     */
    public function getDdvi()
    {
        return $this->ddvi;
    }

    /**
     * Set the value of Ddvi
     *
     * @param integer ddvi
     *
     * @return self
     */
    public function setDdvi($ddvi)
    {
        $this->ddvi = $ddvi;

        return $this;
    }

    /**
     * Get the value of Dsvi
     *
     * @return integer
     */
    public function getDsvi()
    {
        return $this->dsvi;
    }

    /**
     * Set the value of Dsvi
     *
     * @param integer dsvi
     *
     * @return self
     */
    public function setDsvi($dsvi)
    {
        $this->dsvi = $dsvi;

        return $this;
    }

    /**
     * Get the value of Siv
     *
     * @return integer
     */
    public function getSiv()
    {
        return $this->siv;
    }

    /**
     * Set the value of Siv
     *
     * @param integer siv
     *
     * @return self
     */
    public function setSiv($siv)
    {
        $this->siv = $siv;

        return $this;
    }

    /**
     * Get the value of Pp
     *
     * @return integer
     */
    public function getPp()
    {
        return $this->pp;
    }

    /**
     * Set the value of Pp
     *
     * @param integer pp
     *
     * @return self
     */
    public function setPp($pp)
    {
        $this->pp = $pp;

        return $this;
    }

    /**
     * Get the value of Fey
     *
     * @return integer
     */
    public function getFey()
    {
        return $this->fey;
    }

    /**
     * Set the value of Fey
     *
     * @param integer fey
     *
     * @return self
     */
    public function setFey($fey)
    {
        $this->fey = $fey;

        return $this;
    }

    /**
     * Get the value of Al Area
     *
     * @return integer
     */
    public function getAlArea()
    {
        return $this->alArea;
    }

    /**
     * Set the value of Al Area
     *
     * @param integer alArea
     *
     * @return self
     */
    public function setAlArea($alArea)
    {
        $this->alArea = $alArea;

        return $this;
    }

    /**
     * Get the value of Al Vol
     *
     * @return integer
     */
    public function getAlVol()
    {
        return $this->alVol;
    }

    /**
     * Set the value of Al Vol
     *
     * @param integer alVol
     *
     * @return self
     */
    public function setAlVol($alVol)
    {
        $this->alVol = $alVol;

        return $this;
    }

    /**
     * Get the value of Aorta
     *
     * @return integer
     */
    public function getAorta()
    {
        return $this->aorta;
    }

    /**
     * Set the value of Aorta
     *
     * @param integer aorta
     *
     * @return self
     */
    public function setAorta($aorta)
    {
        $this->aorta = $aorta;

        return $this;
    }

    /**
     * Get the value of Ap Vao
     *
     * @return integer
     */
    public function getApVao()
    {
        return $this->apVao;
    }

    /**
     * Set the value of Ap Vao
     *
     * @param integer apVao
     *
     * @return self
     */
    public function setApVao($apVao)
    {
        $this->apVao = $apVao;

        return $this;
    }

    /**
     * Get the value of Tsvi
     *
     * @return integer
     */
    public function getTsvi()
    {
        return $this->tsvi;
    }

    /**
     * Set the value of Tsvi
     *
     * @param integer tsvi
     *
     * @return self
     */
    public function setTsvi($tsvi)
    {
        $this->tsvi = $tsvi;

        return $this;
    }

    /**
     * Get the value of Vel Max Ao
     *
     * @return integer
     */
    public function getVelMaxAo()
    {
        return $this->velMaxAo;
    }

    /**
     * Set the value of Vel Max Ao
     *
     * @param integer velMaxAo
     *
     * @return self
     */
    public function setVelMaxAo($velMaxAo)
    {
        $this->velMaxAo = $velMaxAo;

        return $this;
    }

    /**
     * Get the value of Grad Max Ao
     *
     * @return integer
     */
    public function getGradMaxAo()
    {
        return $this->gradMaxAo;
    }

    /**
     * Set the value of Grad Max Ao
     *
     * @param integer gradMaxAo
     *
     * @return self
     */
    public function setGradMaxAo($gradMaxAo)
    {
        $this->gradMaxAo = $gradMaxAo;

        return $this;
    }

    /**
     * Get the value of Grad Med Ao
     *
     * @return integer
     */
    public function getGradMedAo()
    {
        return $this->gradMedAo;
    }

    /**
     * Set the value of Grad Med Ao
     *
     * @param integer gradMedAo
     *
     * @return self
     */
    public function setGradMedAo($gradMedAo)
    {
        $this->gradMedAo = $gradMedAo;

        return $this;
    }

    /**
     * Get the value of Insuficiencia
     *
     * @return integer
     */
    public function getInsuficiencia()
    {
        return $this->insuficiencia;
    }

    /**
     * Set the value of Insuficiencia
     *
     * @param integer insuficiencia
     *
     * @return self
     */
    public function setInsuficiencia($insuficiencia)
    {
        $this->insuficiencia = $insuficiencia;

        return $this;
    }

    /**
     * Get the value of Thp
     *
     * @return integer
     */
    public function getThp()
    {
        return $this->thp;
    }

    /**
     * Set the value of Thp
     *
     * @param integer thp
     *
     * @return self
     */
    public function setThp($thp)
    {
        $this->thp = $thp;

        return $this;
    }

    /**
     * Get the value of Adt
     *
     * @return integer
     */
    public function getAdt()
    {
        return $this->adt;
    }

    /**
     * Set the value of Adt
     *
     * @param integer adt
     *
     * @return self
     */
    public function setAdt($adt)
    {
        $this->adt = $adt;

        return $this;
    }

    /**
     * Get the value of Aa
     *
     * @return integer
     */
    public function getAa()
    {
        return $this->aa;
    }

    /**
     * Set the value of Aa
     *
     * @param integer aa
     *
     * @return self
     */
    public function setAa($aa)
    {
        $this->aa = $aa;

        return $this;
    }

    /**
     * Get the value of Vel Onda
     *
     * @return integer
     */
    public function getVelOndaE()
    {
        return $this->velOndaE;
    }

    /**
     * Set the value of Vel Onda
     *
     * @param integer velOndaE
     *
     * @return self
     */
    public function setVelOndaE($velOndaE)
    {
        $this->velOndaE = $velOndaE;

        return $this;
    }

    /**
     * Get the value of Vel Onda
     *
     * @return integer
     */
    public function getVelOndaA()
    {
        return $this->velOndaA;
    }

    /**
     * Set the value of Vel Onda
     *
     * @param integer velOndaA
     *
     * @return self
     */
    public function setVelOndaA($velOndaA)
    {
        $this->velOndaA = $velOndaA;

        return $this;
    }

    /**
     * Get the value of Grad Medioa Trasmitral
     *
     * @return integer
     */
    public function getGradMedioaTrasmitral()
    {
        return $this->gradMedioaTrasmitral;
    }

    /**
     * Set the value of Grad Medioa Trasmitral
     *
     * @param integer gradMedioaTrasmitral
     *
     * @return self
     */
    public function setGradMedioaTrasmitral($gradMedioaTrasmitral)
    {
        $this->gradMedioaTrasmitral = $gradMedioaTrasmitral;

        return $this;
    }

    /**
     * Get the value of Insuficiencia Trasmitral
     *
     * @return integer
     */
    public function getInsuficienciaTrasmitral()
    {
        return $this->insuficienciaTrasmitral;
    }

    /**
     * Set the value of Insuficiencia Trasmitral
     *
     * @param integer insuficienciaTrasmitral
     *
     * @return self
     */
    public function setInsuficienciaTrasmitral($insuficienciaTrasmitral)
    {
        $this->insuficienciaTrasmitral = $insuficienciaTrasmitral;

        return $this;
    }

    /**
     * Get the value of Ore
     *
     * @return integer
     */
    public function getOre()
    {
        return $this->ore;
    }

    /**
     * Set the value of Ore
     *
     * @param integer ore
     *
     * @return self
     */
    public function setOre($ore)
    {
        $this->ore = $ore;

        return $this;
    }

    /**
     * Get the value of Vol Regurgitante
     *
     * @return integer
     */
    public function getVolRegurgitante()
    {
        return $this->volRegurgitante;
    }

    /**
     * Set the value of Vol Regurgitante
     *
     * @param integer volRegurgitante
     *
     * @return self
     */
    public function setVolRegurgitante($volRegurgitante)
    {
        $this->volRegurgitante = $volRegurgitante;

        return $this;
    }

    /**
     * Get the value of Dpdt
     *
     * @return integer
     */
    public function getDpdt()
    {
        return $this->dpdt;
    }

    /**
     * Set the value of Dpdt
     *
     * @param integer dpdt
     *
     * @return self
     */
    public function setDpdt($dpdt)
    {
        $this->dpdt = $dpdt;

        return $this;
    }

    /**
     * Get the value of Vel Max Pulmonar
     *
     * @return integer
     */
    public function getVelMaxPulmonar()
    {
        return $this->velMaxPulmonar;
    }

    /**
     * Set the value of Vel Max Pulmonar
     *
     * @param integer velMaxPulmonar
     *
     * @return self
     */
    public function setVelMaxPulmonar($velMaxPulmonar)
    {
        $this->velMaxPulmonar = $velMaxPulmonar;

        return $this;
    }

    /**
     * Get the value of Grad Max Pulomonar
     *
     * @return integer
     */
    public function getGradMaxPulomonar()
    {
        return $this->gradMaxPulomonar;
    }

    /**
     * Set the value of Grad Max Pulomonar
     *
     * @param integer gradMaxPulomonar
     *
     * @return self
     */
    public function setGradMaxPulomonar($gradMaxPulomonar)
    {
        $this->gradMaxPulomonar = $gradMaxPulomonar;

        return $this;
    }

    /**
     * Get the value of Insuficiencia Pulmonar
     *
     * @return integer
     */
    public function getInsuficienciaPulmonar()
    {
        return $this->insuficiencia_pulmonar;
    }

    /**
     * Set the value of Insuficiencia Pulmonar
     *
     * @param integer insuficiencia_pulmonar
     *
     * @return self
     */
    public function setInsuficienciaPulmonar($insuficiencia_pulmonar)
    {
        $this->insuficiencia_pulmonar = $insuficiencia_pulmonar;

        return $this;
    }

    /**
     * Get the value of Tpo Pico
     *
     * @return integer
     */
    public function getTpoPico()
    {
        return $this->tpoPico;
    }

    /**
     * Set the value of Tpo Pico
     *
     * @param integer tpoPico
     *
     * @return self
     */
    public function setTpoPico($tpoPico)
    {
        $this->tpoPico = $tpoPico;

        return $this;
    }

    /**
     * Get the value of Qpqs
     *
     * @return integer
     */
    public function getQpqs()
    {
        return $this->qpqs;
    }

    /**
     * Set the value of Qpqs
     *
     * @param integer qpqs
     *
     * @return self
     */
    public function setQpqs($qpqs)
    {
        $this->qpqs = $qpqs;

        return $this;
    }

    /**
     * Get the value of Insuficiencia Tricuspide
     *
     * @return integer
     */
    public function getInsuficienciaTricuspide()
    {
        return $this->insuficienciaTricuspide;
    }

    /**
     * Set the value of Insuficiencia Tricuspide
     *
     * @param integer insuficienciaTricuspide
     *
     * @return self
     */
    public function setInsuficienciaTricuspide($insuficienciaTricuspide)
    {
        $this->insuficienciaTricuspide = $insuficienciaTricuspide;

        return $this;
    }

    /**
     * Get the value of Vel Regurgitante
     *
     * @return integer
     */
    public function getVelRegurgitante()
    {
        return $this->velRegurgitante;
    }

    /**
     * Set the value of Vel Regurgitante
     *
     * @param integer velRegurgitante
     *
     * @return self
     */
    public function setVelRegurgitante($velRegurgitante)
    {
        $this->velRegurgitante = $velRegurgitante;

        return $this;
    }

    /**
     * Get the value of Grad Pico
     *
     * @return integer
     */
    public function getGradPico()
    {
        return $this->gradPico;
    }

    /**
     * Set the value of Grad Pico
     *
     * @param integer gradPico
     *
     * @return self
     */
    public function setGradPico($gradPico)
    {
        $this->gradPico = $gradPico;

        return $this;
    }

    /**
     * Get the value of Pap
     *
     * @return integer
     */
    public function getPap()
    {
        return $this->pap;
    }

    /**
     * Set the value of Pap
     *
     * @param integer pap
     *
     * @return self
     */
    public function setPap($pap)
    {
        $this->pap = $pap;

        return $this;
    }

    /**
     * Get the value of Pad
     *
     * @return integer
     */
    public function getPad()
    {
        return $this->pad;
    }

    /**
     * Set the value of Pad
     *
     * @param integer pad
     *
     * @return self
     */
    public function setPad($pad)
    {
        $this->pad = $pad;

        return $this;
    }

    /**
     * Get the value of Onda Septal
     *
     * @return integer
     */
    public function getOndaSeptal()
    {
        return $this->ondaSeptal;
    }

    /**
     * Set the value of Onda Septal
     *
     * @param integer ondaSeptal
     *
     * @return self
     */
    public function setOndaSeptal($ondaSeptal)
    {
        $this->ondaSeptal = $ondaSeptal;

        return $this;
    }

    /**
     * Get the value of Onda Lateral
     *
     * @return integer
     */
    public function getOndaLateral()
    {
        return $this->ondaLateral;
    }

    /**
     * Set the value of Onda Lateral
     *
     * @param integer ondaLateral
     *
     * @return self
     */
    public function setOndaLateral($ondaLateral)
    {
        $this->ondaLateral = $ondaLateral;

        return $this;
    }

    /**
     * Get the value of Onda
     *
     * @return integer
     */
    public function getOndaE()
    {
        return $this->ondaE;
    }

    /**
     * Set the value of Onda
     *
     * @param integer ondaE
     *
     * @return self
     */
    public function setOndaE($ondaE)
    {
        $this->ondaE = $ondaE;

        return $this;
    }

    /**
     * Get the value of Onda
     *
     * @return integer
     */
    public function getOndaA()
    {
        return $this->ondaA;
    }

    /**
     * Set the value of Onda
     *
     * @param integer ondaA
     *
     * @return self
     */
    public function setOndaA($ondaA)
    {
        $this->ondaA = $ondaA;

        return $this;
    }

    /**
     * Get the value of Relacion
     *
     * @return integer
     */
    public function getRelacionE()
    {
        return $this->relacionE;
    }

    /**
     * Set the value of Relacion
     *
     * @param integer relacionE
     *
     * @return self
     */
    public function setRelacionE($relacionE)
    {
        $this->relacionE = $relacionE;

        return $this;
    }

    /**
     * Get the value of Onda Vd
     *
     * @return integer
     */
    public function getOndaVd()
    {
        return $this->ondaVd;
    }

    /**
     * Set the value of Onda Vd
     *
     * @param integer ondaVd
     *
     * @return self
     */
    public function setOndaVd($ondaVd)
    {
        $this->ondaVd = $ondaVd;

        return $this;
    }

    /**
     * Get the value of Ventriculo Izq
     *
     * @return text
     */
    public function getVentriculoIzqL1()
    {
        return $this->ventriculoIzqL1;
    }

    /**
     * Set the value of Ventriculo Izq
     *
     * @param text ventriculoIzqL1
     *
     * @return self
     */
    public function setVentriculoIzqL1($ventriculoIzqL1)
    {
        $this->ventriculoIzqL1 = $ventriculoIzqL1;

        return $this;
    }

    /**
     * Get the value of Ventriculo Izq
     *
     * @return text
     */
    public function getVentriculoIzqL2()
    {
        return $this->ventriculoIzqL2;
    }

    /**
     * Set the value of Ventriculo Izq
     *
     * @param text ventriculoIzqL2
     *
     * @return self
     */
    public function setVentriculoIzqL2($ventriculoIzqL2)
    {
        $this->ventriculoIzqL2 = $ventriculoIzqL2;

        return $this;
    }

    /**
     * Get the value of Ventriculo Izq
     *
     * @return text
     */
    public function getVentriculoIzqL3()
    {
        return $this->ventriculoIzqL3;
    }

    /**
     * Set the value of Ventriculo Izq
     *
     * @param text ventriculoIzqL3
     *
     * @return self
     */
    public function setVentriculoIzqL3($ventriculoIzqL3)
    {
        $this->ventriculoIzqL3 = $ventriculoIzqL3;

        return $this;
    }

    /**
     * Get the value of Ventriculo Izq Imvi
     *
     * @return text
     */
    public function getVentriculoIzqL1Imvi()
    {
        return $this->ventriculoIzqL1Imvi;
    }

    /**
     * Set the value of Ventriculo Izq Imvi
     *
     * @param text ventriculoIzqL1Imvi
     *
     * @return self
     */
    public function setVentriculoIzqL1Imvi($ventriculoIzqL1Imvi)
    {
        $this->ventriculoIzqL1Imvi = $ventriculoIzqL1Imvi;

        return $this;
    }

    /**
     * Get the value of Ventriculo Izq Epr
     *
     * @return text
     */
    public function getVentriculoIzqL1Epr()
    {
        return $this->ventriculoIzqL1Epr;
    }

    /**
     * Set the value of Ventriculo Izq Epr
     *
     * @param text ventriculoIzqL1Epr
     *
     * @return self
     */
    public function setVentriculoIzqL1Epr($ventriculoIzqL1Epr)
    {
        $this->ventriculoIzqL1Epr = $ventriculoIzqL1Epr;

        return $this;
    }

    /**
     * Get the value of Ventriculo Izq
     *
     * @return text
     */
    public function getVentriculoIzqL4C1()
    {
        return $this->ventriculoIzqL4C1;
    }

    /**
     * Set the value of Ventriculo Izq
     *
     * @param text ventriculoIzqL4C1
     *
     * @return self
     */
    public function setVentriculoIzqL4C1($ventriculoIzqL4C1)
    {
        $this->ventriculoIzqL4C1 = $ventriculoIzqL4C1;

        return $this;
    }

    /**
     * Get the value of Raiz Aorta
     *
     * @return text
     */
    public function getRaizAortaL1()
    {
        return $this->raizAortaL1;
    }

    /**
     * Set the value of Raiz Aorta
     *
     * @param text raizAortaL1
     *
     * @return self
     */
    public function setRaizAortaL1($raizAortaL1)
    {
        $this->raizAortaL1 = $raizAortaL1;

        return $this;
    }

    /**
     * Get the value of Raiz Aorta Libre
     *
     * @return text
     */
     public function setRaizAortaL1Libre($raizAortaL1Libre)
     {
         array_push($this->raizAortaL1, $raizAortaL1Libre);
         $del_val='%libre%';
         $this->limpiarLista($this->raizAortaL1,$del_val);
         return $this;
     }
     /**
      * Get the value of Raiz Aorta Libre
      *
      * @return text
      */
      public function setRaizAortaL1c1($raizAortaL1c1)
      {
          array_push($this->raizAortaL1, $raizAortaL1c1);
          $del_val='%c1%';
          $this->limpiarLista($this->raizAortaL1,$del_val);
          return $this;
      }
      /**
       * Get the value of Raiz Aorta Libre
       *
       * @return text
       */
       public function setRaizAortaL1c2($raizAortaL1c2)
       {
           array_push($this->raizAortaL1, $raizAortaL1c2);
           $del_val='%c2%';
           $this->limpiarLista($this->raizAortaL1,$del_val);
           return $this;
       }
       /**
        * Get the value of Raiz Aorta
        *
        * @return text
        */
       public function getRaizAortaL1Libre()
       {
           return $this->raizAortaL1Libre;
       }
    /**
     * Get the value of Raiz Aorta
     *
     * @return text
     */
    public function getRaizAortaL1c1()
    {
        return $this->raizAortaL1c1;
    }

    /**
     * Get the value of Raiz Aorta
     *
     * @return text
     */
    public function getRaizAortaL1c2()
    {
        return $this->raizAortaL1c2;
    }

    /**
     * Get the value of Aorta
     *
     * @return text
     */
    public function getAortaL1()
    {
        return $this->aortaL1;
    }

    /**
     * Set the value of Aorta
     *
     * @param text aortaL1
     *
     * @return self
     */
    public function setAortaL1($aortaL1)
    {
        $this->aortaL1 = $aortaL1;

        return $this;
    }

    /**
     * Get the value of Aorta Libre
     *
     * @return mixed
     */
    public function getAortaL1Libre()
    {
        return $this->aortaL1Libre;
    }

    /**
     * Set the value of Aorta Libre
     *
     * @param mixed aortaL1Libre
     *
     * @return self
     */
    public function setAortaL1Libre($aortaL1Libre)
    {
        $this->aortaL1Libre = $aortaL1Libre;
        array_push($this->aortaL1, $aortaL1Libre);
        $del_val='%libre%';
        $this->limpiarLista($this->aortaL1,$del_val);
        return $this;
    }

    /**
     * Get the value of Aorta
     *
     * @return text
     */
    public function getAortaL2()
    {
        return $this->aortaL2;
    }

    /**
     * Set the value of Aorta
     *
     * @param text aortaL2
     *
     * @return self
     */
    public function setAortaL2($aortaL2)
    {
        $this->aortaL2 = $aortaL2;

        return $this;
    }

    /**
     * Get the value of Aorta
     *
     * @return mixed
     */
    public function getAortaL2c1()
    {
        return $this->aortaL2c1;
    }

    /**
     * Set the value of Aorta
     *
     * @param mixed aortaL2c1
     *
     * @return self
     */
    public function setAortaL2c1($aortaL2c1)
    {
        $this->aortaL2c1 = $aortaL2c1;
        array_push($this->aortaL2, $aortaL2c1);
        $del_val='%c1%';
        $this->limpiarLista($this->aortaL2,$del_val);
        return $this;
    }

    /**
     * Get the value of Aorta
     *
     * @return mixed
     */
    public function getAortaL2c2()
    {
        return $this->aortaL2c2;
    }

    /**
     * Set the value of Aorta
     *
     * @param mixed aortaL2c2
     *
     * @return self
     */
    public function setAortaL2c2($aortaL2c2)
    {
        $this->aortaL2c2 = $aortaL2c2;
        array_push($this->aortaL2, $aortaL2c2);
        $del_val='%c2%';
        $this->limpiarLista($this->aortaL2,$del_val);
        return $this;
    }

    /**
     * Get the value of Aorta
     *
     * @return text
     */
    public function getAortaL3()
    {
        return $this->aortaL3;
    }

    /**
     * Set the value of Aorta
     *
     * @param text aortaL3
     *
     * @return self
     */
    public function setAortaL3($aortaL3)
    {
        $this->aortaL3 = $aortaL3;

        return $this;
    }

    /**
     * Get the value of Aorta Libre
     *
     * @return mixed
     */
    public function getAortaL3Libre()
    {
        return $this->aortaL3Libre;
    }

    /**
     * Set the value of Aorta Libre
     *
     * @param mixed aortaL3Libre
     *
     * @return self
     */
    public function setAortaL3Libre($aortaL3Libre)
    {
        $this->aortaL3Libre = $aortaL3Libre;
        array_push($this->aortaL3, $aortaL3Libre);
        $del_val='%libre%';
        $this->limpiarLista($this->aortaL3,$del_val);
        return $this;
    }

    /**
     * Get the value of Valvula Mitral
     *
     * @return text
     */
    public function getValvulaMitralL1()
    {
        return $this->valvulaMitralL1;
    }

    /**
     * Set the value of Valvula Mitral
     *
     * @param text valvulaMitralL1
     *
     * @return self
     */
    public function setValvulaMitralL1($valvulaMitralL1)
    {
        $this->valvulaMitralL1 = $valvulaMitralL1;

        return $this;
    }

    /**
     * Get the value of Valvula Mitral Libre
     *
     * @return mixed
     */
    public function getValvulaMitralL1Libre()
    {
        return $this->valvulaMitralL1Libre;
    }

    /**
     * Set the value of Valvula Mitral Libre
     *
     * @param mixed valvulaMitralL1Libre
     *
     * @return self
     */
    public function setValvulaMitralL1Libre($valvulaMitralL1Libre)
    {
        $this->valvulaMitralL1Libre = $valvulaMitralL1Libre;
        array_push($this->valvulaMitralL1, $valvulaMitralL1Libre);
        $del_val='%libre%';
        $this->limpiarLista($this->valvulaMitralL1,$del_val);
        return $this;
    }

    /**
     * Get the value of Valvula Mitral
     *
     * @return text
     */
    public function getValvulaMitralL2()
    {
        return $this->valvulaMitralL2;
    }

    /**
     * Set the value of Valvula Mitral
     *
     * @param text valvulaMitralL2
     *
     * @return self
     */
    public function setValvulaMitralL2($valvulaMitralL2)
    {
        $this->valvulaMitralL2 = $valvulaMitralL2;

        return $this;
    }

    /**
     * Get the value of Valvula Mitral Libre
     *
     * @return mixed
     */
    public function getValvulaMitralL2Libre()
    {
        return $this->valvulaMitralL2Libre;
    }

    /**
     * Set the value of Valvula Mitral Libre
     *
     * @param mixed valvulaMitralL2Libre
     *
     * @return self
     */
    public function setValvulaMitralL2Libre($valvulaMitralL2Libre)
    {
        $this->valvulaMitralL2Libre = $valvulaMitralL2Libre;
        array_push($this->valvulaMitralL2, $valvulaMitralL2Libre);
        $del_val='%libre%';
        $this->limpiarLista($this->valvulaMitralL2,$del_val);
        return $this;
    }

    /**
     * Get the value of Auricula Izq
     *
     * @return text
     */
    public function getAuriculaIzqL1()
    {
        return $this->auriculaIzqL1;
    }

    /**
     * Set the value of Auricula Izq
     *
     * @param text auriculaIzqL1
     *
     * @return self
     */
    public function setAuriculaIzqL1($auriculaIzqL1)
    {
        $this->auriculaIzqL1 = $auriculaIzqL1;

        return $this;
    }

    /**
     * Get the value of Auricula Izq Libre
     *
     * @return mixed
     */
    public function getAuriculaIzqL1Libre()
    {
        return $this->auriculaIzqL1Libre;
    }

    /**
     * Set the value of Auricula Izq Libre
     *
     * @param mixed auriculaIzqL1Libre
     *
     * @return self
     */
    public function setAuriculaIzqL1Libre($auriculaIzqL1Libre)
    {
        $this->auriculaIzqL1Libre = $auriculaIzqL1Libre;
        array_push($this->auriculaIzqL1, $auriculaIzqL1Libre);
        $del_val='%libre%';
        $this->limpiarLista($this->auriculaIzqL1,$del_val);
        return $this;
    }

    /**
     * Get the value of Valvula Pulmonar
     *
     * @return text
     */
    public function getValvulaPulmonarL1()
    {
        return $this->valvulaPulmonarL1;
    }

    /**
     * Set the value of Valvula Pulmonar
     *
     * @param text valvulaPulmonarL1
     *
     * @return self
     */
    public function setValvulaPulmonarL1($valvulaPulmonarL1)
    {
        $this->valvulaPulmonarL1 = $valvulaPulmonarL1;

        return $this;
    }

    /**
     * Get the value of Valvula Pulmonar Libre
     *
     * @return mixed
     */
    public function getValvulaPulmonarL1Libre()
    {
        return $this->valvulaPulmonarL1Libre;
    }

    /**
     * Set the value of Valvula Pulmonar Libre
     *
     * @param mixed valvulaPulmonarL1Libre
     *
     * @return self
     */
    public function setValvulaPulmonarL1Libre($valvulaPulmonarL1Libre)
    {
        $this->valvulaPulmonarL1Libre = $valvulaPulmonarL1Libre;
        array_push($this->valvulaPulmonarL1, $valvulaPulmonarL1Libre);
        $del_val='%libre%';
        $this->limpiarLista($this->valvulaPulmonarL1,$del_val);
        return $this;
    }

    /**
     * Get the value of Valvula Pulmonar
     *
     * @return text
     */
    public function getValvulaPulmonarL2()
    {
        return $this->valvulaPulmonarL2;
    }

    /**
     * Set the value of Valvula Pulmonar
     *
     * @param text valvulaPulmonarL2
     *
     * @return self
     */
    public function setValvulaPulmonarL2($valvulaPulmonarL2)
    {
        $this->valvulaPulmonarL2 = $valvulaPulmonarL2;

        return $this;
    }

    /**
     * Get the value of Valvula Pulmonar Libre
     *
     * @return mixed
     */
    public function getValvulaPulmonarL2Libre()
    {
        return $this->valvulaPulmonarL2Libre;
    }

    /**
     * Set the value of Valvula Pulmonar Libre
     *
     * @param mixed valvulaPulmonarL2Libre
     *
     * @return self
     */
    public function setValvulaPulmonarL2Libre($valvulaPulmonarL2Libre)
    {
        $this->valvulaPulmonarL2Libre = $valvulaPulmonarL2Libre;
        array_push($this->valvulaPulmonarL2, $valvulaPulmonarL2Libre);
        $del_val='%libre%';
        $this->limpiarLista($this->valvulaPulmonarL2,$del_val);
        return $this;
    }

    /**
     * Get the value of Valvulatricuspide
     *
     * @return text
     */
    public function getValvulatricuspideL1()
    {
        return $this->valvulatricuspideL1;
    }

    /**
     * Set the value of Valvulatricuspide
     *
     * @param text valvulatricuspideL1
     *
     * @return self
     */
    public function setValvulatricuspideL1($valvulatricuspideL1)
    {
        $this->valvulatricuspideL1 = $valvulatricuspideL1;

        return $this;
    }

    /**
     * Get the value of Valvulatricuspide Libre
     *
     * @return mixed
     */
    public function getValvulatricuspideL1Libre()
    {
        return $this->valvulatricuspideL1Libre;
    }

    /**
     * Set the value of Valvulatricuspide Libre
     *
     * @param mixed valvulatricuspideL1Libre
     *
     * @return self
     */
    public function setValvulatricuspideL1Libre($valvulatricuspideL1Libre)
    {
        $this->valvulatricuspideL1Libre = $valvulatricuspideL1Libre;
        array_push($this->valvulatricuspideL1, $valvulatricuspideL1Libre);
        $del_val='%libre%';
        $this->limpiarLista($this->valvulatricuspideL1,$del_val);
        return $this;
    }

    /**
     * Get the value of Valvulatricuspide
     *
     * @return mixed
     */
    public function getValvulatricuspideL1c1()
    {
        return $this->valvulatricuspideL1c1;
    }

    /**
     * Set the value of Valvulatricuspide
     *
     * @param mixed valvulatricuspideL1c1
     *
     * @return self
     */
    public function setValvulatricuspideL1c1($valvulatricuspideL1c1)
    {
        $this->valvulatricuspideL1c1 = $valvulatricuspideL1c1;
        array_push($this->valvulatricuspideL1, $valvulatricuspideL1c1);
        $del_val='%c1%';
        $this->limpiarLista($this->valvulatricuspideL1,$del_val);
        return $this;
    }

    /**
     * Get the value of Valvulatricuspide
     *
     * @return text
     */
    public function getValvulatricuspideL2()
    {
        return $this->valvulatricuspideL2;
    }

    /**
     * Set the value of Valvulatricuspide
     *
     * @param text valvulatricuspideL2
     *
     * @return self
     */
    public function setValvulatricuspideL2($valvulatricuspideL2)
    {
        $this->valvulatricuspideL2 = $valvulatricuspideL2;

        return $this;
    }

    /**
     * Get the value of Valvulatricuspide Libre
     *
     * @return mixed
     */
    public function getValvulatricuspideL2Libre()
    {
        return $this->valvulatricuspideL2Libre;
    }

    /**
     * Set the value of Valvulatricuspide Libre
     *
     * @param mixed valvulatricuspideL2Libre
     *
     * @return self
     */
    public function setValvulatricuspideL2Libre($valvulatricuspideL2Libre)
    {
        $this->valvulatricuspideL2Libre = $valvulatricuspideL2Libre;
        array_push($this->valvulatricuspideL2, $valvulatricuspideL2Libre);
        $del_val='%libre%';
        $this->limpiarLista($this->valvulatricuspideL2,$del_val);
        return $this;
    }

    /**
     * Get the value of Cavidad Derecha
     *
     * @return text
     */
    public function getCavidadDerechaL1()
    {
        return $this->cavidadDerechaL1;
    }

    /**
     * Set the value of Cavidad Derecha
     *
     * @param text cavidadDerechaL1
     *
     * @return self
     */
    public function setCavidadDerechaL1($cavidadDerechaL1)
    {
        $this->cavidadDerechaL1 = $cavidadDerechaL1;

        return $this;
    }

    /**
     * Get the value of Cavidad Derecha
     *
     * @return text
     */
    public function getCavidadDerechaL1c1()
    {
        return $this->cavidadDerechaL1c1;
    }

    /**
     * Set the value of Cavidad Derecha
     *
     * @param text cavidadDerechaL1c1
     *
     * @return self
     */
    public function setCavidadDerechaL1c1($cavidadDerechaL1c1)
    {
        $this->cavidadDerechaL1c1 = $cavidadDerechaL1c1;
        array_push($this->cavidadDerechaL1, $cavidadDerechaL1c1);
        $del_val='%c1%';
        $this->limpiarLista($this->cavidadDerechaL1,$del_val);
        return $this;
    }

    /**
     * Get the value of Cavidad Derecha
     *
     * @return text
     */
    public function getCavidadDerechaL1c2()
    {
        return $this->cavidadDerechaL1c2;
    }

    /**
     * Set the value of Cavidad Derecha
     *
     * @param text cavidadDerechaL1c2
     *
     * @return self
     */
    public function setCavidadDerechaL1c2($cavidadDerechaL1c2)
    {
        $this->cavidadDerechaL1c2 = $cavidadDerechaL1c2;
        array_push($this->cavidadDerechaL1, $cavidadDerechaL1c2);
        $del_val='%c2%';
        $this->limpiarLista($this->cavidadDerechaL1,$del_val);
        return $this;
    }

    /**
     * Get the value of Cavidad Derecha
     *
     * @return text
     */
    public function getCavidadDerechaL1c3()
    {
        return $this->cavidadDerechaL1c3;
    }

    /**
     * Set the value of Cavidad Derecha
     *
     * @param text cavidadDerechaL1c3
     *
     * @return self
     */
    public function setCavidadDerechaL1c3($cavidadDerechaL1c3)
    {
        $this->cavidadDerechaL1c3 = $cavidadDerechaL1c3;
        array_push($this->cavidadDerechaL1, $cavidadDerechaL1c3);
        $del_val='%c3%';
        $this->limpiarLista($this->cavidadDerechaL1,$del_val);
        return $this;
    }

    /**
     * Get the value of Cavidad Derecha
     *
     * @return text
     */
    public function getCavidadDerechaL1c4()
    {
        return $this->cavidadDerechaL1c4;
    }

    /**
     * Set the value of Cavidad Derecha
     *
     * @param text cavidadDerechaL1c4
     *
     * @return self
     */
    public function setCavidadDerechaL1c4($cavidadDerechaL1c4)
    {
        $this->cavidadDerechaL1c4 = $cavidadDerechaL1c4;
        array_push($this->cavidadDerechaL1, $cavidadDerechaL1c4);
        $del_val='%c4%';
        $this->limpiarLista($this->cavidadDerechaL1,$del_val);
        return $this;
    }

    /**
     * Get the value of Cavidad Derecha
     *
     * @return text
     */
    public function getCavidadDerechaL1c5()
    {
        return $this->cavidadDerechaL1c5;
    }

    /**
     * Set the value of Cavidad Derecha
     *
     * @param text cavidadDerechaL1c5
     *
     * @return self
     */
    public function setCavidadDerechaL1c5($cavidadDerechaL1c5)
    {
        $this->cavidadDerechaL1c5 = $cavidadDerechaL1c5;
        array_push($this->cavidadDerechaL1, $cavidadDerechaL1c5);
        $del_val='%c5%';
        $this->limpiarLista($this->cavidadDerechaL1,$del_val);
        return $this;
    }

    /**
     * Get the value of Cavidad Derecha
     *
     * @return text
     */
    public function getCavidadDerechaL1c6()
    {
        return $this->cavidadDerechaL1c6;
    }

    /**
     * Set the value of Cavidad Derecha
     *
     * @param text cavidadDerechaL1c6
     *
     * @return self
     */
    public function setCavidadDerechaL1c6($cavidadDerechaL1c6)
    {
        $this->cavidadDerechaL1c6 = $cavidadDerechaL1c6;
        array_push($this->cavidadDerechaL1, $cavidadDerechaL1c6);
        $del_val='%c6%';
        $this->limpiarLista($this->cavidadDerechaL1,$del_val);
        return $this;
    }

    /**
     * Get the value of Cavidad Derecha Libre
     *
     * @return text
     */
      public function getCavidadDerechaL1Libre()
    {

        return $this->cavidadDerechaL1Libre;
    }

    /**
     * Set the value of Cavidad Derecha Libre
     *
     * @param text cavidadDerechaL1Libre
     *
     * @return self
     */
    public function setCavidadDerechaL1Libre( $cavidadDerechaL1Libre)
    {
        $this->cavidadDerechaL1Libre = $cavidadDerechaL1Libre;
        array_push($this->cavidadDerechaL1, $cavidadDerechaL1Libre);
        $del_val='%libre%';
        $this->limpiarLista($this->cavidadDerechaL1,$del_val);
        return $this;
    }

    /**
     * Get the value of Vena Cava Inferior
     *
     * @return text
     */
    public function getVenaCavaInferiorL1()
    {
        return $this->venaCavaInferiorL1;
    }

    /**
     * Set the value of Vena Cava Inferior
     *
     * @param text venaCavaInferiorL1
     *
     * @return self
     */
    public function setVenaCavaInferiorL1($venaCavaInferiorL1)
    {
        $this->venaCavaInferiorL1 = $venaCavaInferiorL1;

        return $this;
    }

    /**
     * Get the value of Pericardio
     *
     * @return text
     */
    public function getPericardioL1()
    {
        return $this->pericardioL1;
    }

    /**
     * Set the value of Pericardio
     *
     * @param text pericardioL1
     *
     * @return self
     */
    public function setPericardioL1($pericardioL1)
    {
        $this->pericardioL1 = $pericardioL1;

        return $this;
    }

    /**
     * Get the value of Pericardio Libre
     *
     * @return mixed
     */
    public function getPericardioL1Libre()
    {
        return $this->pericardioL1Libre;
    }

    /**
     * Set the value of Pericardio Libre
     *
     * @param mixed pericardioL1Libre
     *
     * @return self
     */
    public function setPericardioL1Libre($pericardioL1Libre)
    {
        $this->pericardioL1Libre = $pericardioL1Libre;
        array_push($this->pericardioL1, $pericardioL1Libre);
        $del_val='%libre%';
        $this->limpiarLista($this->pericardioL1,$del_val);
        return $this;
    }

}
