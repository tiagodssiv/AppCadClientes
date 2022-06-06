<?php
include_once('dbConnection.php');

header('Content-type: application/json');

ini_set('default_charset', 'utf-8');


$alterar="alterar";
	$dados;
		$email=$_POST['email'];	
	$nome=$_POST['nome'];	
	$telefone=$_POST['telefone'];
	
	$datacadastro=$_POST['datacadastro'];	
	$bairro=$_POST['bairro'];	
	$numero=$_POST['numero'];
	
	$cidade=$_POST['cidade'];	
	$estado=$_POST['estado'];	
	$logradouro=$_POST['logradouro'];
	
	$cep=$_POST['cep'];	
	
	$nome=ucfirst($nome);//primeira palavra em maiúscula
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    
    
    if(isset($_POST['alterar'])){
        $id=$_POST['id'];
        
    
    
    
    
        	


$sql=$con->prepare('UPDATE cliente SET nome = ? , email =? , telefone = ? , cep = ?	, logradouro = ? , numero = ? , bairro = ? , cidade = ? , estado = ? , data_cadastro = ? WHERE id = ? ');
    
    
 $sql->bindParam(1, $nome);
        $sql->bindParam(2, $email);
        $sql->bindParam(3, $telefone);
         $sql->bindParam(4, $cep);
        $sql->bindParam(5, $logradouro);
        $sql->bindParam(6, $numero);
        $sql->bindParam(7, $bairro);
         $sql->bindParam(8, $cidade);
        $sql->bindParam(9, $estado);
        
          $sql->bindParam(10, $datacadastro);
           $sql->bindParam(11, $id);
        $res=$sql->execute();
        
	
 //  $res=$sql->execute(array($nome,$email,$telefone,$cep,$logradouro,$numero,$bairro,$cidade,$estado,$datacadastro,$id));
	 
	if($res==0){
   // throw new Exception("Erro ao cadastrar !");
    $dados=array('result'=>'ERROR');
  
  
  
  
  
  }else{
       
     
 
	 $dados=array('result'=>'OK');
	 }   
   echo json_encode( $dados);
 
  
  
        
        
        
        
        
        
    }else{
	

			
		
	
  //  $agora = new DateTime(); 
  //  $data  = $agora->format("Y/m/d H:i:s");  
	
// , datacadastro 
// 


	
	


$sql=$con->prepare('INSERT INTO cliente (nome , email ,  telefone , cep , logradouro	, numero , bairro , cidade , estado , data_cadastro  ) values( :nome , :email , :telefone , :cep , :logradouro ,:numero , :bairro , :cidade  , :estado , :data_cadastro )');
    $sql->bindValue(':nome',$nome);
    $sql->bindValue(':email',$email);
    $sql->bindValue(':telefone',$telefone);
$sql->bindValue(':cep',$cep);
     	$sql->bindValue(':logradouro',$logradouro);
     	
     		  $sql->bindValue(':numero',$numero);
     		   $sql->bindValue(':bairro',$bairro);
     		 	$sql->bindValue(':cidade',$cidade);
     		  		$sql->bindValue(':estado',$estado);
     		  		 $sql->bindValue(':data_cadastro',$datacadastro);
	
   $res=$sql->execute();
	 
	if($res==0){
   // throw new Exception("Erro ao cadastrar !");
    $dados=array('result'=>'ERROR');
  
  
  
  
  
   }else{
       
       	$sql='SELECT * FROM cliente ORDER BY  id DESC  ';
		$sql=$con->prepare($sql);
		$res=$sql->execute();
        $res = $sql->fetch(PDO::FETCH_ASSOC);
		$id=$res['id'];
  
	 $dados=array('result'=>'OK','ID'=>$id);
 }   
   echo json_encode( $dados);
 
  
  
  
   } //else altera
   
    
    
    
}else{
	$dados=array('result'=>'ERROR');
		   echo json_encode($dados); 
	 }


?>