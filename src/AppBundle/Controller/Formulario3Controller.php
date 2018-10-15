<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Form3;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class Formulario3Controller extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $estudiante = $em->getRepository('AppBundle:Form3')->findAll();

        return $this->render('formulario3/index.html.twig', array(
            'estudiantes' => $estudiante,
        ));
    }

    public function newAction(Request $request)
    {
        //dump($request);die;
        if ($request->isMethod('post')) {
            
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Form3')->createQueryBuilder('f')
                ->select('f')
                ->where('f.folioDep =' . $request->get('departamento'))
                ->andWhere('f.folioCodigoUe =' . $request->get('codigounidadeducativa'))
                ->andWhere('f.folioBoleta =' . $request->get('numeroboleta'))
                ->getQuery()
                ->getResult();
            //dump($entity);die;
            if(!$entity){
            /**
             * REGISTRO DEL FORMULARIO
             */
                $estudiante = new Form3();
                $estudiante->setfolioDep($request->get('departamento'));
                //dump($estudiante);die;
                $estudiante->setfolioCodigoUe($request->get('codigounidadeducativa'));
                $estudiante->setfolioBoleta($request->get('numeroboleta'));
                $estudiante->setp1Ue($request->get('p1unidadeducativa'));
                $estudiante->setp2Nombres($request->get('p2nombres'));
                $estudiante->setp3Paterno($request->get('p3paterno'));
                $estudiante->setp4Materno($request->get('p4materno'));
                $estudiante->setp5Sexo($request->get('p5sexo'));
                $estudiante->setp6Edad($request->get('p6edad'));
                $estudiante->setp7Inscrito2016($request->get('p7si'));
                $estudiante->setp8noUe($request->get('p8nomue'));
                $estudiante->setp9AnioEscolaridad2016($request->get('p9añoesc2016'));
                $estudiante->setp10AnioEscolaridad2018($request->get('p10añoesc2018'));
                $estudiante->setp11Rude($request->get('p11codrue'));
                $estudiante->setp121Enfermedad(($request->get('p121enfermedad_1'))?1:0);
                $estudiante->setp121Importancia($request->get('p121enfermedad'));
                $estudiante->setp122Accidente(($request->get('p122accidente_1'))?1:0);
                $estudiante->setp122Importancia($request->get('p122accidente'));
                $estudiante->setp123Discapacidad(($request->get('p123discapacidad_1'))?1:0);
                $estudiante->setp123Importancia($request->get('p123discapacidad'));
                $estudiante->setp124Edad(($request->get('p124sobreedad_1'))?1:0);
                $estudiante->setp124Importancia($request->get('p124sobreedad'));
                $estudiante->setp125Precocidad(($request->get('p125precosidad_1'))?1:0);
                $estudiante->setp125Importancia($request->get('p125precosidad'));
                $estudiante->setp126EmbarazoPaternidad(($request->get('p126embarazo_1'))?1:0);
                $estudiante->setp126Importancia($request->get('p126embarazo'));
                $estudiante->setp127FormoHogar(($request->get('p127hogar_1'))?1:0);
                $estudiante->setp127Importancia($request->get('p127hogar'));
                $estudiante->setp128Abandono2016(($request->get('p128abandono_1'))?1:0);
                $estudiante->setp128Importancia($request->get('p128abandono'));
                $estudiante->setp129Reprobacion2016(($request->get('p129reprobacion_1'))?1:0);
                $estudiante->setp129Importancia($request->get('p129reprobacion'));
                $estudiante->setp1210InscricioCea(($request->get('p1210centro_1'))?1:0);
                $estudiante->setp1210Importancia($request->get('p1210centro'));
                $estudiante->setp1211Bulling(($request->get('p12bull_1'))?1:0);
                $estudiante->setp1211Importancia($request->get('p12bull'));
                $estudiante->setp1212UnidadDistante(($request->get('p12distante_1'))?1:0);
                $estudiante->setp1212Importancia($request->get('p12distante'));
                $estudiante->setp1213UnidadNoOferta(($request->get('p12oferta_1'))?1:0);
                $estudiante->setp1213Importancia($request->get('p12oferta'));
                $estudiante->setp1214ResponsabilidadesHogar(($request->get('p141_1'))?1:0);
                $estudiante->setp1214Importancia($request->get('p141'));
                $estudiante->setp1215TrasladoFamilia(($request->get('p15tralado_1'))?1:0);
                $estudiante->setp1215Importancia($request->get('p15tralado'));
                $estudiante->setp1216FaltaApoyo(($request->get('p1416faltaapoyo_1'))?1:0);
                $estudiante->setp1216Importancia($request->get('p1416faltaapoyo'));
                $estudiante->setp1217NoViveHogarCompleto(($request->get('p1417novivehogarcompleto_1'))?1:0);
                $estudiante->setp1217Importancia($request->get('p1417novivehogarcompleto'));
                $estudiante->setp1218SeparacionHogar(($request->get('p1418separacionhogar_1'))?1:0);
                $estudiante->setp1218Importancia($request->get('p1418separacionhogar'));
                $estudiante->setp1219ViolenciaFamiliar(($request->get('setp1219Importancia'))?1:0);
                $estudiante->setp1219Importancia($request->get('p1419violenciafamiliar'));
                $estudiante->setp1220FallecimientoFamiliar(($request->get('p1420fallecimientofamiliar_1'))?1:0);
                $estudiante->setp1220Importancia($request->get('p1420fallecimientofamiliar'));
                $estudiante->setp1221FaltaDinero(($request->get('p1420ffueradelaunidad_1'))?1:0);
                $estudiante->setp1221Importancia($request->get('p1420ffueradelaunidad'));
                $estudiante->setp1222Trabajo(($request->get('p1422trabajodeloses_1'))?1:0);
                $estudiante->setp1222Importancia($request->get('p1422trabajodeloses'));
                $estudiante->setp1223TrabajoPadres(($request->get('pp1423trabajodepadres_1'))?1:0);
                $estudiante->setp1223Importancia($request->get('pp1423trabajodepadres'));
                $estudiante->setp1224Pandillas(($request->get('p1424pandillas_1'))?1:0);
                $estudiante->setp1224Importancia($request->get('p1424pandillas'));
                $estudiante->setp1225Drogas(($request->get('p1425drogas_1'))?1:0);
                $estudiante->setp1225Importancia($request->get('p1425drogas'));
                $estudiante->setp1226Alcoholismo(($request->get('p1426alcoholismo_1'))?1:0);
                $estudiante->setp1226Importancia($request->get('p1426alcoholismo'));
                $estudiante->setp1227Otra(($request->get('p1426otra_1'))?1:0);
                $estudiante->setp1227Importancia($request->get('p1426otra'));
                $estudiante->setp1227Razon($request->get('p1426otra_1_text'));
                $estudiante->setp131TrabajaOtros($request->get('p131')?1:0);
                $estudiante->setp132TrbajaPtopio($request->get('p132')?1:0);
                $estudiante->setp133Ayuda($request->get('p133')?1:0);
                $estudiante->setp134Alimentos($request->get('p134')?1:0);
                $estudiante->setp135Vende($request->get('p135')?1:0);
                $estudiante->setp136Lava($request->get('p136')?1:0);
                $estudiante->setp137Cuida($request->get('p137')?1:0);
                $estudiante->setp138Mineria($request->get('p138')?1:0);
                $estudiante->setp139Otro($request->get('p139')?1:0);
                $estudiante->setp139Razon($request->get('p1427razon_1'));
                $estudiante->setp141Maniana($request->get('p14manana')?1:0);
                $estudiante->setp142Tarde($request->get('p14tarde')?1:0);
                $estudiante->setp143Noche($request->get('p14noche')?1:0);
                $estudiante->setp151Trabaja($request->get('p151')?1:0);
                $estudiante->setp152Oferta($request->get('p152')?1:0);
                $estudiante->setp153Lejos($request->get('p153')?1:0);
                $estudiante->setp154LejosHogar($request->get('p154')?1:0);
                $estudiante->setp155LejosUe($request->get('p155')?1:0);
                $estudiante->setp156Cansado($request->get('p156')?1:0);
                $estudiante->setp157Ayudar($request->get('p157')?1:0);
                $estudiante->setp158Dinero($request->get('p158')?1:0);
                $estudiante->setp159Apoyo($request->get('p159')?1:0);
                $estudiante->setp1510Otro($request->get('p1510')?1:0);
                $estudiante->setp15Razon($request->get('p1427razon_1'));
                $estudiante->setp16Papas($request->get('p161'));
                $estudiante->setp17Vuelve2018($request->get('p171'));
                $estudiante->setp18Companeros($request->get('p18'));
                $estudiante->setp19Primera($request->get('p19primerarazon'));
                $estudiante->setp19Segunda($request->get('p19segundarazon'));
                $estudiante->setp19Tercera($request->get('p19tercerarazon'));
                $estudiante->setp19Cuarta($request->get('p19cuartarazon'));
                $estudiante->setp19Quinta($request->get('p19quintarazon'));
                $estudiante->setp19Otra($request->get('p19otra'));
                $estudiante->setp20Nombre($request->get('p20nombre'));
                $estudiante->setp20Cargo($request->get('p20cargo'));
                //dump($estudiante);die;
                $em->persist($estudiante);
                $em->flush();
                $request->getSession()
                ->getFlashBag()
                ->add('exito', 'Los datos se guardaron satisfactoriamente');
            }else{
                $request->getSession()
                ->getFlashBag()
                ->add('error', 'El número de folio ya existe');
            }
            return $this->redirectToRoute('formulario3_index');
        }

        return $this->render('formulario3/new.html.twig');
    }

    public function editarAction(Request $request, $id)
    {
        //dump($id);die;
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Form3')->find($id);

            //dump($entity);die;
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ProcesoTipo entity.');
            }else{
                return $this->render('formulario3/editar.html.twig',array('entity'=>$entity));          
            }
        
    }

    public function updateAction(Request $request)
    {
        //dump($request);die;
        if ($request->isMethod('post')) {
            
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Form3')->createQueryBuilder('f')
            ->select('f')
            ->where('f.folioDep =' . $request->get('departamento'))
            ->andWhere('f.folioCodigoUe =' . $request->get('codigounidadeducativa'))
            ->andWhere('f.folioBoleta =' . $request->get('numeroboleta'))
            ->getQuery()
            ->getResult();
            if (!$entity){
            /**
             * REGISTRO DEL FORMULARIO
             */
                $estudiante = $em->getRepository('AppBundle:Form3')->find($request->get('id'));
            //dump($entity);die;
                $estudiante->setfolioDep($request->get('departamento'));
                //dump($estudiante);die;
                $estudiante->setfolioCodigoUe($request->get('codigounidadeducativa'));
                $estudiante->setfolioBoleta($request->get('numeroboleta'));
                $estudiante->setp1Ue($request->get('p1unidadeducativa'));
                $estudiante->setp2Nombres($request->get('p2nombres'));
                $estudiante->setp3Paterno($request->get('p3paterno'));
                $estudiante->setp4Materno($request->get('p4materno'));
                $estudiante->setp5Sexo($request->get('p5sexo'));
                $estudiante->setp6Edad($request->get('p6edad'));
                $estudiante->setp7Inscrito2016($request->get('p7si'));
                $estudiante->setp8noUe($request->get('p8nomue'));
                $estudiante->setp9AnioEscolaridad2016($request->get('p9añoesc2016'));
                $estudiante->setp10AnioEscolaridad2018($request->get('p10añoesc2018'));
                $estudiante->setp11Rude($request->get('p11codrue'));
                $estudiante->setp121Enfermedad(($request->get('p121enfermedad_1'))?1:0);
                $estudiante->setp121Importancia($request->get('p121enfermedad'));
                $estudiante->setp122Accidente(($request->get('p122accidente_1'))?1:0);
                $estudiante->setp122Importancia($request->get('p122accidente'));
                $estudiante->setp123Discapacidad(($request->get('p123discapacidad_1'))?1:0);
                $estudiante->setp123Importancia($request->get('p123discapacidad'));
                $estudiante->setp124Edad(($request->get('p124sobreedad_1'))?1:0);
                $estudiante->setp124Importancia($request->get('p124sobreedad'));
                $estudiante->setp125Precocidad(($request->get('p125precosidad_1'))?1:0);
                $estudiante->setp125Importancia($request->get('p125precosidad'));
                $estudiante->setp126EmbarazoPaternidad(($request->get('p126embarazo_1'))?1:0);
                $estudiante->setp126Importancia($request->get('p126embarazo'));
                $estudiante->setp127FormoHogar(($request->get('p127hogar_1'))?1:0);
                $estudiante->setp127Importancia($request->get('p127hogar'));
                $estudiante->setp128Abandono2016(($request->get('p128abandono_1'))?1:0);
                $estudiante->setp128Importancia($request->get('p128abandono'));
                $estudiante->setp129Reprobacion2016(($request->get('p129reprobacion_1'))?1:0);
                $estudiante->setp129Importancia($request->get('p129reprobacion'));
                $estudiante->setp1210InscricioCea(($request->get('p1210centro_1'))?1:0);
                $estudiante->setp1210Importancia($request->get('p1210centro'));
                $estudiante->setp1211Bulling(($request->get('p12bull_1'))?1:0);
                $estudiante->setp1211Importancia($request->get('p12bull'));
                $estudiante->setp1212UnidadDistante(($request->get('p12distante_1'))?1:0);
                $estudiante->setp1212Importancia($request->get('p12distante'));
                $estudiante->setp1213UnidadNoOferta(($request->get('p12oferta_1'))?1:0);
                $estudiante->setp1213Importancia($request->get('p12oferta'));
                $estudiante->setp1214ResponsabilidadesHogar(($request->get('p141_1'))?1:0);
                $estudiante->setp1214Importancia($request->get('p141'));
                $estudiante->setp1215TrasladoFamilia(($request->get('p15tralado_1'))?1:0);
                $estudiante->setp1215Importancia($request->get('p15tralado'));
                $estudiante->setp1216FaltaApoyo(($request->get('p1416faltaapoyo_1'))?1:0);
                $estudiante->setp1216Importancia($request->get('p1416faltaapoyo'));
                $estudiante->setp1217NoViveHogarCompleto(($request->get('p1417novivehogarcompleto_1'))?1:0);
                $estudiante->setp1217Importancia($request->get('p1417novivehogarcompleto'));
                $estudiante->setp1218SeparacionHogar(($request->get('p1418separacionhogar_1'))?1:0);
                $estudiante->setp1218Importancia($request->get('p1418separacionhogar'));
                $estudiante->setp1219ViolenciaFamiliar(($request->get('setp1219Importancia'))?1:0);
                $estudiante->setp1219Importancia($request->get('p1419violenciafamiliar'));
                $estudiante->setp1220FallecimientoFamiliar(($request->get('p1420fallecimientofamiliar_1'))?1:0);
                $estudiante->setp1220Importancia($request->get('p1420fallecimientofamiliar'));
                $estudiante->setp1221FaltaDinero(($request->get('p1420ffueradelaunidad_1'))?1:0);
                $estudiante->setp1221Importancia($request->get('p1420ffueradelaunidad'));
                $estudiante->setp1222Trabajo(($request->get('p1422trabajodeloses_1'))?1:0);
                $estudiante->setp1222Importancia($request->get('p1422trabajodeloses'));
                $estudiante->setp1223TrabajoPadres(($request->get('pp1423trabajodepadres_1'))?1:0);
                $estudiante->setp1223Importancia($request->get('pp1423trabajodepadres'));
                $estudiante->setp1224Pandillas(($request->get('p1424pandillas_1'))?1:0);
                $estudiante->setp1224Importancia($request->get('p1424pandillas'));
                $estudiante->setp1225Drogas(($request->get('p1425drogas_1'))?1:0);
                $estudiante->setp1225Importancia($request->get('p1425drogas'));
                $estudiante->setp1226Alcoholismo(($request->get('p1426alcoholismo_1'))?1:0);
                $estudiante->setp1226Importancia($request->get('p1426alcoholismo'));
                $estudiante->setp1227Otra(($request->get('p1426otra_1'))?1:0);
                $estudiante->setp1227Importancia($request->get('p1426otra'));
                $estudiante->setp1227Razon($request->get('p1426otra_1_text'));
                $estudiante->setp131TrabajaOtros($request->get('p131')?1:0);
                $estudiante->setp132TrbajaPtopio($request->get('p132')?1:0);
                $estudiante->setp133Ayuda($request->get('p133')?1:0);
                $estudiante->setp134Alimentos($request->get('p134')?1:0);
                $estudiante->setp135Vende($request->get('p135')?1:0);
                $estudiante->setp136Lava($request->get('p136')?1:0);
                $estudiante->setp137Cuida($request->get('p137')?1:0);
                $estudiante->setp138Mineria($request->get('p138')?1:0);
                $estudiante->setp139Otro($request->get('p139')?1:0);
                $estudiante->setp139Razon($request->get('p1427razon_1'));
                $estudiante->setp141Maniana($request->get('p14manana')?1:0);
                $estudiante->setp142Tarde($request->get('p14tarde')?1:0);
                $estudiante->setp143Noche($request->get('p14noche')?1:0);
                $estudiante->setp151Trabaja($request->get('p151')?1:0);
                $estudiante->setp152Oferta($request->get('p152')?1:0);
                $estudiante->setp153Lejos($request->get('p153')?1:0);
                $estudiante->setp154LejosHogar($request->get('p154')?1:0);
                $estudiante->setp155LejosUe($request->get('p155')?1:0);
                $estudiante->setp156Cansado($request->get('p156')?1:0);
                $estudiante->setp157Ayudar($request->get('p157')?1:0);
                $estudiante->setp158Dinero($request->get('p158')?1:0);
                $estudiante->setp159Apoyo($request->get('p159')?1:0);
                $estudiante->setp1510Otro($request->get('p1510')?1:0);
                $estudiante->setp15Razon($request->get('p1427razon_1'));
                $estudiante->setp16Papas($request->get('p161'));
                $estudiante->setp17Vuelve2018($request->get('p171'));
                $estudiante->setp18Companeros($request->get('p18'));
                $estudiante->setp19Primera($request->get('p19primerarazon'));
                $estudiante->setp19Segunda($request->get('p19segundarazon'));
                $estudiante->setp19Tercera($request->get('p19tercerarazon'));
                $estudiante->setp19Cuarta($request->get('p19cuartarazon'));
                $estudiante->setp19Quinta($request->get('p19quintarazon'));
                $estudiante->setp19Otra($request->get('p19otra'));
                $estudiante->setp20Nombre($request->get('p20nombre'));
                $estudiante->setp20Cargo($request->get('p20cargo'));
                //dump($estudiante);die;
                $em->flush();
                $request->getSession()
                ->getFlashBag()
                ->add('exito', 'Los datos se modificaron satisfactoriamente');
                //return $this->redirectToRoute('formulario3_index');
            }else{
                $request->getSession()
                ->getFlashBag()
                ->add('error', 'El número de folio ya existe');
            }
        }

        return $this->redirectToRoute('formulario3_index');
    }

    public function eliminarAction(Request $request, $id)
    {
        //dump($id);die;
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Form3')->find($id);
            //dump($fp);die;
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ProcesoTipo entity.');
            }else{
                $em->remove($entity);
                $em->flush();
                $mensaje = 'Los datos se eliminaron con éxito';
                $request->getSession()
                    ->getFlashBag()
                    ->add('exito', $mensaje);           
            }
        return $this->redirect($this->generateUrl('formulario3_index'));
    }

}
