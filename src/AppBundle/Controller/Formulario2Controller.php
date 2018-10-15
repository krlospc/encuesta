<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Form2Docente;
use AppBundle\Entity\Form2Estudiante;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class Formulario2Controller extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $docentes = $em->getRepository('AppBundle:Form2Docente')->findAll();

        return $this->render('formulario2/index.html.twig', array(
            'docentes' => $docentes,
        ));
    }

    public function newAction(Request $request)
    {
        if ($request->isMethod('post')) {
            
            $em = $this->getDoctrine()->getManager();
            /**
             * REGISTRO DEL DOCENTE
             */
            $docente = new Form2Docente();
            $docente->setDepartamento($request->get('departamento'));
            $docente->setCodigoUnidadEducativa($request->get('codigounidadeducativa'));
            $docente->setNumeroBoleta($request->get('numeroboleta'));
            $docente->setP1Unidadeducativa($request->get('p1unidadeducativa'));
            $docente->setP2Nombres($request->get('p2nombres'));
            $docente->setP3Paterno($request->get('p3paterno'));
            $docente->setP4Materno($request->get('p4materno'));
            $docente->setP5Sexo($request->get('p5sexo'));
            $docente->setP6Telefono($request->get('p6telefono'));
            $docente->setP7Primero(($request->get('p7primero'))?1:0);
            $docente->setP7Segundo(($request->get('p7segundo'))?1:0);
            $docente->setP7Tercero(($request->get('p7tercero'))?1:0);
            $docente->setP7Cuarto(($request->get('p7cuarto'))?1:0);
            $docente->setP7Quinto(($request->get('p7quinto'))?1:0);
            $docente->setP7Sexto(($request->get('p7sexto'))?1:0);
            $docente->setP8Primero(($request->get('p8primero'))?1:0);
            $docente->setP8Segundo(($request->get('p8segundo'))?1:0);
            $docente->setP8Tercero(($request->get('p8tercero'))?1:0);
            $docente->setP8Cuarto(($request->get('p8cuarto'))?1:0);
            $docente->setP8Quinto(($request->get('p8quinto'))?1:0);
            $docente->setP8Sexto(($request->get('p8sexto'))?1:0);
            $docente->setP9Materias($request->get('p9materias'));
            $docente->setP15MedidasAnteDisminucion($request->get('p15medidasantedisminucion'));
            $docente->setP16MedidasQueTomaria($request->get('p16medidasquetomaria'));
            $em->persist($docente);
            $em->flush();

            /**
             * REGISTRO DE LOS ESTUDIANTES
             */
            for ($i = 1; $i <= 4 ; $i++) {
                $estudiante = new Form2Estudiante();
                $estudiante->setP9Nombres($request->get('p9nombres_'.$i));
                $estudiante->setP10Paterno($request->get('p10paterno_'.$i));
                $estudiante->setP11Materno($request->get('p11materno_'.$i));
                $estudiante->setP12Sexo($request->get('p12sexo_'.$i));
                $estudiante->setP13AnioEscolaridad($request->get('p13anioescolaridad_'.$i));
                $estudiante->setP141Enfermedad(($request->get('p141enfermedad_'.$i))?1:0);
                $estudiante->setP141Importancia($request->get('p141importancia_'.$i));
                $estudiante->setP142Accidente(($request->get('p142accidente_'.$i))?1:0);
                $estudiante->setP142Importancia($request->get('p142importancia_'.$i));
                $estudiante->setP143Discapacidad(($request->get('p143discapacidad_'.$i))?1:0);
                $estudiante->setP143Importancia($request->get('p143importancia_'.$i));
                $estudiante->setP144Edad(($request->get('p144edad_'.$i))?1:0);
                $estudiante->setP144Importancia($request->get('p144importancia_'.$i));
                $estudiante->setP145Precocidad(($request->get('p145precocidad_'.$i))?1:0);
                $estudiante->setP145Importancia($request->get('p145importancia_'.$i));
                $estudiante->setP146EmbarazoPaternidad(($request->get('p146embarazopaternidad_'.$i))?1:0);
                $estudiante->setP146Importancia($request->get('p146importancia_'.$i));
                $estudiante->setP147FormoHogar(($request->get('p147formohogar_'.$i))?1:0);
                $estudiante->setP147Importancia($request->get('p147importancia_'.$i));
                $estudiante->setP148Abandono2016(($request->get('p148abandono2016_'.$i))?1:0);
                $estudiante->setP148Importancia($request->get('p148importancia_'.$i));
                $estudiante->setP149Reprobacion2016(($request->get('p149reprobacion2016_'.$i))?1:0);
                $estudiante->setP149Importancia($request->get('p149importancia_'.$i));
                $estudiante->setP1410InscricioCea(($request->get('p1410inscriciocea_'.$i))?1:0);
                $estudiante->setP1410Importancia($request->get('p1410importancia_'.$i));
                $estudiante->setP1411Bulling(($request->get('p1411bulling_'.$i))?1:0);
                $estudiante->setP1411Importancia($request->get('p1411importancia_'.$i));
                $estudiante->setP1412UnidadDistante(($request->get('p1412unidaddistante_'.$i))?1:0);
                $estudiante->setP1412Importancia($request->get('p1412importancia_'.$i));
                $estudiante->setP1413UnidadNoOferta(($request->get('p1413unidadnooferta_'.$i))?1:0);
                $estudiante->setP1413Importancia($request->get('p1413importancia_'.$i));
                $estudiante->setP1414ResponsabilidadesHogar(($request->get('p1414responsabilidadeshogar_'.$i))?1:0);
                $estudiante->setP1414Importancia($request->get('p1414importancia_'.$i));
                $estudiante->setP1415TrasladoFamilia(($request->get('p1415trasladofamilia_'.$i))?1:0);
                $estudiante->setP1415Importancia($request->get('p1415importancia_'.$i));
                $estudiante->setP1416FaltaApoyo(($request->get('p1416faltaapoyo_'.$i))?1:0);
                $estudiante->setP1416Importancia($request->get('p1416importancia_'.$i));
                $estudiante->setP1417NoViveHogarCompleto(($request->get('p1417novivehogarcompleto_'.$i))?1:0);
                $estudiante->setP1417Importancia($request->get('p1417importancia_'.$i));
                $estudiante->setP1418SeparacionHogar(($request->get('p1418separacionhogar_'.$i))?1:0);
                $estudiante->setP1418Importancia($request->get('p1418importancia_'.$i));
                $estudiante->setP1419ViolenciaFamiliar(($request->get('p1419violenciafamiliar_'.$i))?1:0);
                $estudiante->setP1419Importancia($request->get('p1419importancia_'.$i));
                $estudiante->setP1420FallecimientoFamiliar(($request->get('p1420fallecimientofamiliar_'.$i))?1:0);
                $estudiante->setP1420Importancia($request->get('p1420importancia_'.$i));
                $estudiante->setP1421FaltaDinero(($request->get('p1421faltadinero_'.$i))?1:0);
                $estudiante->setP1421Importancia($request->get('p1421importancia_'.$i));
                $estudiante->setP1422Trabajo(($request->get('p1422trabajo_'.$i))?1:0);
                $estudiante->setP1422Importancia($request->get('p1422importancia_'.$i));
                $estudiante->setP1423TrabajoPadres(($request->get('p1423trabajopadres_'.$i))?1:0);
                $estudiante->setP1423Importancia($request->get('p1423importancia_'.$i));
                $estudiante->setP1424Pandillas(($request->get('p1424pandillas_'.$i))?1:0);
                $estudiante->setP1424Importancia($request->get('p1424importancia_'.$i));
                $estudiante->setP1425Drogas(($request->get('p1425drogas_'.$i))?1:0);
                $estudiante->setP1425Importancia($request->get('p1425importancia_'.$i));
                $estudiante->setP1426Alcoholismo(($request->get('p1426alcoholismo_'.$i))?1:0);
                $estudiante->setP1426Importancia($request->get('p1426importancia_'.$i));
                $estudiante->setP1427Otra(($request->get('p1427otra_'.$i))?1:0);
                $estudiante->setP1427Importancia($request->get('p1427importancia_'.$i));
                $estudiante->setP1427Razon($request->get('p1427razon_'.$i));
                $estudiante->setCodigoRude($request->get('codigorude_'.$i));
                $estudiante->setForm2Docente($docente);
                $em->persist($estudiante);
                $em->flush();
            }

            return $this->redirectToRoute('formulario2_index');
            
        }

        return $this->render('formulario2/new.html.twig');
    }
    public function editAction(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $docentes = $em->getRepository('AppBundle:Form2Docente')->findOneBy(array('id' => $id));
        $estudiantes = $em->getRepository('AppBundle:Form2Estudiante')->findBy(array('form2Docente' => $id));
        return $this->render('formulario2/edit.html.twig', array(
            'docentes' => $docentes,
            'estudiantes' => $estudiantes,
        ));
    }

    public function updateAction(Request $request)
    {
        $id = $request->get('id');
        if ($request->isMethod('post')) {

            $em = $this->getDoctrine()->getManager();
            /**
             * REGISTRO DEL DOCENTE
             */
            $docente = $em->getRepository('AppBundle:Form2Docente')->findOneBy(array('id' => $id));
            $docente->setDepartamento($request->get('departamento'));
            $docente->setCodigoUnidadEducativa($request->get('codigounidadeducativa'));
            $docente->setNumeroBoleta($request->get('numeroboleta'));
            $docente->setP1Unidadeducativa($request->get('p1unidadeducativa'));
            $docente->setP2Nombres($request->get('p2nombres'));
            $docente->setP3Paterno($request->get('p3paterno'));
            $docente->setP4Materno($request->get('p4materno'));
            $docente->setP5Sexo($request->get('p5sexo'));
            $docente->setP6Telefono($request->get('p6telefono'));
            $docente->setP7Primero(($request->get('p7primero'))?1:0);
            $docente->setP7Segundo(($request->get('p7segundo'))?1:0);
            $docente->setP7Tercero(($request->get('p7tercero'))?1:0);
            $docente->setP7Cuarto(($request->get('p7cuarto'))?1:0);
            $docente->setP7Quinto(($request->get('p7quinto'))?1:0);
            $docente->setP7Sexto(($request->get('p7sexto'))?1:0);
            $docente->setP8Primero(($request->get('p8primero'))?1:0);
            $docente->setP8Segundo(($request->get('p8segundo'))?1:0);
            $docente->setP8Tercero(($request->get('p8tercero'))?1:0);
            $docente->setP8Cuarto(($request->get('p8cuarto'))?1:0);
            $docente->setP8Quinto(($request->get('p8quinto'))?1:0);
            $docente->setP8Sexto(($request->get('p8sexto'))?1:0);
            $docente->setP9Materias($request->get('p9materias'));
            $docente->setP15MedidasAnteDisminucion($request->get('p15medidasantedisminucion'));
            $docente->setP16MedidasQueTomaria($request->get('p16medidasquetomaria'));
            $em->persist($docente);
            $em->flush();

            /**
             * REGISTRO DE LOS ESTUDIANTES
             */
            $estudiante = $em->getRepository('AppBundle:Form2Estudiante')->findBy(array('form2Docente' => $id));

            for ($i = 1; $i <= 4 ; $i++) {
                $est=$i-1;

                $estudiante[$est]->setP9Nombres($request->get('p9nombres_'.$i));
                $estudiante[$est]->setP10Paterno($request->get('p10paterno_'.$i));
                $estudiante[$est]->setP11Materno($request->get('p11materno_'.$i));
                $estudiante[$est]->setP12Sexo($request->get('p12sexo_'.$i));
                $estudiante[$est]->setP13AnioEscolaridad($request->get('p13anioescolaridad_'.$i));
                $estudiante[$est]->setP141Enfermedad(($request->get('p141enfermedad_'.$i))?1:0);
                $estudiante[$est]->setP141Importancia($request->get('p141importancia_'.$i));
                $estudiante[$est]->setP142Accidente(($request->get('p142accidente_'.$i))?1:0);
                $estudiante[$est]->setP142Importancia($request->get('p142importancia_'.$i));
                $estudiante[$est]->setP143Discapacidad(($request->get('p143discapacidad_'.$i))?1:0);
                $estudiante[$est]->setP143Importancia($request->get('p143importancia_'.$i));
                $estudiante[$est]->setP144Edad(($request->get('p144edad_'.$i))?1:0);
                $estudiante[$est]->setP144Importancia($request->get('p144importancia_'.$i));
                $estudiante[$est]->setP145Precocidad(($request->get('p145precocidad_'.$i))?1:0);
                $estudiante[$est]->setP145Importancia($request->get('p145importancia_'.$i));
                $estudiante[$est]->setP146EmbarazoPaternidad(($request->get('p146embarazopaternidad_'.$i))?1:0);
                $estudiante[$est]->setP146Importancia($request->get('p146importancia_'.$i));
                $estudiante[$est]->setP147FormoHogar(($request->get('p147formohogar_'.$i))?1:0);
                $estudiante[$est]->setP147Importancia($request->get('p147importancia_'.$i));
                $estudiante[$est]->setP148Abandono2016(($request->get('p148abandono2016_'.$i))?1:0);
                $estudiante[$est]->setP148Importancia($request->get('p148importancia_'.$i));
                $estudiante[$est]->setP149Reprobacion2016(($request->get('p149reprobacion2016_'.$i))?1:0);
                $estudiante[$est]->setP149Importancia($request->get('p149importancia_'.$i));
                $estudiante[$est]->setP1410InscricioCea(($request->get('p1410inscriciocea_'.$i))?1:0);
                $estudiante[$est]->setP1410Importancia($request->get('p1410importancia_'.$i));
                $estudiante[$est]->setP1411Bulling(($request->get('p1411bulling_'.$i))?1:0);
                $estudiante[$est]->setP1411Importancia($request->get('p1411importancia_'.$i));
                $estudiante[$est]->setP1412UnidadDistante(($request->get('p1412unidaddistante_'.$i))?1:0);
                $estudiante[$est]->setP1412Importancia($request->get('p1412importancia_'.$i));
                $estudiante[$est]->setP1413UnidadNoOferta(($request->get('p1413unidadnooferta_'.$i))?1:0);
                $estudiante[$est]->setP1413Importancia($request->get('p1413importancia_'.$i));
                $estudiante[$est]->setP1414ResponsabilidadesHogar(($request->get('p1414responsabilidadeshogar_'.$i))?1:0);
                $estudiante[$est]->setP1414Importancia($request->get('p1414importancia_'.$i));
                $estudiante[$est]->setP1415TrasladoFamilia(($request->get('p1415trasladofamilia_'.$i))?1:0);
                $estudiante[$est]->setP1415Importancia($request->get('p1415importancia_'.$i));
                $estudiante[$est]->setP1416FaltaApoyo(($request->get('p1416faltaapoyo_'.$i))?1:0);
                $estudiante[$est]->setP1416Importancia($request->get('p1416importancia_'.$i));
                $estudiante[$est]->setP1417NoViveHogarCompleto(($request->get('p1417novivehogarcompleto_'.$i))?1:0);
                $estudiante[$est]->setP1417Importancia($request->get('p1417importancia_'.$i));
                $estudiante[$est]->setP1418SeparacionHogar(($request->get('p1418separacionhogar_'.$i))?1:0);
                $estudiante[$est]->setP1418Importancia($request->get('p1418importancia_'.$i));
                $estudiante[$est]->setP1419ViolenciaFamiliar(($request->get('p1419violenciafamiliar_'.$i))?1:0);
                $estudiante[$est]->setP1419Importancia($request->get('p1419importancia_'.$i));
                $estudiante[$est]->setP1420FallecimientoFamiliar(($request->get('p1420fallecimientofamiliar_'.$i))?1:0);
                $estudiante[$est]->setP1420Importancia($request->get('p1420importancia_'.$i));
                $estudiante[$est]->setP1421FaltaDinero(($request->get('p1421faltadinero_'.$i))?1:0);
                $estudiante[$est]->setP1421Importancia($request->get('p1421importancia_'.$i));
                $estudiante[$est]->setP1422Trabajo(($request->get('p1422trabajo_'.$i))?1:0);
                $estudiante[$est]->setP1422Importancia($request->get('p1422importancia_'.$i));
                $estudiante[$est]->setP1423TrabajoPadres(($request->get('p1423trabajopadres_'.$i))?1:0);
                $estudiante[$est]->setP1423Importancia($request->get('p1423importancia_'.$i));
                $estudiante[$est]->setP1424Pandillas(($request->get('p1424pandillas_'.$i))?1:0);
                $estudiante[$est]->setP1424Importancia($request->get('p1424importancia_'.$i));
                $estudiante[$est]->setP1425Drogas(($request->get('p1425drogas_'.$i))?1:0);
                $estudiante[$est]->setP1425Importancia($request->get('p1425importancia_'.$i));
                $estudiante[$est]->setP1426Alcoholismo(($request->get('p1426alcoholismo_'.$i))?1:0);
                $estudiante[$est]->setP1426Importancia($request->get('p1426importancia_'.$i));
                $estudiante[$est]->setP1427Otra(($request->get('p1427otra_'.$i))?1:0);
                $estudiante[$est]->setP1427Importancia($request->get('p1427importancia_'.$i));
                $estudiante[$est]->setP1427Razon($request->get('p1427razon_'.$i));
                $estudiante[$est]->setCodigoRude($request->get('codigorude_'.$i));
                $estudiante[$est]->setForm2Docente($docente);
                $em->persist($estudiante[$est]);
                $em->flush();
            }

            return $this->redirectToRoute('formulario2_index');

        }

        return $this->render('formulario2/new.html.twig');
    }

    public function deleteAction(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $docentes = $em->getRepository('AppBundle:Form2Docente')->findOneBy(array('id' => $id));
        $estudiantes = $em->getRepository('AppBundle:Form2Estudiante')->findBy(array('form2Docente' => $id));


        $em->getConnection()->beginTransaction();
        for ($i = 0; $i < 4 ; $i++) {
            $em->remove($estudiantes[$i]);
            $em->flush();
        }

        $em->remove($docentes);
        $em->flush();


        $em->getConnection()->commit();

        $docentes = $em->getRepository('AppBundle:Form2Docente')->findAll();

        return $this->render('formulario2/index.html.twig', array(
            'docentes' => $docentes,
        ));
    }


}
