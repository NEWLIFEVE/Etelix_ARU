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
        loadIndex();
        declare();
        location();
       
        
    }

    /**
     * carga al principio de la interfaz de declarar la jornada de trabajo
     */
    function loadIndex()
    {
        $('#declare_day').bootstrapWizard(
        {
            nextSelector:'.button-next',
            previousSelector:'.button-previous',
            onTabClick:function(tab,navigation,index,clickedIndex)
            {
                return false;//para desactivar que el usuario pueda navegar con los botones de arriba
            },
            onNext:function(tab,navigation,index)
            {
                var previus=index-1;
                var total=navigation.find('li').length;
                var current=index+1;
                tab.parent().find('li:eq('+previus+')').addClass("done");
                $('.step-title', $('#declare_day')).text('Paso '+current+' de '+total);
                _progressBar('#declare_day',current);
            },
            onInit:function(tab, navigation,index)
            {
                $activeTab=$('ul.steps li.active');
                $index=$activeTab.index();
                $element=$('ul.steps li.active');
                _progressBar('#declare_day',$index+1);
            }
        });
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
     * @param string obj es el id del elemento donde se va a buscar la barra
     * @param int index
     * @return void
     */
    function _progressBar(obj,index)
    {
        var percentage=null;
        if(index!=0) percentage=100/$(obj).find('ul.steps').find('li').length*index;
        else percentage=100;
        $(obj).find('.progress-bar').css('width',percentage+'%');
    }
    
    
  
    
    
    
    
   
    return {
        init:init
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