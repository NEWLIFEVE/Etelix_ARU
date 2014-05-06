/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 var $ARU={};

/**
 * Modulo encargado de interaccion en interfaz
 */
$ARU.UI=(function(){
    var tab=null;
    
     function init()
    {
        declare();
        location();
    }
    
    function declare()
    {        
        $('a#declare').on('click',function()
        {
            tab=$('.tab-pane').filter(function(){return $(this).attr('class')=='tab-pane active'}).attr('id');
        });
    }
    
    
    
    function location()
    {
        $('input.declare').on('click',function(){
           
            //Se desde que ubicacion trabajan
            var location=this.value;
            //Ahora se que tab estan declarando
                       
           $ARU.AJAX.getEventTime("GET","/EventEmployee/Declarar","tab="+tab+"&location="+location+"&date_event="+gettime().date_event+"&time_event="+gettime().time_event); 
           

        });
    }
    
    function gettime()
    {
             var d = new Date();
             var day_event=d.getDate();
             var month_event=d.getMonth()+1;
             var year_event=d.getFullYear();
             var hour_event=d.getHours();
             var minutes_event=d.getMinutes();
             var seconds_event=d.getSeconds();
             var date_event=year_event+'-'+month_event+'-'+day_event;
             var time_event=hour_event+':'+minutes_event+':'+seconds_event;
             return {
                 date_event:date_event,
                 time_event:time_event
             }
    }

    /**
     * Funcion encargada de aumentar el tamano de la barra en el momento de declarar
     */
    function progressBar(num)
    {
        var percentage=num*25;
        $('div.progress-bar-success').css('width',percentage+'%');
    }
    
    
   
    return {
        init:init,
        progressBar:progressBar
    };
})();

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
    function getEventTime(type, action, formulario)
    {
        $.ajax({
            type:type,
            url:action,
            data:formulario,
            success:function(data)
            {
                result=JSON.parse(data);
                id=result.event;
                $ARU.UI.progressBar(id);
                $('div#tab'+id+' label').html(result.hour);
            }
         });
    }

    /**
	 * Inicializa las funciones del submodulo
	 * @access public
	 */
	function init()
	{
		_getEventTime();
	}

     return {
        init:init,
        getEventTime:getEventTime
    };
    
})();



$(document).on('ready',function(){
   $ARU.UI.init(); 
});