<?php

namespace AppBundle\Entity;

/**
 * Form2Docente
 */
class Form2Docente
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $departamento;

    /**
     * @var string
     */
    private $codigoUnidadEducativa;

    /**
     * @var string|null
     */
    private $numeroBoleta;

    /**
     * @var string|null
     */
    private $p1Unidadeducativa;

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
     * @var string|null
     */
    private $p6Telefono;

    /**
     * @var bool|null
     */
    private $p7Primero;

    /**
     * @var bool|null
     */
    private $p7Segundo;

    /**
     * @var bool|null
     */
    private $p7Tercero;

    /**
     * @var bool|null
     */
    private $p7Cuarto;

    /**
     * @var bool|null
     */
    private $p7Quinto;

    /**
     * @var bool|null
     */
    private $p7Sexto;

    /**
     * @var bool|null
     */
    private $p8Primero;

    /**
     * @var bool|null
     */
    private $p8Segundo;

    /**
     * @var bool|null
     */
    private $p8Tercero;

    /**
     * @var bool|null
     */
    private $p8Cuarto;

    /**
     * @var bool|null
     */
    private $p8Quinto;

    /**
     * @var bool|null
     */
    private $p8Sexto;

    /**
     * @var string|null
     */
    private $p9Materias;

    /**
     * @var string|null
     */
    private $p15MedidasAnteDisminucion;

    /**
     * @var string|null
     */
    private $p16MedidasQueTomaria;


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
     * Set departamento.
     *
     * @param string|null $departamento
     *
     * @return Form2Docente
     */
    public function setDepartamento($departamento = null)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento.
     *
     * @return string|null
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set codigoUnidadEducativa.
     *
     * @param string $codigoUnidadEducativa
     *
     * @return Form2Docente
     */
    public function setCodigoUnidadEducativa($codigoUnidadEducativa)
    {
        $this->codigoUnidadEducativa = $codigoUnidadEducativa;

        return $this;
    }

    /**
     * Get codigoUnidadEducativa.
     *
     * @return string
     */
    public function getCodigoUnidadEducativa()
    {
        return $this->codigoUnidadEducativa;
    }

    /**
     * Set numeroBoleta.
     *
     * @param string|null $numeroBoleta
     *
     * @return Form2Docente
     */
    public function setNumeroBoleta($numeroBoleta = null)
    {
        $this->numeroBoleta = $numeroBoleta;

        return $this;
    }

    /**
     * Get numeroBoleta.
     *
     * @return string|null
     */
    public function getNumeroBoleta()
    {
        return $this->numeroBoleta;
    }

    /**
     * Set p1Unidadeducativa.
     *
     * @param string|null $p1Unidadeducativa
     *
     * @return Form2Docente
     */
    public function setP1Unidadeducativa($p1Unidadeducativa = null)
    {
        $this->p1Unidadeducativa = $p1Unidadeducativa;

        return $this;
    }

    /**
     * Get p1Unidadeducativa.
     *
     * @return string|null
     */
    public function getP1Unidadeducativa()
    {
        return $this->p1Unidadeducativa;
    }

    /**
     * Set p2Nombres.
     *
     * @param string|null $p2Nombres
     *
     * @return Form2Docente
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
     * @return Form2Docente
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
     * @return Form2Docente
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
     * @return Form2Docente
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
     * Set p6Telefono.
     *
     * @param string|null $p6Telefono
     *
     * @return Form2Docente
     */
    public function setP6Telefono($p6Telefono = null)
    {
        $this->p6Telefono = $p6Telefono;

        return $this;
    }

    /**
     * Get p6Telefono.
     *
     * @return string|null
     */
    public function getP6Telefono()
    {
        return $this->p6Telefono;
    }

    /**
     * Set p7Primero.
     *
     * @param bool|null $p7Primero
     *
     * @return Form2Docente
     */
    public function setP7Primero($p7Primero = null)
    {
        $this->p7Primero = $p7Primero;

        return $this;
    }

    /**
     * Get p7Primero.
     *
     * @return bool|null
     */
    public function getP7Primero()
    {
        return $this->p7Primero;
    }

    /**
     * Set p7Segundo.
     *
     * @param bool|null $p7Segundo
     *
     * @return Form2Docente
     */
    public function setP7Segundo($p7Segundo = null)
    {
        $this->p7Segundo = $p7Segundo;

        return $this;
    }

    /**
     * Get p7Segundo.
     *
     * @return bool|null
     */
    public function getP7Segundo()
    {
        return $this->p7Segundo;
    }

    /**
     * Set p7Tercero.
     *
     * @param bool|null $p7Tercero
     *
     * @return Form2Docente
     */
    public function setP7Tercero($p7Tercero = null)
    {
        $this->p7Tercero = $p7Tercero;

        return $this;
    }

    /**
     * Get p7Tercero.
     *
     * @return bool|null
     */
    public function getP7Tercero()
    {
        return $this->p7Tercero;
    }

    /**
     * Set p7Cuarto.
     *
     * @param bool|null $p7Cuarto
     *
     * @return Form2Docente
     */
    public function setP7Cuarto($p7Cuarto = null)
    {
        $this->p7Cuarto = $p7Cuarto;

        return $this;
    }

    /**
     * Get p7Cuarto.
     *
     * @return bool|null
     */
    public function getP7Cuarto()
    {
        return $this->p7Cuarto;
    }

    /**
     * Set p7Quinto.
     *
     * @param bool|null $p7Quinto
     *
     * @return Form2Docente
     */
    public function setP7Quinto($p7Quinto = null)
    {
        $this->p7Quinto = $p7Quinto;

        return $this;
    }

    /**
     * Get p7Quinto.
     *
     * @return bool|null
     */
    public function getP7Quinto()
    {
        return $this->p7Quinto;
    }

    /**
     * Set p7Sexto.
     *
     * @param bool|null $p7Sexto
     *
     * @return Form2Docente
     */
    public function setP7Sexto($p7Sexto = null)
    {
        $this->p7Sexto = $p7Sexto;

        return $this;
    }

    /**
     * Get p7Sexto.
     *
     * @return bool|null
     */
    public function getP7Sexto()
    {
        return $this->p7Sexto;
    }

    /**
     * Set p8Primero.
     *
     * @param bool|null $p8Primero
     *
     * @return Form2Docente
     */
    public function setP8Primero($p8Primero = null)
    {
        $this->p8Primero = $p8Primero;

        return $this;
    }

    /**
     * Get p8Primero.
     *
     * @return bool|null
     */
    public function getP8Primero()
    {
        return $this->p8Primero;
    }

    /**
     * Set p8Segundo.
     *
     * @param bool|null $p8Segundo
     *
     * @return Form2Docente
     */
    public function setP8Segundo($p8Segundo = null)
    {
        $this->p8Segundo = $p8Segundo;

        return $this;
    }

    /**
     * Get p8Segundo.
     *
     * @return bool|null
     */
    public function getP8Segundo()
    {
        return $this->p8Segundo;
    }

    /**
     * Set p8Tercero.
     *
     * @param bool|null $p8Tercero
     *
     * @return Form2Docente
     */
    public function setP8Tercero($p8Tercero = null)
    {
        $this->p8Tercero = $p8Tercero;

        return $this;
    }

    /**
     * Get p8Tercero.
     *
     * @return bool|null
     */
    public function getP8Tercero()
    {
        return $this->p8Tercero;
    }

    /**
     * Set p8Cuarto.
     *
     * @param bool|null $p8Cuarto
     *
     * @return Form2Docente
     */
    public function setP8Cuarto($p8Cuarto = null)
    {
        $this->p8Cuarto = $p8Cuarto;

        return $this;
    }

    /**
     * Get p8Cuarto.
     *
     * @return bool|null
     */
    public function getP8Cuarto()
    {
        return $this->p8Cuarto;
    }

    /**
     * Set p8Quinto.
     *
     * @param bool|null $p8Quinto
     *
     * @return Form2Docente
     */
    public function setP8Quinto($p8Quinto = null)
    {
        $this->p8Quinto = $p8Quinto;

        return $this;
    }

    /**
     * Get p8Quinto.
     *
     * @return bool|null
     */
    public function getP8Quinto()
    {
        return $this->p8Quinto;
    }

    /**
     * Set p8Sexto.
     *
     * @param bool|null $p8Sexto
     *
     * @return Form2Docente
     */
    public function setP8Sexto($p8Sexto = null)
    {
        $this->p8Sexto = $p8Sexto;

        return $this;
    }

    /**
     * Get p8Sexto.
     *
     * @return bool|null
     */
    public function getP8Sexto()
    {
        return $this->p8Sexto;
    }

    /**
     * Set p9Materias.
     *
     * @param string|null $p9Materias
     *
     * @return Form2Docente
     */
    public function setP9Materias($p9Materias = null)
    {
        $this->p9Materias = $p9Materias;

        return $this;
    }

    /**
     * Get p9Materias.
     *
     * @return string|null
     */
    public function getP9Materias()
    {
        return $this->p9Materias;
    }

    /**
     * Set p15MedidasAnteDisminucion.
     *
     * @param string|null $p15MedidasAnteDisminucion
     *
     * @return Form2Docente
     */
    public function setP15MedidasAnteDisminucion($p15MedidasAnteDisminucion = null)
    {
        $this->p15MedidasAnteDisminucion = $p15MedidasAnteDisminucion;

        return $this;
    }

    /**
     * Get p15MedidasAnteDisminucion.
     *
     * @return string|null
     */
    public function getP15MedidasAnteDisminucion()
    {
        return $this->p15MedidasAnteDisminucion;
    }

    /**
     * Set p16MedidasQueTomaria.
     *
     * @param string|null $p16MedidasQueTomaria
     *
     * @return Form2Docente
     */
    public function setP16MedidasQueTomaria($p16MedidasQueTomaria = null)
    {
        $this->p16MedidasQueTomaria = $p16MedidasQueTomaria;

        return $this;
    }

    /**
     * Get p16MedidasQueTomaria.
     *
     * @return string|null
     */
    public function getP16MedidasQueTomaria()
    {
        return $this->p16MedidasQueTomaria;
    }
}
