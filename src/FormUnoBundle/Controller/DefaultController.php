<?php

namespace FormUnoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FormUnoBundle\Form\FormUnoType;
use \Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();        
        $db = $em->getConnection();
        $query = "select * from  formulario_uno_index";
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $po = $stmt->fetchAll();                
        return $this->render('FormUnoBundle:Default:index.html.twig', array('po' => $po));
    }

    public function newAction()
    {
        $em = $this->getDoctrine()->getManager();        
        $db = $em->getConnection();

        $factor_tipo_1 = "Dentro de la unidad educativa: factores atribuidos al estudiante";
        $factor_tipo_2 = "Dentro de la unidad educativa: factores atribuidos a la unidad educativa";
        $factor_tipo_3 = "Fuera de la unidad educativa: factores familiares";
        $factor_tipo_4 = "Fuera de la unidad educativa: factores economicos";
        $factor_tipo_5 = "Fuera de la unidad educativa: factores sociales";
        $factor_tipo_6 = "Otros factores";

        $array = [
            "1" => "Enfermedad",
            "2" => "Accidente",
            "3" => "Discapacidad",
            "4" => "Sobre edad",
            "5" => "Precocidad",
            "6" => "Embarazo/Paternidad",
            "7" => "El estudiante ya formo su propio hogar",
            "8" => "Abandono en la gestion 2016",
            "9" => "Reprobación en la gestion 2016",
            "10" => "Se inscribió a un Centro de Educación Alternativa (CEA)",
            "11" => "Bullying",
            "12" => "La Unidad educativa es distante",
            "13" => "La Unidad Educativa no oferta el turno requerido por algunos estudiantes",
            "14" => "Responsabilidades en el hogar:QUehaceres domésticos (cocinar, lavar, planchar),atención a niños, a ancianos, a personas enfermas o con discapacidad",
            "15" => "Traslado de la familia a otros: Departamentos,Provincias,Municipios,Barrios,Países",
            "16" => "Falta de apoyo de los familiares para la continuación de sus estudios",
            "17" => "No vive en un hogar nuclear completo (Su Padre y/o su Madre no viven con él)",
            "18" => "Separación de ls miembros del hogar (Padres, hermanos,parientes cercanos,etc)",
            "19" => "Violencia familiar",
            "20" => "Fallecimiento o accidente de algún familiar",
            "21" => "Falta de dinero",
            "22" => "Trabajo de los estudiantes",
            "23" => "Por trabajo de los padres",
            "24" => "Pandillas",
            "25" => "Drogas",
            "26" => "Alcoholismo",
            "27" => "Otra (especifique)",
            "28" => "Otra (especifique)"            
        ];

        $query = "INSERT INTO formulario_uno_index (folio, nombre, paterno, materno, unidad_educativa, sexo, telefono, cargo, p8, p9, p10, p12, p13) ";
        $query = $query."VALUES ('', '', '', '', '' ,'', '', '', '', '', '', '', '')";          
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);

        $id = $db->lastInsertId();
        
        for ($i = 1; $i <= 28; $i++) {

            $factor_tipo = "";
            if (($i >= 1) && ($i <= 10)){
                $factor_tipo = $factor_tipo_1;
            }
            if (($i >= 11) && ($i <= 13)){
                $factor_tipo = $factor_tipo_2;
            }
            if (($i >= 14) && ($i <= 20)){
                $factor_tipo = $factor_tipo_3;
            }
            if (($i >= 21) && ($i <= 23)){
                $factor_tipo = $factor_tipo_4;
            }
            if (($i >= 24) && ($i <= 26)){
                $factor_tipo = $factor_tipo_5;
            }
            if (($i >= 27) && ($i <= 28)){
                $factor_tipo = $factor_tipo_6;
            }

            $query = "INSERT INTO formulario_uno_factores (factor_tipo, factor, seleccion, orden_importancia, por_que, cod, formulario_uno_index_id) ";
            $query = $query."VALUES ('".$factor_tipo."', '".$array[$i]."', false, 0, '' ,'".$i."','".$id."')";            
            $stmt = $db->prepare($query);
            $params = array();
            $stmt->execute($params);            
        }

        $query = "select * from  formulario_uno_index where id = ".$id;
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $po_index = $stmt->fetchAll();

        $query = "select * from  formulario_uno_factores where formulario_uno_index_id = ".$id;
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $po_fac = $stmt->fetchAll();

        return $this->render('FormUnoBundle:Default:new.html.twig', array('po_index' => $po_index, 'po_fac' => $po_fac,));
    }

    public function insertAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();        
        $db = $em->getConnection();
        $folio = $_REQUEST['folio'];
        $nombre = $_REQUEST['nombre'];
        $paterno = $_REQUEST['paterno'];  
        $materno = $_REQUEST['materno'];
        $unidad_educativa = $_REQUEST['unidad_educativa'];
        
        $sexo = $_REQUEST['sexo'];
        $telefono = $_REQUEST['telefono'];
        $cargo = $_REQUEST['cargo'];
        $p8 = $_REQUEST['p8'];
        $p9 = $_REQUEST['p9'];
        $p10 = $_REQUEST['p10'];
        $p12 = $_REQUEST['p12'];
        $p13 = $_REQUEST['p13'];
        $id = $_REQUEST['id_principal'];

        $query = "UPDATE formulario_uno_index SET nombre = '".$nombre."', paterno = '".$paterno."', materno = '".$materno."', unidad_educativa = '".$unidad_educativa."', telefono = '".$telefono."', p8 = '".$p8."', p9 = '".$p9."', p10 = '".$p10."', p12 = '".$p12."', p13 = '".$p13."', sexo = '".$sexo."', cargo = '".$cargo."' where id = ".$id;
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params); 

        for ($i = 1; $i <= 28; $i++) {
            $idfac = $_REQUEST['id_'.$i];

            if(isset($_REQUEST['sel_'.$i])){
                $sel =  "1";
            } else {
                $sel =  "0";
            }
            
            $orden = $_REQUEST['orden_'.$i];  
            $porque = $_REQUEST['porque_'.$i];

            $query = "UPDATE formulario_uno_factores SET seleccion = '".$sel."', orden_importancia = '".$orden."', por_que = '".$porque."' where id = ".$idfac;            
            $stmt = $db->prepare($query);
            $params = array();
            $stmt->execute($params);            
        }
        
        
        $query = "select * from  formulario_uno_index";
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $po = $stmt->fetchAll();                
        return $this->render('FormUnoBundle:Default:index.html.twig', array('po' => $po));
    }

    public function updateAction($idfactor)
    {
        $em = $this->getDoctrine()->getManager();        
        $db = $em->getConnection();


        $query = "select * from  formulario_uno_index where id = ".$idfactor;
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $po_index = $stmt->fetchAll();

        $query = "select * from  formulario_uno_factores where formulario_uno_index_id = ".$idfactor;
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $po_fac = $stmt->fetchAll();

        $item = "";
        return $this->render('FormUnoBundle:Default:new.html.twig', array('po_index' => $po_index, 'po_fac' => $po_fac,));

    }  
}
