/**
 * Modulo encargado de interaccion en interfaz
 */
$ARU.UI=(function(){
    var tab=null;
    
     function init()
    {
        _loadIndex();
        _location();
        _attachphoto();
        _validarDatos();
        _applyMetroSelect();   
        _loadFirstView();
        chancePass();
    }

    


   
            
            function _loadFirstView()
            {
                
              
            var form = $('#submit_form');
            var error = $('.alert-danger', form);
            var success = $('.alert-success', form);
            
               var handleTitle = function(tab, navigation, index) {
                var total = navigation.find('li').length;
                console.log(total);
                var current = index + 1;
                // set wizard title
                $('.step-title', $('#form_wizard_1')).text('Paso ' + (index + 1) + ' de ' + total);
                // set done steps
                jQuery('li', $('#form_wizard_1')).removeClass("done");
                var li_list = navigation.find('li');
                for (var i = 0; i < index; i++) {
                    jQuery(li_list[i]).addClass("done");
                }

                if (current == 1) {
                    $('#form_wizard_1').find('.button-previous').hide();
                } else {
                    $('#form_wizard_1').find('.button-previous').show();
                }

                if (current >= total) {
                    $('#form_wizard_1').find('.button-next').hide();
                    $('#form_wizard_1').find('.button-submit').show();
                    displayConfirm();
                   
                } else {
                    $('#form_wizard_1').find('.button-next').show();
                    $('#form_wizard_1').find('.button-submit').hide();
                }
                App.scrollTo($('.page-title'));
            }

            // default form wizard
            $('#form_wizard_1').bootstrapWizard({
                'nextSelector': '.button-next',
                'previousSelector': '.button-previous',
                onTabClick: function (tab, navigation, index, clickedIndex) {
                    success.hide();
                    error.hide();
                    if (form.valid() == false) {
                        return false;
                    }
                    handleTitle(tab, navigation, clickedIndex);
                },
                onNext: function (tab, navigation, index) {
                    success.hide();
                    error.hide();

                    if (form.valid() == false) {
                        return false;
                    }

                    handleTitle(tab, navigation, index);
                },
                onPrevious: function (tab, navigation, index) {
                    success.hide();
                    error.hide();

                    handleTitle(tab, navigation, index);
                },
                onTabShow: function (tab, navigation, index) {
                    var total = navigation.find('li').length;
                    var current = index + 1;
                    var $percent = (current / total) * 100;
                    $('#form_wizard_1').find('.progress-bar').css({
                        width: $percent + '%'
                    });
                }
            });
              
              
                    $('#form_wizard_1').find('.button-previous').hide();
            $('#form_wizard_1 .button-submit').click(function () {
//                alert('Finished! Hope you like it :)');
            }).hide();

              
                var displayConfirm = function() {
                $('#tab3 .form-control-static', form).each(function(){
                    var input = $('[name="'+$(this).attr("data-display")+'"]', form);
                    if (input.is(":text") || input.is("textarea")) {
                        $(this).html(input.val());
                    } else if (input.is("select")) {
                        $(this).html(input.find('option:selected').text());
                    } else if (input.is(":radio") && input.is(":checked")) {
                        $(this).html(input.attr("data-title"));
                    } else if ($(this).attr("data-display") == 'payment') {
                        var payment = [];
                        $('[name="payment[]"]').each(function(){
                            payment.push($(this).attr('data-title'));
                        });
                        $(this).html(payment.join("<br>"));
                    }
                });
            }
              
                
            }
            
        
      
        
        
        
    /**
     * carga al principio de la interfaz de declarar la jornada de trabajo
     */
    function _loadIndex()
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
                
              
    
    
//           function inactivo(){
//               
//                    $(window).mouseout(function()
//                    {
//                        console.log("mover");
//                    });
//                    
//                    $(window).keypress(function()
//                    {
//                        console.log("tecla");
//                    });
//                  
//               }
             
         function _format(state) {
                if (!state.id) return state.text; // optgroup
                return "&nbsp;&nbsp;" + state.text; //colocar link para las imagenes
            }
            
         function _applyMetroSelect(){
             
            
             
             $("#Employee_nationality").select2({
                placeholder: "Select",
                allowClear: true,
                escapeMarkup: function (m) {
                    return m;
                }
            }); 
            
            $("#Employee_id_marital_status").select2({
                placeholder: "Select",
                allowClear: true,
                escapeMarkup: function (m) {
                    return m;
                }
            }); 
             
             

            $("#Employee_country").select2({
                placeholder: "Select",
                allowClear: true,
                formatResult: _format,
                formatSelection: _format,
                escapeMarkup: function (m) {
                    return m;
                }
            });
            
            
            $("#Employee_state").select2({
                placeholder: "Select",
                allowClear: true,
                formatResult: _format,
                formatSelection: _format,
                escapeMarkup: function (m) {
                    return m;
                }
            });
            
            $("#Address_id_city").select2({
                placeholder: "Select",
                allowClear: true,
                formatResult: _format,
                formatSelection: _format,
                escapeMarkup: function (m) {
                    return m;
                }
            });
         }

         function _validarDatos(){
             
            var form = $('#submit_form');
            var error = $('.alert-danger', form);
            var success = $('.alert-success', form);
             form.validate({

                doNotHideMessage: true, //this option enables to show the error/success messages on tab switch.
                errorElement: 'span', //default input error message container
                errorClass: 'help-block', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                rules: {
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
                       required: false, 
                   }
                   ,
                   'Address[country]':{
                       required: true, 
                   },
                   'Address[zip]':{
                       required: true, 
                   },
                   
                
                    'User[validar_pass]':{
                         required: true,
                         minlength: 5
                    },
                   
                   'User[pass]':{
                         required: true,
                         minlength: 5
                    },
                    
                     'User[confir_pass]':{
                         required: true,
                         minlength: 5,
                         equalTo: "#User_pass"  
                    }
                },

                errorPlacement: function (error, element) { // render error placement for each input type
                    if (element.attr("name") == "gender") { // for uniform radio buttons, insert the after the given container
                        error.insertAfter("#form_gender_error");
                    } else if (element.attr("name") == "payment[]") { // for uniform radio buttons, insert the after the given container
                        error.insertAfter("#form_payment_error");
                    } else {
                        error.insertAfter(element); // for other inputs, just perform default behavior
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit   
                    success.hide();
                    error.show();
                    App.scrollTo(error, -200);
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').removeClass('has-success').addClass('has-error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    if (label.attr("for") == "gender" || label.attr("for") == "payment[]") { // for checkboxes and radio buttons, no need to show OK icon
                        label
                            .closest('.form-group').removeClass('has-error').addClass('has-success');
                        label.remove(); // remove error label here
                    } else { // display success icon for other inputs
                        label
                            .addClass('valid') // mark the current input as valid and display OK icon
                        .closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                    }
                },

                submitHandler: function (form) {
//                    success.show();
//                    error.hide();
                    //add here some ajax code to submit your form or just call form.submit() if you want to submit the form without ajax
                    form.submit();
                }

            });
//  
//              
//          
         }
         
         
         function chancePass(){
             
            
             $('#chancepass').on('click',function()
                {
                   var confirmar_pass= $("#User_validar_pass").val();
                   var password1= $("#User_pass").val();
                      console.log(confirmar_pass);
                      console.log(password1);
                      $ARU.AJAX.sendPass("GET","/User/CambioPass","confirmar_pass="+confirmar_pass+"&pass="+password1);
                                                                    
                });
            }
         
 
    
    return {
        init:init
    };
})();
