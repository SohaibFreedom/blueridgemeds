<?php /* Template Name: Get started Form */ ?>
<?php
get_header(); // This includes the header.php file
?>

<style>

	/* medication-select-wrap start */

.medication-select-wrap {
    max-width: 1100px;
	text-align:center;
}
	.show-150-discount .three-month-tab-content p.pricing-discount {
    display: none;
}

.show-150-discount .three-month-tab-content p.pricing-discount.off-150-discount {
	display:block !important;
}
	.discount-apply-glpy li.month-3-tabs-selector {
	display:none !important;
}
.discount-apply-glpy.choose-plan-tabs-wrap .tab-header li {
    width: 100% !important;
    background: #7c99a9 !important;
    color: #fff !important;
}
.discount-apply-glpy.choose-plan-tabs-wrap .tab-header li a {
    color: #fff !important;
}
.email-with-img {
    margin-bottom: 10px !important;
}
.medication-dosage-wrap {
	display:flex;
	justify-content:space-between;
	flex-wrap:wrap;
	padding: 25px 30px;
	text-align:center;
	background-color: var(--off-white);
}

.medication-dosage-wrap .select-medication, .select-dosage {
	width:50%;
	padding-top:20px;
	padding-bottom:20px;
}

.medication-dosage-wrap .button-wrap{
	width:100%;
	margin-top:30px;
}

.select-medication {
    padding-right: 30px;
    border-right: 1px solid var(--blue-shadow);
}

.medication-dosage-wrap input {
	font-size: 14px;
    font-weight: 400;
    font-family: Poppins, sans-serif;
    background: var(--white-color);
    border: 1px solid var(--shadow-blue);
    color: var(--shadow-blue);
    border-radius: 6px;
	position:relative;
	width: 175px;
    display: block;
    margin: 30px auto 0;
}
	
.medication-dosage-wrap select {
	font-size: 14px;
    font-weight: 400;
    font-family: Poppins, sans-serif;
    background: var(--white-color);
    border: 1px solid var(--shadow-blue);
    color: var(--shadow-blue);
    border-radius: 6px;
	cursor: pointer;
	position:relative;
	width: 175px;
    display: block;
    margin: 30px auto 0;
}

.medicine-option-select option {
	color:#808080;
	font-size:11px;
	font-weight:600;
}
	
.medication-dosage-wrap input::placeholder {
	color: var(--shadow-blue);
}

.select-dosage .step-description {
	padding-top:20px;
}

.medication-select-wrap .policy-checkbox-wrap {
    display: flex;
    align-items: center;
	max-width:300px;
    margin: 50px auto 0;
    position: relative;
}

.medication-select-wrap input[type="checkbox"] {
    display: none;
}

.medication-select-wrap .policy-checkbox-wrap label {
    font-size: 14px;
    font-weight: 400;
    color: var(--shadow-blue);
	padding-left:25px;
}

.medication-select-wrap .policy-checkbox-wrap label::before {
    content: "";
    position: absolute;
    top: 50%;
    left: 0;
    transform: translate(-50%, -50%);
    width: 24px;
    height: 24px;
    border: none;
    background-color: transparent;
    border: 1px solid var(--blue-light);
    cursor: pointer;
}

.medication-select-wrap .policy-checkbox-wrap input[type="checkbox"]:checked + label:after {
    display: block;
}

.medication-select-wrap .policy-checkbox-wrap label::after {
    content: "\2713";
    position: absolute;
    top: 50%;
    left: 0px !important;
    transform: translate(-50%, -50%);
    font-size: 15px;
    display: none;
    color: var(--navy-medium);
    font-weight: 900;
}

.medication-select-wrap input[type=button] {
	width:590px;
}

@media only screen and (max-width: 768px) {
	.medication-dosage-wrap .select-medication, .select-dosage {
    	width: 100%;
		padding:0
	}
	
	.select-medication {
    	border: none;
	}
	
	.medication-select-wrap .policy-checkbox-wrap label {
    	font-size: 12px;
	}
	
	.medication-select-wrap input[type=button] {
		width:100%;
	}
	
	.medication-dosage-wrap .button-wrap {
		margin-top: 0;
	}
	
	.medication-dosage-wrap {
		gap:30px;
	}
}

/* medication-select-wrap end */

</style>

<header class="custom-form-header">
    <div class="container">
        <div class="custom-header-inner">
            <div class="logo-wrapper">
                <div class="icon-button-wrap">
                    <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/09/Group-123.png" alt="previous" onclick="goToPreviousStep()" style="cursor:pointer;">
                </div>
                <a href="https://blueridgemeds.wpenginepowered.com/" class="logo-img">
                    <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/KxBL8CTz1ZiDbTn8PeRg1JLSW4.avif" alt="Blue Ridge Meds">
                </a>
            </div>
            <div class="help-button-wrap">
                <a href="tel:855-295-BLUE (2538)" title="Help?"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none">
<path d="M21.97 18.33C21.97 18.69 21.89 19.06 21.72 19.42C21.55 19.78 21.33 20.12 21.04 20.44C20.55 20.98 20.01 21.37 19.4 21.62C18.8 21.87 18.15 22 17.45 22C16.43 22 15.34 21.76 14.19 21.27C13.04 20.78 11.89 20.12 10.75 19.29C9.6 18.45 8.51 17.52 7.47 16.49C6.44 15.45 5.51 14.36 4.68 13.22C3.86 12.08 3.2 10.94 2.72 9.81C2.24 8.67 2 7.58 2 6.54C2 5.86 2.12 5.21 2.36 4.61C2.6 4 2.98 3.44 3.51 2.94C4.15 2.31 4.85 2 5.59 2C5.87 2 6.15 2.06 6.4 2.18C6.66 2.3 6.89 2.48 7.07 2.74L9.39 6.01C9.57 6.26 9.7 6.49 9.79 6.71C9.88 6.92 9.93 7.13 9.93 7.32C9.93 7.56 9.86 7.8 9.72 8.03C9.59 8.26 9.4 8.5 9.16 8.74L8.4 9.53C8.29 9.64 8.24 9.77 8.24 9.93C8.24 10.01 8.25 10.08 8.27 10.16C8.3 10.24 8.33 10.3 8.35 10.36C8.53 10.69 8.84 11.12 9.28 11.64C9.73 12.16 10.21 12.69 10.73 13.22C11.27 13.75 11.79 14.24 12.32 14.69C12.84 15.13 13.27 15.43 13.61 15.61C13.66 15.63 13.72 15.66 13.79 15.69C13.87 15.72 13.95 15.73 14.04 15.73C14.21 15.73 14.34 15.67 14.45 15.56L15.21 14.81C15.46 14.56 15.7 14.37 15.93 14.25C16.16 14.11 16.39 14.04 16.64 14.04C16.83 14.04 17.03 14.08 17.25 14.17C17.47 14.26 17.7 14.39 17.95 14.56L21.26 16.91C21.52 17.09 21.7 17.3 21.81 17.55C21.91 17.8 21.97 18.05 21.97 18.33Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10"/>
</svg><span>855-295-BLUE (2538)</span></a>
			<a class="help-btn" href="/contact-us/" title="Help">Help</a>
            </div>
        </div>
    </div>
</header>





<div class="form-container">
    <form id="customForm" method="post" action="">
       
		<!-- Medication Dosage Select -->
		
		<div class="medication-select-wrap step-main-wrapper step" data-step="mg-select">
			<div class="medication-dosage-wrap">
				<div class="select-medication">
					<h3 class="step-main-heading">Which medication have you previously taken or are currently using? </h3>
					<p class="step-description">Please select one</p>
					<select class="medicine-option-select">
						<option value="" class="selected" selected>Select</option>
						<option value="Semaglutide">Semaglutide</option>
						<option value="Tirzepatide">Tirzepatide</option>
						<option value="Oral Semaglutide">Oral Semaglutide</option>
						<option value="Oral Tirzepatide">Oral Tirzepatide</option>
						<option value="Ozempic®">Ozempic®</option>
						<option value="Wegovy®">Wegovy®</option>
						<option value="Zepbound®">Zepbound®</option>
						<option value="Mounjaro®">Mounjaro®</option>
						<option value="Other">Other</option>
  					</select>
				</div>
				<div class="select-dosage">
					<h3 class="step-main-heading">What was/is your dosage?</h3>
					<p class="step-description">Please enter your dosage</p>
					<input type="text" placeholder="x.xx mg">
					<div class="policy-checkbox-wrap">
                    	<input type="checkbox" id="select-checkbox" name="select-checkbox">
                    	<label for="select-checkbox">Would you like to discuss staying on <br> the same dosage or modifying your <br> current dosage with your provider? </label>
					</div>
				</div>
				<div class="button-wrap">
					<input class="submit" type="button" value="Continue" onclick="handleContinueClick('step-5')">
				</div>
			</div>
			<div class="contact-wrap">
                <div class="top-img">
                    <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/09/BlueRidge-logo-small.png" alt="">
                </div>
                <div class="contact-details">
                    <p>Reach Out</p>
                    <a href="tel:+18552952538">855-295-BLUE (2538)</a>
                    <a href="mailto:Ask@blueridgemeds.com">Ask@blueridgemeds.com</a>
                    <a href="https://www.blueridgemeds.com">https://www.blueridgemeds.com</a>
                </div>
            </div>
		</div>
		
		<!-- GLP-1 medication yes or no -->
		
		<div class="glp-medication-wrap step-main-wrapper step" data-step="step-6">
			<div class="glp-medication-content">
				<h3 class="step-main-heading">Have you previously taken or are you currently on a GLP-1 medication?</h3>
				<p class="step-description">Please select one</p>
				<div class="button-wrapper">
					<input class="submit step-yes" type="button" value="Yes" onclick="showStep('mg-select'); removeDiscountParam();">
					<input class="submit step-no" type="button" value="No" onclick="handleContinueClick('step-5'); addDiscountParam();">
				</div>
			</div>
		</div>
		
		

        <!-- Select Your Interest Section -->
        
   <div class="step-main-wrapper interest-checkbox-wrap step" data-step="step-1" style="display: block;">
    <span>YOU DID IT</span>
    <h3 class="step-main-heading">What is your primary goal for weight loss?</h3>
    <div class="interest-checkbox-inner">
        <label for="interests" class="interest-heading step-input-label">Select the most important outcome:</label>
        <div class="checkbox-wrapper">
            <input type="checkbox" name="interests[]" value="Overall health improvement" id="healthy-weight" class="single-selector">
            <label for="healthy-weight">Overall health improvement</label>
        </div>
        <div class="checkbox-wrapper">
            <input type="checkbox" name="interests[]" value="Specific weight loss target" id="physical-health" class="single-selector">
            <label for="physical-health">Specific weight loss target</label>
        </div>
        <div class="checkbox-wrapper">
            <input type="checkbox" name="interests[]" value="Increased Energy" id="cardiovascular-health" class="single-selector">
            <label for="cardiovascular-health">Increased Energy</label>
        </div>
        <div class="checkbox-wrapper">
            <input type="checkbox" name="interests[]" value="Improved body composition" id="mood-confidence" class="single-selector">
            <label for="mood-confidence">Improved body composition</label>
        </div>

        <div class="field-valid-error interest-f-error">
            <span class="error-message" id="interests-error"></span>
        </div>
        <input class="submit" type="button" value="Continue" onclick="validateInterestCheckboxes()">
    </div>
</div>


        <!-- Continue Weight loss Section -->

        <div class="step-main-wrapper weight-loss-continue-wrap step" data-step="step-2">
            <div class="weight-continue-inner">
                <div class="weight-medication-benefits">
                    <div class="weight-medication-list">
                        <div class="medication-img">
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/09/no-string.png" alt="No Strings attached">
                        </div>
                        <div class="medication-text">
                            <h4>No Strings attached</h4>
                            <p>Pause or cancel at any time.</p>
                        </div>
                    </div>
                    <div class="weight-medication-list">
                        <div class="medication-img">
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/09/shipping.png" alt="No Strings attached">
                        </div>
                        <div class="medication-text">
                            <h4>Free shipping</h4>
                            <p>Delivered right to your door.</p>
                        </div>
                    </div>
                    <div class="weight-medication-list">
                        <div class="medication-img">
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/09/free-medical.png" alt="No Strings attached">
                        </div>
                        <div class="medication-text">
                            <h4>Free medical evaluation</h4>
                            <p>Medical Evaluation and <br> prescriptions by board <br> certified physician.</p>
                        </div>
                    </div>
                </div>
                <div class="weight-continue-content">
                    <h3 class="step-main-heading">Continue with your weight loss visit.</h3>
                    <p class="step-description">Next, you’ll provide some basic information about yourself, your lifestyle, and your medical history. Your doctor will use this information to evaluate your health status and, if appropriate, prescribe for treatment.</p>
                    <div class="email-submit-form">
                       <div class="input-wrapper">
    <label for="email" class="step-input-label">Email Address</label>
    <input class="contact-input" type="email" id="email" name="email" placeholder="Email Address" required>
   <div class="field-valid-error">
	   
						  <span class="error-message" id="email-error"></span> </div> 
</div>

                         <input class="submit" type="button" value="Continue" onclick="checking('step-3'); validateFieldsAndContinue('step-3')">
						
                    </div>
                </div>
            </div>
            <div class="contact-wrap">
                <div class="top-img">
                    <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/09/BlueRidge-logo-small.png" alt="">
                </div>
                <div class="contact-details">
                    <p>Reach Out</p>
                    <a href="tel:+18552952538">855-295-BLUE (2538)</a>
                    <a href="mailto:Ask@blueridgemeds.com">Ask@blueridgemeds.com</a>
                    <a href="https://www.blueridgemeds.com">https://www.blueridgemeds.com</a>
                </div>
            </div>
        </div>

        <!-- Better Health Receive Updates Section -->
        
        <div class="step-main-wrapper health-updates-via-text step" data-step="step-3">
            <div class="health-updates-content">
                <h3 class="step-main-heading">Better Health Starts Here! Receive Important Updates via Text</h3>
                <div class="email-with-img">
					<div class="flag-img-text">
						<img src="https://blueridgem2stg.wpenginepowered.com/wp-content/uploads/2024/11/us-flag.png" alt="" />
						<span>+1</span>
					</div>
            <input class="contact-input" type="text" id="phone" name="phone" placeholder="Enter Your Mobile Phone" pattern="\d{10}" minlength="10" maxlength="10" oninput="this.value=this.value.replace(/\D/g,'')" required>


					
                    <img class="question-mark" src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/09/mark-1.png" alt="mark">
                </div>
				<div class="field-valid-error"> <span class="error-message" id="phone-error"></span></div>
                <div class="subscribe-sms-wrapper">
                    <input type="checkbox" name="subscribe-sms-updates" value="yes" id="subscribe-sms-updates" >
					
                    <label for="subscribe-sms-updates">Subscribe to SMS Updates</label>
                </div>
                <p>By signing up via text, you agree to receive marketing communications, including checkout reminders and status updates, at the phone number provided. <b>Consent is not a condition of purchase.</b> Reply STOP to unsubscribe. Reply HELP for help. Message frequency varies. Msg & data rates may apply. View our <a href="/privacy-policy" target="_blank" title="Privacy Policy">Privacy Policy</a> and <a href="/terms-conditions" target="_blank" title="Terms of Service">Terms of Service.</a></p>
                <input class="submit" type="button" value="Continue" onclick="validateFieldsAndContinue('step-4')">
            </div>
            <div class="contact-wrap">
                <div class="top-img">
                    <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/09/BlueRidge-logo-small.png" alt="">
                </div>
                <div class="contact-details">
                    <p class="step-description">Reach Out</p>
                    <a href="tel:+18552952538">855-295-BLUE (2538)</a>
                    <a href="mailto:Ask@blueridgemeds.com">Ask@blueridgemeds.com</a>
                    <a href="https://www.blueridgemeds.com">https://www.blueridgemeds.com</a>
                </div>
            </div>
        </div>

        <!-- Enter the following information Section -->

        <div class="step-main-wrapper personal-info-form-wrap step" data-step="step-4">
            <div class="user-details-wrap">
                <h3 class="step-main-heading">Enter the following information</h3>
                <div class="full-name-box">
                    <div class="input-wrapper first-name-box">
                        <label for="fname" class="step-input-label">First Name</label>
                        <input class="contact-input" type="text" id="fname" name="fname" required/>
						<div class="field-valid-error"> <span class="error-message" id="fname-error"></span></div>
                    </div>
                    <div class="input-wrapper last-name-box">
                        <label for="lname" class="step-input-label">Last Name</label>
                        <input class="contact-input" type="text" id="lname" name="lname" required/>
						<div class="field-valid-error"> <span class="error-message" id="lname-error"></span></div>
                    </div>
                </div>
                <div class="input-wrapper enter-birth">
                    <label for="dob" class="step-input-label">Enter your date of birth</label>
                    <input class="contact-input" type="date" id="dob" name="dob" required/>
					<div class="field-valid-error"> <span class="error-message" id="dob-error"></span></div>
                </div>
                <div class="input-wrapper sex-assigned">
                    <label for="sex-assigned" class="step-input-label">Sex Assigned at Birth</label>
                    <div class="radio-group rectangle-box-label">
                        <div class="gender-male rectangle-box-col">
                            <input type="radio" id="male" name="sex-assigned" value="Male" required>
                            <label for="male" class="step-input-label">Male</label>
                        </div>
                        <div class="gender-female rectangle-box-col">
                            <input type="radio" id="female" name="sex-assigned" value="Female" required>
                            <label for="female" class="step-input-label">Female</label>
                        </div>
                    </div>
                </div>
                <div class="input-wrapper state-you-live">
                    <label for="state" class="step-input-label">State You Live In</label>
                    <select class="contact-input" id="state" name="state" required>
    <option value="" disabled selected>Select your state</option>
    <option value="alabama">Alabama</option>
    <option value="alaska">Alaska</option>
    <option value="arizona">Arizona</option>
    <option value="arkansas">Arkansas</option>
    <option value="california">California</option>
    <option value="colorado">Colorado</option>
    <option value="connecticut">Connecticut</option>
    <option value="delaware">Delaware</option>
    <option value="florida">Florida</option>
    <option value="georgia">Georgia</option>
    <option value="hawaii">Hawaii</option>
    <option value="idaho">Idaho</option>
    <option value="illinois">Illinois</option>
    <option value="indiana">Indiana</option>
    <option value="iowa">Iowa</option>
    <option value="kansas">Kansas</option>
    <option value="kentucky">Kentucky</option>
    <option value="louisiana">Louisiana</option>
    <option value="maine">Maine</option>
    <option value="maryland">Maryland</option>
    <option value="massachusetts">Massachusetts</option>
    <option value="michigan">Michigan</option>
    <option value="minnesota">Minnesota</option>
    <option value="mississippi">Mississippi</option>
    <option value="missouri">Missouri</option>
    <option value="montana">Montana</option>
    <option value="nebraska">Nebraska</option>
    <option value="nevada">Nevada</option>
    <option value="new-hampshire">New Hampshire</option>
    <option value="new-jersey">New Jersey</option>
    <option value="new-mexico">New Mexico</option>
    <option value="new-york">New York</option>
    <option value="north-carolina">North Carolina</option>
    <option value="north-dakota">North Dakota</option>
    <option value="ohio">Ohio</option>
    <option value="oklahoma">Oklahoma</option>
    <option value="oregon">Oregon</option>
    <option value="pennsylvania">Pennsylvania</option>
    <option value="rhode-island">Rhode Island</option>
    <option value="south-carolina">South Carolina</option>
    <option value="south-dakota">South Dakota</option>
    <option value="tennessee">Tennessee</option>
    <option value="texas">Texas</option>
    <option value="utah">Utah</option>
    <option value="vermont">Vermont</option>
    <option value="virginia">Virginia</option>
    <option value="washington">Washington</option>
    <option value="west-virginia">West Virginia</option>
    <option value="wisconsin">Wisconsin</option>
    <option value="wyoming">Wyoming</option>
</select>
					<div class="field-valid-error"> <span class="error-message" id="step-state-error"></span></div>

                </div>
                <div class="privacy-policy-agreement">
                    <p class="consent-text">Consent</p>
                    <div class="privacy-checkbox">
                        <input type="checkbox" id="agree-privacy-policy" name="agree_privacy_policy" required>
                        <label for="agree-privacy-policy">I agree to the <a href="/privacy-policy" target="_blank">Privacy Policy</a></label>
						
                    </div>
					<div class="field-valid-error"> <span class="error-message" id="agree-privacy-policy-error"></span></div>
                </div>
            </div>
            <div class="button-wrapper">
             
				<input class="submit previous" type="button" value="Previous" onclick="showStep('step-3')">
                 <input class="submit" type="button" value="Continue" onclick="validateAndCheckState()">
            </div>
        </div>

        <!-- BMI Calculator Section -->

        <div class="step-main-wrapper calculate-bmi-wrap step" data-step="step-5">
            <h3 class="step-main-heading">We will now calculate your BMI</h3>
            <p class="step-description">Enter the following information</p>
            <div id="bmiCalculator">
                <div class="bmi-form-content">
                    <div class="bmi-height-inputs">
                        <label for="feet" class="step-input-label">Height</label>
                        <div class="height-inputs-inner">
                            <div class="height-in-feet">
                                <input class="contact-input" type="number" id="feet" name="feet" placeholder="Feet" required>
								<div class="field-valid-error"> <span class="error-message" id="feet-error"></span></div>
                            </div>
                            <div class="height-in-inches">
                                <input class="contact-input" type="number" id="inches" name="inches" placeholder="Inches" required>
								<div class="field-valid-error"> <span class="error-message" id="inches-error"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="weight-in-lbs">
                        <label for="weight" class="step-input-label">Weight</label>
                        <input class="contact-input" type="number" id="weight" name="weight" placeholder="lbs" required>
						<div class="field-valid-error"> <span class="error-message" id="weight-error"></span></div>
                    </div>
                    <div class="bmi-calculate">
                        <label for="bmi" class="step-input-label">BMI</label>
                        <input class="contact-input" type="text" id="bmi" name="bmi" readonly>
                    </div>
                    <input class="submit" type="button" value="Continue" onclick="validateBMIFormAndContinue()">
                </div>
            </div>
        </div>

        <!-- Consult Your Physician Section -->

        <div class="step-main-wrapper consult-your-physician step" data-step="step-error">
			<div class="consult-your-physician-inner">
				<h3 class="step-main-heading">Please consult your physician</h3>
            <p class="step-description">We are sorry, but based on your response to our survey you are not a candidate for GLP-1’s on our platform at this time. We recommend that you follow up with your primary care physician for more appropriate options. Thank you for choosing Blueridge Meds!</p>
           <a href="/" class="submit">Back to Home</a>
			</div>
        </div>
		
		<!-- State Error Consult Physician -->

        <div class="step-main-wrapper consult-your-physician step" data-step="step-state-error">
			<div class="consult-your-physician-inner">
				<h3 class="step-main-heading">Please consult your physician</h3>
            <p class="step-description">We are sorry, but we are currently unable to offer our services in your state. We recommend that you follow up with your primary care physician for more appropriate options. Thank you for choosing BlueRidge Meds!</p>
           <a href="/" class="submit">Back to Home</a>
			</div>
        </div>

        <!-- Choose Your Plan Section -->

<!--         <div class="step-main-wrapper choose-your-plan step">
            <div class="choose-plan-content">
                <h3 class="step-main-heading">Congratulations!</h3>
                <p class="step-description">Based on your responses, it is likely that a medical professional will recommend a GLP-1 medication!</p>
                <p class="continue-plan-heading">To continue, please choose a plan.</p>
          
				<input class="submit" type="button" value="Continue" onclick="handleContinueClick('step-5')">
            </div>
            <div class="contact-wrap">
                <div class="top-img">
                    <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/09/BlueRidge-logo-small.png" alt="">
                </div>
                <div class="contact-details">
                    <p>Reach Out</p>
                    <a href="tel:+18552952538">855-295-BLUE (2538)</a>
                    <a href="mailto:Ask@blueridgemeds.com">Ask@blueridgemeds.com</a>
                    <a href="https://www.blueridgemeds.com">https://www.blueridgemeds.com</a>
                </div>
            </div>
        </div> -->

        <!-- Form Product Page  -->
		<!-- Semaglutide 1-month-->
        <div class="step-main-wrapper form-product-wrap step" data-step="step-semag-1">
            <div class="product-inner-content">
                <h3 class="step-main-heading">Congratulations!</h3>
                <p class="step-description">Based on your responses, it is likely that a medical professional will recommend Semaglutide GLP-1 . Click “Learn more” to explore the commonly prescribed dosing schedule. <strong> If you would like choose a different treatment option, please select “Modify your plan” below.</strong></p>
                <div class="product-main">
                    <div class="product-image">
                        <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/09/BlueRidge-Semaglutide-1-bottle-update.png" alt="product image">
                    </div>
                    <div class="product-details">
                        <h4 class="product-title">Semaglutide</h4>
                        <p>1 x Vial with Injection Supply Kit</p>
                        <div class="product-price-wrap">
                            <p>Billed and shipped for</p>
							<div class="product-price"><span  class="product-regular-price">$297.00</span> <span class="discount-price">$197.00</span></div>
                        </div>
                        <a class="product-learn-more" href="#modal" id="learnMore">Learn More</a>
                    </div>
                </div>
                <div class="step-continue-wrap">
                 <input class="submit" type="button" value="Continue" onclick="addCartParameterAndShowNextStep('semag-1', 'step-privacy')">

                    <p class="or">Or</p>
                    <input class="submit modify-plan" type="button" value="Modify your plan" onclick="showStep('step-all-products')">
                </div>
            </div>
            <div id="modal" class="product-model-popup">
                <div class="prescription-dosing-content">
                    <span class="cross-icon">&times;</span> 
                    <h3 class="step-main-heading">Prescription Dosing</h3>
                    <p>Prescribers typically follow a schedule that resembles the following:</p>
                    <ul>
                        <li>Month 1 - Week 1-4 - 0.25 mg/week</li>
                        <li>Month 2 - Week 5-8 - 0.5 mg/week</li>
                        <li>Month 3 - Week 9-12 - 1 mg/week</li>
                        <li>Month 4 - Week 13-16 - 1.5 mg/week</li>
                        <li>Month 5 - Week 17-20 - 1.75 mg/week</li>
                        <li>Month 6 - Week 21-24 - 2 mg/week</li>
                        <li>Month 7 - Week 25-28 - 2.25 mg/week</li>
                        <li>Month 8 - Week 29+ - 2.5 mg/week</li>
                    </ul>
                    <p>This is not medical advice...</p>
                    <input class="submit" type="submit" name="submit_form" id="submit_form" value="Got It">
                </div>
            </div>
            <div class="popup-overlay"></div>
            <div class="contact-wrap">
                <div class="top-img">
                    <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/09/BlueRidge-logo-small.png" alt="">
                </div>
                <div class="contact-details">
                    <p>Reach Out</p>
                    <a href="tel:+18552952538">855-295-BLUE (2538)</a>
                    <a href="mailto:Ask@blueridgemeds.com">Ask@blueridgemeds.com</a>
                    <a href="https://www.blueridgemeds.com">https://www.blueridgemeds.com</a>
                </div>
            </div>
        </div>
		
		<!-- Semaglutide 3-month-->
		<div class="step-main-wrapper form-product-wrap step" data-step="step-semag-3">
                        <div class="product-inner-content">
                            <h3 class="step-main-heading">Congratulations!</h3>
<p class="step-description">Based on your responses, it is likely that a medical professional will recommend Semaglutide GLP-1 . Click “Learn more” to explore the commonly prescribed dosing schedule. <strong> If you would like choose a different treatment option, please select “Modify your plan” below.</strong></p>
                            <div class="product-main">
                                <div class="product-image">
                                    <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/09/BlueRidge-Semaglutide-1-bottle-update.png"
                                        alt="product image">
                                </div>
                                <div class="product-details">
                                    <h4 class="product-title">Semaglutide</h4>
                                    <p>3 x Vial with Injection Supply Kit</p>
                                    <div class="product-price-wrap">
                                        <p>Billed and shipped for:</p>
                                        <div class="product-price"><span class="product-regular-price">$747.00</span>
											<span class="discount-price">$647.00</span></div>
                                    </div>
                                    <a class="product-learn-more" href="javascript:void(0)" id="learnMore">Learn More</a>
                                </div>
                            </div>
                            <div class="step-continue-wrap">
                               <input class="submit" type="button" value="Continue" onclick="addCartParameterAndShowNextStep('semag-3', 'step-privacy')">

                                <p class="or">Or</p>
								<input class="submit modify-plan" type="button" value="Modify your plan" onclick="showStep('step-all-products')">
                               
                            </div>
                        </div>
                        <div id="modal" class="product-model-popup">
                            <div class="prescription-dosing-content">
                                <span class="cross-icon">×</span>
                                <h3 class="step-main-heading">Prescription Dosing</h3>
                                <p>Prescribers typically follow a schedule that resembles the following:</p>
                                <ul>
                                    <li>Month 1 - Week 1-4 - 0.25 mg/week</li>
                                    <li>Month 2 - Week 5-8 - 0.5 mg/week</li>
                                    <li>Month 3 - Week 9-12 - 1 mg/week</li>
                                </ul>
                                <p>This is not medical advice. Each patient is unique, and this is just an example of what physicians may prescribe if medically approved. Please consult with your medial professional if you have any questions on specific dosages.</p>
                                <input class="submit" type="submit" name="submit_form" id="submit_form" value="Got It">
                            </div>
                        </div>
                        <div class="popup-overlay"></div>
                        <div class="contact-wrap">
                            <div class="top-img">
                                <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/09/BlueRidge-logo-small.png"
                                    alt="">
                            </div>
                            <div class="contact-details">
                                <p>Reach Out</p>
                                <a href="tel:+18552952538">855-295-BLUE (2538)</a>
                                <a href="mailto:Ask@blueridgemeds.com">Ask@blueridgemeds.com</a>
                                <a href="https://www.blueridgemeds.com">https://www.blueridgemeds.com</a>
                            </div>
                        </div>
                    </div>


                    <!-- Tirzepatide 1-month -->
                    <div class="step-main-wrapper form-product-wrap step" data-step="step-tirze-1">
                        <div class="product-inner-content">
                            <h3 class="step-main-heading">Congratulations!</h3>
                            <p class="step-description">Based on your responses, it is likely that a medical professional will recommend Tirzepatide GLP-1 . Click “Learn more” to explore the commonly prescribed dosing schedule. <strong> If you would like choose a different treatment option, please select “Modify your plan” below.</strong></p>
                            <div class="product-main">
                                <div class="product-image">
                                    <img src="https://blueridgemeds.com/wp-content/uploads/2024/10/tirzepatide-5-2.png"
                                        alt="product image">
                                </div>
                                <div class="product-details">
                                    <h4 class="product-title">Tirzepatide </h4>
                                    <p>1 x Vial with Injection Supply Kit</p>
                                    <div class="product-price-wrap">
                                        <p>Billed and shipped for:</p>
                                        <div class="product-price"><span class="product-regular-price">$397.00</span>
                                            <span class="discount-price">$297.00</span></div>
                                    </div>
                                    <a class="product-learn-more" href="javascript:void(0)" id="learnMore">Learn More</a>
                                </div>
                            </div>
                            <div class="step-continue-wrap">
                                <input class="submit" type="button" value="Continue" onclick="addCartParameterAndShowNextStep('tirze-1', 'step-privacy')">

                                <p class="or">Or</p>
                                <input class="submit modify-plan" type="button" value="Modify your plan" onclick="showStep('step-all-products')">
                            </div>
                        </div>
                        <div id="modal" class="product-model-popup">
                            <div class="prescription-dosing-content">
                                <span class="cross-icon">×</span>
                                <h3 class="step-main-heading">Prescription Dosing</h3>
                                <p>Prescribers typically follow a schedule that resembles the following:</p>
                                <ul>
                                    <li>Month 1 - Week 1-4 - 2.5 mg/week</li>
                                    <li>Month 2 - Week 5-8 - 5 mg/week</li>
                                    <li>Month 3 - Week 9-12 - 7.5 mg/week</li>
                                    <li>Month 4 - Week 13-16 - 10 mg/week</li>
                                    <li>Month 5 - Week 17-20 - 12.5 mg/week</li>
                                    <li>Month 6 - Week 21-24 - 15 mg/week</li>
                                </ul>
                                <p>This is not medical advice. Each patient is unique, and this is just an example of what physicians may prescribe if medically approved. Please consult with your medial professional if you have any questions on specific dosages.</p>
                                <input class="submit" type="submit" name="submit_form" id="submit_form" value="Got It">
                            </div>
                        </div>
                        <div class="popup-overlay"></div>
                        <div class="contact-wrap">
                            <div class="top-img">
                                <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/09/BlueRidge-logo-small.png"
                                    alt="">
                            </div>
                            <div class="contact-details">
                                <p>Reach Out</p>
                                <a href="tel:+18552952538">855-295-BLUE (2538)</a>
                                <a href="mailto:Ask@blueridgemeds.com">Ask@blueridgemeds.com</a>
                                <a href="https://www.blueridgemeds.com">https://www.blueridgemeds.com</a>
                            </div>
                        </div>
                    </div>
                    <!-- Tirzepatide 3-month -->
                    <div class="step-main-wrapper form-product-wrap step" data-step="step-tirze-3">
                        <div class="product-inner-content">
                            <h3 class="step-main-heading">Congratulations!</h3>
                          <p class="step-description">Based on your responses, it is likely that a medical professional will recommend Tirzepatide GLP-1 . Click “Learn more” to explore the commonly prescribed dosing schedule. <strong> If you would like choose a different treatment option, please select “Modify your plan” below.</strong></p>
                            <div class="product-main">
                                <div class="product-image">
                                    <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/09/BlueRidge-Tirzapatide-1-bottle-update.png"
                                        alt="product image">
                                </div>
                                <div class="product-details">
                                    <h4 class="product-title">Tirzepatide</h4>
                                    <p>3 x Vial with Injection Supply Kit</p>
                                    <div class="product-price-wrap">
                                        <p>Billed and shipped for</p>
                                        <div class="product-price"><span class="product-regular-price">$1,047.00</span>
                                            <span class="discount-price">$947.00</span></div>
                                    </div>
                                    <a class="product-learn-more" href="javascript:void(0)" id="learnMore">Learn More</a>
                                </div>
                            </div>
                            <div class="step-continue-wrap">
                               <input class="submit" type="button" value="Continue" onclick="addCartParameterAndShowNextStep('tirze-3', 'step-privacy')">


                                <p class="or">Or</p>
                                <input class="submit modify-plan" type="button" value="Modify your plan" onclick="showStep('step-all-products')">
                            </div>
                        </div>
                        <div id="modal" class="product-model-popup">
                            <div class="prescription-dosing-content">
                                <span class="cross-icon">×</span>
                                <h3 class="step-main-heading">Prescription Dosing</h3>
                                <p>Prescribers typically follow a schedule that resembles the following:</p>
                                <ul>
                                    <li>Month 1 - Week 1-4 - 2.5 mg/week</li>
                                    <li>Month 2 - Week 5-8 - 5 mg/week</li>
                                    <li>Month 3 - Week 9-12 - 7.5 mg/week</li>
                                </ul>
                                <p>This is not medical advice. Each patient is unique, and this is just an example of what physicians may prescribe if medically approved. Please consult with your medial professional if you have any questions on specific dosages.</p>
                                <input class="submit" type="submit" name="submit_form" id="submit_form" value="Got It">
                            </div>
                        </div>
                        <div class="popup-overlay"></div>
                        <div class="contact-wrap">
                            <div class="top-img">
                                <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/09/BlueRidge-logo-small.png"
                                    alt="">
                            </div>
                            <div class="contact-details">
                                <p>Reach Out</p>
                                <a href="tel:+18552952538">855-295-BLUE (2538)</a>
                                <a href="mailto:Ask@blueridgemeds.com">Ask@blueridgemeds.com</a>
                                <a href="https://www.blueridgemeds.com">https://www.blueridgemeds.com</a>
                            </div>
                        </div>
                    </div>
                    <!-- Oral Semaglutide 1-month -->
                    <div class="step-main-wrapper form-product-wrap step" data-step="step-oral">
                        <div class="product-inner-content">
                            <h3 class="step-main-heading">Congratulations!</h3>
                            <p class="step-description">Based on your responses, it is likely that a medical professional will recommend Semaglutide GLP-1 . Click “Learn more” to explore the commonly prescribed dosing schedule. <strong> If you would like choose a different treatment option, please select “Modify your plan” below.</strong></p>
                            <div class="product-main">
                                <div class="product-image">
                                    <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/09/Revised-BlueRidge-Oral-Semaglutide-1-1.png"
                                        alt="product image">
                                </div>
                                <div class="product-details">
                                    <h4 class="product-title">Semaglutide</h4>
                                    <p>1 x Bottle with Capsules</p>
                                    <div class="product-price-wrap">
                                        <p>Billed and shipped for:</p>
                                        <div class="product-price"><span class="product-regular-price">$249.00</span>
											<span class="discount-price">$149.00</span></div>
                                    </div>
                                    <a class="product-learn-more" href="javascript:void(0)" id="learnMore">Learn More</a>
                                </div>
                            </div>
                            <div class="step-continue-wrap">
                                <input class="submit" type="button" value="Continue" onclick="addCartParameterAndShowNextStep('oral', 'step-privacy')">

                                <p class="or">Or</p>
                              <input class="submit modify-plan" type="button" value="Modify your plan" onclick="showStep('step-all-products')">
                            </div>
                        </div>
                        <div id="modal" class="product-model-popup">
                            <div class="prescription-dosing-content">
                                <span class="cross-icon">×</span>
                                <h3 class="step-main-heading">Prescription Dosing</h3>
                                <p>Prescribers typically follow a schedule that resembles the following:</p>
                                <ul>
                                    <li>Month 1 - Week 1-4 - 0.25 mg/week</li>
                                    <li>Month 2 - Week 5-8 - 0.5 mg/week</li>
                                    <li>Month 3 - Week 9-12 - 1 mg/week</li>
                                    <li>Month 4 - Week 13-16 -  1.5 mg/week</li>
                                    <li>Month 5 - Week 17-20 -  1.75 mg/week</li>
                                    <li>Month 6 - Week 21-24 -  2 mg/week</li>
                                    <li>Month 7 - Week 25-28 - 2.25 mg/week</li>
                                    <li>Month 8 - Week 29+ - 2.5 mg/week</li>
                                </ul>
                                <p>This is not medical advice. Each patient is unique, and this is just an example of what physicians may prescribe if medically approved. Please consult with your medial professional if you have any questions on specific dosages.</p>
                                <input class="submit" type="submit" name="submit_form" id="submit_form" value="Got It">
                            </div>
                        </div>
                        <div class="popup-overlay"></div>
                        <div class="contact-wrap">
                            <div class="top-img">
                                <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/09/BlueRidge-logo-small.png"
                                    alt="">
                            </div>
                            <div class="contact-details">
                                <p>Reach Out</p>
                                <a href="tel:+18552952538">855-295-BLUE (2538)</a>
                                <a href="mailto:Ask@blueridgemeds.com">Ask@blueridgemeds.com</a>
                                <a href="https://www.blueridgemeds.com">https://www.blueridgemeds.com</a>
                            </div>
                        </div>
                    </div>

       
	

		
		
		<!-- choose plan tabs section  -->
	
		<div class="step-main-wrapper choose-plan-tabs-wrap step" data-step="step-all-products">
    <div class="choose-plan-tabs-inner">
        <p class="step-description">CHOOSE YOUR PLAN</p>
        <h3 class="step-main-heading"><span class="jumpstart-plan-head-c">Jumpstart </span> <span class="or-head-c">or </span><span class="monthly-plan-head-c">Monthly</span> </h3>
        <div class="pricing-plans-tabs choose-plan-tabs">
            <ul class="tab-header">
                <li class="active monthly-tabs-selector"><a href="#monthly">Monthly Payment</a></li>
                <li class="month-3-tabs-selector"><a href="#3month">Jumpstart (3-months)</a></li>
            </ul>
            <div class="tab-content">
                <!-- Monthly Membership Content -->
                <div id="monthly" class="tab-grid tab-pane active">
                    <div class="tab-inner-content">
                        <div class="choose-plan-upper">
                            <h4>Semaglutide Program</h4>
                            <p class="pricing-amount">$297/mo</p>
                            <p class="pricing-discount">-$100.00 off your 1st month</p>
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/09/BlueRidge-Semaglutide-1-bottle-1-1.png" alt="">
                            <input class="submit" type="button" value="Select" onclick="addCartParameterAndShowNextStep('semag-1', 'step-semag-1')">
							
                        </div>
                        <ul class="membership-features">
                            <li class="feature-item">
                                <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                                <span class="feature-text">Includes All Doses</span>
                            </li>
                            <li class="feature-item">
                                <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                                <span class="feature-text">Once weekly injections</span>
                            </li>
                            <li class="feature-item">
                                <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                                <span class="feature-text">Doctor’s visits included</span>
                            </li>
                            <li class="feature-item">
                                <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                                <span class="feature-text">Unlimited provider support</span>
                            </li>
                            <li class="feature-item">
                                <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                                <span class="feature-text">Same price regardless of dosage</span>
                            </li>
                            <li class="feature-item">
                                <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                                <span class="feature-text">Pause or cancel your membership anytime</span>
                            </li>
                        </ul>
                    </div>
					
					        <div class="tab-inner-content">
                        <div class="choose-plan-upper">
                            <h4>Tirzepatide Program</h4>
                            <p class="pricing-amount">$397/mo</p>
                            <p class="pricing-discount">-$100.00 off your 1st month</p>
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/09/Layer-5-1.png" alt="">
                           <input class="submit" type="button" value="Select" onclick="addCartParameterAndShowNextStep('tirze-1', 'step-tirze-1')">
                        </div>
                        <ul class="membership-features">
                            <li class="feature-item">
                                <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                                <span class="feature-text">Includes All Doses</span>
                            </li>
                            <li class="feature-item">
                                <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                                <span class="feature-text">Once weekly injections</span>
                            </li>
                            <li class="feature-item">
                                <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                                <span class="feature-text">Doctor’s visits included</span>
                            </li>
                            <li class="feature-item">
                                <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                                <span class="feature-text">Unlimited provider support</span>
                            </li>
                            <li class="feature-item">
                                <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                                <span class="feature-text">Same price regardless of dosage</span>
                            </li>
                            <li class="feature-item">
                                <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                                <span class="feature-text">Pause or cancel your membership anytime</span>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-inner-content">
                        <div class="choose-plan-upper">
                            <h4>Oral Semaglutide <br> Program</h4>
                            <p class="pricing-amount">$249/mo</p>
                            <p class="pricing-discount">-$100.00 off your 1st month</p>
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/09/Revised-BlueRidge-Oral-Semaglutide-1-2.png" alt="">
                           <input class="submit" type="button" value="Select" onclick="addCartParameterAndShowNextStep('oral', 'step-oral')">
                        </div>
                        <ul class="membership-features">
                        <li class="feature-item">
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                            <span class="feature-text">Includes All Doses</span>
                        </li>
                        <li class="feature-item">
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                            <span class="feature-text">Once weekly injections</span>
                        </li>
                        <li class="feature-item">
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                            <span class="feature-text">Doctor’s visits included</span>
                        </li>
                        <li class="feature-item">
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                            <span class="feature-text">Unlimited provider support</span>
                        </li>
                        <li class="feature-item">
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                            <span class="feature-text">Same price regardless of dosage</span>
                        </li>
                        <li class="feature-item">
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                            <span class="feature-text">Pause or cancel your membership anytime</span>
                        </li>
                        </ul>
                    </div>
                </div>
                <!-- 3 Month Membership Content -->
                <div id="3month" class="tab-grid tab-pane three-month-tab-content">
					<div class="tab-inner-content">
                    <div class="choose-plan-upper">
                        <h4>Semaglutide Program</h4>
                        <p class="pricing-amount">$747</p>
                        <p class="pricing-discount">-$100.00 off your 1st purchase</p>
						<p class="pricing-discount off-150-discount" style="display:none;">-$100.00 off your 1st purchase</p>
                        <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/09/BlueRidge-Semaglutide-1-bottle-1.png" alt="">
                        <input class="submit" type="button" value="Select" onclick="addCartParameterAndShowNextStep('semag-3', 'step-semag-3')">
                    </div>
                    <ul class="membership-features">
                        <li class="feature-item">
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                            <span class="feature-text">Discounted treatment cost for the first three months of treatment</span>
                        </li>
                        <li class="feature-item">
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                            <span class="feature-text">First 3-month's doses: 0.25mg, 0.5mg, 1mg</span>
                        </li>
                        <li class="feature-item">
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                            <span class="feature-text">Once weekly injections</span>
                        </li>
                        <li class="feature-item">
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                            <span class="feature-text">Doctor’s visits included</span>
                        </li>
                        <li class="feature-item">
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                            <span class="feature-text">Unlimited provider support</span>
                        </li>
                    </ul>                    
                </div>
					
				<div class="tab-inner-content">
                    <div class="choose-plan-upper">
                        <h4>Tirzepatide Program</h4>
                        <p class="pricing-amount">$1,047</p>
                        <p class="pricing-discount">-$100.00 off your 1st purchase</p>
						<p class="pricing-discount off-150-discount" style="display:none;">-$100.00 off your 1st purchase</p>
                        <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/09/Layer-5-1.png" alt="">
                        <input class="submit" type="button" value="Select" onclick="addCartParameterAndShowNextStep('tirze-3', 'step-tirze-3')">
                    </div>
                    <ul class="membership-features">
                    <li class="feature-item">
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                            <span class="feature-text">Discounted treatment cost for the first three months of treatment</span>
                        </li>
                        <li class="feature-item">
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                            <span class="feature-text">First 3-month's doses: 2.5mg, 5mg, 7mg</span>
                        </li>
                        <li class="feature-item">
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                            <span class="feature-text">Once weekly injections</span>
                        </li>
                        <li class="feature-item">
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                            <span class="feature-text">Doctor’s visits included</span>
                        </li>
                        <li class="feature-item">
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                            <span class="feature-text">Unlimited provider support</span>
                        </li>
                    </ul>                    
                </div>

				</div>
            </div>
        </div>
    </div>
<!-- 			<div class="contact-wrap">
                <div class="top-img">
                    <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/09/BlueRidge-logo-small.png" alt="">
                </div>
                <div class="contact-details">
                    <p>Reach Out</p>
                    <a href="tel:+18552952538">855-295-BLUE (2538)</a>
                    <a href="mailto:Ask@blueridgemeds.com">Ask@blueridgemeds.com</a>
                    <a href="https://www.blueridgemeds.com">https://www.blueridgemeds.com</a>
                </div>
            </div> -->
</div>		
		
		
		
 <!-- Privacy Policy Section  -->

        <div class="step-main-wrapper privacy-policy-wrap step" data-step="step-privacy">
            <div class="privacy-policy-content">
                <h3 class="step-main-heading">By subscribing, you are agreeing to our Privacy Policy</h3>
                <div class="policy-checkbox-wrap">
                    <input type="checkbox" id="policy-checkbox" name="agree_privacy_policy">
					
                    <label for="policy-checkbox">Please check this box to indicate that you agree to the <a href="/terms-conditions/" target="_blank">Terms and Conditions Patient Agreement</a> and <a href="/consent-to-telehealth/" target="_blank">Telehealth Consent</a></label>
                </div>
			   <div class="field-valid-error interest-f-error"> 
                <span class="error-message" id="policy-checkbox-error"></span>
            </div>
			
            </div>
            <div class="button-wrapper">
                <input class="submit previous-privacy" type="submit" name="continue_form" id="continue_form" value="Previous" onclick="goToPreviousStep()">
                 <div class="submit-button-wrap">
      <input class="submit" type="submit" name="submit_form" id="submit_form" value="Continue">



        </div>
            </div>
            <div class="contact-wrap">
                <div class="top-img">
                    <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/09/BlueRidge-logo-small.png" alt="">
                </div>
                <div class="contact-details">
                    <p>Reach Out</p>
                    <a href="tel:+18552952538">855-295-BLUE (2538)</a>
                    <a href="mailto:Ask@blueridgemeds.com">Ask@blueridgemeds.com</a>
                    <a href="https://www.blueridgemeds.com">https://www.blueridgemeds.com</a>
                </div>
            </div>
        </div>

   
       
    </form>
</div>


<script>
function checking(nextStep) {
    const currentStepContainer = document.querySelector(`[data-step="${nextStep}"]`);
    const requiredFields = currentStepContainer.querySelectorAll('input[required], select[required], textarea[required]');
    
    // Assuming you have the email input value from your form
    const emailInput = document.querySelector('input[type="email"]');
    const email = emailInput.value;  // Get the email from the form
    
    console.log('Required fields:', requiredFields);
    console.log('Email:', email);

    // Make the POST request to your server to add the email
    fetch('https://kalviyoapiblue.netlify.app/.netlify/functions/api/add-email', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ email: email })
    })
    .then(response => response.json())
    .then(data => {
        if (data.error) {
            console.error('Error:', data.error);
        } else {
            console.log('Success:', data);
        }
    })
    .catch(error => {
        console.error('Error adding email:', error);
    });
}
	

	
	
</script>

<?php get_footer(); ?>