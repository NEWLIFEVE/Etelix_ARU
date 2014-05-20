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
                result=JSON.parse(data);
                $ARU.UI.successPass(result);
            }
         });
    }
    
    /**
	 * Inicializa las funciones del submodulo
	 * @access public
	 */

     return {
        sendEvent:sendEvent,
        sendPass:sendPass
    };
    
})();