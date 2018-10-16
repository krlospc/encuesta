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

        $query = "select * from (
                    select dep, cod_unidad_educativa, nboleta, group_concat(id) as ids,  count(id) as cnt
                    from  formulario_uno_index
                    where dep <> 0 or cod_unidad_educativa <> 0 or nboleta <> 0 
                    group by dep, cod_unidad_educativa, nboleta
                    ) b where b.cnt > 1";
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $val_unique = $stmt->fetchAll();
        $idval = "--";
        if (count($val_unique) > 0){
            foreach ($val_unique as $a) {
                $idval = $idval.$a['ids'].",";
            }
        }

        return $this->render('FormUnoBundle:Default:index.html.twig', array('po' => $po, 'idval' => $idval));
    }

    public function newAction()
    {
        $em = $this->getDoctrine()->getManager();        
        $db = $em->getConnection();

        $query = 'SELECT * FROM formulario_uno_index a WHERE a.nombre = "" OR a.dep = "" OR a.cod_unidad_educativa = "" OR a.nboleta = ""';
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $po_fac = $stmt->fetchAll();

        $query = "select * from (
            select dep, cod_unidad_educativa, nboleta, group_concat(id) as ids,  count(id) as cnt
            from  formulario_uno_index
            where dep <> 0 or cod_unidad_educativa <> 0 or nboleta <> 0 
            group by dep, cod_unidad_educativa, nboleta
            ) b where b.cnt > 1";
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $val_unique = $stmt->fetchAll();
        
        //dump(count($po_fac));die;
        if ((count($po_fac) > 0) || (count($val_unique) > 0)){
            return $this->redirect($this->generateUrl('form_uno_homepage'));
        } else {
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

            $query = "INSERT INTO formulario_uno_index (dep, cod_unidad_educativa, nboleta, nombre, paterno, materno, unidad_educativa, sexo, telefono, cargo, p8, p9_1, p10, p12, p13, p9_2, p9_3, p9_4, p9_5, p9_6) ";
            $query = $query."VALUES ('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '')";          
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

            $query = "select * from  formulario_uno_index where id = ?";
            $stmt = $db->prepare($query);
            $params = array($id);
            $stmt->execute($params);
            $po_index = $stmt->fetchAll();

            $query = "select * from  formulario_uno_factores where formulario_uno_index_id = ?";
            $stmt = $db->prepare($query);
            $params = array($id);
            $stmt->execute($params);
            $po_fac = $stmt->fetchAll();

            return $this->render('FormUnoBundle:Default:new.html.twig', array('po_index' => $po_index, 'po_fac' => $po_fac,));
        }    
    }

    public function insertAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();        
        $db = $em->getConnection();
        //$folio = $_REQUEST['dep'];
        $cod_unidad_educativa = $_REQUEST['cod_unidad_educativa'];
        $nboleta = $_REQUEST['nboleta'];
        $dep = $_REQUEST['dep'];
        $nombre = $_REQUEST['nombre'];
        $paterno = $_REQUEST['paterno'];  
        $materno = $_REQUEST['materno'];
        $unidad_educativa = $_REQUEST['unidad_educativa'];
        $sexo = $_REQUEST['sexo'];
        $telefono = $_REQUEST['telefono'];
        $cargo = $_REQUEST['cargo'];
        $p8 = $_REQUEST['p8'];

        $p9_1 = "0";
        if (isset($_REQUEST['esc_1'])) {
            $p9_1 = "1";
        }
        $p9_2 = "0";
        if (isset($_REQUEST['esc_2'])) {
            $p9_2 = "1";
        }
        $p9_3 = "0";
        if (isset($_REQUEST['esc_3'])) {
            $p9_3 = "1";
        }
        $p9_4 = "0";
        if (isset($_REQUEST['esc_4'])) {
            $p9_4 = "1";
        }
        $p9_5 = "0";
        if (isset($_REQUEST['esc_5'])) {
            $p9_5 = "1";
        }
        $p9_6 = "0";
        if (isset($_REQUEST['esc_6'])) {
            $p9_6 = "1";
        }
        
        $p10 = $_REQUEST['p10'];
        $p12 = $_REQUEST['p12'];
        $p13 = $_REQUEST['p13'];
        //dump($p12);dump($p13);die;
        $id = $_REQUEST['id_principal'];

        //$query = "UPDATE formulario_uno_index SET nombre = '".$nombre."', paterno = '".$paterno."', materno = '".$materno."', unidad_educativa = '".$unidad_educativa."', telefono = '".$telefono."', p8 = '".$p8."', p9_1 = '".$p9_1."', p10 = '".$p10."', p12 = '".$p12."', p13 = '".$p13."', sexo = '".$sexo."', cargo = '".$cargo."', dep = '".$dep."', cod_unidad_educativa = '".$cod_unidad_educativa."', nboleta = '".$nboleta."', p9_2 = '".$p9_2."', p9_3 = '".$p9_3."', p9_4 = '".$p9_4."', p9_5 = '".$p9_5."', p9_6 = '".$p9_6."' where id = ".$id;
        $query = "UPDATE formulario_uno_index SET nombre = ?, paterno = ?, materno = ?, unidad_educativa = ?, telefono = ?, p8 = ?, p9_1 = ?, p10 = ?, p12 = ?, p13 = ?, sexo = ?, cargo = ?, dep = ?, cod_unidad_educativa = ?, nboleta = ?, p9_2 = ?, p9_3 = ?, p9_4 = ?, p9_5 = ?, p9_6 = ? where id = ?";
        $stmt = $db->prepare($query);
        $params = array($nombre, $paterno, $materno, $unidad_educativa, $telefono, $p8, $p9_1, $p10, $p12, $p13, $sexo, $cargo, $dep, $cod_unidad_educativa, $nboleta, $p9_2, $p9_3, $p9_4, $p9_5, $p9_6, $id);
        $stmt->execute($params); 

        for ($i = 1; $i <= 28; $i++) {
            $idfac = $_REQUEST['id_'.$i];

            $sel =  "";
            if(isset($_REQUEST['sel_'.$i])){
                $sel =  "1";
            } else {
                $sel =  "";
            }

            $orden =  "";
            if(isset($_REQUEST['orden_'.$i])){
                $orden =  $_REQUEST['orden_'.$i];
            } else {
                $orden =  "";
            }

            $porque =  "";
            if(isset($_REQUEST['porque_'.$i])){
                $porque =  $_REQUEST['porque_'.$i];
            } else {
                $porque =  "";
            }
            
            //$orden = $_REQUEST['orden_'.$i];  
            //$porque = $_REQUEST['porque_'.$i];

            //$query = "UPDATE formulario_uno_factores SET seleccion = '".$sel."', orden_importancia = '".$orden."', por_que = '".$porque."' where id = ".$idfac;            
            $query = "UPDATE formulario_uno_factores SET seleccion = ?, orden_importancia = ?, por_que = ? where id = ?";            
            $stmt = $db->prepare($query);
            $params = array($sel, $orden, $porque, $idfac);
            $stmt->execute($params);            
        }
        
        return $this->redirect($this->generateUrl('form_uno_homepage'));
    }

    public function updateAction($idfactor)
    {
        $em = $this->getDoctrine()->getManager();        
        $db = $em->getConnection();

        $query = "select * from  formulario_uno_index where id = ?";
        $stmt = $db->prepare($query);
        $params = array($idfactor);
        $stmt->execute($params);
        $po_index = $stmt->fetchAll();

        $query = "select * from  formulario_uno_factores where formulario_uno_index_id = ?";
        $stmt = $db->prepare($query);
        $params = array($idfactor);
        $stmt->execute($params);
        $po_fac = $stmt->fetchAll();

        $item = "";
        return $this->render('FormUnoBundle:Default:new.html.twig', array('po_index' => $po_index, 'po_fac' => $po_fac,));

    }  

    public function deleteAction($idfactor)
    {
        $em = $this->getDoctrine()->getManager();        
        $db = $em->getConnection();        
                
        $query = "DELETE FROM formulario_uno_factores WHERE formulario_uno_index_id = ?";
        $stmt = $db->prepare($query);
        $params = array($idfactor);
        $stmt->execute($params); 

        $query = "DELETE FROM formulario_uno_index WHERE id = ";
        $stmt = $db->prepare($query);
        $params = array($idfactor);
        $stmt->execute($params); 
        
        return $this->redirect($this->generateUrl('form_uno_homepage'));
    }
}
