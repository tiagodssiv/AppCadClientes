<?php

header('Content-type: application/json');

ini_set('default_charset', 'utf-8');
require_once('dbConnection.php');
	
$list=array();
 $sqll="SELECT * FROM cliente ORDER BY id DESC";
$sqll=$con->prepare($sqll);
$sqll->execute();
	 while ($roww = $sqll->fetch(PDO::FETCH_ASSOC)) {
		 $list[]=array('id'=>$roww['id'],'nome'=>$roww['nome'],'email'=>$roww['email'],'telefone'=>$roww['telefone'],'cep'=>$roww['cep'],'logradouro'=>$roww['logradouro'],'numero'=>$roww['numero'],'bairro'=>$roww['bairro'],'cidade'=>$roww['cidade'],'estado'=>$roww['estado'],'data_cadastro'=>$roww['data_cadastro']);
		 
	 }
	echo json_encode($list);


 
	  
  
		
		
		
		
	
		
   
	

?>