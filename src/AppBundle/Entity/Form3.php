<?php

namespace AppBundle\Entity;

/**
 * Form3
 */
class Form3
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $folioDep;

    /**
     * @var int
     */
    private $folioCodigoUe;

    /**
     * @var int
     */
    private $folioBoleta;

    /**
     * @var string|null
     */
    private $p1Ue;

    /**
     * @var string|null
     */
    private $p2Nombres;

    /**
     * @var string|null
     */
    private $p3Paterno;

    /**
     * @var string|null
     */
    private $p4Materno;

    /**
     * @var bool|null
     */
    private $p5Sexo;

    /**
     * @var int
     */
    private $p6Edad;

    /**
     * @var string|null
     */
    private $p7Inscrito2016;

    /**
     * @var string|null
     */
    private $p8noUe;

    /**
     * @var string|null
     */
    private $p9AnioEscolaridad2016;

    /**
     * @var string|null
     */
    private $p10AnioEscolaridad2018;

    /**
     * @var string|null
     */
    private $p11Rude;

    /**
     * @var bool|null
     */
    private $p121Enfermedad;

    /**
     * @var int|null
     */
    private $p121Importancia;

    /**
     * @var bool|null
     */
    private $p122Accidente;

    /**
     * @var int|null
     */
    private $p122Importancia;

    /**
     * @var bool|null
     */
    private $p123Discapacidad;

    /**
     * @var int|null
     */
    private $p123Importancia;

    /**
     * @var bool|null
     */
    private $p124Edad;

    /**
     * @var int|null
     */
    private $p124Importancia;

    /**
     * @var bool|null
     */
    private $p125Precocidad;

    /**
     * @var int|null
     */
    private $p125Importancia;

    /**
     * @var bool|null
     */
    private $p126EmbarazoPaternidad;

    /**
     * @var int|null
     */
    private $p126Importancia;

    /**
     * @var bool|null
     */
    private $p127FormoHogar;

    /**
     * @var int|null
     */
    private $p127Importancia;

    /**
     * @var bool|null
     */
    private $p128Abandono2016;

    /**
     * @var int|null
     */
    private $p128Importancia;

    /**
     * @var bool|null
     */
    private $p129Reprobacion2016;

    /**
     * @var int|null
     */
    private $p129Importancia;

    /**
     * @var bool|null
     */
    private $p1210InscricioCea;

    /**
     * @var int|null
     */
    private $p1210Importancia;

    /**
     * @var bool|null
     */
    private $p1211Bulling;

    /**
     * @var int|null
     */
    private $p1211Importancia;

    /**
     * @var bool|null
     */
    private $p1212UnidadDistante;

    /**
     * @var int|null
     */
    private $p1212Importancia;

    /**
     * @var bool|null
     */
    private $p1213UnidadNoOferta;

    /**
     * @var int|null
     */
    private $p1213Importancia;

    /**
     * @var bool|null
     */
    private $p1214ResponsabilidadesHogar;

    /**
     * @var int|null
     */
    private $p1214Importancia;

    /**
     * @var bool|null
     */
    private $p1215TrasladoFamilia;

    /**
     * @var int|null
     */
    private $p1215Importancia;

    /**
     * @var bool|null
     */
    private $p1216FaltaApoyo;

    /**
     * @var int|null
     */
    private $p1216Importancia;

    /**
     * @var bool|null
     */
    private $p1217NoViveHogarCompleto;

    /**
     * @var int|null
     */
    private $p1217Importancia;

    /**
     * @var bool|null
     */
    private $p1218SeparacionHogar;

    /**
     * @var int|null
     */
    private $p1218Importancia;

    /**
     * @var bool|null
     */
    private $p1219ViolenciaFamiliar;

    /**
     * @var int|null
     */
    private $p1219Importancia;

    /**
     * @var bool|null
     */
    private $p1220FallecimientoFamiliar;

    /**
     * @var int|null
     */
    private $p1220Importancia;

    /**
     * @var bool|null
     */
    private $p1221FaltaDinero;

    /**
     * @var int|null
     */
    private $p1221Importancia;

    /**
     * @var bool|null
     */
    private $p1222Trabajo;

    /**
     * @var int|null
     */
    private $p1222Importancia;

    /**
     * @var bool|null
     */
    private $p1223TrabajoPadres;

    /**
     * @var int|null
     */
    private $p1223Importancia;

    /**
     * @var bool|null
     */
    private $p1224Pandillas;

    /**
     * @var int|null
     */
    private $p1224Importancia;

    /**
     * @var bool|null
     */
    private $p1225Drogas;

    /**
     * @var int|null
     */
    private $p1225Importancia;

    /**
     * @var bool|null
     */
    private $p1226Alcoholismo;

    /**
     * @var int|null
     */
    private $p1226Importancia;

    /**
     * @var bool|null
     */
    private $p1227Otra;

    /**
     * @var int|null
     */
    private $p1227Importancia;

    /**
     * @var string|null
     */
    private $p1227Razon;

    /**
     * @var bool|null
     */
    private $p131TrabajaOtros;

    /**
     * @var bool|null
     */
    private $p132TrbajaPtopio;

    /**
     * @var bool|null
     */
    private $p133Ayuda;

    /**
     * @var bool|null
     */
    private $p134Alimentos;

    /**
     * @var bool|null
     */
    private $p135Vende;

    /**
     * @var bool|null
     */
    private $p136Lava;

    /**
     * @var bool|null
     */
    private $p137Cuida;

    /**
     * @var bool|null
     */
    private $p138Mineria;

    /**
     * @var bool|null
     */
    private $p139Otro;

    /**
     * @var string|null
     */
    private $p139Razon;

    /**
     * @var bool|null
     */
    private $p141Maniana;

    /**
     * @var bool|null
     */
    private $p142Tarde;

    /**
     * @var bool|null
     */
    private $p143Noche;

    /**
     * @var bool|null
     */
    private $p151Trabaja;

    /**
     * @var bool|null
     */
    private $p152Oferta;

    /**
     * @var bool|null
     */
    private $p153Lejos;

    /**
     * @var bool|null
     */
    private $p154LejosHogar;

    /**
     * @var bool|null
     */
    private $p155LejosUe;

    /**
     * @var bool|null
     */
    private $p156Cansado;

    /**
     * @var bool|null
     */
    private $p157Ayudar;

    /**
     * @var bool|null
     */
    private $p158Dinero;

    /**
     * @var bool|null
     */
    private $p159Apoyo;

    /**
     * @var bool|null
     */
    private $p1510Otro;

    /**
     * @var string|null
     */
    private $p15Razon;

    /**
     * @var string|null
     */
    private $p16Papas;

    /**
     * @var string|null
     */
    private $p17Vuelve2018;

    /**
     * @var bool|null
     */
    private $p18Companeros;

    /**
     * @var string|null
     */
    private $p19Primera;

    /**
     * @var string|null
     */
    private $p19Segunda;

    /**
     * @var string|null
     */
    private $p19Tercera;

    /**
     * @var string|null
     */
    private $p19Cuarta;

    /**
     * @var string|null
     */
    private $p19Quinta;

    /**
     * @var string|null
     */
    private $p19Otra;

    /**
     * @var string|null
     */
    private $p20Nombre;

    /**
     * @var string|null
     */
    private $p20Cargo;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set folioDep.
     *
     * @param int $folioDep
     *
     * @return Form3
     */
    public function setFolioDep($folioDep)
    {
        $this->folioDep = $folioDep;

        return $this;
    }

    /**
     * Get folioDep.
     *
     * @return int
     */
    public function getFolioDep()
    {
        return $this->folioDep;
    }

    /**
     * Set folioCodigoUe.
     *
     * @param int $folioCodigoUe
     *
     * @return Form3
     */
    public function setFolioCodigoUe($folioCodigoUe)
    {
        $this->folioCodigoUe = $folioCodigoUe;

        return $this;
    }

    /**
     * Get folioCodigoUe.
     *
     * @return int
     */
    public function getFolioCodigoUe()
    {
        return $this->folioCodigoUe;
    }

    /**
     * Set folioBoleta.
     *
     * @param int $folioBoleta
     *
     * @return Form3
     */
    public function setFolioBoleta($folioBoleta)
    {
        $this->folioBoleta = $folioBoleta;

        return $this;
    }

    /**
     * Get folioBoleta.
     *
     * @return int
     */
    public function getFolioBoleta()
    {
        return $this->folioBoleta;
    }

    /**
     * Set p1Ue.
     *
     * @param string|null $p1Ue
     *
     * @return Form3
     */
    public function setP1Ue($p1Ue = null)
    {
        $this->p1Ue = $p1Ue;

        return $this;
    }

    /**
     * Get p1Ue.
     *
     * @return string|null
     */
    public function getP1Ue()
    {
        return $this->p1Ue;
    }

    /**
     * Set p2Nombres.
     *
     * @param string|null $p2Nombres
     *
     * @return Form3
     */
    public function setP2Nombres($p2Nombres = null)
    {
        $this->p2Nombres = $p2Nombres;

        return $this;
    }

    /**
     * Get p2Nombres.
     *
     * @return string|null
     */
    public function getP2Nombres()
    {
        return $this->p2Nombres;
    }

    /**
     * Set p3Paterno.
     *
     * @param string|null $p3Paterno
     *
     * @return Form3
     */
    public function setP3Paterno($p3Paterno = null)
    {
        $this->p3Paterno = $p3Paterno;

        return $this;
    }

    /**
     * Get p3Paterno.
     *
     * @return string|null
     */
    public function getP3Paterno()
    {
        return $this->p3Paterno;
    }

    /**
     * Set p4Materno.
     *
     * @param string|null $p4Materno
     *
     * @return Form3
     */
    public function setP4Materno($p4Materno = null)
    {
        $this->p4Materno = $p4Materno;

        return $this;
    }

    /**
     * Get p4Materno.
     *
     * @return string|null
     */
    public function getP4Materno()
    {
        return $this->p4Materno;
    }

    /**
     * Set p5Sexo.
     *
     * @param bool|null $p5Sexo
     *
     * @return Form3
     */
    public function setP5Sexo($p5Sexo = null)
    {
        $this->p5Sexo = $p5Sexo;

        return $this;
    }

    /**
     * Get p5Sexo.
     *
     * @return bool|null
     */
    public function getP5Sexo()
    {
        return $this->p5Sexo;
    }

    /**
     * Set p6Edad.
     *
     * @param int $p6Edad
     *
     * @return Form3
     */
    public function setP6Edad($p6Edad)
    {
        $this->p6Edad = $p6Edad;

        return $this;
    }

    /**
     * Get p6Edad.
     *
     * @return int
     */
    public function getP6Edad()
    {
        return $this->p6Edad;
    }

    /**
     * Set p7Inscrito2016.
     *
     * @param string|null $p7Inscrito2016
     *
     * @return Form3
     */
    public function setP7Inscrito2016($p7Inscrito2016 = null)
    {
        $this->p7Inscrito2016 = $p7Inscrito2016;

        return $this;
    }

    /**
     * Get p7Inscrito2016.
     *
     * @return string|null
     */
    public function getP7Inscrito2016()
    {
        return $this->p7Inscrito2016;
    }

    /**
     * Set p8noUe.
     *
     * @param string|null $p8noUe
     *
     * @return Form3
     */
    public function setP8noUe($p8noUe = null)
    {
        $this->p8noUe = $p8noUe;

        return $this;
    }

    /**
     * Get p8noUe.
     *
     * @return string|null
     */
    public function getP8noUe()
    {
        return $this->p8noUe;
    }

    /**
     * Set p9AnioEscolaridad2016.
     *
     * @param string|null $p9AnioEscolaridad2016
     *
     * @return Form3
     */
    public function setP9AnioEscolaridad2016($p9AnioEscolaridad2016 = null)
    {
        $this->p9AnioEscolaridad2016 = $p9AnioEscolaridad2016;

        return $this;
    }

    /**
     * Get p9AnioEscolaridad2016.
     *
     * @return string|null
     */
    public function getP9AnioEscolaridad2016()
    {
        return $this->p9AnioEscolaridad2016;
    }

    /**
     * Set p10AnioEscolaridad2018.
     *
     * @param string|null $p10AnioEscolaridad2018
     *
     * @return Form3
     */
    public function setP10AnioEscolaridad2018($p10AnioEscolaridad2018 = null)
    {
        $this->p10AnioEscolaridad2018 = $p10AnioEscolaridad2018;

        return $this;
    }

    /**
     * Get p10AnioEscolaridad2018.
     *
     * @return string|null
     */
    public function getP10AnioEscolaridad2018()
    {
        return $this->p10AnioEscolaridad2018;
    }

    /**
     * Set p11Rude.
     *
     * @param string|null $p11Rude
     *
     * @return Form3
     */
    public function setP11Rude($p11Rude = null)
    {
        $this->p11Rude = $p11Rude;

        return $this;
    }

    /**
     * Get p11Rude.
     *
     * @return string|null
     */
    public function getP11Rude()
    {
        return $this->p11Rude;
    }

    /**
     * Set p121Enfermedad.
     *
     * @param bool|null $p121Enfermedad
     *
     * @return Form3
     */
    public function setP121Enfermedad($p121Enfermedad = null)
    {
        $this->p121Enfermedad = $p121Enfermedad;

        return $this;
    }

    /**
     * Get p121Enfermedad.
     *
     * @return bool|null
     */
    public function getP121Enfermedad()
    {
        return $this->p121Enfermedad;
    }

    /**
     * Set p121Importancia.
     *
     * @param int|null $p121Importancia
     *
     * @return Form3
     */
    public function setP121Importancia($p121Importancia = null)
    {
        $this->p121Importancia = $p121Importancia;

        return $this;
    }

    /**
     * Get p121Importancia.
     *
     * @return int|null
     */
    public function getP121Importancia()
    {
        return $this->p121Importancia;
    }

    /**
     * Set p122Accidente.
     *
     * @param bool|null $p122Accidente
     *
     * @return Form3
     */
    public function setP122Accidente($p122Accidente = null)
    {
        $this->p122Accidente = $p122Accidente;

        return $this;
    }

    /**
     * Get p122Accidente.
     *
     * @return bool|null
     */
    public function getP122Accidente()
    {
        return $this->p122Accidente;
    }

    /**
     * Set p122Importancia.
     *
     * @param int|null $p122Importancia
     *
     * @return Form3
     */
    public function setP122Importancia($p122Importancia = null)
    {
        $this->p122Importancia = $p122Importancia;

        return $this;
    }

    /**
     * Get p122Importancia.
     *
     * @return int|null
     */
    public function getP122Importancia()
    {
        return $this->p122Importancia;
    }

    /**
     * Set p123Discapacidad.
     *
     * @param bool|null $p123Discapacidad
     *
     * @return Form3
     */
    public function setP123Discapacidad($p123Discapacidad = null)
    {
        $this->p123Discapacidad = $p123Discapacidad;

        return $this;
    }

    /**
     * Get p123Discapacidad.
     *
     * @return bool|null
     */
    public function getP123Discapacidad()
    {
        return $this->p123Discapacidad;
    }

    /**
     * Set p123Importancia.
     *
     * @param int|null $p123Importancia
     *
     * @return Form3
     */
    public function setP123Importancia($p123Importancia = null)
    {
        $this->p123Importancia = $p123Importancia;

        return $this;
    }

    /**
     * Get p123Importancia.
     *
     * @return int|null
     */
    public function getP123Importancia()
    {
        return $this->p123Importancia;
    }

    /**
     * Set p124Edad.
     *
     * @param bool|null $p124Edad
     *
     * @return Form3
     */
    public function setP124Edad($p124Edad = null)
    {
        $this->p124Edad = $p124Edad;

        return $this;
    }

    /**
     * Get p124Edad.
     *
     * @return bool|null
     */
    public function getP124Edad()
    {
        return $this->p124Edad;
    }

    /**
     * Set p124Importancia.
     *
     * @param int|null $p124Importancia
     *
     * @return Form3
     */
    public function setP124Importancia($p124Importancia = null)
    {
        $this->p124Importancia = $p124Importancia;

        return $this;
    }

    /**
     * Get p124Importancia.
     *
     * @return int|null
     */
    public function getP124Importancia()
    {
        return $this->p124Importancia;
    }

    /**
     * Set p125Precocidad.
     *
     * @param bool|null $p125Precocidad
     *
     * @return Form3
     */
    public function setP125Precocidad($p125Precocidad = null)
    {
        $this->p125Precocidad = $p125Precocidad;

        return $this;
    }

    /**
     * Get p125Precocidad.
     *
     * @return bool|null
     */
    public function getP125Precocidad()
    {
        return $this->p125Precocidad;
    }

    /**
     * Set p125Importancia.
     *
     * @param int|null $p125Importancia
     *
     * @return Form3
     */
    public function setP125Importancia($p125Importancia = null)
    {
        $this->p125Importancia = $p125Importancia;

        return $this;
    }

    /**
     * Get p125Importancia.
     *
     * @return int|null
     */
    public function getP125Importancia()
    {
        return $this->p125Importancia;
    }

    /**
     * Set p126EmbarazoPaternidad.
     *
     * @param bool|null $p126EmbarazoPaternidad
     *
     * @return Form3
     */
    public function setP126EmbarazoPaternidad($p126EmbarazoPaternidad = null)
    {
        $this->p126EmbarazoPaternidad = $p126EmbarazoPaternidad;

        return $this;
    }

    /**
     * Get p126EmbarazoPaternidad.
     *
     * @return bool|null
     */
    public function getP126EmbarazoPaternidad()
    {
        return $this->p126EmbarazoPaternidad;
    }

    /**
     * Set p126Importancia.
     *
     * @param int|null $p126Importancia
     *
     * @return Form3
     */
    public function setP126Importancia($p126Importancia = null)
    {
        $this->p126Importancia = $p126Importancia;

        return $this;
    }

    /**
     * Get p126Importancia.
     *
     * @return int|null
     */
    public function getP126Importancia()
    {
        return $this->p126Importancia;
    }

    /**
     * Set p127FormoHogar.
     *
     * @param bool|null $p127FormoHogar
     *
     * @return Form3
     */
    public function setP127FormoHogar($p127FormoHogar = null)
    {
        $this->p127FormoHogar = $p127FormoHogar;

        return $this;
    }

    /**
     * Get p127FormoHogar.
     *
     * @return bool|null
     */
    public function getP127FormoHogar()
    {
        return $this->p127FormoHogar;
    }

    /**
     * Set p127Importancia.
     *
     * @param int|null $p127Importancia
     *
     * @return Form3
     */
    public function setP127Importancia($p127Importancia = null)
    {
        $this->p127Importancia = $p127Importancia;

        return $this;
    }

    /**
     * Get p127Importancia.
     *
     * @return int|null
     */
    public function getP127Importancia()
    {
        return $this->p127Importancia;
    }

    /**
     * Set p128Abandono2016.
     *
     * @param bool|null $p128Abandono2016
     *
     * @return Form3
     */
    public function setP128Abandono2016($p128Abandono2016 = null)
    {
        $this->p128Abandono2016 = $p128Abandono2016;

        return $this;
    }

    /**
     * Get p128Abandono2016.
     *
     * @return bool|null
     */
    public function getP128Abandono2016()
    {
        return $this->p128Abandono2016;
    }

    /**
     * Set p128Importancia.
     *
     * @param int|null $p128Importancia
     *
     * @return Form3
     */
    public function setP128Importancia($p128Importancia = null)
    {
        $this->p128Importancia = $p128Importancia;

        return $this;
    }

    /**
     * Get p128Importancia.
     *
     * @return int|null
     */
    public function getP128Importancia()
    {
        return $this->p128Importancia;
    }

    /**
     * Set p129Reprobacion2016.
     *
     * @param bool|null $p129Reprobacion2016
     *
     * @return Form3
     */
    public function setP129Reprobacion2016($p129Reprobacion2016 = null)
    {
        $this->p129Reprobacion2016 = $p129Reprobacion2016;

        return $this;
    }

    /**
     * Get p129Reprobacion2016.
     *
     * @return bool|null
     */
    public function getP129Reprobacion2016()
    {
        return $this->p129Reprobacion2016;
    }

    /**
     * Set p129Importancia.
     *
     * @param int|null $p129Importancia
     *
     * @return Form3
     */
    public function setP129Importancia($p129Importancia = null)
    {
        $this->p129Importancia = $p129Importancia;

        return $this;
    }

    /**
     * Get p129Importancia.
     *
     * @return int|null
     */
    public function getP129Importancia()
    {
        return $this->p129Importancia;
    }

    /**
     * Set p1210InscricioCea.
     *
     * @param bool|null $p1210InscricioCea
     *
     * @return Form3
     */
    public function setP1210InscricioCea($p1210InscricioCea = null)
    {
        $this->p1210InscricioCea = $p1210InscricioCea;

        return $this;
    }

    /**
     * Get p1210InscricioCea.
     *
     * @return bool|null
     */
    public function getP1210InscricioCea()
    {
        return $this->p1210InscricioCea;
    }

    /**
     * Set p1210Importancia.
     *
     * @param int|null $p1210Importancia
     *
     * @return Form3
     */
    public function setP1210Importancia($p1210Importancia = null)
    {
        $this->p1210Importancia = $p1210Importancia;

        return $this;
    }

    /**
     * Get p1210Importancia.
     *
     * @return int|null
     */
    public function getP1210Importancia()
    {
        return $this->p1210Importancia;
    }

    /**
     * Set p1211Bulling.
     *
     * @param bool|null $p1211Bulling
     *
     * @return Form3
     */
    public function setP1211Bulling($p1211Bulling = null)
    {
        $this->p1211Bulling = $p1211Bulling;

        return $this;
    }

    /**
     * Get p1211Bulling.
     *
     * @return bool|null
     */
    public function getP1211Bulling()
    {
        return $this->p1211Bulling;
    }

    /**
     * Set p1211Importancia.
     *
     * @param int|null $p1211Importancia
     *
     * @return Form3
     */
    public function setP1211Importancia($p1211Importancia = null)
    {
        $this->p1211Importancia = $p1211Importancia;

        return $this;
    }

    /**
     * Get p1211Importancia.
     *
     * @return int|null
     */
    public function getP1211Importancia()
    {
        return $this->p1211Importancia;
    }

    /**
     * Set p1212UnidadDistante.
     *
     * @param bool|null $p1212UnidadDistante
     *
     * @return Form3
     */
    public function setP1212UnidadDistante($p1212UnidadDistante = null)
    {
        $this->p1212UnidadDistante = $p1212UnidadDistante;

        return $this;
    }

    /**
     * Get p1212UnidadDistante.
     *
     * @return bool|null
     */
    public function getP1212UnidadDistante()
    {
        return $this->p1212UnidadDistante;
    }

    /**
     * Set p1212Importancia.
     *
     * @param int|null $p1212Importancia
     *
     * @return Form3
     */
    public function setP1212Importancia($p1212Importancia = null)
    {
        $this->p1212Importancia = $p1212Importancia;

        return $this;
    }

    /**
     * Get p1212Importancia.
     *
     * @return int|null
     */
    public function getP1212Importancia()
    {
        return $this->p1212Importancia;
    }

    /**
     * Set p1213UnidadNoOferta.
     *
     * @param bool|null $p1213UnidadNoOferta
     *
     * @return Form3
     */
    public function setP1213UnidadNoOferta($p1213UnidadNoOferta = null)
    {
        $this->p1213UnidadNoOferta = $p1213UnidadNoOferta;

        return $this;
    }

    /**
     * Get p1213UnidadNoOferta.
     *
     * @return bool|null
     */
    public function getP1213UnidadNoOferta()
    {
        return $this->p1213UnidadNoOferta;
    }

    /**
     * Set p1213Importancia.
     *
     * @param int|null $p1213Importancia
     *
     * @return Form3
     */
    public function setP1213Importancia($p1213Importancia = null)
    {
        $this->p1213Importancia = $p1213Importancia;

        return $this;
    }

    /**
     * Get p1213Importancia.
     *
     * @return int|null
     */
    public function getP1213Importancia()
    {
        return $this->p1213Importancia;
    }

    /**
     * Set p1214ResponsabilidadesHogar.
     *
     * @param bool|null $p1214ResponsabilidadesHogar
     *
     * @return Form3
     */
    public function setP1214ResponsabilidadesHogar($p1214ResponsabilidadesHogar = null)
    {
        $this->p1214ResponsabilidadesHogar = $p1214ResponsabilidadesHogar;

        return $this;
    }

    /**
     * Get p1214ResponsabilidadesHogar.
     *
     * @return bool|null
     */
    public function getP1214ResponsabilidadesHogar()
    {
        return $this->p1214ResponsabilidadesHogar;
    }

    /**
     * Set p1214Importancia.
     *
     * @param int|null $p1214Importancia
     *
     * @return Form3
     */
    public function setP1214Importancia($p1214Importancia = null)
    {
        $this->p1214Importancia = $p1214Importancia;

        return $this;
    }

    /**
     * Get p1214Importancia.
     *
     * @return int|null
     */
    public function getP1214Importancia()
    {
        return $this->p1214Importancia;
    }

    /**
     * Set p1215TrasladoFamilia.
     *
     * @param bool|null $p1215TrasladoFamilia
     *
     * @return Form3
     */
    public function setP1215TrasladoFamilia($p1215TrasladoFamilia = null)
    {
        $this->p1215TrasladoFamilia = $p1215TrasladoFamilia;

        return $this;
    }

    /**
     * Get p1215TrasladoFamilia.
     *
     * @return bool|null
     */
    public function getP1215TrasladoFamilia()
    {
        return $this->p1215TrasladoFamilia;
    }

    /**
     * Set p1215Importancia.
     *
     * @param int|null $p1215Importancia
     *
     * @return Form3
     */
    public function setP1215Importancia($p1215Importancia = null)
    {
        $this->p1215Importancia = $p1215Importancia;

        return $this;
    }

    /**
     * Get p1215Importancia.
     *
     * @return int|null
     */
    public function getP1215Importancia()
    {
        return $this->p1215Importancia;
    }

    /**
     * Set p1216FaltaApoyo.
     *
     * @param bool|null $p1216FaltaApoyo
     *
     * @return Form3
     */
    public function setP1216FaltaApoyo($p1216FaltaApoyo = null)
    {
        $this->p1216FaltaApoyo = $p1216FaltaApoyo;

        return $this;
    }

    /**
     * Get p1216FaltaApoyo.
     *
     * @return bool|null
     */
    public function getP1216FaltaApoyo()
    {
        return $this->p1216FaltaApoyo;
    }

    /**
     * Set p1216Importancia.
     *
     * @param int|null $p1216Importancia
     *
     * @return Form3
     */
    public function setP1216Importancia($p1216Importancia = null)
    {
        $this->p1216Importancia = $p1216Importancia;

        return $this;
    }

    /**
     * Get p1216Importancia.
     *
     * @return int|null
     */
    public function getP1216Importancia()
    {
        return $this->p1216Importancia;
    }

    /**
     * Set p1217NoViveHogarCompleto.
     *
     * @param bool|null $p1217NoViveHogarCompleto
     *
     * @return Form3
     */
    public function setP1217NoViveHogarCompleto($p1217NoViveHogarCompleto = null)
    {
        $this->p1217NoViveHogarCompleto = $p1217NoViveHogarCompleto;

        return $this;
    }

    /**
     * Get p1217NoViveHogarCompleto.
     *
     * @return bool|null
     */
    public function getP1217NoViveHogarCompleto()
    {
        return $this->p1217NoViveHogarCompleto;
    }

    /**
     * Set p1217Importancia.
     *
     * @param int|null $p1217Importancia
     *
     * @return Form3
     */
    public function setP1217Importancia($p1217Importancia = null)
    {
        $this->p1217Importancia = $p1217Importancia;

        return $this;
    }

    /**
     * Get p1217Importancia.
     *
     * @return int|null
     */
    public function getP1217Importancia()
    {
        return $this->p1217Importancia;
    }

    /**
     * Set p1218SeparacionHogar.
     *
     * @param bool|null $p1218SeparacionHogar
     *
     * @return Form3
     */
    public function setP1218SeparacionHogar($p1218SeparacionHogar = null)
    {
        $this->p1218SeparacionHogar = $p1218SeparacionHogar;

        return $this;
    }

    /**
     * Get p1218SeparacionHogar.
     *
     * @return bool|null
     */
    public function getP1218SeparacionHogar()
    {
        return $this->p1218SeparacionHogar;
    }

    /**
     * Set p1218Importancia.
     *
     * @param int|null $p1218Importancia
     *
     * @return Form3
     */
    public function setP1218Importancia($p1218Importancia = null)
    {
        $this->p1218Importancia = $p1218Importancia;

        return $this;
    }

    /**
     * Get p1218Importancia.
     *
     * @return int|null
     */
    public function getP1218Importancia()
    {
        return $this->p1218Importancia;
    }

    /**
     * Set p1219ViolenciaFamiliar.
     *
     * @param bool|null $p1219ViolenciaFamiliar
     *
     * @return Form3
     */
    public function setP1219ViolenciaFamiliar($p1219ViolenciaFamiliar = null)
    {
        $this->p1219ViolenciaFamiliar = $p1219ViolenciaFamiliar;

        return $this;
    }

    /**
     * Get p1219ViolenciaFamiliar.
     *
     * @return bool|null
     */
    public function getP1219ViolenciaFamiliar()
    {
        return $this->p1219ViolenciaFamiliar;
    }

    /**
     * Set p1219Importancia.
     *
     * @param int|null $p1219Importancia
     *
     * @return Form3
     */
    public function setP1219Importancia($p1219Importancia = null)
    {
        $this->p1219Importancia = $p1219Importancia;

        return $this;
    }

    /**
     * Get p1219Importancia.
     *
     * @return int|null
     */
    public function getP1219Importancia()
    {
        return $this->p1219Importancia;
    }

    /**
     * Set p1220FallecimientoFamiliar.
     *
     * @param bool|null $p1220FallecimientoFamiliar
     *
     * @return Form3
     */
    public function setP1220FallecimientoFamiliar($p1220FallecimientoFamiliar = null)
    {
        $this->p1220FallecimientoFamiliar = $p1220FallecimientoFamiliar;

        return $this;
    }

    /**
     * Get p1220FallecimientoFamiliar.
     *
     * @return bool|null
     */
    public function getP1220FallecimientoFamiliar()
    {
        return $this->p1220FallecimientoFamiliar;
    }

    /**
     * Set p1220Importancia.
     *
     * @param int|null $p1220Importancia
     *
     * @return Form3
     */
    public function setP1220Importancia($p1220Importancia = null)
    {
        $this->p1220Importancia = $p1220Importancia;

        return $this;
    }

    /**
     * Get p1220Importancia.
     *
     * @return int|null
     */
    public function getP1220Importancia()
    {
        return $this->p1220Importancia;
    }

    /**
     * Set p1221FaltaDinero.
     *
     * @param bool|null $p1221FaltaDinero
     *
     * @return Form3
     */
    public function setP1221FaltaDinero($p1221FaltaDinero = null)
    {
        $this->p1221FaltaDinero = $p1221FaltaDinero;

        return $this;
    }

    /**
     * Get p1221FaltaDinero.
     *
     * @return bool|null
     */
    public function getP1221FaltaDinero()
    {
        return $this->p1221FaltaDinero;
    }

    /**
     * Set p1221Importancia.
     *
     * @param int|null $p1221Importancia
     *
     * @return Form3
     */
    public function setP1221Importancia($p1221Importancia = null)
    {
        $this->p1221Importancia = $p1221Importancia;

        return $this;
    }

    /**
     * Get p1221Importancia.
     *
     * @return int|null
     */
    public function getP1221Importancia()
    {
        return $this->p1221Importancia;
    }

    /**
     * Set p1222Trabajo.
     *
     * @param bool|null $p1222Trabajo
     *
     * @return Form3
     */
    public function setP1222Trabajo($p1222Trabajo = null)
    {
        $this->p1222Trabajo = $p1222Trabajo;

        return $this;
    }

    /**
     * Get p1222Trabajo.
     *
     * @return bool|null
     */
    public function getP1222Trabajo()
    {
        return $this->p1222Trabajo;
    }

    /**
     * Set p1222Importancia.
     *
     * @param int|null $p1222Importancia
     *
     * @return Form3
     */
    public function setP1222Importancia($p1222Importancia = null)
    {
        $this->p1222Importancia = $p1222Importancia;

        return $this;
    }

    /**
     * Get p1222Importancia.
     *
     * @return int|null
     */
    public function getP1222Importancia()
    {
        return $this->p1222Importancia;
    }

    /**
     * Set p1223TrabajoPadres.
     *
     * @param bool|null $p1223TrabajoPadres
     *
     * @return Form3
     */
    public function setP1223TrabajoPadres($p1223TrabajoPadres = null)
    {
        $this->p1223TrabajoPadres = $p1223TrabajoPadres;

        return $this;
    }

    /**
     * Get p1223TrabajoPadres.
     *
     * @return bool|null
     */
    public function getP1223TrabajoPadres()
    {
        return $this->p1223TrabajoPadres;
    }

    /**
     * Set p1223Importancia.
     *
     * @param int|null $p1223Importancia
     *
     * @return Form3
     */
    public function setP1223Importancia($p1223Importancia = null)
    {
        $this->p1223Importancia = $p1223Importancia;

        return $this;
    }

    /**
     * Get p1223Importancia.
     *
     * @return int|null
     */
    public function getP1223Importancia()
    {
        return $this->p1223Importancia;
    }

    /**
     * Set p1224Pandillas.
     *
     * @param bool|null $p1224Pandillas
     *
     * @return Form3
     */
    public function setP1224Pandillas($p1224Pandillas = null)
    {
        $this->p1224Pandillas = $p1224Pandillas;

        return $this;
    }

    /**
     * Get p1224Pandillas.
     *
     * @return bool|null
     */
    public function getP1224Pandillas()
    {
        return $this->p1224Pandillas;
    }

    /**
     * Set p1224Importancia.
     *
     * @param int|null $p1224Importancia
     *
     * @return Form3
     */
    public function setP1224Importancia($p1224Importancia = null)
    {
        $this->p1224Importancia = $p1224Importancia;

        return $this;
    }

    /**
     * Get p1224Importancia.
     *
     * @return int|null
     */
    public function getP1224Importancia()
    {
        return $this->p1224Importancia;
    }

    /**
     * Set p1225Drogas.
     *
     * @param bool|null $p1225Drogas
     *
     * @return Form3
     */
    public function setP1225Drogas($p1225Drogas = null)
    {
        $this->p1225Drogas = $p1225Drogas;

        return $this;
    }

    /**
     * Get p1225Drogas.
     *
     * @return bool|null
     */
    public function getP1225Drogas()
    {
        return $this->p1225Drogas;
    }

    /**
     * Set p1225Importancia.
     *
     * @param int|null $p1225Importancia
     *
     * @return Form3
     */
    public function setP1225Importancia($p1225Importancia = null)
    {
        $this->p1225Importancia = $p1225Importancia;

        return $this;
    }

    /**
     * Get p1225Importancia.
     *
     * @return int|null
     */
    public function getP1225Importancia()
    {
        return $this->p1225Importancia;
    }

    /**
     * Set p1226Alcoholismo.
     *
     * @param bool|null $p1226Alcoholismo
     *
     * @return Form3
     */
    public function setP1226Alcoholismo($p1226Alcoholismo = null)
    {
        $this->p1226Alcoholismo = $p1226Alcoholismo;

        return $this;
    }

    /**
     * Get p1226Alcoholismo.
     *
     * @return bool|null
     */
    public function getP1226Alcoholismo()
    {
        return $this->p1226Alcoholismo;
    }

    /**
     * Set p1226Importancia.
     *
     * @param int|null $p1226Importancia
     *
     * @return Form3
     */
    public function setP1226Importancia($p1226Importancia = null)
    {
        $this->p1226Importancia = $p1226Importancia;

        return $this;
    }

    /**
     * Get p1226Importancia.
     *
     * @return int|null
     */
    public function getP1226Importancia()
    {
        return $this->p1226Importancia;
    }

    /**
     * Set p1227Otra.
     *
     * @param bool|null $p1227Otra
     *
     * @return Form3
     */
    public function setP1227Otra($p1227Otra = null)
    {
        $this->p1227Otra = $p1227Otra;

        return $this;
    }

    /**
     * Get p1227Otra.
     *
     * @return bool|null
     */
    public function getP1227Otra()
    {
        return $this->p1227Otra;
    }

    /**
     * Set p1227Importancia.
     *
     * @param int|null $p1227Importancia
     *
     * @return Form3
     */
    public function setP1227Importancia($p1227Importancia = null)
    {
        $this->p1227Importancia = $p1227Importancia;

        return $this;
    }

    /**
     * Get p1227Importancia.
     *
     * @return int|null
     */
    public function getP1227Importancia()
    {
        return $this->p1227Importancia;
    }

    /**
     * Set p1227Razon.
     *
     * @param string|null $p1227Razon
     *
     * @return Form3
     */
    public function setP1227Razon($p1227Razon = null)
    {
        $this->p1227Razon = $p1227Razon;

        return $this;
    }

    /**
     * Get p1227Razon.
     *
     * @return string|null
     */
    public function getP1227Razon()
    {
        return $this->p1227Razon;
    }

    /**
     * Set p131TrabajaOtros.
     *
     * @param bool|null $p131TrabajaOtros
     *
     * @return Form3
     */
    public function setP131TrabajaOtros($p131TrabajaOtros = null)
    {
        $this->p131TrabajaOtros = $p131TrabajaOtros;

        return $this;
    }

    /**
     * Get p131TrabajaOtros.
     *
     * @return bool|null
     */
    public function getP131TrabajaOtros()
    {
        return $this->p131TrabajaOtros;
    }

    /**
     * Set p132TrbajaPtopio.
     *
     * @param bool|null $p132TrbajaPtopio
     *
     * @return Form3
     */
    public function setP132TrbajaPtopio($p132TrbajaPtopio = null)
    {
        $this->p132TrbajaPtopio = $p132TrbajaPtopio;

        return $this;
    }

    /**
     * Get p132TrbajaPtopio.
     *
     * @return bool|null
     */
    public function getP132TrbajaPtopio()
    {
        return $this->p132TrbajaPtopio;
    }

    /**
     * Set p133Ayuda.
     *
     * @param bool|null $p133Ayuda
     *
     * @return Form3
     */
    public function setP133Ayuda($p133Ayuda = null)
    {
        $this->p133Ayuda = $p133Ayuda;

        return $this;
    }

    /**
     * Get p133Ayuda.
     *
     * @return bool|null
     */
    public function getP133Ayuda()
    {
        return $this->p133Ayuda;
    }

    /**
     * Set p134Alimentos.
     *
     * @param bool|null $p134Alimentos
     *
     * @return Form3
     */
    public function setP134Alimentos($p134Alimentos = null)
    {
        $this->p134Alimentos = $p134Alimentos;

        return $this;
    }

    /**
     * Get p134Alimentos.
     *
     * @return bool|null
     */
    public function getP134Alimentos()
    {
        return $this->p134Alimentos;
    }

    /**
     * Set p135Vende.
     *
     * @param bool|null $p135Vende
     *
     * @return Form3
     */
    public function setP135Vende($p135Vende = null)
    {
        $this->p135Vende = $p135Vende;

        return $this;
    }

    /**
     * Get p135Vende.
     *
     * @return bool|null
     */
    public function getP135Vende()
    {
        return $this->p135Vende;
    }

    /**
     * Set p136Lava.
     *
     * @param bool|null $p136Lava
     *
     * @return Form3
     */
    public function setP136Lava($p136Lava = null)
    {
        $this->p136Lava = $p136Lava;

        return $this;
    }

    /**
     * Get p136Lava.
     *
     * @return bool|null
     */
    public function getP136Lava()
    {
        return $this->p136Lava;
    }

    /**
     * Set p137Cuida.
     *
     * @param bool|null $p137Cuida
     *
     * @return Form3
     */
    public function setP137Cuida($p137Cuida = null)
    {
        $this->p137Cuida = $p137Cuida;

        return $this;
    }

    /**
     * Get p137Cuida.
     *
     * @return bool|null
     */
    public function getP137Cuida()
    {
        return $this->p137Cuida;
    }

    /**
     * Set p138Mineria.
     *
     * @param bool|null $p138Mineria
     *
     * @return Form3
     */
    public function setP138Mineria($p138Mineria = null)
    {
        $this->p138Mineria = $p138Mineria;

        return $this;
    }

    /**
     * Get p138Mineria.
     *
     * @return bool|null
     */
    public function getP138Mineria()
    {
        return $this->p138Mineria;
    }

    /**
     * Set p139Otro.
     *
     * @param bool|null $p139Otro
     *
     * @return Form3
     */
    public function setP139Otro($p139Otro = null)
    {
        $this->p139Otro = $p139Otro;

        return $this;
    }

    /**
     * Get p139Otro.
     *
     * @return bool|null
     */
    public function getP139Otro()
    {
        return $this->p139Otro;
    }

    /**
     * Set p139Razon.
     *
     * @param string|null $p139Razon
     *
     * @return Form3
     */
    public function setP139Razon($p139Razon = null)
    {
        $this->p139Razon = $p139Razon;

        return $this;
    }

    /**
     * Get p139Razon.
     *
     * @return string|null
     */
    public function getP139Razon()
    {
        return $this->p139Razon;
    }

    /**
     * Set p141Maniana.
     *
     * @param bool|null $p141Maniana
     *
     * @return Form3
     */
    public function setP141Maniana($p141Maniana = null)
    {
        $this->p141Maniana = $p141Maniana;

        return $this;
    }

    /**
     * Get p141Maniana.
     *
     * @return bool|null
     */
    public function getP141Maniana()
    {
        return $this->p141Maniana;
    }

    /**
     * Set p142Tarde.
     *
     * @param bool|null $p142Tarde
     *
     * @return Form3
     */
    public function setP142Tarde($p142Tarde = null)
    {
        $this->p142Tarde = $p142Tarde;

        return $this;
    }

    /**
     * Get p142Tarde.
     *
     * @return bool|null
     */
    public function getP142Tarde()
    {
        return $this->p142Tarde;
    }

    /**
     * Set p143Noche.
     *
     * @param bool|null $p143Noche
     *
     * @return Form3
     */
    public function setP143Noche($p143Noche = null)
    {
        $this->p143Noche = $p143Noche;

        return $this;
    }

    /**
     * Get p143Noche.
     *
     * @return bool|null
     */
    public function getP143Noche()
    {
        return $this->p143Noche;
    }

    /**
     * Set p151Trabaja.
     *
     * @param bool|null $p151Trabaja
     *
     * @return Form3
     */
    public function setP151Trabaja($p151Trabaja = null)
    {
        $this->p151Trabaja = $p151Trabaja;

        return $this;
    }

    /**
     * Get p151Trabaja.
     *
     * @return bool|null
     */
    public function getP151Trabaja()
    {
        return $this->p151Trabaja;
    }

    /**
     * Set p152Oferta.
     *
     * @param bool|null $p152Oferta
     *
     * @return Form3
     */
    public function setP152Oferta($p152Oferta = null)
    {
        $this->p152Oferta = $p152Oferta;

        return $this;
    }

    /**
     * Get p152Oferta.
     *
     * @return bool|null
     */
    public function getP152Oferta()
    {
        return $this->p152Oferta;
    }

    /**
     * Set p153Lejos.
     *
     * @param bool|null $p153Lejos
     *
     * @return Form3
     */
    public function setP153Lejos($p153Lejos = null)
    {
        $this->p153Lejos = $p153Lejos;

        return $this;
    }

    /**
     * Get p153Lejos.
     *
     * @return bool|null
     */
    public function getP153Lejos()
    {
        return $this->p153Lejos;
    }

    /**
     * Set p154LejosHogar.
     *
     * @param bool|null $p154LejosHogar
     *
     * @return Form3
     */
    public function setP154LejosHogar($p154LejosHogar = null)
    {
        $this->p154LejosHogar = $p154LejosHogar;

        return $this;
    }

    /**
     * Get p154LejosHogar.
     *
     * @return bool|null
     */
    public function getP154LejosHogar()
    {
        return $this->p154LejosHogar;
    }

    /**
     * Set p155LejosUe.
     *
     * @param bool|null $p155LejosUe
     *
     * @return Form3
     */
    public function setP155LejosUe($p155LejosUe = null)
    {
        $this->p155LejosUe = $p155LejosUe;

        return $this;
    }

    /**
     * Get p155LejosUe.
     *
     * @return bool|null
     */
    public function getP155LejosUe()
    {
        return $this->p155LejosUe;
    }

    /**
     * Set p156Cansado.
     *
     * @param bool|null $p156Cansado
     *
     * @return Form3
     */
    public function setP156Cansado($p156Cansado = null)
    {
        $this->p156Cansado = $p156Cansado;

        return $this;
    }

    /**
     * Get p156Cansado.
     *
     * @return bool|null
     */
    public function getP156Cansado()
    {
        return $this->p156Cansado;
    }

    /**
     * Set p157Ayudar.
     *
     * @param bool|null $p157Ayudar
     *
     * @return Form3
     */
    public function setP157Ayudar($p157Ayudar = null)
    {
        $this->p157Ayudar = $p157Ayudar;

        return $this;
    }

    /**
     * Get p157Ayudar.
     *
     * @return bool|null
     */
    public function getP157Ayudar()
    {
        return $this->p157Ayudar;
    }

    /**
     * Set p158Dinero.
     *
     * @param bool|null $p158Dinero
     *
     * @return Form3
     */
    public function setP158Dinero($p158Dinero = null)
    {
        $this->p158Dinero = $p158Dinero;

        return $this;
    }

    /**
     * Get p158Dinero.
     *
     * @return bool|null
     */
    public function getP158Dinero()
    {
        return $this->p158Dinero;
    }

    /**
     * Set p159Apoyo.
     *
     * @param bool|null $p159Apoyo
     *
     * @return Form3
     */
    public function setP159Apoyo($p159Apoyo = null)
    {
        $this->p159Apoyo = $p159Apoyo;

        return $this;
    }

    /**
     * Get p159Apoyo.
     *
     * @return bool|null
     */
    public function getP159Apoyo()
    {
        return $this->p159Apoyo;
    }

    /**
     * Set p1510Otro.
     *
     * @param bool|null $p1510Otro
     *
     * @return Form3
     */
    public function setP1510Otro($p1510Otro = null)
    {
        $this->p1510Otro = $p1510Otro;

        return $this;
    }

    /**
     * Get p1510Otro.
     *
     * @return bool|null
     */
    public function getP1510Otro()
    {
        return $this->p1510Otro;
    }

    /**
     * Set p15Razon.
     *
     * @param string|null $p15Razon
     *
     * @return Form3
     */
    public function setP15Razon($p15Razon = null)
    {
        $this->p15Razon = $p15Razon;

        return $this;
    }

    /**
     * Get p15Razon.
     *
     * @return string|null
     */
    public function getP15Razon()
    {
        return $this->p15Razon;
    }

    /**
     * Set p16Papas.
     *
     * @param string|null $p16Papas
     *
     * @return Form3
     */
    public function setP16Papas($p16Papas = null)
    {
        $this->p16Papas = $p16Papas;

        return $this;
    }

    /**
     * Get p16Papas.
     *
     * @return string|null
     */
    public function getP16Papas()
    {
        return $this->p16Papas;
    }

    /**
     * Set p17Vuelve2018.
     *
     * @param string|null $p17Vuelve2018
     *
     * @return Form3
     */
    public function setP17Vuelve2018($p17Vuelve2018 = null)
    {
        $this->p17Vuelve2018 = $p17Vuelve2018;

        return $this;
    }

    /**
     * Get p17Vuelve2018.
     *
     * @return string|null
     */
    public function getP17Vuelve2018()
    {
        return $this->p17Vuelve2018;
    }

    /**
     * Set p18Companeros.
     *
     * @param bool|null $p18Companeros
     *
     * @return Form3
     */
    public function setP18Companeros($p18Companeros = null)
    {
        $this->p18Companeros = $p18Companeros;

        return $this;
    }

    /**
     * Get p18Companeros.
     *
     * @return bool|null
     */
    public function getP18Companeros()
    {
        return $this->p18Companeros;
    }

    /**
     * Set p19Primera.
     *
     * @param string|null $p19Primera
     *
     * @return Form3
     */
    public function setP19Primera($p19Primera = null)
    {
        $this->p19Primera = $p19Primera;

        return $this;
    }

    /**
     * Get p19Primera.
     *
     * @return string|null
     */
    public function getP19Primera()
    {
        return $this->p19Primera;
    }

    /**
     * Set p19Segunda.
     *
     * @param string|null $p19Segunda
     *
     * @return Form3
     */
    public function setP19Segunda($p19Segunda = null)
    {
        $this->p19Segunda = $p19Segunda;

        return $this;
    }

    /**
     * Get p19Segunda.
     *
     * @return string|null
     */
    public function getP19Segunda()
    {
        return $this->p19Segunda;
    }

    /**
     * Set p19Tercera.
     *
     * @param string|null $p19Tercera
     *
     * @return Form3
     */
    public function setP19Tercera($p19Tercera = null)
    {
        $this->p19Tercera = $p19Tercera;

        return $this;
    }

    /**
     * Get p19Tercera.
     *
     * @return string|null
     */
    public function getP19Tercera()
    {
        return $this->p19Tercera;
    }

    /**
     * Set p19Cuarta.
     *
     * @param string|null $p19Cuarta
     *
     * @return Form3
     */
    public function setP19Cuarta($p19Cuarta = null)
    {
        $this->p19Cuarta = $p19Cuarta;

        return $this;
    }

    /**
     * Get p19Cuarta.
     *
     * @return string|null
     */
    public function getP19Cuarta()
    {
        return $this->p19Cuarta;
    }

    /**
     * Set p19Quinta.
     *
     * @param string|null $p19Quinta
     *
     * @return Form3
     */
    public function setP19Quinta($p19Quinta = null)
    {
        $this->p19Quinta = $p19Quinta;

        return $this;
    }

    /**
     * Get p19Quinta.
     *
     * @return string|null
     */
    public function getP19Quinta()
    {
        return $this->p19Quinta;
    }

    /**
     * Set p19Otra.
     *
     * @param string|null $p19Otra
     *
     * @return Form3
     */
    public function setP19Otra($p19Otra = null)
    {
        $this->p19Otra = $p19Otra;

        return $this;
    }

    /**
     * Get p19Otra.
     *
     * @return string|null
     */
    public function getP19Otra()
    {
        return $this->p19Otra;
    }

    /**
     * Set p20Nombre.
     *
     * @param string|null $p20Nombre
     *
     * @return Form3
     */
    public function setP20Nombre($p20Nombre = null)
    {
        $this->p20Nombre = $p20Nombre;

        return $this;
    }

    /**
     * Get p20Nombre.
     *
     * @return string|null
     */
    public function getP20Nombre()
    {
        return $this->p20Nombre;
    }

    /**
     * Set p20Cargo.
     *
     * @param string|null $p20Cargo
     *
     * @return Form3
     */
    public function setP20Cargo($p20Cargo = null)
    {
        $this->p20Cargo = $p20Cargo;

        return $this;
    }

    /**
     * Get p20Cargo.
     *
     * @return string|null
     */
    public function getP20Cargo()
    {
        return $this->p20Cargo;
    }
}
