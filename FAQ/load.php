<?php 

if(isset($_GET["page"])){
 $page= $_GET["page"];
}

else{
 $page=1;
}

switch ($page){

 case "1":
 require ("General.php");
 break;

 case "2":
 require ("Payments.php");
 break;

 case "3":
 require ("Deployment.php");
 break;

 case "4":
 require ("Maintenance.php");
 break;

 case "5":
    require ("Training.php");
    break;
}
?>