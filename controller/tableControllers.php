<?php
include('settings.php');
if ($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['nbcol'])){
        if(is_numeric($_POST['nbcol'])){
            if($_POST['nbcol']>=1){
                $nbcol=$_POST['nbcol'];
            }else{
                $errors['nbcol']='Les nombre entré doit être plus grand ou égal à 1';
            }
        }else{
            $errors['nbcol']='La valeur entrée pour le nombre de colonnes';
        }
    }else{
        $errors['nbcol']='OOps, on dirait que vous essayer de tricher';
    }
    if(isset($_POST['nbrow'])){
        if(is_numeric($_POST['nbrow']))
    }