<?php
// include_once("/Applications/MAMP/htdocs/proyecto-integrador-tt03/tecno-precios/autoload_fran.php");
// class dbmysql extends BaseDatos{


// public function guardarUsuario(Usuario $usuario){
//  $stmt = $this->conection->prepare("INSERT INTO usuarios value (default, :nombre,:email, :password)");


//  $stmt ->bindValue (":nombre", $usuario->getNombre());
//  $stmt ->bindValue (":email", $usuario->getEmail());
//  $stmt ->bindValue (":password", $usuario->getPassword());

//  $stmt-> execute();

// }


// public function buscarEmail($email){

//     $stmt = $this->conection->prepare("SELECT * FROM usuarios WHERE email = :email");

//     $stmt ->bindValue (":email", $email);
//     $stmt-> execute();



//     $consulta = $stmt->fetch(PDO::FETCH_ASSOC);
    

//     if($consulta==false){
//         return NULL;      
// } else{
//     $usuario = new Usuario ($consulta);

//     return $usuarios;
// }

// function existeElUsuario($email){
//     return $this->buscarEmail ($email) !==null;
// }

// }
// public function leer(){
// }
// public function actualizar(){
// }
// public function borrar(){
// }



// }