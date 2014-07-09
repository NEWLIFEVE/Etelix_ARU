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
        _changePass();
        _viewdetalle();
        _menu();
        _createRoles();
        _treeDirectory();
        _controllersByRol();
        _MaskCell();
        _CreatePositionCode();
        _addDivision();
    
    }
    
      var result=(location.pathname).split('/');

            function _MaskCell(){
               
                $("#Employee_extension_numeric").inputmask("mask", {
                                 "mask": "9999",
                                  
                                    });
               
                $('#Employee_cod_phone').on('change',function(){
                    var codePhone= $("#Employee_cod_phone").val();
                    $("#Employee_cellphone").val(" ");
                    $("#Employee_home_phone").val(" ");
                   
                    
                    switch(codePhone){
                        case "+58":
                            $("#Employee_cellphone").inputmask("mask", {
                                 "mask": "+58(499) 999-9999",
                                  
                                    });
                           $("#Employee_home_phone").inputmask("mask", {
                                 "mask": "+58(299) 999-9999"
                                    });
                         break;
                         case "+57":
                            $("#Employee_cellphone").inputmask("mask", {
                                 "mask": "+57(999) 999-9999"
                                    });
                           $("#Employee_home_phone").inputmask("mask", {
                                 "mask": "+57(9) 999-9999"
                                    });
                         break;
                         case "+56":
                            $("#Employee_cellphone").inputmask("mask", {
                                 "mask": "+56(9) 999-99999"
                                    });
                           $("#Employee_home_phone").inputmask("mask", {
                                 "mask": "+56(99) 999-99999"
                                    });
                         break;
                          case "+51":
                            $("#Employee_cellphone").inputmask("mask", {
                                 "mask": "+51(9) 999-99999"
                                    });
                           $("#Employee_home_phone").inputmask("mask", {
                                 "mask": "+51(99) 999-99999"
                                    });
                         break;
                         case "+507":
                             
                            $("#Employee_cellphone").inputmask("mask", {
                                 "mask": "+507 999-9999999"
                                    });
                           $("#Employee_home_phone").inputmask("mask", {
                                 "mask": "+507 999-9999999"
                                    });
                         break;
                         case "+1":
                            $("#Employee_cellphone").inputmask("mask", {
                                 "mask": "+1(999) 999-9999"
                                    });
                           $("#Employee_home_phone").inputmask("mask", {
                                 "mask": "+1(999) 999-9999"
                                    });
                         break;
                    }
                });
                
                if ((result[2]=="infoEmployee")||(result[2]=="firstView")){
                    var country= $("#Employee_country").val();
                     switch(country){
                        case "VEN":
                            $("#Employee_cellphone").inputmask("mask", {
                                 "mask": "+58(0499) 999-9999",
                             
                                    });
                           $("#Employee_home_phone").inputmask("mask", {
                                 "mask": "+58(0299) 999-9999"
                                    });
                         break;
                         case "COL":
                            $("#Employee_cellphone").inputmask("mask", {
                                 "mask": "+57(999) 999-9999"
                                    });
                           $("#Employee_home_phone").inputmask("mask", {
                                 "mask": "+57(9) 999-9999"
                                    });
                         break;
                         case "CHL":
                            $("#Employee_cellphone").inputmask("mask", {
                                 "mask": "+56(9) 999-99999"
                                    });
                           $("#Employee_home_phone").inputmask("mask", {
                                 "mask": "+56(99) 999-99999"
                                    });
                         break;
                          case "PER":
                            $("#Employee_cellphone").inputmask("mask", {
                                 "mask": "+51(9) 999-99999"
                                    });
                           $("#Employee_home_phone").inputmask("mask", {
                                 "mask": "+51(99) 999-99999"
                                    });
                         break;
                         case "PAN":
                             
                            $("#Employee_cellphone").inputmask("mask", {
                                 "mask": "+507 999-9999999"
                                    });
                           $("#Employee_home_phone").inputmask("mask", {
                                 "mask": "+507 999-9999999"
                                    });
                         break;
                         case "USA":
                            $("#Employee_cellphone").inputmask("mask", {
                                 "mask": "+1(999) 999-9999"
                                    });
                           $("#Employee_home_phone").inputmask("mask", {
                                 "mask": "+1(999) 999-9999"
                                    });
                         break;
                    }
                
                }
                
            }
            
           
            function rolCreate(result)
            {
               console.log (result);
           
              switch(result){
                case "1":
                    $('#error_rol').removeClass("rojo");
                    $('#error_rol').removeClass("icon-remove-circle"); 
                    $('#error_rol').html("");
                    $('#mensaje').addClass("icon-ok-circle");
                    $('#mensaje').addClass("verde");           
                    $('#mensaje').html("<h4>Nuevo Rol Creado!</h4>");
                    $('#rol').modal('show');
                   
                    break;
                case "2":
                    $('#error_rol').removeClass("icon-ok-circle");
                    $('#error_rol').removeClass("verde");
//                    $('#error_rol').addClass("icon-remove-circle"); 
                    $('#error_rol').addClass("rojo");
                    $('#error_rol').html("<h4>Ingrese Un nombre para el Nuevo rol</h4>");
                    break;
                
            }
               
             
               
            }

           function _createRoles()
           {
                $('#crearRol').on('click',function(){
                    var name_rol= $("#Rol_name_rol").val();
                   
                    $ARU.AJAX.createRol("GET","/Rol/CreateRol","name_rol="+name_rol); 

                });
           }

            function _menu()
            {
                 
                   var result=(location.pathname).split('/');
   
                switch (result[1]) {
                    case ('Employee'):
                        $('li#employee').addClass(' active');
                        break;
                
                    case ('EventEmployee'):
                        $('li#create').addClass(' active');
                        break;
                    case ('positionCode'):
                        $('li#codigoposicion').addClass(' active');
                        break;
                    case ('division'):
                        $('li#division').addClass(' active');
                        break;
         
                    }
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
                    $('#form_wizard_1').find('.button-submitcp').show();
                    displayConfirm();
                    displayConfirmpc();
                   
                } else {
                      
                    $('#form_wizard_1').find('.button-next').show();
                    $('#form_wizard_1').find('.button-submitcp').hide();
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
            
             var displayConfirmpc = function() {
       
                $('#tab2 .form-control-static', form).each(function(){
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
    
             
         function _format(state) {
                if (!state.id) return state.text; // optgroup
                return "&nbsp;&nbsp;" + state.text; //colocar link para las imagenes
            }
            
         function _applyMetroSelect(){
             
             $(".select2").select2({
                placeholder: "Select",
                allowClear: true,
                escapeMarkup: function (m) {
                    return m;
                }
            });
             $("#Employee_id_nationality").select2({
                placeholder: "Select",
                allowClear: true,
                escapeMarkup: function (m) {
                    return m;
                }
            });
             
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
             
             
              $("#Employee_cod_phone").select2({
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
         
         /**
          * funcion para listar las acciones de un controlador
          * @returns {undefined}
          */
         
         function _controllersByRol ()
         {
             $('a#controllersByRoles').on('click',function(){
                 var nameController=($(this).find('div#controllers').text());
                 var rol= $('#rol').text();
        
                 $ARU.AJAX.idRol("POST","/Rol/IdRol","nameController="+nameController+"&rol="+rol);
                });
         }
         
         function viewActionController(result)
         {
            var html = "<div><h2>ACCIONES</h2></div>";//creamos una variable donde almacenar la información
            for(var i in result)
            {
                html += "<div><a href='#'>" +result[i]+ "</a></div>";
            }
            $('#ActionByRoles').html(html);
         }
         
         
         
         /**
          * funcion para generar el directorio de los controladores y acciones asociadas a un rol
          * @returns {undefined}
          */
         
         
         function _treeDirectory(){
             
              var DataSourceTree = function (options) {
                this._data  = options.data;
                this._delay = options.delay;
            };

            DataSourceTree.prototype = {

                data: function (options, callback) {
                    var self = this;

                    setTimeout(function () {
                        var data = $.extend(true, [], self._data);

                        callback({ data: data });

                    }, this._delay)
                }
            };
             
             
             
             var treeDataSource = new DataSourceTree({
                data: [
                    { name: 'Sales', type: 'folder' },
                    { name: 'Reports', type: 'item', additionalParameters: { id: 'I1' } },
                    { name: 'Finance', type: 'item', additionalParameters: { id: 'I2' } },
                    { name: 'Finance1', type: 'item', additionalParameters: { id: 'I3' } }
                ],
                delay: 400
            });

             

            $('#MyTree').tree({
                dataSource: treeDataSource,
                loadingHTML: '<img src="/themes/metronic/img/input-spinner.gif"/>',
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
                   
                    'Employee[extension_numeric]':{
                       maxlength: 4 
                   },
                   
                   'Address[address_line_1]':{
                       required: true, 
                   },
                   'Address[address_line_2]':{
                       required: false, 
                   }
                   ,
                   'Employee[country]':{
                       required: true, 
                   },
                   'Employee[state]':{
                       required: true, 
                   },
                   
                   'Address[zip]':{
                       required: true, 
                   },
                   
                   'Address[id_city]':{
                       required: true, 
                   },
                   
                
                    'Users[validar_pass]':{
                         required: true,
                         minlength: 5
                    },
                   
                   'Users[pass]':{
                         required: true,
                         minlength: 5
                    },
                    
                   'Users[confir_pass]':{
                         required: true,
                         minlength: 5,
                         equalTo: "#Users_pass"  
                    }
                    ,
                    'Users[password]':{
                         required: true,
                         minlength: 5,    
                    }
                    ,
                    'Employee[cp]':{
                         required: true,
                           
                    }
                    ,
                    'Employee[codeDependence]':{
                         required: true,
                           
                    }
                    ,
                    
                     'Rol[name_rol]':{
                         required: true,    
                    },
                     'PositionCode[id_position]':{
                         required: true,    
                    },
                     'PositionCode[id_employee]':{
                         required: true,    
                    },
                     'PositionCode[start_date]':{
                         required: true,    
                    },
                    
                     'PositionCode[new_division]':{
                         required: true,    
                    },
                     'PositionCode[id_dependencia]':{
                         required: true,    
                    },
                     'new_position':{
                         required: true,    
                    },
                    
                    'PositionCode[id_division]':{
                         required: true,    
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
 
         }
         
         function _changePass(){
             $('#changepass').on('click',function()
                {
                   var confirmar_pass= encodeURIComponent($("#Users_validar_pass").val());
                   var password1=encodeURIComponent($("#Users_pass").val()); 
 
                   $ARU.AJAX.sendPass("GET","/Users/ChangePass","confirmar_pass="+confirmar_pass+"&pass="+password1);                                              
                });

         }
         
         function _viewdetalle()
         {
            
             $('a#detalle').on('click',function(){
                 var id=($(this).find('div#id_employ').text());
                 $ARU.AJAX.searchEmployee("GET","/Employee/DynamicEmployee","id_employee="+id);
                });
         }
         
        
            
            
        function successPass(result){
            
            switch(result){
                case "1":
                    $('#error_contra').removeClass("rojo");
                    $('#error_contra').removeClass("icon-remove-circle"); 
                    $('#error_contra').html("");
                    $('#mensaje').addClass("icon-ok-circle");
                    $('#mensaje').addClass("verde");           
                    $('#mensaje').html("<h4>Cambio de Contraseña Exitoso!</h4>");
                    $('#cambio_pass').modal('show');
                    break;
                case "2":
                    $('#error_contra').removeClass("icon-ok-circle");
                    $('#error_contra').removeClass("verde");
                    $('#error_contra').addClass("icon-remove-circle"); 
                    $('#error_contra').addClass("rojo");
                    $('#error_contra').html("<h4>Contraseña Actual No Valida</h4>");
                    break;
                
            }
        }
        
        function viewEmployeeModal(result){
             
                $('#title').html(result[0].name);
                $('#name').html(result[0].name);
                $('#second_name').html(result[0].second_name);
                $('#last_name').html(result[0].last_name);
                $('#titlelast').html(result[0].last_name);
                $('#second_last_name').html(result[0].second_last_name);
                $('#date_birth').html(result[0].date_birth);
                $('#identity_card').html(result[0].identity_card);
                $('#email_personal').html("<i class='icon-envelope'></i> "+result[0].email_personal);
                $('#email_company').html("<i class='icon-envelope'></i> "+result[0].email_company);
                $('#cellphone').html("<i class='icon-phone'></i> "+result[0].cellphone);
                $('#skype').html("<a href='skype:"+result[0].skype+"?call'><i class='icon-skype'></i></a> "+result[0].skype);
                $('#homephone').html("<i class='icon-home'></i> "+result[0].homephone);
                $('#extension_numeric').html(result[0].extension_numeric);
                $('#nationality').html(result[0].nationality);
                $('#maritalstatus').html(result[0].maritalstatus);
                $('#address_line_1').html(result[1].address_line_1); 
                $('#address_line_2').html(result[1].address_line_2); 
                $('#zip').html(result[1].zip); 
                $('#country').html(result[1].country); 
                $('#state').html(result[1].state); 
                $('#city').html(result[1].city); 
              
              if (result[0].imagen_rute!=null){
                  $("#photo").attr('src',"/"+result[0].imagen_rute);
              }
              else {
                 $("#imagen_rute").addClass('photo-modal-view-employee');
                 $("#photo").attr('src',"/themes/metronic/img/profile/profile.jpg");  
              }
                $('#detalle_empleado').modal('show');
        }
        
        function _CreatePositionCode()
        {
            $('a#positioncode').on('click', function() {

//            var id_division = $("#PositionCode_id_division").val();
//            var id_position = $("#PositionCode_id_position").val();
//            var id_employee = $("#PositionCode_id_employee").val();
//            var start_date = $("#PositionCode_start_date").val();
//            var id_dependencia = $("#PositionCode_id_dependencia").val();
//            var new_division = $("#PositionCode_new_division").val();
//            var new_position = $("#new_position").val();
//            var leader = $("#leader:checked").val();
//            var position=$("div#posicion").text();
//           
//            if (id_division=="" &(new_division=="" || id_dependencia=="") || (id_position=="" & new_position=="") || id_employee=="" || start_date==""){
//                $('#error').addClass("alert alert-danger");
//                    $('#error').addClass("rojo");
//                    $('#error').show("slow");
//                    $('#error').html("Faltan Datos Para Realizar el Registro");
//            }else{
//                 $('#error').removeClass("rojo");
//                    $('#error').removeClass("alert alert-danger");
//                    $('#error').removeClass("icon-remove-circle");
//                    $('#error').html("");
//                    $ARU.AJAX.createPositionCode("GET", "/PositionCode/CrearPosition", "id_employee=" + id_employee + "&id_position=" + id_position + "&new_position=" + new_position + "&leader=" + leader + "&id_division=" + id_division + "&new_division=" + new_division + "&id_dependencia=" + id_dependencia + "&start_date=" + start_date+ "&check=" + "false" + "&codePosition=" + position);
//                    
//            }

            });
        }
 
        
        function createPosition(result)
        {
              switch(result){
                case true:
                   
//                    $('#error').addClass("alert alert-success");
//                    $('div#mensaje').addClass("verde");           
//                    $('#error').html("Registro Exitoso!");
//                    $('#error').show();
                    $('div#mensaje').html("<h4>Creación Exitosa de Código de Posición!</h4>");
                    $('#codigo_posicion').modal('show');
                    $("#PositionCode_id_division").select2('val', '');
                    $("#PositionCode_id_position").select2('val', '');
                    $("#PositionCode_id_employee").select2('val', '');
                    $("#PositionCode_start_date").val(" ");

                    break;
                case false:
                  
                    $('#error').addClass("alert alert-danger"); 
                    $('#error').addClass("rojo");
                    $('#error').html("Falla en el Registro");
                    $('#error').show();
                    $('#error').fadeToggle(3000);
                    break;
                
                case 'EmployeeAlreadyExists':
                  
                    $('#error').addClass("alert alert-danger"); 
                    $('#error').addClass("rojo");
                    $('#error').html("El Empleado ya Existe y aún está Activo");
                    $('#error').show();
                    $('#error').fadeToggle(3000);
                    break;
                           
                case "sinlider":
                  
                    $('#error').addClass("alert alert-danger"); 
                    $('#error').addClass("rojo");
                    $('#error').html("Se Necesita Crear un Lider/Coordinador/Gerente para esta División");
                    $('#error').show();
                    $('#error').fadeToggle(3000);
                    break;
                
            }
            
            
            
        }
        
        function _addDivision()
        {
     
      
       $('a#siguiente').on('click',function(){
          
          
            var id_dependencia = $("#PositionCode_id_dependencia").val();
            var new_division = $("#PositionCode_new_division").val();
            
            var new_position = $("#new_position").val();
            var leader = $("#leader:checked").val();

            if ((new_division !="") && (id_dependencia != "")){
                 $ARU.AJAX.crearDivision("GET", "/Division/GetNewDivision", "new_division=" + new_division + "&id_dependencia=" + id_dependencia);
            }          

            if (new_position !=""){
                 if(leader == "undefined") leader='0'; else if(leader =='1'){ leader=1;}
                 $ARU.AJAX.crearCargo("GET", "/Position/getNewPosition", "new_position=" + new_position + "&leader=" + leader);
            }  
            
          
            var idDivision = $("#PositionCode_id_division option:selected").text();
            var newDivision=$("input#PositionCode_new_division").val();
             
             if (idDivision!= "División")
             {
                  $("p#idDivision").attr( "data-display" );
                  $("p#idDivision").removeClass( "ocultar" );
             }
             else 
             {
                 $("p#idDivision").addClass( "ocultar" );
                 $("p#idDivision").html( " " );  
             }
             
           var newPosicion=$("input#new_position").val();
           var idPosicion = $("#PositionCode_id_position option:selected").text();
           
           if (idPosicion!= "Cargo")
           {
               $("p#idPosition").attr( "data-display" );
               $("p#idPosition").removeClass( "ocultar" );
           }
           else
           {
                $("p#idPosition").addClass( "ocultar" );
                 $("p#idPosition").html( "hola " );
           }
             
             var id_division = $("#PositionCode_id_division").val();
             var id_position = $("#PositionCode_id_position").val();
             $ARU.AJAX.posicion("GET", "/PositionCode/GetPositionCode", "id_division=" + id_division + "&id_position=" + id_position + "&check=" + "true");
                     
             
             
       });
       
       $('p#test').on('click',function(){

                    $("#PositionCode_id_division").select2('val', '');
                    $("#PositionCode_dependencia").select2('val', '');
                    $('#error').removeClass("rojo");
                    $('#error').removeClass("alert alert-danger");
                    $('#error').removeClass("icon-remove-circle"); 
                    $('#error').html("");
                    
            $("input.dependencia").val("");
            if($("input.dependencia").css("display")=="none"){
               // $(this).html("<");
                $("input.dependencia").toggle("slide");
                $("#seleDepen").toggle("slide");
                $("div#selectDivision").hide("fast");
                $("div#mensaje").html("Nombre de la División");
                $("div#mensajedependencia").html("Dependencia");
                $('#test').removeClass("newGroup icon-plus-sign");
                $('#test').addClass("cancelarnewGroup icon-signout rotarfecha");
                
                
                
            }else{
                $("div#mensaje").html("");
                $("div#mensajedependencia").html("");
                $("input.dependencia").hide("fast");
                $("div#selectDivision").toggle("slide");
                $("#seleDepen").hide("fast");
                $('#test').removeClass("cancelarnewGroup icon-signout");
                $('#test').addClass("newGroup icon-plus-sign"); 
               
                //$(this).html("+");
            }
        });
       $('p#cargo').on('click',function(){
         
            $("#new_position").val("");
            $("#PositionCode_id_position").select2('val', '');
            if($("input.cargo").css("display")=="none"){
                 //$(this).html("<");
                 $("input.cargo").toggle("slide");
                 $("div#selectCargo").hide("fast");
                 $("div#mensajeCargo").html("Nombre del Cargo");
                 $("div#mensajeLider").html("Lider");
                 $("div#checkbox").toggle("slide");
                 $('#cargo').removeClass("newGroup icon-plus-sign");
                 $('#cargo').addClass("cancelarnewGroup icon-signout rotarfecha");
            }
            
            else
            {
                
              $("div#mensajeCargo").html("");
              $("div#mensajeLider").html("");
              $("input.cargo").hide("fast");
              $("div#checkbox").hide("fast");
              $("div#selectCargo").toggle("slide");
              $('#cargo').removeClass("cancelarnewGroup icon-signout");
              $('#cargo').addClass("newGroup icon-plus-sign"); 
            }
          
        });
            
        }
        
        
        
          
        function createDivision(result)
        {
            
            switch(result){
                case true:
                   
                    $('#error').addClass("alert alert-success");
                    $('#error').addClass("verde");           
                    $('#error').html("Registro Exitoso!");
              
                    break;
                case false:
                  
                    $('#error').addClass("alert alert-danger"); 
                    $('#error').addClass("rojo");
                    $('#error').html("Falla en el Registro");
                    break;
                
            }
            
        }
        
        
        
        /**
         * funcion para cargar mensajes de cracion de cargos nuevos en la organizacion
         */
        
        
         function createCargo(result)
        {
            switch(result){
                case true:
                   
                    $('#error').addClass("alert alert-success");
                    $('#error').addClass("verde");           
                    $('#error').html("Registro Exitoso!");
              
                    break;
                case false:
                  
                    $('#error').addClass("alert alert-danger"); 
                    $('#error').addClass("rojo");
                    $('#error').html("Falla en el Registro");
                    break;
            }
            
        }
        
        function viewPositionCode(result){
            
            console.log(result);
             $("div#posicion").html(result);
        }
        
    return {
        init:init,
        successPass:successPass,
        viewEmployeeModal:viewEmployeeModal,
        rolCreate: rolCreate,
        viewActionController:viewActionController,
        createPosition:createPosition,
        createDivision:createDivision,
        createCargo:createCargo,
        viewPositionCode:viewPositionCode,
        
    };
})();
