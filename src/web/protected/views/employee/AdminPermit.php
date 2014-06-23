<?php  foreach ($rol as $value){?>
           <?php if ($value->id == $idrol)
               {echo "<div class='verde'><h2>".$value->name_rol."</h2></div><div style='display:none' id='rol'>".$value->id."</div>";}
               //else {echo $value->name_rol."<br>" ;}?>
<?php } ?>





<!--PARA LISTAR LOS CONTROLADORES CARGADOS EN LA BASE DE DATOS-->
<?php //foreach ($controllers as $value)
//        echo "<a href='#' id='controllersByRoles'><div>".$value->name."</div><div style='display:none' id='controllers'>".$value->id."</div></a>";
//   ?>






<?php
$declaredClasses = get_declared_classes();

foreach (glob(Yii::getPathOfAlias('application.controllers') . "/*Controller.php") as $key => $controller){
    
  $class = basename($controller, ".php");
    echo "<a href='#' id='controllersByRoles'><div id='controllers'>".$class."</div></a>";
   
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    


     $class="CityController";
  if (!in_array($class, $declaredClasses))
    Yii::import("application.controllers." . $class, true);
    
  
  $reflection = new ReflectionClass($class); 
  //var_dump($reflection);
  
    $methods = $reflection->getMethods();
    
   //var_dump($methods);
//    echo 'aaa '.$class[0];
    foreach($methods as $key2 => $method) {
        //var_dump($method->name);
        if (preg_match('/^action+\w{2,}/',$method->name)) {
         $array[$key2] = $method->name;
             //var_dump($method->class);
            // var_dump($method->name);
        }

    }


    //var_dump($array);
?>


<div id="ActionByRoles"></div>
<div id="idrol" style="display: none;"><?php echo $idrol; ?></div>

