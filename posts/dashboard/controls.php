<?php
// start_session();
include('DBClass.php');
$database="e-commerce";
$dsn="mysql:host=localhost;dbname=$database;charset=utf8mb4";
$username="root";
$password="";
$db_obj=new DatabaseClass($dsn,$username,$password);
// print_r($_POST);
// $email=$_POST['email'];
// $pass=$_POST['pass'];
// echo "email = " .$_POST['email']." and password = " .$_POST['pass'];
$result=$db_obj->select('user ',array('name ','email','password'))->where("email = '$email'" ," and", "password = '$pass'" )->query_build();
if($result){
  header("Location:posts.php");
}


  if($_GET["type"]=="post"){
    
    $insert_data = array(  
        'id'     =>    null,  
        'title' => $_POST['name'] ,
        'text'  => $_POST['description'],
        'cat_id'  => $_POST['category']
         
   );
   $affected_rows=$db_obj->insert("Post",$insert_data);
              if( $affected_rows>0){
                  header("Location:Posts.php");
              }
             else{
                 echo"can not added";
             }
        
        }
      
        
        
      
  


  ?>