<!DOCTYPE html>
<html lang="en">

<?php
include_once("inc/header.php"); 
?>

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Career
                <small>At Nahar Drug</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a>
                </li>
                <li class="active">Career</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Image Header -->
    <div class="row">
        <div class="col-lg-12">
            <img class="img-responsive" src="images/career.jpg" alt="">
        </div>
    </div>
    <!-- /.row -->

    <!-- Life Panels -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Life <small>At Nagar</small></h2>
            <p>We at Nagar drug, believe and deal in Life... So, your experience at Nagar drug will surely be the experience of Lifetime. </p>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <span class="fa-stack fa-5x">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-anchor fa-stack-1x fa-inverse"></i>
                  </span>
              </div>
              <div class="panel-body">
                <h4>Solid Foundation</h4>
                <p>Strong & Secure foundation for your professional life.</p>

            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="panel panel-default text-center">
            <div class="panel-heading">
                <span class="fa-stack fa-5x">
                  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                  <i class="fa fa-plane fa-stack-1x fa-inverse"></i>
              </span>
          </div>
          <div class="panel-body">
            <h4>Career Growth</h4>
            <p>If you deserve, the opportunities are limitless for you.</p>

        </div>
    </div>
</div>
<div class="col-md-3 col-sm-6">
    <div class="panel panel-default text-center">
        <div class="panel-heading">
            <span class="fa-stack fa-5x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-trophy fa-stack-1x fa-inverse"></i>
          </span>
      </div>
      <div class="panel-body">
        <h4>Rewards</h4>
        <p>Rewards & recognitions, to keep the achiever in you alive.</p>

    </div>
</div>
</div>
<div class="col-md-3 col-sm-6">
    <div class="panel panel-default text-center">
        <div class="panel-heading">
            <span class="fa-stack fa-5x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i>
          </span>
      </div>
      <div class="panel-body">
        <h4>Satisfaction</h4>
        <p>Satisfied, fun-filled and happy professional & personal life.</p>

    </div>
</div>
</div>
</div>

<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">Apply <small>At Nahar Drug</small></h2>
        <p>This information will help us contact you and will be searchable in addition to the information on your attached Word resume. </p>
    </div>

    <!-- Application Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <div class="col-md-8">                
        <form name="sentApplication" id="applicationForm" novalidate>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Post*</label>
                    <input type="text" class="form-control" id="position" required data-validation-required-message="Please enter the post you are applying for.">                            
                    <p class="help-block"></p>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Salutation*</label>
                    <select class="form-control" id="salutation" required data-validation-required-message="Please select a salutation.">
                     <option>Mr.</option>
                     <option>Ms.</option>
                     <option>Mrs.</option>
                     <option>Miss.</option>
                     <option>Dr.</option>
                 </select>                            
                 <p class="help-block"></p>
             </div>
         </div>
         <div class="control-group form-group">
            <div class="controls">
                <label>First Name*</label>
                <input type="text" class="form-control" id="first_name" required data-validation-required-message="Please enter your first name.">
                <p class="help-block"></p>
            </div>
        </div>
        <div class="control-group form-group">
            <div class="controls">
                <label>Middle Name</label>
                <input type="text" class="form-control" id="middle_name" >
                <p class="help-block"></p>
            </div>
        </div>
        <div class="control-group form-group">
            <div class="controls">
                <label>Last Name*</label>
                <input type="text" class="form-control" id="last_name" required data-validation-required-message="Please enter your last name.">
                <p class="help-block"></p>
            </div>
        </div>
        <div class="control-group form-group">
            <div class="controls">
                <label>Contact Address Line 1*</label>
                <input type="text" class="form-control" id="address_1" required data-validation-required-message="Please enter valid address.">
                <p class="help-block"></p>
            </div>
        </div>
        <div class="control-group form-group">
            <div class="controls">
                <label>Contact Address Line 2</label>
                <input type="text" class="form-control" id="address_2" >
                <p class="help-block"></p>
            </div>
        </div>
        <div class="control-group form-group">
            <div class="controls">
                <label>City/Town*</label>
                <input type="text" class="form-control" id="city" required data-validation-required-message="Please enter valid city.">
                <p class="help-block"></p>
            </div>
        </div>
        <div class="control-group form-group">
            <div class="controls">
                <label>State*</label>
                <select class="form-control" id="state" required data-validation-required-message="Please select a State.">
                 <option value="">Select State...</option>
                 <option value="Andaman &amp; Nicobar">Andaman &amp; Nicobar</option>
                 <option value="Andhra Pradesh">Andhra Pradesh</option>
                 <option value="Arunchal Pradesh">Arunchal Pradesh</option>
                 <option value="Assam">Assam</option>
                 <option value="Bihar">Bihar</option>
                 <option value="Chandigarh">Chandigarh</option>
                 <option value="Dadra &amp; Nagar Haveli">Dadra &amp; Nagar Haveli</option>
                 <option value="Daman &amp; Dui">Daman &amp; Dui</option>
                 <option value="Delhi">Delhi</option>
                 <option value="Goa">Goa</option>
                 <option value="Gujarat">Gujarat</option>
                 <option value="Haryana">Haryana</option>
                 <option value="Himachal Pradesh">Himachal Pradesh</option>
                 <option value="Jammu &amp; Kasmir">Jammu &amp; Kasmir</option>
                 <option value="Karnataka">Karnataka</option>
                 <option value="Kerala">Kerala</option>
                 <option value="Lakshadweep">Lakshadweep</option>
                 <option value="Madhya Pradesh">Madhya Pradesh</option>
                 <option value="Maharashtra">Maharashtra</option>
                 <option value="Manipur">Manipur</option>
                 <option value="Meghalaya">Meghalaya</option>
                 <option value="Mizoram">Mizoram</option>
                 <option value="Nagaland">Nagaland</option>
                 <option value="Orissa">Orissa</option>
                 <option value="Pondicherry">Pondicherry</option>
                 <option value="Punjab">Punjab</option>
                 <option value="Rajasthan">Rajasthan</option>
                 <option value="Sikkim">Sikkim</option>
                 <option value="Tamilnadu">Tamilnadu</option>
                 <option value="Tripura">Tripura</option>
                 <option value="Uttar Pradesh">Uttar Pradesh</option>
                 <option value="West Bengal">West Bengal</option>
             </select>                            
             <p class="help-block"></p>
         </div>
     </div>
     <div class="control-group form-group">
        <div class="controls">
            <label>Country*</label>
            <select class="form-control" id="country" required data-validation-required-message="Please select a State.">
                <option value="">Select Country...</option>
                <option value="Afganistan">Afghanistan</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bonaire">Bonaire</option>
                <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                <option value="Brunei">Brunei</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Canary Islands">Canary Islands</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Channel Islands">Channel Islands</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos Island">Cocos Island</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote DIvoire">Cote D'Ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Curaco">Curacao</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="East Timor">East Timor</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands">Falkland Islands</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Ter">French Southern Ter</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Great Britain">Great Britain</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guinea">Guinea</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Hawaii">Hawaii</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran">Iran</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea North">Korea North</option>
                <option value="Korea Sout">Korea South</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Laos">Laos</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libya">Libya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macau">Macau</option>
                <option value="Macedonia">Macedonia</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Malawi">Malawi</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Midway Islands">Midway Islands</option>
                <option value="Moldova">Moldova</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Nambia">Nambia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherland Antilles">Netherland Antilles</option>
                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                <option value="Nevis">Nevis</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau Island">Palau Island</option>
                <option value="Palestine">Palestine</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Phillipines">Philippines</option>
                <option value="Pitcairn Island">Pitcairn Island</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Republic of Montenegro">Republic of Montenegro</option>
                <option value="Republic of Serbia">Republic of Serbia</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russia">Russia</option>
                <option value="Rwanda">Rwanda</option>
                <option value="St Barthelemy">St Barthelemy</option>
                <option value="St Eustatius">St Eustatius</option>
                <option value="St Helena">St Helena</option>
                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                <option value="St Lucia">St Lucia</option>
                <option value="St Maarten">St Maarten</option>
                <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                <option value="Saipan">Saipan</option>
                <option value="Samoa">Samoa</option>
                <option value="Samoa American">Samoa American</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syria">Syria</option>
                <option value="Tahiti">Tahiti</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania">Tanzania</option>
                <option value="Thailand">Thailand</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Erimates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States of America">United States of America</option>
                <option value="Uraguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Vatican City State">Vatican City State</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Vietnam">Vietnam</option>
                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                <option value="Wake Island">Wake Island</option>
                <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                <option value="Yemen">Yemen</option>
                <option value="Zaire">Zaire</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select>                            
            <p class="help-block"></p>
        </div>
    </div>
    <div class="control-group form-group">
        <div class="controls">
            <label>Pincode*</label>
            <input type="text" class="form-control" id="pincode" required data-validation-required-message="Please enter valid pincode.">
            <p class="help-block"></p>
        </div>
    </div>
    <div class="control-group form-group">
        <div class="controls">
            <label>Primary Phone*</label>
            <input type="text" class="form-control" id="phone1" required data-validation-required-message="Please enter valid phone number.">
            <p class="help-block"></p>
        </div>
    </div>
    <div class="control-group form-group">
        <div class="controls">
            <label>Secondary Phone</label>
            <input type="text" class="form-control" id="phone2" >
            <p class="help-block"></p>
        </div>
    </div>
    <div class="control-group form-group">
        <div class="controls">
            <label>Email Address*</label>
            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
        </div>
    </div>
    <div class="control-group form-group">
        <div class="controls">
            <label>Education Qualification*</label>
            <select class="form-control" id="qualification" required data-validation-required-message="Please select a qualification.">
             <option value="Bachelor Degree In Science">Bachelor Degree In Science</option>
             <option value="Bachelor Degree In Arts">Bachelor Degree In Arts</option>
             <option value="Bachelor Degree In Commerce">Bachelor Degree In Commerce</option>
             <option value="Master Degree In Science">Master Degree In Science</option>
             <option value="Master Degree In Arts">Master Degree In Arts</option>
             <option value="Master Degree In Commerce">Master Degree In Commerce</option>
             <option value="Professional Cource In Bachelor Degree">Professional Cource In Bachelor Degree</option>
             <option value="Professional Cource In Master Degree">Professional Cource In Master Degree </option>
             <option value="Other">Other</option>
         </select>                            
         <p class="help-block"></p>
     </div>
 </div>
 <div class="control-group form-group">
    <div class="controls">
        <label>Total Work Experience*</label>
        <select class="form-control" id="work_exp" required data-validation-required-message="Please select an experience.">
         <option value="Less than 1 Year">Less than 1 Year</option>
         <option value="1 to 2 Years">1 to 2 Years</option>
         <option value="2 to 5 Years">2 to 5 Years</option>
         <option value="5 to 7 Years">5 to 7 Years</option>
         <option value="7 to 10 Years">7 to 10 Years</option>
         <option value="10 to 15 Years">10 to 15 Years</option>
         <option value="More than 15 Years">More than 15 Years</option>
     </select>                            
     <p class="help-block"></p>
 </div>
</div>
<div class="control-group form-group">
    <div class="controls">
        <label>Career Level*</label>
        <select class="form-control" id="career_level" required data-validation-required-message="Please select an career level.">
         <option value="Student (High School)">Student (High School)</option>
         <option value="Student">Student</option>
         <option value="Entry Level (less than 2 years of experience)">Entry Level (less than 2 years of experience)</option>
         <option value="Mid Career (2+ years of experience)">Mid Career (2+ years of experience)</option>
         <option value="Manager">Manager</option>
         <option value="Senior Management (VP and equivalent)">Senior Management (VP and equivalent)</option>
         <option value="Top Management (CEO and equivalent)">Top Management (CEO and equivalent)</option>
     </select>                            
     <p class="help-block"></p>
 </div>
</div>
<div class="control-group form-group">
    <div class="controls">
        <label>Management Experience*</label>
        <select class="form-control" id="mgmt_exp" required data-validation-required-message="Please select a Management Experience.">
         <option value="No Experience">No Experience</option>
         <option value="less than 1 Year">&lt; 1 Year</option>
         <option value="1 Years">1 Years</option>
         <option value="2 Years">2 Years</option>
         <option value="3 Years">3 Years</option>
         <option value="4 Years">4 Years</option>
         <option value="5 Years">5 Years</option>
         <option value="greater than 5 Years">&gt; 5 Years</option>
     </select>                            
     <p class="help-block"></p>
 </div>
</div>
<div class="control-group form-group">
    <div class="controls">
        <label>Leadership Experience*</label>
        <select class="form-control" id="ldr_exp" required data-validation-required-message="Please select a Leadership Experience.">
         <option value="Less than 1 Year">Less than 1 Year</option>
         <option value="1 to 2 Years">1 to 2 Years</option>
         <option value="2 to 5 Years">2 to 5 Years</option>
         <option value="5 to 7 Years">5 to 7 Years</option>
         <option value="7 to 10 Years">7 to 10 Years</option>
         <option value="10 to 15 Years">10 to 15 Years</option>
         <option value="More than 15 Years">More than 15 Years</option>
     </select>                            
     <p class="help-block"></p>
 </div>
</div>
<hr />
<div class="control-group form-group">
    <div class="controls">
        <label>Upon receiving a job offer, when can you start?</label>
        <select class="form-control" id="start_pd" >
         <option value="Immediately">Immediately</option>
         <option value="Within 2 weeks">Within 2 weeks</option>
         <option value="Within one month">Within one month</option>
         <option value="From 1 to 3 months">From 1 to 3 months</option>
         <option value="More than 3 months">More than 3 months</option>
         <option value="Negotiable">Negotiable</option>
     </select>                            
     <p class="help-block"></p>
 </div>
</div>
<div class="control-group form-group">
    <div class="controls">
       <div class = "col-lg-12">
          <label>Expected Starting Date</label>	
      </div>                            
      <div class="col-lg-4">
       <select class="form-control" id="start_dd" >
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
        <option>21</option>
        <option>22</option>
        <option>23</option>
        <option>24</option>
        <option>25</option>
        <option>26</option>
        <option>27</option>
        <option>28</option>
        <option>29</option>
        <option>30</option>
        <option>31</option>
    </select>  
</div>
<div class="col-lg-4">
    <select class="form-control" id="start_mm" >
        <option value="January">January</option>
        <option value="February">February</option>
        <option value="March">March</option>
        <option value="April">April</option>
        <option value="May">May</option>
        <option value="June">June</option>
        <option value="July">July</option>
        <option value="August">August</option>
        <option value="September">September</option>
        <option value="October">October</option>
        <option value="November">November</option>
        <option value="December">December</option>
    </select>
</div>
<div class="col-lg-4">
    <select class="form-control" id="start_yyyy" >
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
        <option value="2023">2023</option>
        <option value="2024">2024</option>
        <option value="2025">2025</option>
    </select>
</div>                          
<p class="help-block"></p>
</div>
</div>
<div class="control-group form-group">
    <div class="controls">
        <label>Nationality</label>
        <select class="form-control" id="nationality" >
         <option>Afghanistan</option>
         <option>Albania</option>
         <option>Algeria</option>
         <option>American Samoa</option>
         <option>Andorra</option>
         <option>Angola</option>
         <option>Anguilla</option>
         <option>Antartica</option>
         <option>Antigua and Barbuda</option>
         <option>Argentina</option>
         <option>Armenia</option>
         <option>Aruba</option>
         <option>Australia</option>
         <option>Austria</option>
         <option>Azerbaidjan</option>
         <option>Bahamas</option>
         <option>Bahrain</option>
         <option>Bangladesh</option>
         <option>Barbados</option>
         <option>Belarus</option>
         <option>Belgium</option>
         <option>Belize</option>
         <option>Benin</option>
         <option>Bermuda</option>
         <option>Bhutan</option>
         <option>Bolivia</option>
         <option>Bosnia-Herzegovina</option>
         <option>Botswana</option>
         <option>Bouvet Island</option>
         <option>Brazil</option>
         <option>British Indian Ocean Territory</option>
         <option>Brunei Darussalam</option>
         <option>Bulgaria</option>
         <option>Burkina Faso</option>
         <option>Burundi</option>
         <option>Cambodia</option>
         <option>Cameroon</option>
         <option>Canada</option>
         <option>Cape Verde</option>
         <option>Cayman Islands</option>
         <option>Central African Republic</option>
         <option>Chad</option>
         <option>Chile</option>
         <option>China</option>
         <option>Christmas Island</option>
         <option>Cocos (Keeling) Islands</option>
         <option>Colombia</option>
         <option>Comoros</option>
         <option>Congo</option>
         <option>Cook Islands</option>
         <option>Costa Rica</option>
         <option>Croatia</option>
         <option>Cuba</option>
         <option>Cyprus</option>
         <option>Czech Republic</option>
         <option>Denmark</option>
         <option>Djibouti</option>
         <option>Dominica</option>
         <option>Dominican Republic</option>
         <option>East Timor</option>
         <option>Ecuador</option>
         <option>Egypt</option>
         <option>El Salvador</option>
         <option>Equatorial Guinea</option>
         <option>Eritrea</option>
         <option>Estonia</option>
         <option>Ethiopia</option>
         <option>Falkland Islands</option>
         <option>Faroe Islands</option>
         <option>Fiji</option>
         <option>Finland</option>
         <option>Former USSR</option>
         <option>France</option>
         <option>France (European Territory)</option>
         <option>French Guyana</option>
         <option>French Southern Territories</option>
         <option>Gabon</option>
         <option>Gambia</option>
         <option>Georgia</option>
         <option>Germany</option>
         <option>Ghana</option>
         <option>Gibraltar</option>
         <option>Greece</option>
         <option>Greenland</option>
         <option>Grenada</option>
         <option>Guadeloupe (French)</option>
         <option>Guam</option>
         <option>Guatemala</option>
         <option>Guinea</option>
         <option>Guinea Bissau</option>
         <option>Guyana</option>
         <option>Haiti</option>
         <option>Heard and McDonald Islands</option>
         <option>Honduras</option>
         <option>Hong Kong</option>
         <option>Hungary</option>
         <option>Iceland</option>
         <option>India</option>
         <option>Indonesia</option>
         <option>Iran</option>
         <option>Iraq</option>
         <option>Ireland</option>
         <option>Israel</option>
         <option>Italy</option>
         <option>Ivory Coast</option>
         <option>Jamaica</option>
         <option>Japan</option>
         <option>Jordan</option>
         <option>Kazakhstan</option>
         <option>Kenya</option>
         <option>Kiribati</option>
         <option>Kuwait</option>
         <option>Kyrgyzstan</option>
         <option>Laos</option>
         <option>Latvia</option>
         <option>Lebanon</option>
         <option>Lesotho</option>
         <option>Liberia</option>
         <option>Libya</option>
         <option>Liechtenstein</option>
         <option>Lithuania</option>
         <option>Luxembourg</option>
         <option>Macau</option>
         <option>Macedonia</option>
         <option>Madagascar</option>
         <option>Malawi</option>
         <option>Malaysia</option>
         <option>Maldives</option>
         <option>Mali</option>
         <option>Malta</option>
         <option>Marshall Islands</option>
         <option>Martinique (French)</option>
         <option>Mauritania</option>
         <option>Mauritius</option>
         <option>Mayotte</option>
         <option>Mexico</option>
         <option>Micronesia</option>
         <option>Moldavia</option>
         <option>Monaco</option>
         <option> Mongolia</option>
         <option>Montserrat</option>
         <option>Morocco</option>
         <option>Mozambique</option>
         <option>Myanmar, Union of (Burma)</option>
         <option>Namibia</option>
         <option>Nauru</option>
         <option>Nepal</option>
         <option>Netherlands</option>
         <option>Netherlands Antilles</option>
         <option>Neutral Zone</option>
         <option>New Caledonia (French)</option>
         <option>New Zealand</option>
         <option>Nicaragua</option>
         <option>Niger</option>
         <option>Nigeria</option>
         <option>Niue</option>
         <option>Norfolk Island</option>
         <option>North Korea</option>
         <option>Northern Mariana Islands</option>
         <option>Norway</option>
         <option>Oman</option>
         <option>Pakistan</option>
         <option>Palau</option>
         <option>Panama</option>
         <option>Papua New Guinea</option>
         <option>Paraguay</option>
         <option>Peru</option>
         <option>Philippines</option>
         <option>Pitcairn Island</option>
         <option>Poland</option>
         <option>Polynesia (French)</option>
         <option>Portugal</option>
         <option>Qatar</option>
         <option>Reunion (French)</option>
         <option>Romania</option>
         <option>Russian Federation</option>
         <option>Rwanda</option>
         <option>S. Georgia &amp; S. Sandwich Islands</option>
         <option>Saint Helena</option>
         <option>Saint Kitts &amp; Nevis Anguilla</option>
         <option>Saint Lucia</option>
         <option>Saint Pierre and Miquelon</option>
         <option>Saint Tome and Principe</option>
         <option >Saint Vincent &amp; Grenadines</option>
         <option >Samoa</option>
         <option >San Marino</option>
         <option >Saudi Arabia</option>
         <option >Senegal</option>
         <option >Seychelles</option>
         <option >Sierra Leone</option>
         <option >Singapore</option>
         <option >Slovakia</option>
         <option >Slovenia</option>
         <option >Solomon Islands</option>
         <option >Somalia</option>
         <option >South Africa</option>
         <option >South Korea</option>
         <option >Spain</option>
         <option >Sri Lanka</option>
         <option >Sudan</option>
         <option >Suriname</option>
         <option >Svalbard and Jan Mayen Islands</option>
         <option >Swaziland</option>
         <option >Sweden</option>
         <option >Switzerland</option>
         <option >Syria</option>
         <option >Tadjikistan</option>
         <option >Taiwan</option>
         <option >Tanzania</option>
         <option >Thailand</option>
         <option >Togo</option>
         <option >Tokelau</option>
         <option >Tonga</option>
         <option >Trinidad and Tobago</option>
         <option >Tunisia</option>
         <option >Turkey</option>
         <option >Turkmenistan</option>
         <option >Turks and Caicos Islands</option>
         <option >Tuvalu</option>
         <option >Uganda</option>
         <option >UK</option>
         <option >Ukraine</option>
         <option >United Arab Emirates</option>
         <option >Uruguay</option>
         <option >US</option>
         <option >US Minor Outlying Islands</option>
         <option >Uzbekistan</option>
         <option >Vanuatu</option>
         <option >Vatican City</option>
         <option >Venezuela</option>
         <option >Vietnam</option>
         <option >Virgin Islands (British)</option>
         <option >Virgin Islands (US)</option>
         <option >Wallis and Futuna Islands</option>
         <option >Western Sahara</option>
         <option >Yemen</option>
         <option >Yugoslavia</option>
         <option >Zaire</option>
         <option >Zambia</option>
         <option >Zimbabwe</option>
     </select>                            
     <p class="help-block"></p>
 </div>
</div>
<div class="control-group form-group">
    <div class="controls">
        <label>Gender</label>
        <select class="form-control" id="gender" >
         <option value="Decline to Identify">Decline to Identify</option>
         <option value="Male">Male</option>
         <option value="Female">Female</option>
     </select>                            
     <p class="help-block"></p>
 </div>
</div>
<div class="control-group form-group">
    <div class="controls">
       <div class = "col-lg-12">
          <label>Date of Birth</label>	
      </div>                            
      <div class="col-lg-4">
       <select class="form-control" id="dob_dd" >
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
        <option>21</option>
        <option>22</option>
        <option>23</option>
        <option>24</option>
        <option>25</option>
        <option>26</option>
        <option>27</option>
        <option>28</option>
        <option>29</option>
        <option>30</option>
        <option>31</option>
    </select>  
</div>
<div class="col-lg-4">
    <select class="form-control" id="dob_mm" >
        <option value="January">January</option>
        <option value="February">February</option>
        <option value="March">March</option>
        <option value="April">April</option>
        <option value="May">May</option>
        <option value="June">June</option>
        <option value="July">July</option>
        <option value="August">August</option>
        <option value="September">September</option>
        <option value="October">October</option>
        <option value="November">November</option>
        <option value="December">December</option>
    </select>
</div>
<div class="col-lg-4">
    <select class="form-control" id="dob_yyyy" >
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
        <option value="1993">1993</option>
        <option value="1992">1992</option>
        <option value="1991">1991</option>
        <option value="1990">1990</option>
        <option value="1989">1989</option>
        <option value="1988">1988</option>
        <option value="1987">1987</option>
        <option value="1986">1986</option>
        <option value="1985">1985</option>
        <option value="1984">1984</option>
        <option value="1983">1983</option>
        <option value="1982">1982</option>
        <option value="1981">1981</option>
        <option value="1980">1980</option>
        <option value="1979">1979</option>
        <option value="1978">1978</option>
        <option value="1977">1977</option>
        <option value="1976">1976</option>
        <option value="1975">1975</option>
        <option value="1974">1974</option>
        <option value="1973">1973</option>
        <option value="1972">1972</option>
        <option value="1971">1971</option>
        <option value="1970">1970</option>
        <option value="1969">1969</option>
        <option value="1968">1968</option>
        <option value="1967">1967</option>
        <option value="1966">1966</option>
        <option value="1965">1965</option>
        <option value="1964">1964</option>
        <option value="1963">1963</option>
        <option value="1962">1962</option>
        <option value="1961">1961</option>
        <option value="1960">1960</option>
        <option value="1959">1959</option>
        <option value="1958">1958</option>
        <option value="1957">1957</option>
        <option value="1956">1956</option>
        <option value="1955">1955</option>
        <option value="1954">1954</option>
        <option value="1953">1953</option>
        <option value="1952">1952</option>
        <option value="1951">1951</option>
        <option value="1950">1950</option>
        <option value="1949">1949</option>
        <option value="1948">1948</option>
        <option value="1947">1947</option>
        <option value="1946">1946</option>
        <option value="1945">1945</option>
        <option value="1944">1944</option>
        <option value="1943">1943</option>
        <option value="1942">1942</option>
        <option value="1941">1941</option>
        <option value="1940">1940</option>
        <option value="1939">1939</option>
        <option value="1938">1938</option>
        <option value="1937">1937</option>
        <option value="1936">1936</option>
        <option value="1935">1935</option>
        <option value="1934">1934</option>
        <option value="1933">1933</option>
        <option value="1932">1932</option>
        <option value="1931">1931</option>
        <option value="1930">1930</option>
        <option value="1929">1929</option>
        <option value="1928">1928</option>
        <option value="1927">1927</option>
        <option value="1926">1926</option>
        <option value="1925">1925</option>
        <option value="1924">1924</option>
        <option value="1923">1923</option>
        <option value="1922">1922</option>
        <option value="1921">1921</option>
        <option value="1920">1920</option>
        <option value="1919">1919</option>
        <option value="1918">1918</option>
        <option value="1917">1917</option>
        <option value="1916">1916</option>
        <option value="1915">1915</option>
        <option value="1914">1914</option>
        <option value="1913">1913</option>
        <option value="1912">1912</option>
        <option value="1911">1911</option>
        <option value="1910">1910</option>
        <option value="1909">1909</option>
        <option value="1908">1908</option>
        <option value="1907">1907</option>
        <option value="1906">1906</option>
        <option value="1905">1905</option>
        <option value="1904">1904</option>
        <option value="1903">1903</option>
        <option value="1902">1902</option>
        <option value="1901">1901</option>
        <option value="1900">1900</option>
    </select>
</div>                          
<p class="help-block"></p>
</div>
</div>

<div id="success"></div>
<!-- For success/fail messages -->
<br/>
<br/>
<br/>
<br/>
<button type="submit" class="btn btn-primary btn-lg btn-block" value="Submit">Submit Application</button>
                                      
</form>
</div>
</div>
<!-- /.row -->
<form class="form-horizontal">
<fieldset>

    

<?php
include_once ("inc/footer.php");
?>

<!-- jQuery Version 1.11.0 -->
<script src="js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
