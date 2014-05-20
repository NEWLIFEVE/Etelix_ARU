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
                nombre=result.nombre;
                apellido=result.last_name;
                nacimiento=result.date_birth;
                identity_card=result.identity_card;
                email_personal=result.email_personal;
                email_company=result.email_company;
                console.log(email_company);
                $('#cambio_photo').modal('show');
            }
        });
    }
    
    /**
	 * Inicializa las funciones del submodulo
	 * @access public
	 */

     return {
        sendEvent:sendEvent,
        sendPass:sendPass,
        searchEmployee:searchEmployee
    };
    
})();