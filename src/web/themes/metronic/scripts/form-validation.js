var FormValidation = function () {

    var handleValidation1 = function() {
            var form1 = $('#user-form');
            var error1 = $('.alert-danger', form1);
            var success1 = $('.alert-success', form1);

            form1.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",
                rules: {
                    
                    
                    'User[password]':{
                         required: true,
                         minlength: 5
                        
                    },
                    
                     'User[confir_pass1]':{
                         required: true,
                         minlength: 5,
                         equalTo: "#User_password"
                        
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success1.hide();
                    error1.show();
                    App.scrollTo(error1, -200);
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    label
                        .closest('.form-group').removeClass('has-error'); // set success class to the control group
                },

                submitHandler: function (form1) {
                    success1.show();
                    error1.hide();
                    form1.submit();
                }
            });


    }
    
    return {
        init: function () {
            handleValidation1();

        }

    };

}();