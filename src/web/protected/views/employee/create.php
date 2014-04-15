

<div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  Agregar Nuevo Empleado <!--<small>statistics and more</small>-->
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li>
                     <i class="icon-home"></i>
                     <a href="/">Inicio</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  <li><a href="/employee/">Datos Empleado</a></li>
                  <li class="pull-right">
                     <div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
                        <i class="icon-calendar"></i>
                        <span></span>
                        <i class="icon-angle-down"></i>
                     </div>
                  </li>
               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>

             
 <!-- BEGIN PAGE HEADER-->   
       
         <!-- END PAGE HEADER-->
         <!-- BEGIN PAGE CONTENT-->
         <div class="row">
            <div class="col-md-12">
               <div class="portlet box blue" id="form_wizard_1">
                  <div class="portlet-title">
                     <div class="caption">
                        <i class="icon-reorder"></i> Asistente para formularios - <span class="step-title">Paso 1 de 4</span>
                     </div>
                     <div class="tools hidden-xs">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                     </div>
                  </div>
                  <div class="portlet-body form">
                      
                                                 <?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'submit_form',
				'enableClientValidation'=>true,
				'clientOptions'=>array(
					'validateOnSubmit'=>true,
					),
                                               'htmlOptions'=>array(
'class'=>'form-horizontal'
)
				)
			);
			?>
                        <div class="form-wizard">
                           <div class="form-body">
                              <ul class="nav nav-pills nav-justified steps">
                                 <li>
                                    <a href="#tab1" data-toggle="tab" class="step">
                                    <span class="number">1</span>
                                    <span class="desc"><i class="icon-ok"></i> Datos Basicos</span>   
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#tab2" data-toggle="tab" class="step">
                                    <span class="number">2</span>
                                    <span class="desc"><i class="icon-ok"></i> Dirección</span>   
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#tab3" data-toggle="tab" class="step active">
                                    <span class="number">3</span>
                                    <span class="desc"><i class="icon-ok"></i> Datos Bancarios</span>   
                                    </a>
                                 </li>
                                 
<!--                                  <li>
                                    <a href="#tab3" data-toggle="tab" class="step active">
                                    <span class="number">3</span>
                                    <span class="desc"><i class="icon-ok"></i>familia</span>   
                                    </a>
                                 </li>-->
                                 <li>
                                    <a href="#tab4" data-toggle="tab" class="step">
                                    <span class="number">4</span>
                                    <span class="desc"><i class="icon-ok"></i> Confirmar</span>   
                                    </a> 
                                 </li>
                              </ul>
                              <div id="bar" class="progress progress-striped" role="progressbar">
                                 <div class="progress-bar progress-bar-success"></div>
                              </div>
                              <div class="tab-content">
                                 <div class="alert alert-danger display-none">
                                    <button class="close" data-dismiss="alert"></button>
                                    You have some form errors. Please check below.
                                 </div>
<!--                                 <div class="alert alert-success display-none">
                                    <button class="close" data-dismiss="alert"></button>
                                    Your form validation is successful!
                                 </div>-->


                                 <div class="tab-pane active" id="tab1">
                                    <h3 class="block">Proporcione detalles del Empleado</h3>
                                    <div class="form-group">
                                       <label class="control-label col-md-3">Nombre<span class="required">*</span></label>
                                       <div class="col-md-4">
                                        <?php echo $form->textField($model,'first_name', array('class'=>'form-control')); ?>
                                          <span class="help-block">Proporcione el Nombre del Empleado</span>
                                       </div>
                                    </div>
                            
                                    
           
                                    
                                    
                                    
                                     <div class="form-group">
                                       <label class="control-label col-md-3">Apellido<span class="required">*</span></label>
                                       <div class="col-md-4">
                                           <?php echo $form->textField($model,'last_name', array('class'=>'form-control')); ?>
                                          <span class="help-block">Proporcione el Apellido del Empleado</span>
                                       </div>
                                    </div>
                                    
                                    <div class="form-group">
                                       <label class="control-label col-md-3">Género<span class="required">*</span></label>
                                       <div class="col-md-4">
                                          <div class="radio-list">
                                             <label>
                                                 
                                             <input type="radio" name="sex" value="M" data-title="Masculino" />
                                             Masculino
                                             </label>
                                             <label>
                                             <input type="radio" name="sex" value="F" data-title="Femenino"/>
                                             Femenino
                                             </label>  
                                          </div>
                                          <div id="form_gender_error"></div>
                                       </div>
                                    </div>
                                    
                                     <div class="form-group">
                                       <label class="control-label col-md-3">Cédula de Identidad<span class="required">*</span></label>
                                       <div class="col-md-4">
                                           <?php echo $form->textField($model,'identity_card', array('class'=>'form-control', 'id'=>'mask_ci')); ?>
                                          <span class="help-block">Proporcione la Cédula del Empleado</span>
                                       </div>
                                    </div>
                                    
                                     <div class="form-group">
                                       <label class="control-label col-md-3">Fecha de Nacimiento<span class="required">*</span></label>
                                    
                                          <div class="col-md-4">
                                              <?php echo $form->textField($model,'date_birth', array('class'=>'form-control form-control-inline input-medium date-picker', 'id'=>'mask_ci')); ?>
                                             <span class="help-block">Seleccione la Fecha de Nacimiento del Empleado</span>
                                
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                       <label class="control-label col-md-3">Nacionalidad<span class="required">*</span></label>
                                       <div class="col-md-4">
                                            <?php echo $form->textField($model,'nationality', array('class'=>'form-control', 'id'=>'nationality')); ?>
                                          <span class="help-block">Nacionalidad del Empleado</span>
                                       </div>
                                    </div>
                                    
                                     <div class="form-group">
                                       <label class="control-label col-md-3">Estado Civil<span class="required">*</span></label>
                                       <div class="col-md-4">
                                          <input type="text" class="form-control" name="state_marital"/>
                                          <span class="help-block">Estado Civil del Empleado</span>
                                       </div>
                                    </div>
                                    
                                     <div class="form-group">
                                       <label class="control-label col-md-3">Grado de Educación<span class="required">*</span></label>
                                       <div class="col-md-4">
                                          <input type="text" class="form-control" name="level_education"/>
                                          <span class="help-block">Grado de Educación del Empleado</span>
                                          
    
                                       </div>
                                    </div>
<!--                                    <div class="form-group">
                                       <label class="control-label col-md-3">Password<span class="required">*</span></label>
                                       <div class="col-md-4">
                                          <input type="password" class="form-control" name="password" id="submit_form_password"/>
                                          <span class="help-block">Provide your password.</span>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label col-md-3">Confirm Password<span class="required">*</span></label>
                                       <div class="col-md-4">
                                          <input type="password" class="form-control" name="rpassword"/>
                                          <span class="help-block">Confirm your password</span>
                                       </div>
                                    </div>
                                  -->
                                 </div>
                                 <div class="tab-pane" id="tab2">
                                    <h3 class="block">Dirección de Habitación</h3>
                                    
                                    
                                    
                                     <div class="form-group">
                                         
                                       ddd
                                       <label class="control-label col-md-3">País</label>
                                       <div class="col-md-4">
                                          <select name="country" id="country_list" class="form-control">
                                             <option value=""></option>
                                             <option value="AF">Afghanistan</option>
                                             <option value="AL">Albania</option>
                                             <option value="DZ">Algeria</option>
                                             <option value="AS">American Samoa</option>
                                             <option value="AD">Andorra</option>
                                             <option value="AO">Angola</option>
                                             <option value="AI">Anguilla</option>
                                             <option value="AQ">Antarctica</option>
                                             <option value="AR">Argentina</option>
                                             <option value="AM">Armenia</option>
                                             <option value="AW">Aruba</option>
                                             <option value="AU">Australia</option>
                                             <option value="AT">Austria</option>
                                             <option value="AZ">Azerbaijan</option>
                                             <option value="BS">Bahamas</option>
                                             <option value="BH">Bahrain</option>
                                             <option value="BD">Bangladesh</option>
                                             <option value="BB">Barbados</option>
                                             <option value="BY">Belarus</option>
                                             <option value="BE">Belgium</option>
                                             <option value="BZ">Belize</option>
                                             <option value="BJ">Benin</option>
                                             <option value="BM">Bermuda</option>
                                             <option value="BT">Bhutan</option>
                                             <option value="BO">Bolivia</option>
                                             <option value="BA">Bosnia and Herzegowina</option>
                                             <option value="BW">Botswana</option>
                                             <option value="BV">Bouvet Island</option>
                                             <option value="BR">Brazil</option>
                                             <option value="IO">British Indian Ocean Territory</option>
                                             <option value="BN">Brunei Darussalam</option>
                                             <option value="BG">Bulgaria</option>
                                             <option value="BF">Burkina Faso</option>
                                             <option value="BI">Burundi</option>
                                             <option value="KH">Cambodia</option>
                                             <option value="CM">Cameroon</option>
                                             <option value="CA">Canada</option>
                                             <option value="CV">Cape Verde</option>
                                             <option value="KY">Cayman Islands</option>
                                             <option value="CF">Central African Republic</option>
                                             <option value="TD">Chad</option>
                                             <option value="CL">Chile</option>
                                             <option value="CN">China</option>
                                             <option value="CX">Christmas Island</option>
                                             <option value="CC">Cocos (Keeling) Islands</option>
                                             <option value="CO">Colombia</option>
                                             <option value="KM">Comoros</option>
                                             <option value="CG">Congo</option>
                                             <option value="CD">Congo, the Democratic Republic of the</option>
                                             <option value="CK">Cook Islands</option>
                                             <option value="CR">Costa Rica</option>
                                             <option value="CI">Cote d'Ivoire</option>
                                             <option value="HR">Croatia (Hrvatska)</option>
                                             <option value="CU">Cuba</option>
                                             <option value="CY">Cyprus</option>
                                             <option value="CZ">Czech Republic</option>
                                             <option value="DK">Denmark</option>
                                             <option value="DJ">Djibouti</option>
                                             <option value="DM">Dominica</option>
                                             <option value="DO">Dominican Republic</option>
                                             <option value="EC">Ecuador</option>
                                             <option value="EG">Egypt</option>
                                             <option value="SV">El Salvador</option>
                                             <option value="GQ">Equatorial Guinea</option>
                                             <option value="ER">Eritrea</option>
                                             <option value="EE">Estonia</option>
                                             <option value="ET">Ethiopia</option>
                                             <option value="FK">Falkland Islands (Malvinas)</option>
                                             <option value="FO">Faroe Islands</option>
                                             <option value="FJ">Fiji</option>
                                             <option value="FI">Finland</option>
                                             <option value="FR">France</option>
                                             <option value="GF">French Guiana</option>
                                             <option value="PF">French Polynesia</option>
                                             <option value="TF">French Southern Territories</option>
                                             <option value="GA">Gabon</option>
                                             <option value="GM">Gambia</option>
                                             <option value="GE">Georgia</option>
                                             <option value="DE">Germany</option>
                                             <option value="GH">Ghana</option>
                                             <option value="GI">Gibraltar</option>
                                             <option value="GR">Greece</option>
                                             <option value="GL">Greenland</option>
                                             <option value="GD">Grenada</option>
                                             <option value="GP">Guadeloupe</option>
                                             <option value="GU">Guam</option>
                                             <option value="GT">Guatemala</option>
                                             <option value="GN">Guinea</option>
                                             <option value="GW">Guinea-Bissau</option>
                                             <option value="GY">Guyana</option>
                                             <option value="HT">Haiti</option>
                                             <option value="HM">Heard and Mc Donald Islands</option>
                                             <option value="VA">Holy See (Vatican City State)</option>
                                             <option value="HN">Honduras</option>
                                             <option value="HK">Hong Kong</option>
                                             <option value="HU">Hungary</option>
                                             <option value="IS">Iceland</option>
                                             <option value="IN">India</option>
                                             <option value="ID">Indonesia</option>
                                             <option value="IR">Iran (Islamic Republic of)</option>
                                             <option value="IQ">Iraq</option>
                                             <option value="IE">Ireland</option>
                                             <option value="IL">Israel</option>
                                             <option value="IT">Italy</option>
                                             <option value="JM">Jamaica</option>
                                             <option value="JP">Japan</option>
                                             <option value="JO">Jordan</option>
                                             <option value="KZ">Kazakhstan</option>
                                             <option value="KE">Kenya</option>
                                             <option value="KI">Kiribati</option>
                                             <option value="KP">Korea, Democratic People's Republic of</option>
                                             <option value="KR">Korea, Republic of</option>
                                             <option value="KW">Kuwait</option>
                                             <option value="KG">Kyrgyzstan</option>
                                             <option value="LA">Lao People's Democratic Republic</option>
                                             <option value="LV">Latvia</option>
                                             <option value="LB">Lebanon</option>
                                             <option value="LS">Lesotho</option>
                                             <option value="LR">Liberia</option>
                                             <option value="LY">Libyan Arab Jamahiriya</option>
                                             <option value="LI">Liechtenstein</option>
                                             <option value="LT">Lithuania</option>
                                             <option value="LU">Luxembourg</option>
                                             <option value="MO">Macau</option>
                                             <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                             <option value="MG">Madagascar</option>
                                             <option value="MW">Malawi</option>
                                             <option value="MY">Malaysia</option>
                                             <option value="MV">Maldives</option>
                                             <option value="ML">Mali</option>
                                             <option value="MT">Malta</option>
                                             <option value="MH">Marshall Islands</option>
                                             <option value="MQ">Martinique</option>
                                             <option value="MR">Mauritania</option>
                                             <option value="MU">Mauritius</option>
                                             <option value="YT">Mayotte</option>
                                             <option value="MX">Mexico</option>
                                             <option value="FM">Micronesia, Federated States of</option>
                                             <option value="MD">Moldova, Republic of</option>
                                             <option value="MC">Monaco</option>
                                             <option value="MN">Mongolia</option>
                                             <option value="MS">Montserrat</option>
                                             <option value="MA">Morocco</option>
                                             <option value="MZ">Mozambique</option>
                                             <option value="MM">Myanmar</option>
                                             <option value="NA">Namibia</option>
                                             <option value="NR">Nauru</option>
                                             <option value="NP">Nepal</option>
                                             <option value="NL">Netherlands</option>
                                             <option value="AN">Netherlands Antilles</option>
                                             <option value="NC">New Caledonia</option>
                                             <option value="NZ">New Zealand</option>
                                             <option value="NI">Nicaragua</option>
                                             <option value="NE">Niger</option>
                                             <option value="NG">Nigeria</option>
                                             <option value="NU">Niue</option>
                                             <option value="NF">Norfolk Island</option>
                                             <option value="MP">Northern Mariana Islands</option>
                                             <option value="NO">Norway</option>
                                             <option value="OM">Oman</option>
                                             <option value="PK">Pakistan</option>
                                             <option value="PW">Palau</option>
                                             <option value="PA">Panama</option>
                                             <option value="PG">Papua New Guinea</option>
                                             <option value="PY">Paraguay</option>
                                             <option value="PE">Peru</option>
                                             <option value="PH">Philippines</option>
                                             <option value="PN">Pitcairn</option>
                                             <option value="PL">Poland</option>
                                             <option value="PT">Portugal</option>
                                             <option value="PR">Puerto Rico</option>
                                             <option value="QA">Qatar</option>
                                             <option value="RE">Reunion</option>
                                             <option value="RO">Romania</option>
                                             <option value="RU">Russian Federation</option>
                                             <option value="RW">Rwanda</option>
                                             <option value="KN">Saint Kitts and Nevis</option>
                                             <option value="LC">Saint LUCIA</option>
                                             <option value="VC">Saint Vincent and the Grenadines</option>
                                             <option value="WS">Samoa</option>
                                             <option value="SM">San Marino</option>
                                             <option value="ST">Sao Tome and Principe</option>
                                             <option value="SA">Saudi Arabia</option>
                                             <option value="SN">Senegal</option>
                                             <option value="SC">Seychelles</option>
                                             <option value="SL">Sierra Leone</option>
                                             <option value="SG">Singapore</option>
                                             <option value="SK">Slovakia (Slovak Republic)</option>
                                             <option value="SI">Slovenia</option>
                                             <option value="SB">Solomon Islands</option>
                                             <option value="SO">Somalia</option>
                                             <option value="ZA">South Africa</option>
                                             <option value="GS">South Georgia and the South Sandwich Islands</option>
                                             <option value="ES">Spain</option>
                                             <option value="LK">Sri Lanka</option>
                                             <option value="SH">St. Helena</option>
                                             <option value="PM">St. Pierre and Miquelon</option>
                                             <option value="SD">Sudan</option>
                                             <option value="SR">Suriname</option>
                                             <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                             <option value="SZ">Swaziland</option>
                                             <option value="SE">Sweden</option>
                                             <option value="CH">Switzerland</option>
                                             <option value="SY">Syrian Arab Republic</option>
                                             <option value="TW">Taiwan, Province of China</option>
                                             <option value="TJ">Tajikistan</option>
                                             <option value="TZ">Tanzania, United Republic of</option>
                                             <option value="TH">Thailand</option>
                                             <option value="TG">Togo</option>
                                             <option value="TK">Tokelau</option>
                                             <option value="TO">Tonga</option>
                                             <option value="TT">Trinidad and Tobago</option>
                                             <option value="TN">Tunisia</option>
                                             <option value="TR">Turkey</option>
                                             <option value="TM">Turkmenistan</option>
                                             <option value="TC">Turks and Caicos Islands</option>
                                             <option value="TV">Tuvalu</option>
                                             <option value="UG">Uganda</option>
                                             <option value="UA">Ukraine</option>
                                             <option value="AE">United Arab Emirates</option>
                                             <option value="GB">United Kingdom</option>
                                             <option value="US">United States</option>
                                             <option value="UM">United States Minor Outlying Islands</option>
                                             <option value="UY">Uruguay</option>
                                             <option value="UZ">Uzbekistan</option>
                                             <option value="VU">Vanuatu</option>
                                             <option value="VE">Venezuela</option>
                                             <option value="VN">Viet Nam</option>
                                             <option value="VG">Virgin Islands (British)</option>
                                             <option value="VI">Virgin Islands (U.S.)</option>
                                             <option value="WF">Wallis and Futuna Islands</option>
                                             <option value="EH">Western Sahara</option>
                                             <option value="YE">Yemen</option>
                                             <option value="ZM">Zambia</option>
                                             <option value="ZW">Zimbabwe</option>
                                          </select>
                                       </div>
                                    </div>
                                    
                                    <div class="form-group">
                                       <label class="control-label col-md-3">Estado<span class="required">*</span></label>
                                            <div class="col-md-4">
                                                 <input type="text" class="form-control" name="emplo_state"/>
                                                 <span class="help-block">Proporcione el Estado de Residencia</span>
                                            </div>
                                    </div>
                                    
                                    <div class="form-group">
                                       <label class="control-label col-md-3">Ciudad<span class="required">*</span></label>
                                            <div class="col-md-4">
                                                 <input type="text" class="form-control" name="city"/>
                                                 <span class="help-block">Proporcione la Ciudad de Residencia</span>
                                            </div>
                                    </div>
                                    
                                    <div class="form-group">
                                       <label class="control-label col-md-3">Calle/Avenida<span class="required">*</span></label>
                                            <div class="col-md-4">
                                                 <input type="text" class="form-control" name="address_room"/>
                                                 <span class="help-block">Proporcione la Calle o Avenida de la Residencia</span>
                                            </div>
                                    </div>
                                    
                                    
                                      <div class="form-group">
                                       <label class="control-label col-md-3">Correo Personal<span class="required">*</span></label>
                                       <div class="col-md-4">
                                          <input type="text" class="form-control" name="email"/>
                                          <span class="help-block">Proporcione la dirección de Correo de Personal</span>
                                       </div>
                                    </div>
                                    
                                      <div class="form-group">
                                       <label class="control-label col-md-3">Skype<span class="required">*</span></label>
                                            <div class="col-md-4">
                                                 <input type="text" class="form-control" name="skype"/>
                                                 <span class="help-block">Proporcione el Skype del Empleado</span>
                                            </div>
                                     </div>
                                    
                                 
                                     <div class="form-group">
                                      <label class="control-label col-md-3">Teléfono</label>
                                          <div class="col-md-4">
                                             <input class="form-control" id="cellphone" name="cellphone" type="text"  />
                                             <span class="help-block">(04XX) XXX-XXXX</span>
                                          </div>
                                     </div>
                                    
                                    
                                     <h3 class="block">Dirección Organizacional</h3>
                                    
                                     
                                      <div class="form-group">
                                       <label class="control-label col-md-3">Sucursal<span class="required">*</span></label>
                                            <div class="col-md-4">
                                                 <input type="text" class="form-control" name="branch_office"/>
                                                 <span class="help-block">Sucursal donde labora el Empleado</span>
                                            </div>
                                     </div>
                                     
                                      <div class="form-group">
                                       <label class="control-label col-md-3">Gerencia<span class="required">*</span></label>
                                            <div class="col-md-4">
                                                 <input type="text" class="form-control" name="management"/>
                                                 <span class="help-block">Sucursal donde labora el Empleado</span>
                                            </div>
                                     </div>
                                     
                                     <div class="form-group">
                                       <label class="control-label col-md-3">Departamento</label>
                                            <div class="col-md-4">
                                                 <input type="text" class="form-control" name="departament"/>
                                                 <span class="help-block">Departamento donde labora el Empleado</span>
                                            </div>
                                     </div>
                                     
                                     <div class="form-group">
                                       <label class="control-label col-md-3">Oficina</label>
                                            <div class="col-md-4">
                                                 <input type="text" class="form-control" name="office"/>
                                                 <span class="help-block">Oficina donde labora el Empleado</span>
                                            </div>
                                     </div>
                                    
                                    <div class="form-group">
                                      <label class="control-label col-md-3">Teléfono de Oficina</label>
                                          <div class="col-md-4">
                                              <input class="form-control" id="officephone" name="officephone" type="text"  />
                                             <span class="help-block">(02XX) XXX-XXXX</span>
                                          </div>
                                     </div>
                                     
                                     <div class="form-group">
                                      <label class="control-label col-md-3">Extensión de Oficina</label>
                                          <div class="col-md-4">
                                              <input class="form-control" id="extension_numeric" name="extension_numeric" type="text"  />
                                             <span class="help-block">XXX</span>
                                          </div>
                                     </div>

                                    <div class="form-group">
                                         <label class="control-label col-md-3">Correo Corporativo<span class="required">*</span></label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="email_company"/>
                                                <span class="help-block">Proporcione la dirección de Correo Corporativo</span>
                                            </div>
                                    </div>

                                    
                                 </div>
                                 <div class="tab-pane" id="tab3">
                                    <h3 class="block">Datos Bancarios</h3>
                                    <div class="form-group">
                                       <label class="control-label col-md-3">Nombre de la Entidad Bancaria<span class="required">*</span></label>
                                       <div class="col-md-4">
                                          <input type="text" class="form-control" name="card_name" />
                                          <span class="help-block"></span>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label col-md-3">Número de Cuenta<span class="required">*</span></label>
                                       <div class="col-md-4">
                                          <input type="text" class="form-control" id="mask_acount" name="acount_number"/>
                                          <span class="help-block"></span>
                                       </div>
                                    </div>
                                    
                                     <div class="form-group">
                                      <label class="control-label col-md-3">Tipo de Cuenta<span class="required">*</span></label>
                                          <div class="col-md-4">
                                              <input class="form-control" id="mask_cuenta" type="text" name="type_acount"  />
                                             <span class="help-block">Tipo de Cuenta del Empleado</span>
                                          </div>
                                     </div>
                                   
                                    
                                     <div class="form-group">
                                      <label class="control-label col-md-3">Tipo de Moneda<span class="required">*</span></label>
                                          <div class="col-md-4">
                                              <input class="form-control" id="mask_cuenta" type="text" name="type_currency"  />
                                         
                                          </div>
                                     </div>
                                  
                                 </div>
                                 <div class="tab-pane" id="tab4">
                                    <h3 class="block">Confirmar Datos del Empleado</h3>
                                    <h4 class="form-section">Datos Básico</h4>
                                    
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                               <label class="control-label col-md-3">Nombre:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="first_name"></p>
                                                </div>
                                            
                                        </div>
                                       <div class="form-group">
                                            
                                                   <label class="control-label col-md-3">Apellido:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="last_name"></p>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            
                                                   <label class="control-label col-md-3">Género:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="gender"></p>
                                                </div>
                                        </div>

                                         <div class="form-group">
                                            
                                                   <label class="control-label col-md-3">Estado Civil:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="state_marital"></p>
                                                </div>
                                        </div>
                                    </div>
                                    
                             
                                        <div class="col-md-6">
                                        <div class="form-group">
                                               <label class="control-label col-md-6">Cédula:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="identity_card"></p>
                                                </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            
                                                   <label class="control-label col-md-6">Fecha de Nacimiento:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="date_birth"></p>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            
                                                   <label class="control-label col-md-6">Nacionalidad:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="nationality"></p>
                                                </div>
                                        </div>
                                            
                                             <div class="form-group">
                                            
                                                   <label class="control-label col-md-6">Grado de Educación:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="level_education"></p>
                                                </div>
                                        </div>
                                
                                        </div>
                                    

                                    <h4 class="form-section">Dirección de Habitación</h4>
                                    
                                      <div class="col-md-6">
                                        <div class="form-group">
                                               <label class="control-label col-md-3">País:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="country"></p>
                                                </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            
                                                   <label class="control-label col-md-3">Estado:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="emplo_state"></p>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            
                                                   <label class="control-label col-md-3">Ciudad:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="city"></p>
                                                </div>
                                        </div>
                                            
                                             <div class="form-group">
                                            
                                                   <label class="control-label col-md-3">Calle/Avenida:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="address_room"></p>
                                                </div>
                                            </div>
                                
                                        </div>
                                    
                                    
                                     <div class="col-md-6">
                                        <div class="form-group">
                                               <label class="control-label col-md-6">Correo Personal:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="email"></p>
                                                </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            
                                                   <label class="control-label col-md-6">Skype:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="skype"></p>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            
                                                   <label class="control-label col-md-6">Teléfono (Personal):</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="cellphone"></p>
                                                </div>
                                        </div>
                                            
                                             <div class="form-group">
                                            
                                                   <label class="control-label col-md-6">&nbsp;&nbsp;</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="&nbsp;&nbsp;"></p>
                                                </div>
                                            </div>
                                
                                        </div>
                                    
                                      <h4 class="form-section">Dirección Organizacional</h4>
                                    
                                      <div class="col-md-6">
                                        <div class="form-group">
                                               <label class="control-label col-md-3">Sucursal:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="branch_office"></p>
                                                </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            
                                                   <label class="control-label col-md-3">Gerencia:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="management"></p>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            
                                                   <label class="control-label col-md-3">Departamento:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="departament"></p>
                                                </div>
                                        </div>
                                            
                                             <div class="form-group">
                                            
                                                   <label class="control-label col-md-3">Oficina:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="office"></p>
                                                </div>
                                        </div>
                                
                                        </div>
                                    
                                    
                                     <div class="col-md-6">
                                        <div class="form-group">
                                               <label class="control-label col-md-6">Teléfono de Oficina:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="officephone"></p>
                                                </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            
                                                   <label class="control-label col-md-6">Extensión de Oficina:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="extension_numeric"></p>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            
                                                   <label class="control-label col-md-6">Correo Corporativo:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="email_company"></p>
                                                </div>
                                        </div>
                                            
                                       <div class="form-group">
                                            
                                                   <label class="control-label col-md-6">&nbsp;&nbsp;</label>
                                              
                                        </div>

                                        </div>

                                      <h4 class="form-section">Datos Bancarios</h4>
                                    
                                      <div class="col-md-6">
                                        <div class="form-group">
                                               <label class="control-label col-md-4">Entidad Bancaria:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="card_name"></p>
                                                </div>
                                        </div>
                                       <div class="form-group">
                                              <label class="control-label col-md-4">Número de Cuenta :</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="acount_number"></p>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                              <label class="control-label col-md-4">Tipo de Cuenta:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="type_acount"></p>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                              <label class="control-label col-md-4">Tipo de Nómina:</label>
                                                 <div class="col-md-4">
                                                    <p class="form-control-static" data-display="type_currency"></p>
                                                </div>
                                        </div>
                                       </div>
                                    
                                    
                                     <div class="col-md-6">
                                        <div class="form-group">
                                               <label class="control-label col-md-6">&nbsp;</label>
                                        </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-6">&nbsp;</label>
                                            </div>
                                                <div class="form-group">
                                                   <label class="control-label col-md-6">&nbsp;</label>
                                                </div>
                                            <div class="form-group">
                                                   <label class="control-label col-md-6">&nbsp;</label>
                                             </div>

                                        </div>

                                      <h4 class="form-section">&nbsp;&nbsp;</h4>

                                 </div>
                                 </div>                                    
                              </div>
                           </div>
                           <div class="form-actions fluid">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="col-md-offset-3 col-md-9">
                                       <a href="javascript:;" class="btn default button-previous">
                                       <i class="m-icon-swapleft"></i> Atrás
                                       </a>
                                       <a href="javascript:;" class="btn blue button-next">
                                       Siguiente <i class="m-icon-swapright m-icon-white"></i>
                                       </a>
                                        
                                          
                                       <input type="submit" value="enviar" class="btn blue button-submit"/>                           
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

     <?php $this->endWidget(); ?>
                  </div>
               </div>
            </div>
         </div>
       
  
   <!-- END PAGE LEVEL SCRIPTS -->