<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EcoEstres
 *
 * @ORM\Table(name="eco_estres")
 * @ORM\Entity
 */
class EcoEstres
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
     * @ORM\Column(name="id_estudio", type="integer", nullable=false)
     */
    private $idEstudio;

    /**
     * @var integer
     *
     * @ORM\Column(name="informe_1_normal", type="integer", nullable=false)
     */
    private $informe1Normal;

    /**
     * @var integer
     *
     * @ORM\Column(name="informe_2_normal", type="integer", nullable=false)
     */
    private $informe2Normal;

    /**
     * @var integer
     *
     * @ORM\Column(name="informe_respuesta_isquemica_1", type="integer", nullable=false)
     */
    private $informeRespuestaIsquemica1;

    /**
     * @var integer
     *
     * @ORM\Column(name="informe_3_infarto_sin_isquemia", type="integer", nullable=false)
     */
    private $informe3InfartoSinIsquemia;


}
