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
   
     return {
        sendEvent:sendEvent,
        sendPass:sendPass,
        searchEmployee:searchEmployee,
        createRol:createRol,
        idRol:idRol
        
    };
    
})();