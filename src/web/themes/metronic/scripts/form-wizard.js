var FormWizard=function()
{
    return {
        //main function to initiate the module
        init:function()
        {
            if(!jQuery().bootstrapWizard)
            {
                return;
            }

            /**
             *
             */
            function format(state)
            {
                if(!state.id1) return state.text; // optgroup
                return "<img class='flag' src='/themes/metronic/img/flags/" + state.id1.toLowerCase() + ".png'/>&nbsp;&nbsp;" + state.text;
            }

            /**
             *
             */
//            $("#Employee_country").select2(
//            {
//                placeholder: "Seleccione el País",
//                allowClear: true,
//                formatResult: format,
//                formatSelection: format,
//                escapeMarkup:function(m)
//                {
//                    return m;
//                }
//            });

            /**
             *
             */
            $("#Employee_state").select2(
            {
                placeholder: "Seleccione el Estado",
                allowClear: true,
                formatResult: format,
                formatSelection: format,
                escapeMarkup:function(m)
                {
                    return m;
                }
            });
            
            /**
             *
             */
            $("#Employee_city").select2(
            {
                placeholder: "Seleccione el Estado",
                allowClear: true,
                formatResult: format,
                formatSelection: format,
                escapeMarkup:function(m)
                {
                    return m;
                }
            });

            /**
             *
             */
            $('#form_wizard_1').find('#aceptar').hide();

            var form = $('#event-employee-form');
            var error = $('.alert-danger', form);
            var success = $('.alert-success', form);

            form.validate(
            {
                doNotHideMessage: true, //this option enables to show the error/success messages on tab switch.
                errorElement: 'span', //default input error message container
                errorClass: 'help-block', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                rules:
                {
                    //account
                    'Employee[first_name]':
                    {
                        required: true
                    },
                    'Employee[last_name]':
                    {
                        required: true
                    },
                    'Employee[identity_card]':
                    {
                        minlength: 7,
                        required: true,
                    },
                    'Employee[date_birth]':
                    {    
                        required: true,
                        date: true
                    },
                    'Employee[nationality]':
                    {  
                        required: true
                    },
                    'Employee[state_marital]':
                    {
                        required: true
                    },
                    level_education:
                    {
                        required: true
                    },
                    id_profession:
                    {
                        required: true
                    },
                    date_start:
                    {
                        date: true,  
                        required: true
                    },
                    date_end:
                    {
                        date: true,  
                        required: true
                    },
                    id_course:
                    {    
                        required: false
                    },
                    date_start_cur:
                    {   
                        required: false
                    },
                    date_end_cur:
                    {    
                        required: false
                    },
                    mask_cuenta:
                    {
                        required: true
                    },
                    emplo_state:
                    {
                        required: true
                    },
                    address_room:
                    {
                        required: true
                    },
                    'User[password]':
                    {
                        minlength: 5,
                        required: true
                    },
                    rpassword:
                    {
                        minlength: 5,
                        required: true,
                        equalTo: "#submit_form_password"
                    },
                    //profile
                    fullname:
                    {
                        required: true
                    },
                    'Employee[email_personal]':
                    {
                        required: true,
                        email: true
                    },
                    'Employee[email_company]':
                    {
                        required: true,
                        email: true
                    },
                    'Employee[cellphone]':
                    {
                        required: true
                    },
                    'Employee[officephone]':
                    {
                        required: true
                    },
                    'Employee[home_phone]':
                    {
                        required: true
                    },
                    extension_numeric:
                    {
                        required: false
                    },
                    skype:
                    {
                        required: true
                    },
                    branch_office:
                    {
                        required: true
                    },
                    management:
                    {
                        required: true
                    },
                    departament:
                    {
                        required: false
                    },
                    office:
                    {
                        required: false
                    },
                    gender:
                    {
                        required: true
                    },
                    address:
                    {
                        required: true
                    },
                    city:
                    {
                        required: true
                    },
                    country:
                    {
                        required: true
                    },
                    //payment
                    card_name:
                    {
                        required: true
                    },
                    type_acount:
                    {
                        required: true
                    },
                    type_currency:
                    {
                        required: true
                    },
                    acount_number:
                    {  
                        maxlength: 24,
                        required: true
                    },
                    card_cvc:
                    {
                        digits: true,
                        required: true,
                        minlength: 3,
                        maxlength: 4
                    },
                    card_expiry_date:
                    {
                        required: true
                    },
                    'payment[]':
                    {
                        required: true,
                        minlength: 1
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
    
            var displayConfirm=function()
            {
                $('#tab4 .form-control-static', form).each(function()
                {
                    var input=$('[name="'+$(this).attr("data-display")+'"]', form);
                    if(input.is(":text") || input.is("textarea"))
                    {
                        $(this).html(input.val());
                    }
                    else if(input.is("select"))
                    {
                        $(this).html(input.find('option:selected').text());
                    }
                    else if(input.is(":radio") && input.is(":checked"))
                    {
                        $(this).html(input.attr("data-title"));
                    }
                    else if($(this).attr("data-display") == 'payment')
                    {
                        var payment = [];
                        $('[name="payment[]"]').each(function()
                        {
                            payment.push($(this).attr('data-title'));
                        });
                        $(this).html(payment.join("<br>"));
                    }
                });
            }

            /*var handleTitle=function(tab, navigation, index)
            {
                if(current==0)
                {    
                    $('#form_wizard_1').find('#puesto_trabajo').hide();
                    $('#form_wizard_1').find('#aceptar').show();
                    $('#form_wizard_1').find('#remoto').hide();
                }
                else
                {
                    $('#form_wizard_1').find('#aceptar').show();
                    $('#form_wizard_1').find('#puesto_trabajo').hide();
                    $('#form_wizard_1').find('#remoto').hide();
                    $('#form_wizard_1').find('.btdeclare').show();
                }

                if(current >= total)
                {
                    $('#form_wizard_1').find('.button-next').show();
                    $('#form_wizard_1').find('.button-submit').hide();
                    $('#form_wizard_1').find('.btdeclare').show();
                }
                else
                {   
                    $('#form_wizard_1').find('.button-submit').show();
                    $('#form_wizard_1').find('.button-next').hide();
                    $('#form_wizard_1').find('.btdeclare').show();   
                }
                App.scrollTo($('.page-title'));
            }*/

            /*$('#form_wizard_1').bootstrapWizard(
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
                    $('.step-title', $('#form_wizard_1')).text('Paso '+current+' de '+total);
                },
                onInit:function(tab, navigation,index)
                {
                    $activeTab=$('ul.steps li.active');
                    $index=$activeTab.index();
                    $element=$('ul.steps li.active');
                    var percentage=100/navigation.find('li').length*$index;
                    $('#form_wizard_1').find('.progress-bar').css({width: percentage + '%'});
                }
            });*/

            $('#form_wizard_1').find('.button-previous').hide();
            $('#form_wizard_1 .button-submit').click(function () {
              
       
               
               
            }).hide();
            

        }

    };

}();