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
              
                $('#title').html(result.name);
                $('#name').html(result.name);
                $('#second_name').html(result.second_name);
                $('#last_name').html(result.last_name);
                $('#titlelast').html(result.last_name);
                $('#second_last_name').html(result.second_last_name);
                $('#date_birth').html(result.date_birth);
                $('#identity_card').html(result.identity_card);
                $('#email_personal').html(result.email_personal);
                $('#email_company').html(result.email_company);
                $('#cellphone').html(result.cellphone);
                $('#homephone').html(result.homephone);
                $('#extension_numeric').html(result.extension_numeric);
                $('#nationality').html(result.nationality);
                $('#maritalstatus').html(result.maritalstatus);
                $('#imgen_rute').html(result.imgen_rute);
               console.log(result.date);
                
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