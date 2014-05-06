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
            console.log(tab);
        });
    }
    
    
    
    function location()
    {
        $('input.declare').on('click',function(){
           
            //Se desde que ubicacion trabajan
            var location=this.value;
            //Ahora se que tab estan declarando
            
           console.log(tab);
           
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
    
    
   
    return {
        init:init
    };
})();

/**
 * Modulo encargado dela interaccion con servidor a traves de AJAX
 */
$ARU.AJAX=(function(){
    
    
    function getEventTime(type, action, formulario){
        console.log(type);
        console.log(action);
        console.log(formulario);
        $.ajax({ type: type,   
                 url: action,   
                 data: formulario,
                success:function(data){
                    
                    console.log(data);
                    
                }
         })
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