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
                $('#error_contra').removeClass("rojo");
                $('#error_contra').removeClass("icon-remove-circle"); 
                $('#error_contra').html("");
                $('#mensaje').addClass("icon-ok-circle");
                $('#mensaje').addClass("verde");           
                $('#mensaje').html("Cambio de Contraseña Valido");
                $('#cambio_photo').modal('show');
                

                }
                
                if (result==2){
                $('#error_contra').removeClass("icon-ok-circle");
                $('#error_contra').removeClass("verde");
                $('#error_contra').addClass("icon-remove-circle"); 
                $('#error_contra').addClass("rojo");
                $('#error_contra').html("Contraseña No Valida");
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