<?php session_start();// Starting Session ?>
<!doctype html>
<html>
<head>
    
  <title> Look Up </title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</head>

<body style="background-image: url('image/back3.jpeg'); background-repeat:no-repeat; background-size:cover;" >

<!-- php inject our Navigation using the require method -->
<?php require_once "nav.php"; ?>

 <div class="large-12 columns" style="margin-top:6%;">
      
        
        <div class="row" style="text-align:center ">
            <div class="col-sm-10 col-sm-push-1" translate="no">

<form method="post" action="registerProcess.php" enctype ='multipart/form-data' style="width:80%; margin:auto;">
    <div class="information show">
     <div class="row panel panel-primary text-left">
                    <div class="panel-heading">
                    <h4 class="text-center"><img src="image/dinner.svg" style="width:6%;" > &nbsp;Restaurante Admin </h4>
                    </div>
                    <div class="panel-body" id="">
                        <div class="row ">
                             <div class="col-sm-3">
                            <div class="form-group">
<label class="control-label">Restaurante Name: <span class="starstar" style="color:#cc0000"> *</span></label>
	<input id="restaurante_name" class="form-control" type="text" name="restaurante_name" required>

                                 </div>
                            </div>
                            <div class="col-sm-3">
                            <div class="form-group">
<label class="control-label">First Name: <span class="starstar" style="color:#cc0000"> *</span></label>
	<input id="first_name" class="form-control" type="text" name="first_name" required>

                                 </div>
                            </div>
                            <div class="col-sm-3">
                            <div class="form-group">
<label class="control-label">Last Name: <span class="starstar" style="color:#cc0000"> *</span></label>
	<input id="last_name" class="form-control" type="text" name="last_name" required>

                                 </div>
                            </div>
                               <div class="col-sm-3">
                            <div class="form-group"> 

<label class="control-label">E-mail: <span class="starstar" style="color:#cc0000"> *</span></label>
	<input id="email" class="form-control" type="email" name="email" required>

                                   </div>
                            </div>
                        </div>
                        <div class="row ">
                                <div class="col-sm-4">
                            <div class="form-group">

<label class="control-label">User Name: <span class="starstar" style="color:#cc0000"> *</span></label>
	<input id="username" class="form-control" type="text" name="username" required>

                                    </div>
                            </div>
                                <div class="col-sm-4">
                            <div class="form-group">
                                

<label class="control-label">Password: <span class="starstar" style="color:#cc0000"> *</span></label>
	<input id="password" class="form-control" type="password" name="password" required>

                                    </div>
                            </div>
                            <div class="col-sm-4">
                            <div class="form-group">

<label class="control-label">Confirm Password: <span class="starstar" style="color:#cc0000"> *</span></label>
	<input id="confirm_password" class="form-control" type="password" name="confirm_password" required>

                                    </div>
                            </div>
                        </div>
                        <div class="row ">
                             <div class="col-sm-3">
                            <div class="form-group">
<label class="control-label">Street: <span class="starstar" style="color:#cc0000"> *</span></label>
	<input id="street" class="form-control" type="text" name="street" required>

                                 </div>
                            </div>
                            <div class="col-sm-3">
                            <div class="form-group">
<label class="control-label">City: <span class="starstar" style="color:#cc0000"> *</span></label>
	<input id="city" class="form-control" type="text" name="city" required>

                                 </div>
                            </div>
                            <div class="col-sm-3">
                            <div class="form-group">
<label class="control-label">Zip Code: <span class="starstar" style="color:#cc0000"> *</span></label>
	<input id="zip" class="form-control" type="text" name="zip" required>

                                 </div>
                            </div>
                               <div class="col-sm-3">
                            <div class="form-group"> 

<label class="control-label">State: <span class="starstar" style="color:#cc0000"> *</span></label>
	<input id="state" class="form-control" type="email" name="state" required>

                                   </div>
                            </div>
                        </div>
                        <div class="row"> 
                            <div class="col-sm-6">
                              <div class="form-group"> 

<label class="control-label">Phone: <span class="starstar" style="color:#cc0000"> *</span></label>
	<input id="phone" class="form-control" type="text" name="phone" onkeyup="numbersOnly(this)" required>

                                   </div>
                            </div>
                             <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="country">Country<span class="starstar" style="color:#cc0000"> *</span></label>
                                    <select class="form-control" id="country" name="country" required="required">
                                    <option value="US">United States</option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua and Barbuda</option>
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
                                    <option value="BO">Bolivia, Plurinational State of</option>
                                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                    <option value="BA">Bosnia and Herzegovina</option>
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
                                    <option value="CD">Congo, The Democratic Republic of the</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CW">Curaçao</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="CI">Côte d'Ivoire</option>
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
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">Heard Island and McDonald Islands</option>
                                    <option value="VA">Holy See (Vatican City State)</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran, Islamic Republic of</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Ireland</option>
                                    <option value="IM">Isle of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
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
                                    <option value="LY">Libya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao</option>
                                    <option value="MK">Macedonia, Republic of</option>
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
                                    <option value="ME">Montenegro</option>
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
                                    <option value="PS">Palestine, State of</option>
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
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russian Federation</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="RE">Réunion</option>
                                    <option value="BL">Saint Barthélemy</option>
                                    <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                    <option value="KN">Saint Kitts and Nevis</option>
                                    <option value="LC">Saint Lucia</option>
                                    <option value="MF">Saint Martin (French part)</option>
                                    <option value="PM">Saint Pierre and Miquelon</option>
                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                    <option value="WS">Samoa</option>
                                    <option value="SM">San Marino</option>
                                    <option value="ST">Sao Tome and Principe</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="RS">Serbia</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SX">Sint Maarten (Dutch part)</option>
                                    <option value="SK">Slovakia</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                                    <option value="SS">South Sudan</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">Syrian Arab Republic</option>
                                    <option value="TW">Taiwan</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">Tanzania, United Republic of</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TL">Timor-Leste</option>
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
                                    <option value="VE">Venezuela, Bolivarian Republic of</option>
                                    <option value="VN">Viet Nam</option>
                                    <option value="VG">Virgin Islands, British</option>
                                    <option value="VI">Virgin Islands, U.S.</option>
                                    <option value="WF">Wallis and Futuna</option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                    <option value="AX">Åland Islands</option></select>
                                    </div>        
                                </div>
                         

                            </div><br>
                          <div class="btn-group-justify text-center">
                                      <button id="bOne" type="button" class="btn btn-info disabled" onclick="alert('can not go back')">Back</button>
                                      <button id="nOne" type="button" class="btn btn-info" onclick="nextOne(this)">Next</button>
                                    </div>
                              
                              
                        </div>
         </div>
    
    </div>
    
    <div class="payment hide">
                    
                     <div class="row panel panel-success ">
                    <div class="panel-heading text-center">
                    <h4 ><span class="glyphicon glyphicon-credit-card" ></span> Payment Method &amp; Currency</h4>
                    </div>
                    <div class="panel-body" id="pmc">
                        <div class="row ">
                            <div class="col-md-6 col-md-push-3 text-center">
                                <div class="form-group"><label class="control-label" for="payment_method">Payment Method</label>
                                    <select class="form-control payment_method" id="payment_method" name="payment_method"><option data-amount-subdivided-label="One-Time Amount" data-payment_count="1" data-processing-fee-percent="3.0" data-reconcile-currency="USD" data-slug="acceptiva_credit_card" value="513">Credit Card (one-time)</option>
                                    <option data-amount-subdivided-label="Monthly Amount" data-payment_count="12" data-processing-fee-percent="3.0" data-reconcile-currency="USD" data-slug="acceptiva_credit_card" value="256">Credit Card (recurring)</option>
                                    <option data-amount-subdivided-label="One-Time Amount" data-payment_count="1" data-processing-fee-percent="3.0" data-reconcile-currency="USD" data-slug="acceptiva_echeck" value="254">E-Check (one-time)</option>
                                    <option data-amount-subdivided-label="Monthly Amount" data-payment_count="12" data-processing-fee-percent="3.0" data-reconcile-currency="USD" data-slug="acceptiva_echeck" value="255">E-Check (recurring)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                                <div class="col-md-6 col-md-push-3 text-center ">
                                  
                                    <div class="form-group-wrapper">
                                        <select class="currency_select currency_select_all form-control" id="currency" name="currency"><option data-currency-symbol="$" value="USD">United States Dollar (USD)</option>
                                        <option data-currency-symbol="؋" value="AFN">Afghan Afghani (AFN)</option>
                                        <option data-currency-symbol="L" value="ALL">Albanian Lek (ALL)</option>
                                        <option data-currency-symbol="د.ج" value="DZD">Algerian Dinar (DZD)</option>
                                        <option data-currency-symbol="Kz" value="AOA">Angolan Kwanza (AOA)</option>
                                        <option data-currency-symbol="$" value="ARS">Argentine Peso (ARS)</option>
                                        <option data-currency-symbol="դր." value="AMD">Armenian Dram (AMD)</option>
                                        <option data-currency-symbol="ƒ" value="AWG">Aruban Florin (AWG)</option>
                                        <option data-currency-symbol="$" value="AUD">Australian Dollar (AUD)</option>
                                        <option data-currency-symbol="₼" value="AZN">Azerbaijani Manat (AZN)</option>
                                        <option data-currency-symbol="$" value="BSD">Bahamian Dollar (BSD)</option>
                                        <option data-currency-symbol="ب.د" value="BHD">Bahraini Dinar (BHD)</option>
                                        <option data-currency-symbol="৳" value="BDT">Bangladeshi Taka (BDT)</option>
                                        <option data-currency-symbol="$" value="BBD">Barbadian Dollar (BBD)</option>

                                        <option data-currency-symbol="$" value="BZD">Belize Dollar (BZD)</option>
                                        <option data-currency-symbol="$" value="BMD">Bermudian Dollar (BMD)</option>
                                        <option data-currency-symbol="Nu." value="BTN">Bhutanese Ngultrum (BTN)</option>

                                        <option data-currency-symbol="Bs." value="BOB">Bolivian Boliviano (BOB)</option>
                                        <option data-currency-symbol="КМ" value="BAM">Bosnia and Herzegovina Convertible Mark (BAM)</option>
                                        <option data-currency-symbol="P" value="BWP">Botswana Pula (BWP)</option>
                                        <option data-currency-symbol="R$" value="BRL">Brazilian Real (BRL)</option>
                                        <option data-currency-symbol="£" value="GBP">British Pound (GBP)</option>
                                        <option data-currency-symbol="$" value="BND">Brunei Dollar (BND)</option>
                                        <option data-currency-symbol="лв" value="BGN">Bulgarian Lev (BGN)</option>
                                        <option data-currency-symbol="Fr" value="BIF">Burundian Franc (BIF)</option>
                                        <option data-currency-symbol="៛" value="KHR">Cambodian Riel (KHR)</option>
                                        <option data-currency-symbol="$" value="CAD">Canadian Dollar (CAD)</option>
                                        <option data-currency-symbol="$" value="CVE">Cape Verdean Escudo (CVE)</option>
                                        <option data-currency-symbol="$" value="KYD">Cayman Islands Dollar (KYD)</option>
                                        <option data-currency-symbol="Fr" value="XAF">Central African Cfa Franc (XAF)</option>
                                        <option data-currency-symbol="Fr" value="XPF">Cfp Franc (XPF)</option>
                                        <option data-currency-symbol="$" value="CLP">Chilean Peso (CLP)</option>
                                        <option data-currency-symbol="¥" value="CNY">Chinese Renminbi Yuan (CNY)</option>
                                        <option data-currency-symbol="$" value="COP">Colombian Peso (COP)</option>
                                        <option data-currency-symbol="Fr" value="KMF">Comorian Franc (KMF)</option>
                                        <option data-currency-symbol="Fr" value="CDF">Congolese Franc (CDF)</option>
                                        <option data-currency-symbol="₡" value="CRC">Costa Rican Colón (CRC)</option>
                                        <option data-currency-symbol="kn" value="HRK">Croatian Kuna (HRK)</option>

                                        <option data-currency-symbol="$" value="CUP">Cuban Peso (CUP)</option>
                                        <option data-currency-symbol="Kč" value="CZK">Czech Koruna (CZK)</option>
                                        <option data-currency-symbol="kr" value="DKK">Danish Krone (DKK)</option>
                                        <option data-currency-symbol="Fdj" value="DJF">Djiboutian Franc (DJF)</option>
                                        <option data-currency-symbol="$" value="DOP">Dominican Peso (DOP)</option>
                                        <option data-currency-symbol="$" value="XCD">East Caribbean Dollar (XCD)</option>
                                        <option data-currency-symbol="ج.م" value="EGP">Egyptian Pound (EGP)</option>
                                        <option data-currency-symbol="Nfk" value="ERN">Eritrean Nakfa (ERN)</option>

                                        <option data-currency-symbol="Br" value="ETB">Ethiopian Birr (ETB)</option>
                                        <option data-currency-symbol="€" value="EUR">Euro (EUR)</option>
                                        <option data-currency-symbol="£" value="FKP">Falkland Pound (FKP)</option>
                                        <option data-currency-symbol="$" value="FJD">Fijian Dollar (FJD)</option>
                                        <option data-currency-symbol="D" value="GMD">Gambian Dalasi (GMD)</option>
                                        <option data-currency-symbol="ლ" value="GEL">Georgian Lari (GEL)</option>

                                        <option data-currency-symbol="₵" value="GHS">Ghanaian Cedi (GHS)</option>
                                        <option data-currency-symbol="£" value="GIP">Gibraltar Pound (GIP)</option>

                                        <option data-currency-symbol="Q" value="GTQ">Guatemalan Quetzal (GTQ)</option>
                                        <option data-currency-symbol="Fr" value="GNF">Guinean Franc (GNF)</option>
                                        <option data-currency-symbol="$" value="GYD">Guyanese Dollar (GYD)</option>
                                        <option data-currency-symbol="G" value="HTG">Haitian Gourde (HTG)</option>
                                        <option data-currency-symbol="L" value="HNL">Honduran Lempira (HNL)</option>
                                        <option data-currency-symbol="$" value="HKD">Hong Kong Dollar (HKD)</option>
                                        <option data-currency-symbol="Ft" value="HUF">Hungarian Forint (HUF)</option>
                                        <option data-currency-symbol="kr" value="ISK">Icelandic Króna (ISK)</option>
                                        <option data-currency-symbol="₹" value="INR">Indian Rupee (INR)</option>
                                        <option data-currency-symbol="Rp" value="IDR">Indonesian Rupiah (IDR)</option>

                                        <option data-currency-symbol="ع.د" value="IQD">Iraqi Dinar (IQD)</option>
                                        <option data-currency-symbol="₪" value="ILS">Israeli New Sheqel (ILS)</option>
                                        <option data-currency-symbol="$" value="JMD">Jamaican Dollar (JMD)</option>
                                        <option data-currency-symbol="¥" value="JPY">Japanese Yen (JPY)</option>


                                        <option data-currency-symbol="د.ا" value="JOD">Jordanian Dinar (JOD)</option>
                                        <option data-currency-symbol="〒" value="KZT">Kazakhstani Tenge (KZT)</option>
                                        <option data-currency-symbol="KSh" value="KES">Kenyan Shilling (KES)</option>
                                        <option data-currency-symbol="د.ك" value="KWD">Kuwaiti Dinar (KWD)</option>
                                        <option data-currency-symbol="som" value="KGS">Kyrgyzstani Som (KGS)</option>
                                        <option data-currency-symbol="₭" value="LAK">Lao Kip (LAK)</option>
                                        <option data-currency-symbol="Ls" value="LVL">Latvian Lats (LVL)</option>
                                        <option data-currency-symbol="ل.ل" value="LBP">Lebanese Pound (LBP)</option>
                                        <option data-currency-symbol="L" value="LSL">Lesotho Loti (LSL)</option>
                                        <option data-currency-symbol="$" value="LRD">Liberian Dollar (LRD)</option>
                                        <option data-currency-symbol="ل.د" value="LYD">Libyan Dinar (LYD)</option>
                                        <option data-currency-symbol="Lt" value="LTL">Lithuanian Litas (LTL)</option>
                                        <option data-currency-symbol="P" value="MOP">Macanese Pataca (MOP)</option>
                                        <option data-currency-symbol="ден" value="MKD">Macedonian Denar (MKD)</option>
                                        <option data-currency-symbol="Ar" value="MGA">Malagasy Ariary (MGA)</option>
                                        <option data-currency-symbol="MK" value="MWK">Malawian Kwacha (MWK)</option>
                                        <option data-currency-symbol="RM" value="MYR">Malaysian Ringgit (MYR)</option>
                                        <option data-currency-symbol="MVR" value="MVR">Maldivian Rufiyaa (MVR)</option>

                                        <option data-currency-symbol="UM" value="MRO">Mauritanian Ouguiya (MRO)</option>
                                        <option data-currency-symbol="₨" value="MUR">Mauritian Rupee (MUR)</option>
                                        <option data-currency-symbol="$" value="MXN">Mexican Peso (MXN)</option>
                                        <option data-currency-symbol="L" value="MDL">Moldovan Leu (MDL)</option>
                                        <option data-currency-symbol="₮" value="MNT">Mongolian Tögrög (MNT)</option>
                                        <option data-currency-symbol="د.م." value="MAD">Moroccan Dirham (MAD)</option>
                                        <option data-currency-symbol="MTn" value="MZN">Mozambican Metical (MZN)</option>
                                        <option data-currency-symbol="K" value="MMK">Myanmar Kyat (MMK)</option>
                                        <option data-currency-symbol="$" value="NAD">Namibian Dollar (NAD)</option>
                                        <option data-currency-symbol="₨" value="NPR">Nepalese Rupee (NPR)</option>
                                        <option data-currency-symbol="ƒ" value="ANG">Netherlands Antillean Gulden (ANG)</option>
                                        <option data-currency-symbol="$" value="TWD">New Taiwan Dollar (TWD)</option>
                                        <option data-currency-symbol="$" value="NZD">New Zealand Dollar (NZD)</option>
                                        <option data-currency-symbol="C$" value="NIO">Nicaraguan Córdoba (NIO)</option>
                                        <option data-currency-symbol="₦" value="NGN">Nigerian Naira (NGN)</option>
                                        <option data-currency-symbol="₩" value="KPW">North Korean Won (KPW)</option>
                                        <option data-currency-symbol="kr" value="NOK">Norwegian Krone (NOK)</option>
                                        <option data-currency-symbol="ر.ع." value="OMR">Omani Rial (OMR)</option>
                                        <option data-currency-symbol="₨" value="PKR">Pakistani Rupee (PKR)</option>
                                        <option data-currency-symbol="B/." value="PAB">Panamanian Balboa (PAB)</option>
                                        <option data-currency-symbol="K" value="PGK">Papua New Guinean Kina (PGK)</option>
                                        <option data-currency-symbol="₲" value="PYG">Paraguayan Guaraní (PYG)</option>
                                        <option data-currency-symbol="S/." value="PEN">Peruvian Nuevo Sol (PEN)</option>
                                        <option data-currency-symbol="₱" value="PHP">Philippine Peso (PHP)</option>
                                        <option data-currency-symbol="zł" value="PLN">Polish Złoty (PLN)</option>
                                        <option data-currency-symbol="ر.ق" value="QAR">Qatari Riyal (QAR)</option>
                                        <option data-currency-symbol="Lei" value="RON">Romanian Leu (RON)</option>
                                        <option data-currency-symbol="₽" value="RUB">Russian Ruble (RUB)</option>
                                        <option data-currency-symbol="FRw" value="RWF">Rwandan Franc (RWF)</option>
                                        <option data-currency-symbol="£" value="SHP">Saint Helenian Pound (SHP)</option>
                                        <option data-currency-symbol="₡" value="SVC">Salvadoran Colón (SVC)</option>
                                        <option data-currency-symbol="T" value="WST">Samoan Tala (WST)</option>
                                        <option data-currency-symbol="ر.س" value="SAR">Saudi Riyal (SAR)</option>
                                        <option data-currency-symbol="РСД" value="RSD">Serbian Dinar (RSD)</option>
                                        <option data-currency-symbol="₨" value="SCR">Seychellois Rupee (SCR)</option>
                                        <option data-currency-symbol="Le" value="SLL">Sierra Leonean Leone (SLL)</option>

                                        <option data-currency-symbol="$" value="SGD">Singapore Dollar (SGD)</option>

                                        <option data-currency-symbol="$" value="SBD">Solomon Islands Dollar (SBD)</option>
                                        <option data-currency-symbol="Sh" value="SOS">Somali Shilling (SOS)</option>
                                        <option data-currency-symbol="R" value="ZAR">South African Rand (ZAR)</option>
                                        <option data-currency-symbol="₩" value="KRW">South Korean Won (KRW)</option>


                                        <option data-currency-symbol="₨" value="LKR">Sri Lankan Rupee (LKR)</option>
                                        <option data-currency-symbol="£" value="SDG">Sudanese Pound (SDG)</option>
                                        <option data-currency-symbol="$" value="SRD">Surinamese Dollar (SRD)</option>
                                        <option data-currency-symbol="E" value="SZL">Swazi Lilangeni (SZL)</option>
                                        <option data-currency-symbol="kr" value="SEK">Swedish Krona (SEK)</option>
                                        <option data-currency-symbol="Fr" value="CHF">Swiss Franc (CHF)</option>
                                        <option data-currency-symbol="£S" value="SYP">Syrian Pound (SYP)</option>
                                        <option data-currency-symbol="Db" value="STD">São Tomé and Príncipe Dobra (STD)</option>
                                        <option data-currency-symbol="ЅМ" value="TJS">Tajikistani Somoni (TJS)</option>
                                        <option data-currency-symbol="Sh" value="TZS">Tanzanian Shilling (TZS)</option>
                                        <option data-currency-symbol="฿" value="THB">Thai Baht (THB)</option>
                                        <option data-currency-symbol="T$" value="TOP">Tongan Paʻanga (TOP)</option>
                                        <option data-currency-symbol="$" value="TTD">Trinidad and Tobago Dollar (TTD)</option>
                                        <option data-currency-symbol="د.ت" value="TND">Tunisian Dinar (TND)</option>
                                        <option data-currency-symbol="₺" value="TRY">Turkish Lira (TRY)</option>


                                        <option data-currency-symbol="USh" value="UGX">Ugandan Shilling (UGX)</option>
                                        <option data-currency-symbol="₴" value="UAH">Ukrainian Hryvnia (UAH)</option>
                                        <option data-currency-symbol="UF" value="CLF">Unidad de Fomento (CLF)</option>
                                        <option data-currency-symbol="د.إ" value="AED">United Arab Emirates Dirham (AED)</option>
                                        <option data-currency-symbol="$" value="UYU">Uruguayan Peso (UYU)</option>
                                        <option value="UZS">Uzbekistani Som (UZS)</option>
                                        <option data-currency-symbol="Vt" value="VUV">Vanuatu Vatu (VUV)</option>
                                        <option data-currency-symbol="Bs F" value="VEF">Venezuelan Bolívar (VEF)</option>

                                        <option data-currency-symbol="Fr" value="XOF">West African Cfa Franc (XOF)</option>
                                        <option data-currency-symbol="﷼" value="YER">Yemeni Rial (YER)</option>
                                        <option data-currency-symbol="ZK" value="ZMK">Zambian Kwacha (ZMK)</option>
                                        <option data-currency-symbol="ZK" value="ZMW">Zambian Kwacha (ZMW)</option>

                                        <option data-currency-symbol="$" value="ZWL">Zimbabwean Dollar (ZWL)</option>


                                        </select>
                                    </div>
                                </div>
                          <br>
                        </div><br>
                    <div class="btn-group-justify text-center">
                                      <button id="bTwo" type="button" class="btn btn-info " onclick="backTwo(this)">Back</button>
                                      <button id="nTwo" type="button" class="btn btn-info" onclick="nextTwo(this)">Next</button>
                                    </div></div>
                
                    </div>
                    
                </div> 
    
                <div class="registration hide">
                        <div class="panel panel-default text-left" id="contains_tabs">
                            <div class="panel-heading text-center">
                            <h4 ><span class="glyphicon glyphicon-gift"></span> &nbsp;Registration Fee</h4>
                            </div>
                            <div class="panel-body" id="dod">
                                <div class="row ">
                                    <div style="padding-left:4%">
                                            <div >
                                            the minimum payment is two months $400
                                            </div>
                                                <div >
                                            by paying yearly you will save $200
                                            </div>
                                            </div><br>
                                        <div style="margin-left:6%;">
                           
                                            <div class="radio">
  <label><input class="registration_pay" type="radio" name="registration_pay" value="$400" checked>Two Months $400<p>try two months to see it work!</p></label>
</div>
<div class="radio">
  <label><input class="registration_pay" type="radio" name="registration_pay" value="$2200">Yearly $2200<p>paying yearly, you will get one month free every year.</p></label>
</div>
<div class="radio ">
  <label><input class="registration_pay" type="radio" name="registration_pay" value="5%">Commission 5%<p>5% until the transaction complited.</p></label>
</div>
                                        </div>    
                                <br>


                            <div class="btn-group-justify text-center">
                                      <button id="bThree" type="button" class="btn btn-info " onclick="backThree(this)">Back</button>
                                      <button id="nThree" type="button" class="btn btn-info" onclick="nextThree(this)">Next</button>
                                    </div>
                                    </div>
                        
                    </div>
                </div>
    </div>
                <div class="card hide">
                        <div class="panel panel-success text-left">
                            <div class="panel-heading">
                            <h4 class="text-center"><span class="glyphicon glyphicon-credit-card"></span> &nbsp;  Payment Card Details</h4>
                            </div>
                            <div class="panel-body" id="pcd">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="control-label" for="card_number">Card number<span class="starstar" style="color:#cc0000"> *</span></label><input class="form-control" id="card_number" name="card_number" required="required" type="text" onkeyup="numbersOnly(this)">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group"><label class="control-label" for="card_month">Month</label>
                                        <select class="form-control" id="card_month" name="card_month">
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group"><label class="control-label" for="card_year">Year</label>
                                        <select class="form-control" id="card_year" name="card_year">
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group"><label class="control-label" for="card_verification">CVV<span class="starstar" style="color:#cc0000"> *</span></label><input class="form-control" id="card_verification" name="card_verification" required="required" type="text" onkeyup="numbersOnly(this)">
                                        </div>
                                    </div>
                                </div>


                                  <div class="btn-group-justify text-center">
                                      <button id="bFour" type="button" class="btn btn-info " onclick="backFour(this)">Back</button>
                                      <button id="nFour" type="button" class="btn btn-info " onclick="finish(this)">Finish</button>
                                    </div> 
                            </div>
                        </div>
                  </div>
    
    <div class="confirme hide">
                        <div class="panel panel-success text-left" id="contains_tabs">
                            <div class="panel-heading text-center">
                            <h4 ><span class="glyphicon glyphicon-gift"></span> &nbsp;Confirmation</h4>
                            </div>
                            <div class="panel-body" id="confime">
                                <div class="row ">
                <div class="container">
  
     <p id="para"></p>
                    
               </div>
                                <br>


                            <div class="btn-group-justify text-center">
                                      <button id="bFive" type="button" class="btn btn-info " onclick="backFive(this)">Back</button>
                                      <button id="nFive" type="button" class="btn btn-info disabled" onclick="alert('can not go forward')">Next</button>
                                    </div>
                                <div class="col-md-12">
                                        <label class="control-label"> </label>
                                        <div>
                             <input class="btn btn-success btn-lg btn-block" style="text-align:center; width:100%;" type="submit" name="submit" value="Submit"> 
                                        </div>

                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
              
</form>
                
            </div>
     </div>
    </div>
    <div style="padding-bottom:2%;">   
    <?php
		require_once "footer.php";
	?>
</div>   
    
    <script src = "js/pageCode.js"></script>
    
</body>
</html>