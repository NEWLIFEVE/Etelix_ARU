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
        _location();
        _attachphoto();
        validardatos();


    }

    /**
     * carga al principio de la interfaz de declarar la jornada de trabajo
     */
    function loadIndex()
    {
        $('#declare').on('click',function(){
            tab=$('#declare_day').find('ul.steps').find('li.active').index()+1;
        });
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
                _buttons(tab, navigation, index);
            },
            onInit:function(tab,navigation,index)
            {
                $activeTab=$('ul.steps li.active');
                $index=$activeTab.index();
                $element=$('ul.steps li.active');
                var total=navigation.find('li').length;
                var current=$index+1;
                $('.step-title', $('#declare_day')).text('Paso '+current+' de '+total);
                _progressBar('#declare_day',$index+1);
                _buttons(tab, navigation, $index);
            }
            
            
            
            
        });
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
    /**
     *
     */ 
    function _location()
    {
        var current=null;
        $('input.button-next,input.button-submit').on('click',function()
        {
            var location=this.value;
            $ARU.AJAX.sendEvent("GET","/EventEmployee/Declarar","tab="+tab+"&location="+location+"&date_event="+_getTime().date_event+"&time_event="+_getTime().time_event);
        });
    }
    /**
     *
     */
    function _getTime()
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
     *
     */
    function _buttons(tab, navigation, index)
    {
        switch(index)
        {
            case 0:
                $('#declare_day').find('#puesto_trabajo').show();
                $('#declare_day').find('#remoto').show();
                $('#declare_day').find('#aceptar').hide();
                $('#declare_day').find('#fin').hide();
                $('#declare_day').find('div#start_time').show();
                $('#declare_day').find('div#start_break').hide();
                $('#declare_day').find('div#end_break').hide();
                $('#declare_day').find('div#end_time').hide();
                break;
            case 1:
                $('#declare_day').find('#puesto_trabajo').hide();
                $('#declare_day').find('#remoto').hide();
                $('#declare_day').find('#aceptar').show();
                $('#declare_day').find('#fin').hide();
                $('#declare_day').find('div#start_time').hide();
                $('#declare_day').find('div#start_break').show();
                $('#declare_day').find('div#end_break').hide();
                $('#declare_day').find('div#end_time').hide();
                break;
            case 2:
                $('#declare_day').find('#puesto_trabajo').hide();
                $('#declare_day').find('#remoto').hide();
                $('#declare_day').find('#aceptar').show();
                $('#declare_day').find('#fin').hide();
                $('#declare_day').find('div#start_time').hide();
                $('#declare_day').find('div#start_break').hide();
                $('#declare_day').find('div#end_break').show();
                $('#declare_day').find('div#end_time').hide();
                break;
            case 3:
                $('#declare_day').find('#puesto_trabajo').hide();
                $('#declare_day').find('#remoto').hide();
                $('#declare_day').find('#aceptar').hide();
                $('#declare_day').find('#fin').show();
                $('#declare_day').find('div#start_time').hide();
                $('#declare_day').find('div#start_break').hide();
                $('#declare_day').find('div#end_break').hide();
                $('#declare_day').find('div#end_time').show();
                break;
        }
    }
    
    /**
     * 
     * funcion para enviar la captura de la foto a la accion 
     */
    
        function _attachphoto(){
           
                  var settings = {
                            url: "/Employee/Photo",
                            dragDrop:false,
                            showDone: false,
                            fileName: "myfile",
                            allowedTypes:"pdf,gif,jpeg,png,jpg,xlsx,xls,txt,cap,pcap,csv",	
                            returnType:"json",
                            showFileCounter:false,
                            multiple:false,
                            onSuccess:function(files,data,xhr)
                            {
                                console.log(data);
                                $("#filename").html(files);
                                $("#foto").attr('src',"/"+data[1]);
                                $("#load_photo").attr('src',"/"+data[1]);
                                $("#photomain").attr('src',"/"+data[1]);
//                                $('div.ajax-file-upload-filename:last').attr('name', data[0]); 
                            },
                            showDelete:true,
                            deleteCallback: function(data,pd){
                                for(var i=0;i<data.length;i++)
                                {
                                    $.post("/Employee/deletejquery",{op:"delete",name:data[i]},
                                     function(resp, textStatus, jqXHR)
                                {
                                     //Show Message  
                                    $("#status").html("");      
                                });
                                }      
                                    pd.statusbar.remove(); //You choice to hide/not.
                                }
                        }
                   var uploadObj =$("#mulitplefileuploader").uploadFile(settings); 
                }
                
                
         function validardatos(){
             
             
             $('#firstview').validate(
            {
              
            
                doNotHideMessage: true, //this option enables to show the error/success messages on tab switch.
                errorElement: 'span', //default input error message container
                errorClass: 'help-block', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                rules:
                {
                   'Employee[first_name]':{
                       required: true
                   },
                   
                   'Employee[last_name]':{
                       required: true
                   },
                   'Employee[identity_card]':{
                       required: true
                   },
                   'Employee[email_personal]':{
                       required: true,
                       email: true
                   },
                   'Employee[email_company]':{
                       required: true,
                       email: true
                   },
                   'Employee[skype]':{
                       required: true, 
                   },
                   'Employee[cellphone]':{
                       required: true, 
                   },
                   
                   'Address[address_line_1]':{
                       required: true, 
                   },
                   'Address[address_line_2]':{
                       required: true, 
                   }
                   ,
                   'Address[country]':{
                       required: true, 
                   }
                    
                },
                messages:
                { // custom messages for radio buttons and checkboxes
                    'payment[]':
                    {
                        required: "Please select at least one option",
                        minlength: jQuery.format("Please select at least one option")
                    }
                },
                errorPlacement:function(error,element)
                { // render error placement for each input type
                    if(element.attr("name")=="gender")
                    { // for uniform radio buttons, insert the after the given container
                        error.insertAfter("#form_gender_error");
                    }
                    else if(element.attr("name")=="payment[]")
                    { // for uniform radio buttons, insert the after the given container
                        error.insertAfter("#form_payment_error");
                    }
                    else
                    {
                        error.insertAfter(element); // for other inputs, just perform default behavior
                    }
                },
                invalidHandler:function(event,validator)
                { //display error alert on form submit   
                    success.hide();
                    error.show();
                    App.scrollTo(error, -200);
                },
                highlight:function(element)
                { // hightlight error inputs
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); // set error class to the control group
                },
                unhighlight:function(element)
                { // revert the change done by hightlight
                    $(element).closest('.form-group').removeClass('has-error'); // set error class to the control group
                },
                success:function(label)
                {
                    if(label.attr("for")=="gender" || label.attr("for") == "payment[]")
                    { // for checkboxes and radio buttons, no need to show OK icon
                        label.closest('.form-group').removeClass('has-error').addClass('has-success');
                        label.remove(); // remove error label here
                    }
                    else
                    { // display success icon for other inputs
                        label.addClass('valid') // mark the current input as valid and display OK icon
                        .closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                    }
                },
                submitHandler:function(form)
                {
//                    success.show();
//                    error.hide();
                    form.submit();
                    //add here some ajax code to submit your form or just call form.submit() if you want to submit the form without ajax
                }
            });
    
  
              
          
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
    
    /**
	 * Inicializa las funciones del submodulo
	 * @access public
	 */

     return {
        sendEvent:sendEvent
    };
    
})();



$(document).on('ready',function(){
   $ARU.UI.init(); 
});