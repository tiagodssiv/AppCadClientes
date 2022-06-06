<?php

header('Content-type: application/json');

//ini_set('default_charset', 'utf-8');
require_once('dbConnection.php');

	$dados=array();
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
	
	$id=63;//$_POST['id'];	
	

   // $senha=md5($senha);
			
		
	
  //  $agora = new DateTime(); 
  //  $data  = $agora->format("Y/m/d H:i:s");  

    
    
  
	

	
	$sql=$con->prepare('DELETE FROM cliente WHERE id = ?');
    $res=$sql->execute(array($id));
    
	 
	if($res==0){
   // throw new Exception("Erro ao cadastrar !");
    $dados['result']='ERRO';
    echo json_encode($dados); 
   }else{
	 $dados['result']='OK';
	 
	  echo json_encode($dados); 
	   
   }   
   
 
     }else{
		 $dados['result']='ERRO';
		   echo json_encode($dados); 
	 }


?>