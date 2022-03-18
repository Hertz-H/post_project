<?php
include('DBClass.php');
$database="e-commerce";
$dsn="mysql:host=localhost;dbname=$database;charset=utf8mb4";
$username="root";
$password="";
$db_obj=new DatabaseClass($dsn,$username,$password);

$result=$db_obj->select('post as p',array('p.id ','p.title','p.text','p.active','p.cat_id','c.name as category'))->join('cat as c','inner','on p.cat_id = c.id')->orderby(array("id"=>"desc"))->query_build();
// if($result){
//   foreach ($result as $row)
//   echo $row->id."=>".$row->title ." ".$row->cat_id."=>".$row->category."<br>";
// }

?>


<head>
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<title>Document</title>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
<link rel='stylesheet' href='stylesheets/profile.css'>
<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css' integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>


</head>
<body>

<div class='dashboard_cont'>
<div class='container '>
    <!-- <div class='header_line'> -->
      <header class=''>
     
        <div class='navbar navbar-dark  '>
                    <div class='container nav_container '>
                        <span class='navbar-brand'>
                          <div class='user_img m-auto '>
                            <img  class=''src='/images/profile.jpg' alt=''>
                        </div>
                        </span>
                        <button class='navbar-toggler' data-bs-toggle='collapse' data-bs-target='#navbar-cont'>
                          <i class='fas fa-bars'>
                          </i>
                        </button>
                        <div class='navbar-collapse collapse ' id='navbar-cont' >
                            <ul class='navbar-nav '>
                                <li class='nav-item'><a href='' class='nav-link active colored'> <i class='fas fa-user'></i><span  > Personal Info</span> </a></li>
                                <li class='nav-item'><a href='' class='nav-link '> <i class='fas fa-user'></i><span  > Experince</span> </a></li>
                                <li class='nav-item'><a href='' class='nav-link'><i class='fas fa-user'></i><span  > Education</span></a></li>
                                <li class='nav-item'><a href='' class='nav-link'>  <i class='fas fa-user'></i><span  > Courses</span> </a></li>
                                <li class='nav-item'><a href='' class='nav-link'><i class='fas fa-user'></i><span  > skills</span> </a></li>
                                <li class='nav-item'><a href='' class='nav-link nav_icons'><i class='fas fa-user'></i><span  > log out</span> </a></li>
    
                            </ul>
                        </div>
                    </div>
                </div>    
        </header>
      
    <!-- </div> -->
    <div class='dashboard d-flex  ' style='gap:70px'>
        
        <div class='form-container  '>
            <div class='skills_info'>
                <h3 class='d-inline'> posts</h3> <a class='add add_skls 'href='add_post.php'> add</a> <a class='add add_skls 'href='../html/blog.php'> blog</a>
                            <div class='row g-2'>
                              
              
                           
                              <div class='col-12'>
                              <?php
                            
                                $index=0;
                                $status;
                                foreach ($result as $row){
                                 if($row->active==1){
                                   $status="active";
                                 }
                                 else{
                                  $status="unactive";
                                 }
                                  echo "
                                  <div class='card'>
                                  <div class='card-body'>
                                  
                                    <h5 class='card-title'><i  id='icon_cont'>".$row->title."</i> <span class='company_note'>". $row->category."</span> </h5>
                                    <h6 class='card-title'><i  id='icon_cont'>".$row->text."</i> </h6>
                                    
                                    <a href='controls.php?name=".$row->id."&&type=products&&action=delete' >".$status."</a>
                                    
                                   
                                  </div>
                              </div>
                            
                              
                             
                              ";
                               }
                             
                                ?>
                         
                            <?php
  
  
  ?>
                            
                            </div>
                            
                </div>
              </div>
          </div>
    </div>



 

</div>
</div>
</div>

</body>





