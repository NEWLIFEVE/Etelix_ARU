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
                console.log(result);
                if (result==1){
                $('#mensaje').removeClass("rojo");
                $('#mensaje').addClass("icon-ok-circle");
                $('#mensaje').addClass("verde");           
                $('#mensaje').html("Cambio de Contraseña Valido");
                }
                
                if (result==2){
                $('#mensaje').removeClass("icon-ok-circle");
                $('#mensaje').removeClass("verde");
                $('#mensaje').addClass("icon-remove-circle"); 
                $('#mensaje').addClass("rojo");
                $('#mensaje').html("Contraseña No Valida");
                }
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