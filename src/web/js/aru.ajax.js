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
                $('div#tab'+id+' label').html(result.hour);
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
    
    /*
     * funciona para consultar los password y username, cuando se bloquea por refrescamiento
     * 
     */
    
//    function LockEmployee(type, action, formulario)
//    {
//         $.ajax({
//            type:type,
//            url:action,
//            data:formulario,
//            success:function(data)
//            {
//                console.log("hola");
//            }
//        });
//        
//    }
    
    /**
	 * Inicializa las funciones del submodulo
	 * @access public
	 */

     return {
        sendEvent:sendEvent,
        sendPass:sendPass,
        searchEmployee:searchEmployee,
        
    };
    
})();