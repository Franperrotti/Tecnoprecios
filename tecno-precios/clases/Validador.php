<?php

class Validador{
    public function validacionUsuario($usuario){
        $errores=array();
        $nombre = trim($usuario->getNombre());
        
        if(isset($nombre)){
            if(!preg_match("/^[a-zA-Z0-9]*$/", $nombre)){
                $errores["nombre"]= "Caracteres invalidos";
            }
            else if(empty($nombre)){
            $errores["nombre"]= "Complete su nombre de usuario";
            }
        }

        $email = trim($usuario->getEmail());
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores["email"]="Email invalido";
        }

        $password= trim($usuario->getPassword());
        if(isset($repassword)){
            $repassword = trim($usuario->getRepassword());
        }
    
        if(empty($password)){
            $errores["password"]= "Complete la contraseña";
        }elseif (strlen($password)<6) {
            $errores["password"]="La contraseña debe tener como mínimo 6 caracteres";
        }
        if(isset($repassword)){
            if ($password != $repassword) {
            $errores["repassword"]="Las contraseñas no coinciden";
            }
        }
    
        if($usuario->getAvatar()!=null){
             if($_FILES["avatar"]["error"]!=0){
                  $errores["avatar"]="Error debe subir imagen";
            }else{
                $nombre = $_FILES["avatar"]["name"];
                 $ext = pathinfo($nombre,PATHINFO_EXTENSION);
                 if($ext != "png" && $ext != "jpg"){
                     $errores["avatar"]="Debe seleccionar archivo png ó jpg";
                 }
            }
    
         }

    return $errores;
    }

    public function validacionLogin($usuario){
    $errores=array();

    $email = trim($usuario->getEmail());
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errores["email"]="Email invalido";
    }
    $password= trim($usuario->getPassword());
   
    if(empty($password)){
        $errores["password"]= "Complete la contraseña";
    }elseif (strlen($password)<6) {
        $errores["password"]="La contraseña debe tener como mínimo 6 caracteres";
    }

    return $errores;
}
public function validacionOlvide($usuario){
    
    $errores=array();

    $email = trim($usuario->getEmail());
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errores["email"]="Email invalido";
    }
    $password= trim($usuario->getPassword());

    $repassword = trim($usuario->getRepassword());
    

    if(empty($password)){
        $errores["password"]= "ingrese su email";
    }elseif (strlen($password)<6) {
        $errores["password"]="La contraseña debe tener como mínimo 6 caracteres";
    }
    if(empty($repassword)){
        $errores["repassword"]= "reingrese la contraseña";
    }

    return $errores;
}


}



?>