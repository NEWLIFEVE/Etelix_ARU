/**
 * Modulo encargado dela interaccion con servidor a traves de AJAX
 */
$ARU.AJAX=(function()
{
    /**
     * @param type
     * @param action
     * @param formulario
     */    
    function sendEvent(type, action, formulario)
    {
        $.ajax({
            type:type,
            url:action,
            data:formulario,
            success:function(data)
            {
                result=JSON.parse(data);
                id=result.event;
                $('div#tab'+id+' label').html(result.hour +" <span style='color:#B3B3B3'>("+result.date+")</span>");
            }
         });

    }
    
    
    function sendPass(type,action, formulario){
        
         $.ajax({
            type:type,
            url:action,
            data:formulario,
            success:function(data)
            {
               console.log(data);
                result=JSON.parse(data);
                $ARU.UI.successPass(result);
            }
         });
    }
    
    
    
    /**
     * funcion para buscar los detalles de los empleados
     * 
     */
    
    function searchEmployee(type,action, formulario)
    {
        $.ajax({
            type:type,
            url:action,
            data:formulario,
            success:function(data)
            {
                result=JSON.parse(data); 
                console.log(result);
                $ARU.UI.viewEmployeeModal(result);
            }
        });
    }
    
    
    function createRol(type,action, formulario)
    {
        
        $.ajax({
            type:type,
            url:action,
            data:formulario,
            success:function(data)
            {
                result=JSON.parse(data);
                $ARU.UI.rolCreate(result);
            }
        });
    }
    
    
  
    
    /**
     * 
     * @param {type} type
     * @param {type} action
     * @param {type} formulario
     * @returns {undefined}
     */
     function idRol(type,action, formulario)
    {
        
     $.ajax({
            type:type,
            url:action,
            data:formulario,
          
            success:function(data)
            { 
               //console.log(data[0]);
                result= JSON.parse(data);
                $ARU.UI.viewActionController(result); 
            
            }
            });      
    }
    
      /**
     * funcion para crear la posicion de empleado en la organizacion
     * @param {type} type
     * @param {type} action
     * @param {type} formulario
     * @returns {undefined}
     */
    
    function crearPosicion(type,action, formulario)
    {
        
        $.ajax({
            type:type,
            url:action,
            data:formulario,
            success:function(data)
            {
                result=JSON.parse(data);
                $ARU.UI.createPosition(result);
            }
        });
    }
    function createPositionCode(type,action, formulario)
    {
        
        $.ajax({
            type:type,
            url:action,
            data:formulario,
            success:function(data)
            {
                result=JSON.parse(data);
                $ARU.UI.createPosition(result);
            }
        });
    }
    
    
    /**
     * funcion para crear una nueva division en la organizacion
     */
    
    function crearDivision(type,action, formulario)
    {
        
       var idDivision= $.ajax({
            type:type,
            url:action,
            async: false,
            data:formulario,
            success:function(data)
            {
                result=JSON.parse(data);
                $ARU.UI.createDivision(result);
      
            }
        }).responseText;
        
       return idDivision;
    }
    
    
    /**
     * funcion para crear nuevos cargos en la organizacion
     */
    
    
     function crearCargo(type,action, formulario)
    {
        
        var idPosition = $.ajax({
            type:type,
            url:action,
            data:formulario,
            async: false,
            success:function(data)
            {
                result=JSON.parse(data);
                $ARU.UI.createCargo(result);
            }
        }).responseText;
        
        return idPosition;
    }
     function leaderExist(type,action, formulario)
    {
        
        var leader = $.ajax({
            type:type,
            url:action,
            data:formulario,
            async: false,
            success:function(data)
            {
//                result=JSON.parse(data);
//                $ARU.UI.createCargo(result);
            }
        }).responseText;
        
        return leader;
    }
     function employeeExist(type,action, formulario)
    {
        
        var employee = $.ajax({
            type:type,
            url:action,
            data:formulario,
            async: false,
            success:function(data)
            {
//                result=JSON.parse(data);
//                $ARU.UI.createCargo(result);
            }
        }).responseText;
        
        return employee;
    }
    
    
    
    
       function ExistDependency(type,action, formulario)
    {
        
        var ExistDependen = $.ajax({
            type:type,
            url:action,
            data:formulario,
            async: false,
            success:function(data)
            {
//                result=JSON.parse(data);
//                $ARU.UI.createCargo(result);
            }
        }).responseText;
        
        return ExistDependen;
    }
    
    /**
     * 
     * 
     */
     function posicion(type,action, formulario)
    {
        
        $.ajax({
            type:type,
            url:action,
            data:formulario,
            success:function(data)
            {
                result=JSON.parse(data);
                $ARU.UI.viewPositionCode(result);
            }
        });
    }
    
    
    /**
     * 
     * 
     */
    
     function excelCp(type,action, formulario, ids, idTable, name)
    {
        
        $.ajax({
            type:type,
            url:action,
            data:formulario,
            success:function(data)
            {
                 setTimeout("window.open('/site/excel?ids="+ids+"&name="+name+"&table="+idTable+"','_top');",500);
                                             //Mostramos los Mensajes y despues de la Descarga se Ocultan Automaticamente.
                 setTimeout('$("#complete").html("<h3>Archivo Excel Generado... !!</h3>");',1800 );
                 setTimeout('$("#administrarPosicion").modal("hide");',2500 );
            }
        });
    }
    
    /**
     * 
     * 
     */
     function emailCp(type,action, formulario)
    {
       
        $.ajax({
            type:type,
            url:action,
            data:formulario,
            success:function(data)
            {
             setTimeout('$("#complete").html("<h3>Correo Enviado con Exito... !!</h3>");',1800 );
             setTimeout('$("#administrarPosicion").modal("hide");',2500 );   
            }
        });
    }
    
    
     return {
        sendEvent:sendEvent,
        sendPass:sendPass,
        searchEmployee:searchEmployee,
        createRol:createRol,
        idRol:idRol,
        crearPosicion:crearPosicion,
        crearDivision:crearDivision,
        crearCargo:crearCargo,
        createPositionCode:createPositionCode,
        posicion:posicion,
        employeeExist:employeeExist,
        leaderExist:leaderExist,
        ExistDependency:ExistDependency,
        excelCp:excelCp,
        emailCp:emailCp,
        
    };
    
})();