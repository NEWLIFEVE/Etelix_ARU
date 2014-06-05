<?php  foreach ($rol as $value){?>
           <?php if ($value->id == $idrol)
               {echo "<div class='verde'>".$value->name_rol."</div><div style='display:none' id='rol'>".$value->id."</div>";}
               //else {echo $value->name_rol."<br>" ;}?>
<?php } ?>



<?php  //if ($model !=null){
//    
//    foreach ($model as $value)
//   {
//         echo   $value->idActionController->idAction->name."<br>";
//    }    
//}


?>


<?php foreach ($controllers as $value)
        echo "<a href='#' id='controllersByRoles'><div>".$value->name."</div><div style='display:none' id='controllers'>".$value->id."</div></a>";
   ?>


<div id="ActionByRoles"></div>
<div id="idrol" style="display: none;"><?php echo $idrol; ?></div>