<?php

namespace AppBundle\Entity;

/**
 * Form2Estudiante
 */
class Form2Estudiante
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $p9Nombres;

    /**
     * @var string|null
     */
    private $p10Paterno;

    /**
     * @var string|null
     */
    private $p11Materno;

    /**
     * @var int|null
     */
    private $p12Sexo;

    /**
     * @var string|null
     */
    private $p13AnioEscolaridad;

    /**
     * @var bool|null
     */
    private $p141Enfermedad;

    /**
     * @var string|null
     */
    private $p141Importancia;

    /**
     * @var bool|null
     */
    private $p142Accidente;

    /**
     * @var string|null
     */
    private $p142Importancia;

    /**
     * @var bool|null
     */
    private $p143Discapacidad;

    /**
     * @var string|null
     */
    private $p143Importancia;

    /**
     * @var bool|null
     */
    private $p144Edad;

    /**
     * @var string|null
     */
    private $p144Importancia;

    /**
     * @var bool|null
     */
    private $p145Precocidad;

    /**
     * @var string|null
     */
    private $p145Importancia;

    /**
     * @var bool|null
     */
    private $p146EmbarazoPaternidad;

    /**
     * @var string|null
     */
    private $p146Importancia;

    /**
     * @var bool|null
     */
    private $p147FormoHogar;

    /**
     * @var string|null
     */
    private $p147Importancia;

    /**
     * @var bool|null
     */
    private $p148Abandono2016;

    /**
     * @var string|null
     */
    private $p148Importancia;

    /**
     * @var bool|null
     */
    private $p149Reprobacion2016;

    /**
     * @var string|null
     */
    private $p149Importancia;

    /**
     * @var bool|null
     */
    private $p1410InscricioCea;

    /**
     * @var string|null
     */
    private $p1410Importancia;

    /**
     * @var bool|null
     */
    private $p1411Bulling;

    /**
     * @var string|null
     */
    private $p1411Importancia;

    /**
     * @var bool|null
     */
    private $p1412UnidadDistante;

    /**
     * @var string|null
     */
    private $p1412Importancia;

    /**
     * @var bool|null
     */
    private $p1413UnidadNoOferta;

    /**
     * @var string|null
     */
    private $p1413Importancia;

    /**
     * @var bool|null
     */
    private $p1414ResponsabilidadesHogar;

    /**
     * @var string|null
     */
    private $p1414Importancia;

    /**
     * @var bool|null
     */
    private $p1415TrasladoFamilia;

    /**
     * @var string|null
     */
    private $p1415Importancia;

    /**
     * @var bool|null
     */
    private $p1416FaltaApoyo;

    /**
     * @var string|null
     */
    private $p1416Importancia;

    /**
     * @var bool|null
     */
    private $p1417NoViveHogarCompleto;

    /**
     * @var string|null
     */
    private $p1417Importancia;

    /**
     * @var bool|null
     */
    private $p1418SeparacionHogar;

    /**
     * @var string|null
     */
    private $p1418Importancia;

    /**
     * @var bool|null
     */
    private $p1419ViolenciaFamiliar;

    /**
     * @var string|null
     */
    private $p1419Importancia;

    /**
     * @var bool|null
     */
    private $p1420FallecimientoFamiliar;

    /**
     * @var string|null
     */
    private $p1420Importancia;

    /**
     * @var bool|null
     */
    private $p1421FaltaDinero;

    /**
     * @var string|null
     */
    private $p1421Importancia;

    /**
     * @var bool|null
     */
    private $p1422Trabajo;

    /**
     * @var string|null
     */
    private $p1422Importancia;

    /**
     * @var bool|null
     */
    private $p1423TrabajoPadres;

    /**
     * @var string|null
     */
    private $p1423Importancia;

    /**
     * @var bool|null
     */
    private $p1424Pandillas;

    /**
     * @var string|null
     */
    private $p1424Importancia;

    /**
     * @var bool|null
     */
    private $p1425Drogas;

    /**
     * @var string|null
     */
    private $p1425Importancia;

    /**
     * @var bool|null
     */
    private $p1426Alcoholismo;

    /**
     * @var string|null
     */
    private $p1426Importancia;

    /**
     * @var bool|null
     */
    private $p1427Otra;

    /**
     * @var string|null
     */
    private $p1427Importancia;

    /**
     * @var string|null
     */
    private $p1427Razon;

    /**
     * @var string|null
     */
    private $codigoRude;

    /**
     * @var \AppBundle\Entity\Form2Docente
     */
    private $form2Docente;


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
     * Set p9Nombres.
     *
     * @param string|null $p9Nombres
     *
     * @return Form2Estudiante
     */
    public function setP9Nombres($p9Nombres = null)
    {
        $this->p9Nombres = $p9Nombres;

        return $this;
    }

    /**
     * Get p9Nombres.
     *
     * @return string|null
     */
    public function getP9Nombres()
    {
        return $this->p9Nombres;
    }

    /**
     * Set p10Paterno.
     *
     * @param string|null $p10Paterno
     *
     * @return Form2Estudiante
     */
    public function setP10Paterno($p10Paterno = null)
    {
        $this->p10Paterno = $p10Paterno;

        return $this;
    }

    /**
     * Get p10Paterno.
     *
     * @return string|null
     */
    public function getP10Paterno()
    {
        return $this->p10Paterno;
    }

    /**
     * Set p11Materno.
     *
     * @param string|null $p11Materno
     *
     * @return Form2Estudiante
     */
    public function setP11Materno($p11Materno = null)
    {
        $this->p11Materno = $p11Materno;

        return $this;
    }

    /**
     * Get p11Materno.
     *
     * @return string|null
     */
    public function getP11Materno()
    {
        return $this->p11Materno;
    }

    /**
     * Set p12Sexo.
     *
     * @param int|null $p12Sexo
     *
     * @return Form2Estudiante
     */
    public function setP12Sexo($p12Sexo = null)
    {
        $this->p12Sexo = $p12Sexo;

        return $this;
    }

    /**
     * Get p12Sexo.
     *
     * @return int|null
     */
    public function getP12Sexo()
    {
        return $this->p12Sexo;
    }

    /**
     * Set p13AnioEscolaridad.
     *
     * @param string|null $p13AnioEscolaridad
     *
     * @return Form2Estudiante
     */
    public function setP13AnioEscolaridad($p13AnioEscolaridad = null)
    {
        $this->p13AnioEscolaridad = $p13AnioEscolaridad;

        return $this;
    }

    /**
     * Get p13AnioEscolaridad.
     *
     * @return string|null
     */
    public function getP13AnioEscolaridad()
    {
        return $this->p13AnioEscolaridad;
    }

    /**
     * Set p141Enfermedad.
     *
     * @param bool|null $p141Enfermedad
     *
     * @return Form2Estudiante
     */
    public function setP141Enfermedad($p141Enfermedad = null)
    {
        $this->p141Enfermedad = $p141Enfermedad;

        return $this;
    }

    /**
     * Get p141Enfermedad.
     *
     * @return bool|null
     */
    public function getP141Enfermedad()
    {
        return $this->p141Enfermedad;
    }

    /**
     * Set p141Importancia.
     *
     * @param string|null $p141Importancia
     *
     * @return Form2Estudiante
     */
    public function setP141Importancia($p141Importancia = null)
    {
        $this->p141Importancia = $p141Importancia;

        return $this;
    }

    /**
     * Get p141Importancia.
     *
     * @return string|null
     */
    public function getP141Importancia()
    {
        return $this->p141Importancia;
    }

    /**
     * Set p142Accidente.
     *
     * @param bool|null $p142Accidente
     *
     * @return Form2Estudiante
     */
    public function setP142Accidente($p142Accidente = null)
    {
        $this->p142Accidente = $p142Accidente;

        return $this;
    }

    /**
     * Get p142Accidente.
     *
     * @return bool|null
     */
    public function getP142Accidente()
    {
        return $this->p142Accidente;
    }

    /**
     * Set p142Importancia.
     *
     * @param string|null $p142Importancia
     *
     * @return Form2Estudiante
     */
    public function setP142Importancia($p142Importancia = null)
    {
        $this->p142Importancia = $p142Importancia;

        return $this;
    }

    /**
     * Get p142Importancia.
     *
     * @return string|null
     */
    public function getP142Importancia()
    {
        return $this->p142Importancia;
    }

    /**
     * Set p143Discapacidad.
     *
     * @param bool|null $p143Discapacidad
     *
     * @return Form2Estudiante
     */
    public function setP143Discapacidad($p143Discapacidad = null)
    {
        $this->p143Discapacidad = $p143Discapacidad;

        return $this;
    }

    /**
     * Get p143Discapacidad.
     *
     * @return bool|null
     */
    public function getP143Discapacidad()
    {
        return $this->p143Discapacidad;
    }

    /**
     * Set p143Importancia.
     *
     * @param string|null $p143Importancia
     *
     * @return Form2Estudiante
     */
    public function setP143Importancia($p143Importancia = null)
    {
        $this->p143Importancia = $p143Importancia;

        return $this;
    }

    /**
     * Get p143Importancia.
     *
     * @return string|null
     */
    public function getP143Importancia()
    {
        return $this->p143Importancia;
    }

    /**
     * Set p144Edad.
     *
     * @param bool|null $p144Edad
     *
     * @return Form2Estudiante
     */
    public function setP144Edad($p144Edad = null)
    {
        $this->p144Edad = $p144Edad;

        return $this;
    }

    /**
     * Get p144Edad.
     *
     * @return bool|null
     */
    public function getP144Edad()
    {
        return $this->p144Edad;
    }

    /**
     * Set p144Importancia.
     *
     * @param string|null $p144Importancia
     *
     * @return Form2Estudiante
     */
    public function setP144Importancia($p144Importancia = null)
    {
        $this->p144Importancia = $p144Importancia;

        return $this;
    }

    /**
     * Get p144Importancia.
     *
     * @return string|null
     */
    public function getP144Importancia()
    {
        return $this->p144Importancia;
    }

    /**
     * Set p145Precocidad.
     *
     * @param bool|null $p145Precocidad
     *
     * @return Form2Estudiante
     */
    public function setP145Precocidad($p145Precocidad = null)
    {
        $this->p145Precocidad = $p145Precocidad;

        return $this;
    }

    /**
     * Get p145Precocidad.
     *
     * @return bool|null
     */
    public function getP145Precocidad()
    {
        return $this->p145Precocidad;
    }

    /**
     * Set p145Importancia.
     *
     * @param string|null $p145Importancia
     *
     * @return Form2Estudiante
     */
    public function setP145Importancia($p145Importancia = null)
    {
        $this->p145Importancia = $p145Importancia;

        return $this;
    }

    /**
     * Get p145Importancia.
     *
     * @return string|null
     */
    public function getP145Importancia()
    {
        return $this->p145Importancia;
    }

    /**
     * Set p146EmbarazoPaternidad.
     *
     * @param bool|null $p146EmbarazoPaternidad
     *
     * @return Form2Estudiante
     */
    public function setP146EmbarazoPaternidad($p146EmbarazoPaternidad = null)
    {
        $this->p146EmbarazoPaternidad = $p146EmbarazoPaternidad;

        return $this;
    }

    /**
     * Get p146EmbarazoPaternidad.
     *
     * @return bool|null
     */
    public function getP146EmbarazoPaternidad()
    {
        return $this->p146EmbarazoPaternidad;
    }

    /**
     * Set p146Importancia.
     *
     * @param string|null $p146Importancia
     *
     * @return Form2Estudiante
     */
    public function setP146Importancia($p146Importancia = null)
    {
        $this->p146Importancia = $p146Importancia;

        return $this;
    }

    /**
     * Get p146Importancia.
     *
     * @return string|null
     */
    public function getP146Importancia()
    {
        return $this->p146Importancia;
    }

    /**
     * Set p147FormoHogar.
     *
     * @param bool|null $p147FormoHogar
     *
     * @return Form2Estudiante
     */
    public function setP147FormoHogar($p147FormoHogar = null)
    {
        $this->p147FormoHogar = $p147FormoHogar;

        return $this;
    }

    /**
     * Get p147FormoHogar.
     *
     * @return bool|null
     */
    public function getP147FormoHogar()
    {
        return $this->p147FormoHogar;
    }

    /**
     * Set p147Importancia.
     *
     * @param string|null $p147Importancia
     *
     * @return Form2Estudiante
     */
    public function setP147Importancia($p147Importancia = null)
    {
        $this->p147Importancia = $p147Importancia;

        return $this;
    }

    /**
     * Get p147Importancia.
     *
     * @return string|null
     */
    public function getP147Importancia()
    {
        return $this->p147Importancia;
    }

    /**
     * Set p148Abandono2016.
     *
     * @param bool|null $p148Abandono2016
     *
     * @return Form2Estudiante
     */
    public function setP148Abandono2016($p148Abandono2016 = null)
    {
        $this->p148Abandono2016 = $p148Abandono2016;

        return $this;
    }

    /**
     * Get p148Abandono2016.
     *
     * @return bool|null
     */
    public function getP148Abandono2016()
    {
        return $this->p148Abandono2016;
    }

    /**
     * Set p148Importancia.
     *
     * @param string|null $p148Importancia
     *
     * @return Form2Estudiante
     */
    public function setP148Importancia($p148Importancia = null)
    {
        $this->p148Importancia = $p148Importancia;

        return $this;
    }

    /**
     * Get p148Importancia.
     *
     * @return string|null
     */
    public function getP148Importancia()
    {
        return $this->p148Importancia;
    }

    /**
     * Set p149Reprobacion2016.
     *
     * @param bool|null $p149Reprobacion2016
     *
     * @return Form2Estudiante
     */
    public function setP149Reprobacion2016($p149Reprobacion2016 = null)
    {
        $this->p149Reprobacion2016 = $p149Reprobacion2016;

        return $this;
    }

    /**
     * Get p149Reprobacion2016.
     *
     * @return bool|null
     */
    public function getP149Reprobacion2016()
    {
        return $this->p149Reprobacion2016;
    }

    /**
     * Set p149Importancia.
     *
     * @param string|null $p149Importancia
     *
     * @return Form2Estudiante
     */
    public function setP149Importancia($p149Importancia = null)
    {
        $this->p149Importancia = $p149Importancia;

        return $this;
    }

    /**
     * Get p149Importancia.
     *
     * @return string|null
     */
    public function getP149Importancia()
    {
        return $this->p149Importancia;
    }

    /**
     * Set p1410InscricioCea.
     *
     * @param bool|null $p1410InscricioCea
     *
     * @return Form2Estudiante
     */
    public function setP1410InscricioCea($p1410InscricioCea = null)
    {
        $this->p1410InscricioCea = $p1410InscricioCea;

        return $this;
    }

    /**
     * Get p1410InscricioCea.
     *
     * @return bool|null
     */
    public function getP1410InscricioCea()
    {
        return $this->p1410InscricioCea;
    }

    /**
     * Set p1410Importancia.
     *
     * @param string|null $p1410Importancia
     *
     * @return Form2Estudiante
     */
    public function setP1410Importancia($p1410Importancia = null)
    {
        $this->p1410Importancia = $p1410Importancia;

        return $this;
    }

    /**
     * Get p1410Importancia.
     *
     * @return string|null
     */
    public function getP1410Importancia()
    {
        return $this->p1410Importancia;
    }

    /**
     * Set p1411Bulling.
     *
     * @param bool|null $p1411Bulling
     *
     * @return Form2Estudiante
     */
    public function setP1411Bulling($p1411Bulling = null)
    {
        $this->p1411Bulling = $p1411Bulling;

        return $this;
    }

    /**
     * Get p1411Bulling.
     *
     * @return bool|null
     */
    public function getP1411Bulling()
    {
        return $this->p1411Bulling;
    }

    /**
     * Set p1411Importancia.
     *
     * @param string|null $p1411Importancia
     *
     * @return Form2Estudiante
     */
    public function setP1411Importancia($p1411Importancia = null)
    {
        $this->p1411Importancia = $p1411Importancia;

        return $this;
    }

    /**
     * Get p1411Importancia.
     *
     * @return string|null
     */
    public function getP1411Importancia()
    {
        return $this->p1411Importancia;
    }

    /**
     * Set p1412UnidadDistante.
     *
     * @param bool|null $p1412UnidadDistante
     *
     * @return Form2Estudiante
     */
    public function setP1412UnidadDistante($p1412UnidadDistante = null)
    {
        $this->p1412UnidadDistante = $p1412UnidadDistante;

        return $this;
    }

    /**
     * Get p1412UnidadDistante.
     *
     * @return bool|null
     */
    public function getP1412UnidadDistante()
    {
        return $this->p1412UnidadDistante;
    }

    /**
     * Set p1412Importancia.
     *
     * @param string|null $p1412Importancia
     *
     * @return Form2Estudiante
     */
    public function setP1412Importancia($p1412Importancia = null)
    {
        $this->p1412Importancia = $p1412Importancia;

        return $this;
    }

    /**
     * Get p1412Importancia.
     *
     * @return string|null
     */
    public function getP1412Importancia()
    {
        return $this->p1412Importancia;
    }

    /**
     * Set p1413UnidadNoOferta.
     *
     * @param bool|null $p1413UnidadNoOferta
     *
     * @return Form2Estudiante
     */
    public function setP1413UnidadNoOferta($p1413UnidadNoOferta = null)
    {
        $this->p1413UnidadNoOferta = $p1413UnidadNoOferta;

        return $this;
    }

    /**
     * Get p1413UnidadNoOferta.
     *
     * @return bool|null
     */
    public function getP1413UnidadNoOferta()
    {
        return $this->p1413UnidadNoOferta;
    }

    /**
     * Set p1413Importancia.
     *
     * @param string|null $p1413Importancia
     *
     * @return Form2Estudiante
     */
    public function setP1413Importancia($p1413Importancia = null)
    {
        $this->p1413Importancia = $p1413Importancia;

        return $this;
    }

    /**
     * Get p1413Importancia.
     *
     * @return string|null
     */
    public function getP1413Importancia()
    {
        return $this->p1413Importancia;
    }

    /**
     * Set p1414ResponsabilidadesHogar.
     *
     * @param bool|null $p1414ResponsabilidadesHogar
     *
     * @return Form2Estudiante
     */
    public function setP1414ResponsabilidadesHogar($p1414ResponsabilidadesHogar = null)
    {
        $this->p1414ResponsabilidadesHogar = $p1414ResponsabilidadesHogar;

        return $this;
    }

    /**
     * Get p1414ResponsabilidadesHogar.
     *
     * @return bool|null
     */
    public function getP1414ResponsabilidadesHogar()
    {
        return $this->p1414ResponsabilidadesHogar;
    }

    /**
     * Set p1414Importancia.
     *
     * @param string|null $p1414Importancia
     *
     * @return Form2Estudiante
     */
    public function setP1414Importancia($p1414Importancia = null)
    {
        $this->p1414Importancia = $p1414Importancia;

        return $this;
    }

    /**
     * Get p1414Importancia.
     *
     * @return string|null
     */
    public function getP1414Importancia()
    {
        return $this->p1414Importancia;
    }

    /**
     * Set p1415TrasladoFamilia.
     *
     * @param bool|null $p1415TrasladoFamilia
     *
     * @return Form2Estudiante
     */
    public function setP1415TrasladoFamilia($p1415TrasladoFamilia = null)
    {
        $this->p1415TrasladoFamilia = $p1415TrasladoFamilia;

        return $this;
    }

    /**
     * Get p1415TrasladoFamilia.
     *
     * @return bool|null
     */
    public function getP1415TrasladoFamilia()
    {
        return $this->p1415TrasladoFamilia;
    }

    /**
     * Set p1415Importancia.
     *
     * @param string|null $p1415Importancia
     *
     * @return Form2Estudiante
     */
    public function setP1415Importancia($p1415Importancia = null)
    {
        $this->p1415Importancia = $p1415Importancia;

        return $this;
    }

    /**
     * Get p1415Importancia.
     *
     * @return string|null
     */
    public function getP1415Importancia()
    {
        return $this->p1415Importancia;
    }

    /**
     * Set p1416FaltaApoyo.
     *
     * @param bool|null $p1416FaltaApoyo
     *
     * @return Form2Estudiante
     */
    public function setP1416FaltaApoyo($p1416FaltaApoyo = null)
    {
        $this->p1416FaltaApoyo = $p1416FaltaApoyo;

        return $this;
    }

    /**
     * Get p1416FaltaApoyo.
     *
     * @return bool|null
     */
    public function getP1416FaltaApoyo()
    {
        return $this->p1416FaltaApoyo;
    }

    /**
     * Set p1416Importancia.
     *
     * @param string|null $p1416Importancia
     *
     * @return Form2Estudiante
     */
    public function setP1416Importancia($p1416Importancia = null)
    {
        $this->p1416Importancia = $p1416Importancia;

        return $this;
    }

    /**
     * Get p1416Importancia.
     *
     * @return string|null
     */
    public function getP1416Importancia()
    {
        return $this->p1416Importancia;
    }

    /**
     * Set p1417NoViveHogarCompleto.
     *
     * @param bool|null $p1417NoViveHogarCompleto
     *
     * @return Form2Estudiante
     */
    public function setP1417NoViveHogarCompleto($p1417NoViveHogarCompleto = null)
    {
        $this->p1417NoViveHogarCompleto = $p1417NoViveHogarCompleto;

        return $this;
    }

    /**
     * Get p1417NoViveHogarCompleto.
     *
     * @return bool|null
     */
    public function getP1417NoViveHogarCompleto()
    {
        return $this->p1417NoViveHogarCompleto;
    }

    /**
     * Set p1417Importancia.
     *
     * @param string|null $p1417Importancia
     *
     * @return Form2Estudiante
     */
    public function setP1417Importancia($p1417Importancia = null)
    {
        $this->p1417Importancia = $p1417Importancia;

        return $this;
    }

    /**
     * Get p1417Importancia.
     *
     * @return string|null
     */
    public function getP1417Importancia()
    {
        return $this->p1417Importancia;
    }

    /**
     * Set p1418SeparacionHogar.
     *
     * @param bool|null $p1418SeparacionHogar
     *
     * @return Form2Estudiante
     */
    public function setP1418SeparacionHogar($p1418SeparacionHogar = null)
    {
        $this->p1418SeparacionHogar = $p1418SeparacionHogar;

        return $this;
    }

    /**
     * Get p1418SeparacionHogar.
     *
     * @return bool|null
     */
    public function getP1418SeparacionHogar()
    {
        return $this->p1418SeparacionHogar;
    }

    /**
     * Set p1418Importancia.
     *
     * @param string|null $p1418Importancia
     *
     * @return Form2Estudiante
     */
    public function setP1418Importancia($p1418Importancia = null)
    {
        $this->p1418Importancia = $p1418Importancia;

        return $this;
    }

    /**
     * Get p1418Importancia.
     *
     * @return string|null
     */
    public function getP1418Importancia()
    {
        return $this->p1418Importancia;
    }

    /**
     * Set p1419ViolenciaFamiliar.
     *
     * @param bool|null $p1419ViolenciaFamiliar
     *
     * @return Form2Estudiante
     */
    public function setP1419ViolenciaFamiliar($p1419ViolenciaFamiliar = null)
    {
        $this->p1419ViolenciaFamiliar = $p1419ViolenciaFamiliar;

        return $this;
    }

    /**
     * Get p1419ViolenciaFamiliar.
     *
     * @return bool|null
     */
    public function getP1419ViolenciaFamiliar()
    {
        return $this->p1419ViolenciaFamiliar;
    }

    /**
     * Set p1419Importancia.
     *
     * @param string|null $p1419Importancia
     *
     * @return Form2Estudiante
     */
    public function setP1419Importancia($p1419Importancia = null)
    {
        $this->p1419Importancia = $p1419Importancia;

        return $this;
    }

    /**
     * Get p1419Importancia.
     *
     * @return string|null
     */
    public function getP1419Importancia()
    {
        return $this->p1419Importancia;
    }

    /**
     * Set p1420FallecimientoFamiliar.
     *
     * @param bool|null $p1420FallecimientoFamiliar
     *
     * @return Form2Estudiante
     */
    public function setP1420FallecimientoFamiliar($p1420FallecimientoFamiliar = null)
    {
        $this->p1420FallecimientoFamiliar = $p1420FallecimientoFamiliar;

        return $this;
    }

    /**
     * Get p1420FallecimientoFamiliar.
     *
     * @return bool|null
     */
    public function getP1420FallecimientoFamiliar()
    {
        return $this->p1420FallecimientoFamiliar;
    }

    /**
     * Set p1420Importancia.
     *
     * @param string|null $p1420Importancia
     *
     * @return Form2Estudiante
     */
    public function setP1420Importancia($p1420Importancia = null)
    {
        $this->p1420Importancia = $p1420Importancia;

        return $this;
    }

    /**
     * Get p1420Importancia.
     *
     * @return string|null
     */
    public function getP1420Importancia()
    {
        return $this->p1420Importancia;
    }

    /**
     * Set p1421FaltaDinero.
     *
     * @param bool|null $p1421FaltaDinero
     *
     * @return Form2Estudiante
     */
    public function setP1421FaltaDinero($p1421FaltaDinero = null)
    {
        $this->p1421FaltaDinero = $p1421FaltaDinero;

        return $this;
    }

    /**
     * Get p1421FaltaDinero.
     *
     * @return bool|null
     */
    public function getP1421FaltaDinero()
    {
        return $this->p1421FaltaDinero;
    }

    /**
     * Set p1421Importancia.
     *
     * @param string|null $p1421Importancia
     *
     * @return Form2Estudiante
     */
    public function setP1421Importancia($p1421Importancia = null)
    {
        $this->p1421Importancia = $p1421Importancia;

        return $this;
    }

    /**
     * Get p1421Importancia.
     *
     * @return string|null
     */
    public function getP1421Importancia()
    {
        return $this->p1421Importancia;
    }

    /**
     * Set p1422Trabajo.
     *
     * @param bool|null $p1422Trabajo
     *
     * @return Form2Estudiante
     */
    public function setP1422Trabajo($p1422Trabajo = null)
    {
        $this->p1422Trabajo = $p1422Trabajo;

        return $this;
    }

    /**
     * Get p1422Trabajo.
     *
     * @return bool|null
     */
    public function getP1422Trabajo()
    {
        return $this->p1422Trabajo;
    }

    /**
     * Set p1422Importancia.
     *
     * @param string|null $p1422Importancia
     *
     * @return Form2Estudiante
     */
    public function setP1422Importancia($p1422Importancia = null)
    {
        $this->p1422Importancia = $p1422Importancia;

        return $this;
    }

    /**
     * Get p1422Importancia.
     *
     * @return string|null
     */
    public function getP1422Importancia()
    {
        return $this->p1422Importancia;
    }

    /**
     * Set p1423TrabajoPadres.
     *
     * @param bool|null $p1423TrabajoPadres
     *
     * @return Form2Estudiante
     */
    public function setP1423TrabajoPadres($p1423TrabajoPadres = null)
    {
        $this->p1423TrabajoPadres = $p1423TrabajoPadres;

        return $this;
    }

    /**
     * Get p1423TrabajoPadres.
     *
     * @return bool|null
     */
    public function getP1423TrabajoPadres()
    {
        return $this->p1423TrabajoPadres;
    }

    /**
     * Set p1423Importancia.
     *
     * @param string|null $p1423Importancia
     *
     * @return Form2Estudiante
     */
    public function setP1423Importancia($p1423Importancia = null)
    {
        $this->p1423Importancia = $p1423Importancia;

        return $this;
    }

    /**
     * Get p1423Importancia.
     *
     * @return string|null
     */
    public function getP1423Importancia()
    {
        return $this->p1423Importancia;
    }

    /**
     * Set p1424Pandillas.
     *
     * @param bool|null $p1424Pandillas
     *
     * @return Form2Estudiante
     */
    public function setP1424Pandillas($p1424Pandillas = null)
    {
        $this->p1424Pandillas = $p1424Pandillas;

        return $this;
    }

    /**
     * Get p1424Pandillas.
     *
     * @return bool|null
     */
    public function getP1424Pandillas()
    {
        return $this->p1424Pandillas;
    }

    /**
     * Set p1424Importancia.
     *
     * @param string|null $p1424Importancia
     *
     * @return Form2Estudiante
     */
    public function setP1424Importancia($p1424Importancia = null)
    {
        $this->p1424Importancia = $p1424Importancia;

        return $this;
    }

    /**
     * Get p1424Importancia.
     *
     * @return string|null
     */
    public function getP1424Importancia()
    {
        return $this->p1424Importancia;
    }

    /**
     * Set p1425Drogas.
     *
     * @param bool|null $p1425Drogas
     *
     * @return Form2Estudiante
     */
    public function setP1425Drogas($p1425Drogas = null)
    {
        $this->p1425Drogas = $p1425Drogas;

        return $this;
    }

    /**
     * Get p1425Drogas.
     *
     * @return bool|null
     */
    public function getP1425Drogas()
    {
        return $this->p1425Drogas;
    }

    /**
     * Set p1425Importancia.
     *
     * @param string|null $p1425Importancia
     *
     * @return Form2Estudiante
     */
    public function setP1425Importancia($p1425Importancia = null)
    {
        $this->p1425Importancia = $p1425Importancia;

        return $this;
    }

    /**
     * Get p1425Importancia.
     *
     * @return string|null
     */
    public function getP1425Importancia()
    {
        return $this->p1425Importancia;
    }

    /**
     * Set p1426Alcoholismo.
     *
     * @param bool|null $p1426Alcoholismo
     *
     * @return Form2Estudiante
     */
    public function setP1426Alcoholismo($p1426Alcoholismo = null)
    {
        $this->p1426Alcoholismo = $p1426Alcoholismo;

        return $this;
    }

    /**
     * Get p1426Alcoholismo.
     *
     * @return bool|null
     */
    public function getP1426Alcoholismo()
    {
        return $this->p1426Alcoholismo;
    }

    /**
     * Set p1426Importancia.
     *
     * @param string|null $p1426Importancia
     *
     * @return Form2Estudiante
     */
    public function setP1426Importancia($p1426Importancia = null)
    {
        $this->p1426Importancia = $p1426Importancia;

        return $this;
    }

    /**
     * Get p1426Importancia.
     *
     * @return string|null
     */
    public function getP1426Importancia()
    {
        return $this->p1426Importancia;
    }

    /**
     * Set p1427Otra.
     *
     * @param bool|null $p1427Otra
     *
     * @return Form2Estudiante
     */
    public function setP1427Otra($p1427Otra = null)
    {
        $this->p1427Otra = $p1427Otra;

        return $this;
    }

    /**
     * Get p1427Otra.
     *
     * @return bool|null
     */
    public function getP1427Otra()
    {
        return $this->p1427Otra;
    }

    /**
     * Set p1427Importancia.
     *
     * @param string|null $p1427Importancia
     *
     * @return Form2Estudiante
     */
    public function setP1427Importancia($p1427Importancia = null)
    {
        $this->p1427Importancia = $p1427Importancia;

        return $this;
    }

    /**
     * Get p1427Importancia.
     *
     * @return string|null
     */
    public function getP1427Importancia()
    {
        return $this->p1427Importancia;
    }

    /**
     * Set p1427Razon.
     *
     * @param string|null $p1427Razon
     *
     * @return Form2Estudiante
     */
    public function setP1427Razon($p1427Razon = null)
    {
        $this->p1427Razon = $p1427Razon;

        return $this;
    }

    /**
     * Get p1427Razon.
     *
     * @return string|null
     */
    public function getP1427Razon()
    {
        return $this->p1427Razon;
    }

    /**
     * Set codigoRude.
     *
     * @param string|null $codigoRude
     *
     * @return Form2Estudiante
     */
    public function setCodigoRude($codigoRude = null)
    {
        $this->codigoRude = $codigoRude;

        return $this;
    }

    /**
     * Get codigoRude.
     *
     * @return string|null
     */
    public function getCodigoRude()
    {
        return $this->codigoRude;
    }

    /**
     * Set form2Docente.
     *
     * @param \AppBundle\Entity\Form2Docente|null $form2Docente
     *
     * @return Form2Estudiante
     */
    public function setForm2Docente(\AppBundle\Entity\Form2Docente $form2Docente = null)
    {
        $this->form2Docente = $form2Docente;

        return $this;
    }

    /**
     * Get form2Docente.
     *
     * @return \AppBundle\Entity\Form2Docente|null
     */
    public function getForm2Docente()
    {
        return $this->form2Docente;
    }
}
