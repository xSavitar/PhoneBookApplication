<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html>
	<head>
		<title>Registration</title>
		<link rel="shortcut icon" href="img/pic.png" type="image/x-icon">
		<meta name="viewpoint" content="width=device-width, initial-scale=1.0" />

		<!-- bootstrap and others -->
		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/custom.css" rel="stylesheet" />

		<!-- bootstrap javascript -->
		<script src="js/bootstrap.min.js"> </script>
		<script src="js/formCheck.js"> </script>
	</head>

	<body>

		<div class="container">
			<nav class="row">
				<ul class="nav nav-tabs nav-justified">
					<li class="active"><a href="index.php">Application</a></li>
					<li><a href="developers.php">Developers Coner</a></li>
					<li><a href="about.php">About</a></li>
				</ul>
			</nav>

			<div id="headerpic">
				<center><h3>Phone Book Form</h3></center>
			</div>

			<div>
				<form name="reg_form" role="form" class="bs-example bs-example-form" method="post" 
				onSubmit="return formCheck();" action="addcontact.php">
					<div class="row">
						<div class="input-group col-md-5" id="fname">
							<label for="country">First Name</label>
							<input type="text" autofocus name="fname" class="form-control" placeholder="First Name" required>
						</div>
					</div>

					<div class="row">
						<div class="input-group col-md-5" id="lname">
							<label for="country">Last Name</label>
							<input type="text" name="lname" class="form-control" placeholder="Last Name" required>
						</div>
					</div>

					<div class="row">
						<div id="country" class="col-sm-5">
							<label for="country" class="control-label">Country</label><br />
							<select class="form-control" name="country"><optgroup>
						            <option selected="selected" value="Cameroon">Cameroon</option>
						            <option value="Canada">Canada</option>
						            <option label="Afghanistan" value="Afghanistan">Afghanistan</option>
						            <option label="Albania" value="Albania">Albania</option>
						            <option label="Algeria" value="Algeria">Algeria</option>
						            <option label="American Samoa" value="American Samoa">American Samoa</option>
						            <option label="Andorra" value="Andorra">Andorra</option>
						            <option label="Angola" value="Angola">Angola</option>
						            <option label="Anguilla" value="Anguilla">Anguilla</option>
						            <option label="Antarctica" value="Antarctica">Antarctica</option>
						            <option label="Antigua and Barbuda" value="Antigua and Barbuda">Antigua and Barbuda</option>
						            <option label="Argentina" value="Argentina">Argentina</option>
						            <option label="Armenia" value="Armenia">Armenia</option>
						            <option label="Aruba" value="Aruba">Aruba</option>
						            <option label="Australia" value="Australia">Australia</option>
						            <option label="Austria" value="Austria">Austria</option>
						            <option label="Azerbaijan" value="Azerbaijan">Azerbaijan</option>
						            <option label="Bahamas" value="Bahamas">Bahamas</option>
						            <option label="Bahrain" value="Bahrain">Bahrain</option>
						            <option label="Bangladesh" value="Bangladesh">Bangladesh</option>
						            <option label="Barbados" value="Barbados">Barbados</option>
						            <option label="Belarus" value="Belarus">Belarus</option>
						            <option label="Belgium" value="Belgium">Belgium</option>
						            <option label="Belize" value="Belize">Belize</option>
						            <option label="Benin" value="Benin">Benin</option>
						            <option label="Bermuda" value="Bermuda">Bermuda</option>
						            <option label="Bhutan" value="Bhutan">Bhutan</option>
						            <option label="Bolivia" value="Bolivia">Bolivia</option>
						            <option label="Bosnia and Herzegovina" value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
						            <option label="Botswana" value="Botswana">Botswana</option>
						            <option label="Brazil" value="Brazil">Brazil</option>
						            <option label="British Indian Ocean Territory" value="British Indian Ocean Territory">British Indian Ocean Territory</option>
						            <option label="British Virgin Islands" value="British Virgin Islands">British Virgin Islands</option>
						            <option label="Brunei" value="Brunei">Brunei</option>
						            <option label="Bulgaria" value="Bulgaria">Bulgaria</option>
						            <option label="Burkina Faso" value="Burkina Faso">Burkina Faso</option>
						            <option label="Burma (Myanmar)" value="Burma (Myanmar)">Burma (Myanmar)</option>
						            <option label="Burundi" value="Burundi">Burundi</option>
						            <option label="Cambodia" value="Cambodia">Cambodia</option>
						            <option label="Cameroon" value="Cameroon">Cameroon</option>
						            <option label="Cape Verde" value="Cape Verde">Cape Verde</option>
						            <option label="Cayman Islands" value="Cayman Islands">Cayman Islands</option>
						            <option label="Central African Republic" value="Central African Republic">Central African Republic</option>
						            <option label="Chad" value="Chad">Chad</option>
						            <option label="Chile" value="Chile">Chile</option>
						            <option label="China" value="China">China</option>
						            <option label="Christmas Island" value="Christmas Island">Christmas Island</option>
						            <option label="Cocos (Keeling) Islands" value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
						            <option label="Colombia" value="Colombia">Colombia</option>
						            <option label="Comoros" value="Comoros">Comoros</option>
						            <option label="Cook Islands" value="Cook Islands">Cook Islands</option>
						            <option label="Costa Rica" value="Costa Rica">Costa Rica</option>
						            <option label="Croatia" value="Croatia">Croatia</option>
						            <option label="Cuba" value="Cuba">Cuba</option>
						            <option label="Cyprus" value="Cyprus">Cyprus</option>
						            <option label="Czech Republic" value="Czech Republic">Czech Republic</option>
						            <option label="Democratic Republic of the Congo" value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
						            <option label="Denmark" value="DK">Denmark</option>
						            <option label="Djibouti" value="DJ">Djibouti</option>
						            <option label="Dominica" value="DM">Dominica</option>
						            <option label="Dominican Republic" value="DO">Dominican Republic</option>
						            <option label="Ecuador" value="EC">Ecuador</option>
						            <option label="Egypt" value="EG">Egypt</option>
						            <option label="El Salvador" value="SV">El Salvador</option>
						            <option label="Equatorial Guinea" value="GQ">Equatorial Guinea</option>
						            <option label="Eritrea" value="ER">Eritrea</option>
						            <option label="Estonia" value="EE">Estonia</option>
						            <option label="Ethiopia" value="ET">Ethiopia</option>
						            <option label="Falkland Islands" value="FK">Falkland Islands</option>
						            <option label="Faroe Islands" value="FO">Faroe Islands</option>
						            <option label="Fiji" value="FJ">Fiji</option>
						            <option label="Finland" value="FI">Finland</option>
						            <option label="France" value="FR">France</option>
						            <option label="French Polynesia" value="PF">French Polynesia</option>
						            <option label="Gabon" value="GA">Gabon</option>
						            <option label="Gambia" value="GM">Gambia</option>
						            <option label="Georgia" value="GE">Georgia</option>
						            <option label="Germany" value="DE">Germany</option>
						            <option label="Ghana" value="GH">Ghana</option>
						            <option label="Gibraltar" value="GI">Gibraltar</option>
						            <option label="Greece" value="GR">Greece</option>
						            <option label="Greenland" value="GL">Greenland</option>
						            <option label="Grenada" value="GD">Grenada</option>
						            <option label="Guam" value="GU">Guam</option>
						            <option label="Guatemala" value="GT">Guatemala</option>
						            <option label="Guinea" value="GN">Guinea</option>
						            <option label="Guinea-Bissau" value="GW">Guinea-Bissau</option>
						            <option label="Guyana" value="GY">Guyana</option>
						            <option label="Haiti" value="HT">Haiti</option>
						            <option label="Holy See (Vatican City)" value="VA">Holy See (Vatican City)</option>
						            <option label="Honduras" value="HN">Honduras</option>
						            <option label="Hong Kong" value="HK">Hong Kong</option>
						            <option label="Hungary" value="HU">Hungary</option>
						            <option label="Iceland" value="IS">Iceland</option>
						            <option label="India" value="IN">India</option>
						            <option label="Indonesia" value="ID">Indonesia</option>
						            <option label="Iran" value="IR">Iran</option>
						            <option label="Iraq" value="IQ">Iraq</option>
						            <option label="Ireland" value="IE">Ireland</option>
						            <option label="Isle of Man" value="IM">Isle of Man</option>
						            <option label="Israel" value="IL">Israel</option>
						            <option label="Italy" value="IT">Italy</option>
						            <option label="Ivory Coast" value="CI">Ivory Coast</option>
						            <option label="Jamaica" value="JM">Jamaica</option>
						            <option label="Japan" value="JP">Japan</option>
						            <option label="Jersey" value="JE">Jersey</option>
						            <option label="Jordan" value="JO">Jordan</option>
						            <option label="Kazakhstan" value="KZ">Kazakhstan</option>
						            <option label="Kenya" value="KE">Kenya</option>
						            <option label="Kiribati" value="KI">Kiribati</option>
						            <option label="Kuwait" value="KW">Kuwait</option>
						            <option label="Kyrgyzstan" value="KG">Kyrgyzstan</option>
						            <option label="Laos" value="LA">Laos</option>
						            <option label="Latvia" value="LV">Latvia</option>
						            <option label="Lebanon" value="LB">Lebanon</option>
						            <option label="Lesotho" value="LS">Lesotho</option>
						            <option label="Liberia" value="LR">Liberia</option>
						            <option label="Libya" value="LY">Libya</option>
						            <option label="Liechtenstein" value="LI">Liechtenstein</option>
						            <option label="Lithuania" value="LT">Lithuania</option>
						            <option label="Luxembourg" value="LU">Luxembourg</option>
						            <option label="Macau" value="MO">Macau</option>
						            <option label="Macedonia" value="MK">Macedonia</option>
						            <option label="Madagascar" value="MG">Madagascar</option>
						            <option label="Malawi" value="MW">Malawi</option>
						            <option label="Malaysia" value="MY">Malaysia</option>
						            <option label="Maldives" value="MV">Maldives</option>
						            <option label="Mali" value="ML">Mali</option>
						            <option label="Malta" value="MT">Malta</option>
						            <option label="Marshall Islands" value="MH">Marshall Islands</option>
						            <option label="Mauritania" value="MR">Mauritania</option>
						            <option label="Mauritius" value="MU">Mauritius</option>
						            <option label="Mayotte" value="YT">Mayotte</option>
						            <option label="Mexico" value="MX">Mexico</option>
						            <option label="Micronesia" value="FM">Micronesia</option>
						            <option label="Moldova" value="MD">Moldova</option>
						            <option label="Monaco" value="MC">Monaco</option>
						            <option label="Mongolia" value="MN">Mongolia</option>
						            <option label="Montenegro" value="ME">Montenegro</option>
						            <option label="Montserrat" value="MS">Montserrat</option>
						            <option label="Morocco" value="MA">Morocco</option>
						            <option label="Mozambique" value="MZ">Mozambique</option>
						            <option label="Namibia" value="NA">Namibia</option>
						            <option label="Nauru" value="NR">Nauru</option>
						            <option label="Nepal" value="NP">Nepal</option>
						            <option label="Netherlands" value="NL">Netherlands</option>
						            <option label="Netherlands Antilles" value="AN">Netherlands Antilles</option>
						            <option label="New Caledonia" value="NC">New Caledonia</option>
						            <option label="New Zealand" value="NZ">New Zealand</option>
						            <option label="Nicaragua" value="NI">Nicaragua</option>
						            <option label="Niger" value="NE">Niger</option>
						            <option label="Nigeria" value="NG">Nigeria</option>
						            <option label="Niue" value="NU">Niue</option>
						            <option label="North Korea" value="KP">North Korea</option>
						            <option label="Northern Mariana Islands" value="MP">Northern Mariana Islands</option>
						            <option label="Norway" value="NO">Norway</option>
						            <option label="Oman" value="OM">Oman</option>
						            <option label="Pakistan" value="PK">Pakistan</option>
						            <option label="Palau" value="PW">Palau</option>
						            <option label="Panama" value="PA">Panama</option>
						            <option label="Papua New Guinea" value="PG">Papua New Guinea</option>
						            <option label="Paraguay" value="PY">Paraguay</option>
						            <option label="Peru" value="PE">Peru</option>
						            <option label="Philippines" value="PH">Philippines</option>
						            <option label="Pitcairn Islands" value="PN">Pitcairn Islands</option>
						            <option label="Poland" value="PL">Poland</option>
						            <option label="Portugal" value="PT">Portugal</option>
						            <option label="Puerto Rico" value="PR">Puerto Rico</option>
						            <option label="Qatar" value="QA">Qatar</option>
						            <option label="Republic of the Congo" value="CG">Republic of the Congo</option>
						            <option label="Romania" value="RO">Romania</option>
						            <option label="Russia" value="RU">Russia</option>
						            <option label="Rwanda" value="RW">Rwanda</option>
						            <option label="Saint Barthelemy" value="BL">Saint Barthelemy</option>
						            <option label="Saint Helena" value="SH">Saint Helena</option>
						            <option label="Saint Kitts and Nevis" value="KN">Saint Kitts and Nevis</option>
						            <option label="Saint Lucia" value="LC">Saint Lucia</option>
						            <option label="Saint Martin" value="MF">Saint Martin</option>
						            <option label="Saint Pierre and Miquelon" value="PM">Saint Pierre and Miquelon</option>
						            <option label="Saint Vincent and the Grenadines" value="VC">Saint Vincent and the Grenadines</option>
						            <option label="Samoa" value="WS">Samoa</option>
						            <option label="San Marino" value="SM">San Marino</option>
						            <option label="Sao Tome and Principe" value="ST">Sao Tome and Principe</option>
						            <option label="Saudi Arabia" value="SA">Saudi Arabia</option>
						            <option label="Senegal" value="SN">Senegal</option>
						            <option label="Serbia" value="RS">Serbia</option>
						            <option label="Seychelles" value="SC">Seychelles</option>
						            <option label="Sierra Leone" value="SL">Sierra Leone</option>
						            <option label="Singapore" value="SG">Singapore</option>
						            <option label="Slovakia" value="SK">Slovakia</option>
						            <option label="Slovenia" value="SI">Slovenia</option>
						            <option label="Solomon Islands" value="SB">Solomon Islands</option>
						            <option label="Somalia" value="SO">Somalia</option>
						            <option label="South Africa" value="ZA">South Africa</option>
						            <option label="South Korea" value="KR">South Korea</option>
						            <option label="Spain" value="ES">Spain</option>
						            <option label="Sri Lanka" value="LK">Sri Lanka</option>
						            <option label="Sudan" value="SD">Sudan</option>
						            <option label="Suriname" value="SR">Suriname</option>
						            <option label="Svalbard" value="SJ">Svalbard</option>
						            <option label="Swaziland" value="SZ">Swaziland</option>
						            <option label="Sweden" value="SE">Sweden</option>
						            <option label="Switzerland" value="CH">Switzerland</option>
						            <option label="Syria" value="SY">Syria</option>
						            <option label="Taiwan" value="TW">Taiwan</option>
						            <option label="Tajikistan" value="TJ">Tajikistan</option>
						            <option label="Tanzania" value="TZ">Tanzania</option>
						            <option label="Thailand" value="TH">Thailand</option>
						            <option label="Timor-Leste" value="TL">Timor-Leste</option>
						            <option label="Togo" value="TG">Togo</option>
						            <option label="Tokelau" value="TK">Tokelau</option>
						            <option label="Tonga" value="TO">Tonga</option>
						            <option label="Trinidad and Tobago" value="TT">Trinidad and Tobago</option>
						            <option label="Tunisia" value="TN">Tunisia</option>
						            <option label="Turkey" value="TR">Turkey</option>
						            <option label="Turkmenistan" value="TM">Turkmenistan</option>
						            <option label="Turks and Caicos Islands" value="TC">Turks and Caicos Islands</option>
						            <option label="Tuvalu" value="TV">Tuvalu</option>
						            <option label="US Virgin Islands" value="VI">US Virgin Islands</option>
						            <option label="Uganda" value="UG">Uganda</option><option label="Ukraine" value="UA">Ukraine</option>
						            <option label="United Arab Emirates" value="AE">United Arab Emirates</option>
						            <option label="United Kingdom" value="GB">United Kingdom</option>
						            <option label="Uruguay" value="UY">Uruguay</option>
						            <option label="Uzbekistan" value="UZ">Uzbekistan</option>
						            <option label="Vanuatu" value="VU">Vanuatu</option>
						            <option label="Venezuela" value="VE">Venezuela</option>
						            <option label="Vietnam" value="VN">Vietnam</option>
						            <option label="Wallis and Futuna" value="WF">Wallis and Futuna</option>
						            <option label="Western Sahara" value="EH">Western Sahara</option>
						            <option label="Yemen" value="YE">Yemen</option>
						            <option label="Zambia" value="ZM">Zambia</option>
						            <option label="Zimbabwe" value="ZW">Zimbabwe</option>
						          </optgroup></select>
						</div>
					</div>

					<div class="row">
						<div class="input-group col-md-5" id="phonenumber">
							<label for="phone number">Phone Number</label>
							<input type="text" name="phonenumber" class="form-control" placeholder="Enter Phone Number">
						</div>
					</div>

					<div class="row">
						<div class="input-group col-md-5" id="addressline">
							<label for="address">Address Line</label>
							<input type="tel" class="form-control" name="addressline" placeholder="Enter Address">
						</div>
					</div>

					<div>
						<div class="form-group" id="text">
							<label for="text">Description</label>
							<textarea class="form-control" name="description" rows="3" placeholder="Enter Brief Description About yourself"></textarea>
						</div>
					</div>

					<div id="button2">
						<input type="submit" name="submit" class="btn btn-primary" value="Add Contact">
					</div>
				</form>
			</div>

			<div id="buttons1">
				<a href="index.php"><button type="button" class="btn btn-primary">
				Back to Home </button></a>
			</div>
			<footer>
				<center><p>Copyright (c) <?php echo date('Y'); ?> | <a href="developers.php">Developers Coner
				</a> | Engineered by <a href="mailto:alangiderick@gmail.com">Alangi Derick</a></p><center>
			</footer>
		</div>
	</body>
</html>