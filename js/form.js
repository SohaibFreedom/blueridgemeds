// Function to get URL parameters
function getUrlParameter(name) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(name);
}


function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}
document.addEventListener('DOMContentLoaded', () => {
    // Delegate click events to buttons with the class 'submit'
    document.body.addEventListener('click', (event) => {
        if (event.target.classList.contains('submit')) {
            updatePricesForAll();
            checkDiscountAndToggleClass();
        }
    });

    // Call the checkDiscountAndToggleClass function once on page load
    checkDiscountAndToggleClass();
});


function checkDiscountAndToggleClass() {
    const discount = getUrlParameter('discount');

    // Select the main parent container
    const allProductsSection = document.querySelector('[data-step="step-all-products"]');

    if (allProductsSection) {
        const pricingDiscounts = allProductsSection.querySelectorAll('.pricing-discount');

        if (discount === 'apply') {
            // Remove the class if discount is "apply"
            allProductsSection.classList.remove('discount-apply-glpy');
            allProductsSection.classList.add('show-150-discount');
            console.log('Removed class "discount-apply-glpy" from the main container [data-step="step-all-products"]');

              // Revert text to "$100 off your 1st month"
            pricingDiscounts.forEach(el => {
                    el.textContent = "-$100.00 off your 1st month";
                
            });
           
        } else {
            // Add the class if discount is not "apply"
            allProductsSection.classList.add('discount-apply-glpy');
            allProductsSection.classList.remove('show-150-discount');
            console.log('Added class "discount-apply-glpy" to the main container [data-step="step-all-products"]');

          
			 pricingDiscounts.forEach(el => {
                    el.textContent = "-$50.00 off your 1st month";
               
            });
        }
    }
}





/// Configuration for conditions and corresponding prices
const priceConditions = {
    'tirze-1': {
        apply: { regular: 'inline', discount: '$297.00' },
        noDiscount: { regular: 'none', discount: '$397.00' }
    },
    'tirze-3': {
        apply: { regular: 'inline', discount: '$947.00' },
        noDiscount: { regular: 'none', discount: '$1047.00' }
    },
    // Add other conditions here
    'semag-1': {
        apply: { regular: 'inline', discount: '$197.00' },
        noDiscount: { regular: 'none', discount: '$297.00' }
    },
    'semag-3': {
        apply: { regular: 'inline', discount: '$647.00' },
        noDiscount: { regular: 'none', discount: '$747.00' }
    },
	 'oral': {
        apply: { regular: 'inline', discount: '$149.00' },
        noDiscount: { regular: 'none', discount: '$249.00' }
    }
};



// Function to update prices for all relevant sections
function updatePricesForAll() {
    const finalItem = getUrlParameter('finalitem');
    const discount = getUrlParameter('discount');

    // Check if the condition is defined in the configuration
    if (priceConditions[finalItem]) {
        const condition = discount === 'apply' ? 'apply' : 'noDiscount';
        const priceData = priceConditions[finalItem][condition];

        // Select the relevant section based on the data-step attribute
        const relevantSection = document.querySelector(`[data-step="step-${finalItem}"]`);
        if (relevantSection) {
            const regularPriceElement = relevantSection.querySelector('.product-regular-price');
            const discountPriceElement = relevantSection.querySelector('.discount-price');

            if (regularPriceElement && discountPriceElement) {
                // Update regular price visibility
                regularPriceElement.style.display = priceData.regular;

                // Update discount price text and visibility
                discountPriceElement.style.display = 'inline';
                discountPriceElement.textContent = priceData.discount;

                console.log(
                    `step-${finalItem} (${condition}): Discount price updated to ${priceData.discount}`
                );
            }
        }
    }
}

let updateTimeout;
const observer = new MutationObserver(() => {
    clearTimeout(updateTimeout);
    updateTimeout = setTimeout(updatePricesForAll, 200);
});

observer.observe(document.body, { childList: true, subtree: true });


// Initial call to ensure prices are set correctly on page load
document.addEventListener('DOMContentLoaded', () => {
    updatePricesForAll();
});






let currentStep = 'step-1';  // Track the current step

// Define the order of the main steps, including product steps as separate
const stepOrder = ['step-1', 'step-2', 'step-3', 'step-4', 'step-5', 'step-6', 'step-semag-1', 'step-semag-3', 'step-tirze-1', 'step-tirze-3', 'step-oral', 'step-all-products', 'step-privacy' ];

// Define the product steps
const productSteps = ['step-semag-1', 'step-semag-3', 'step-tirze-1', 'step-tirze-3', 'step-oral', 'step-all-products'];

// Function to show a specific step
function showStep(stepName) {
    // Hide the current step
    document.querySelector(`[data-step="${currentStep}"]`).style.display = 'none';  
    
    // Show the new step
    document.querySelector(`[data-step="${stepName}"]`).style.display = 'block';  
    
    // Update the current step to the new step
    currentStep = stepName;  
	
	scrollToTop();
}

// Add event listeners to clear the error when the user starts typing or checking a field
function attachInputListeners(fields) {
    fields.forEach(function(field) {
        field.addEventListener('input', function() {
            const errorMessageElement = document.getElementById(`${field.id}-error`);
            errorMessageElement.textContent = '';  // Clear the error message when the user starts typing
        });
    });
}

function addDiscountParam() {
    const url = new URL(window.location.href);
    url.searchParams.set('discount', 'apply');
    window.history.replaceState({}, '', url);
}

function removeDiscountParam() {
    const url = new URL(window.location.href);
    url.searchParams.delete('discount'); // Remove the parameter
    window.history.replaceState({}, '', url);
}

// Function to get URL parameters
function getUrlParameter(name) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(name);
}

// Show the first step on page load
document.addEventListener('DOMContentLoaded', function() {
    showStep(currentStep);  // Start by showing the first step
});

// Reusable function to determine and show the step based on the 'finalitem' parameter

function handleFinalItemParameter() {
    const finalItem = getUrlParameter('finalitem');

    switch (finalItem) {
        case 'semag-1':
            showStep('step-semag-1');
            break;
        case 'semag-3':
            showStep('step-semag-3');
            break;
        case 'tirze-1':
            showStep('step-tirze-1');
            break;
        case 'tirze-3':
            showStep('step-tirze-3');
            break;
        case 'oral':
            showStep('step-oral');
            break;
        default:
            showStep('step-all-products');  // Default to 'step-all-products' if no match
    }
}



function validateFieldsAndContinue(nextStep) {
    // Get the current step's form container
    const currentStepContainer = document.querySelector(`[data-step="${currentStep}"]`);

    // Find all required fields inside this step
    const requiredFields = currentStepContainer.querySelectorAll('input[required], select[required], textarea[required]');

    let allFieldsValid = true; // Flag to track if all fields are valid

    // Clear previous error messages
    const errorMessages = currentStepContainer.querySelectorAll('.error-message');
    errorMessages.forEach(function (error) {
        error.textContent = '';  // Clear previous error
    });

    // Loop through each required field and check if it's filled
    requiredFields.forEach(function(field) {
        const errorMessageElement = document.getElementById(`${field.id}-error`);  // Find the corresponding error message element

        if (field.type === 'checkbox' && !field.checked) {
            allFieldsValid = false;
            errorMessageElement.textContent = 'This field is required';  // Show custom error message
        } 
        else if (!field.value) {
            allFieldsValid = false;
            errorMessageElement.textContent = 'This field is required';  // Show custom error message
        }
        // Custom validation for phone field to check exactly 10 digits
        else if (field.id === 'phone' && field.value.length !== 10) {
            allFieldsValid = false;
            errorMessageElement.textContent = 'Please enter exactly 10 digits for the phone number'; // Custom error for phone
        }
    });

    // Attach listeners to clear errors when user starts typing or checking the fields
    attachInputListeners(requiredFields);

    // If all fields are valid, proceed to the next step
    if (allFieldsValid) {
        showStep(nextStep);
    } else {
        console.log('Some fields are invalid.');
    }
}


// Function to validate checkboxes
function validateInterestCheckboxes() {
    const checkboxes = document.querySelectorAll('input[name="interests[]"]');
    const errorMessage = document.getElementById('interests-error');

    // Clear previous error message
    errorMessage.textContent = '';

    // Check if at least one checkbox is checked
    const isChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);

    if (!isChecked) {
        // If no checkbox is selected, show error message
        errorMessage.textContent = 'Please select at least one option.';
    } else {
        // If at least one checkbox is selected, proceed to the next step
        showStep('step-2');
    }

    // Attach listeners to clear errors when user checks the boxes
    attachInputListeners(checkboxes);
}

function handleContinueClick() {
    // First, check if there is a 'finalitem' parameter in the URL
    const finalItemParam = getUrlParameter('finalitem');

    // If 'finalitem' is present, use it to determine the step
    if (finalItemParam) {
       handleFinalItemParameter(); 
        return; // Exit after handling 'finalitem' parameter
    }

    // If no 'finalitem' parameter, use the original logic based on the 'item' parameter
    const prodParam = getUrlParameter('item');

    if (prodParam === 'semag-1') {
        showStep('step-semag-1');
    } else if (prodParam === 'semag-3') {
        showStep('step-semag-3');
    } else if (prodParam === 'tirze-1') {
        showStep('step-tirze-1');
	
    } else if (prodParam === 'tirze-3') {
        showStep('step-tirze-3');
    } else if (prodParam === 'oral') {
        showStep('step-oral');
    } else {
        showStep('step-all-products');
    }
}	


	
	
function addCartParameterAndShowNextStep(product, nextStep) {
    // Get the current URL
    let currentUrl = new URL(window.location.href);
    
    // Set or update the 'finalitem' parameter without affecting other parameters
    currentUrl.searchParams.set('finalitem', product);
    
    // Update the browser's URL without refreshing the page
    window.history.replaceState({}, '', currentUrl);
    
    // Show the next step
    showStep(nextStep);
	

}

document.getElementById('customForm').addEventListener('submit', function(event) {
    const privacyPolicyCheckbox = document.getElementById('policy-checkbox');
    const privacyPolicyError = document.getElementById('policy-checkbox-error');

    // Clear any previous error messages
    privacyPolicyError.textContent = '';

    // Check if the checkbox is checked
    if (!privacyPolicyCheckbox.checked) {
        // If it's not checked, prevent form submission and show the error message
        privacyPolicyError.textContent = 'Please agree to the Privacy Policy before submitting.';
        privacyPolicyCheckbox.focus();  // Focus on the checkbox to alert the user
        console.log("Error message added:", privacyPolicyError.textContent);  // Log to check
        event.preventDefault();  // Prevent form from submitting
    }
});



	
	
// Function to go to the previous step or home page if on the error step
function goToPreviousStep() {
	
	if (currentStep === 'step-all-products' || currentStep === 'mg-select') {
    showStep('step-6');
    return;
}

 
     const specialSteps = ['step-privacy', 'semag-1-dose', 'semag-3-dose', 'tirze-1-dose', 'tirze-3-dose', 'oral-dose'];

    // Check if the current step is in the specialSteps array
    if (specialSteps.includes(currentStep)) {
       handleFinalItemParameter();
        return;  
    }
	


    // If the current step is any of the product steps, return to 'step-6'
    if (productSteps.includes(currentStep)) {
        showStep('step-all-products');
        return;
    }
	

    
    // If current step is the error step, redirect to the home page
   if (currentStep === 'step-error' || currentStep === 'step-state-error') {
    window.location.href = '/';  // Redirect to the home page
    return;
}


    // Get the index of the current step in the stepOrder array
    let currentIndex = stepOrder.indexOf(currentStep);
    
    // Check if there is a previous step
    if (currentIndex > 0) {  
        let prevStep = stepOrder[currentIndex - 1];  // Get the previous step
        showStep(prevStep);  // Show the previous step
    }
}



function validateBMIFormAndContinue() {
    const fields = [
        { id: 'feet', errorId: 'feet-error', message: 'This field is required' },
        { id: 'inches', errorId: 'inches-error', message: 'This field is required' },
        { id: 'weight', errorId: 'weight-error', message: 'This field is required' }
    ];

    let allFieldsValid = true;

    // Clear all previous error messages
    fields.forEach(field => document.getElementById(field.errorId).textContent = '');

    // Validate each field
    fields.forEach(field => {
        const inputField = document.getElementById(field.id);
        if (!inputField.value) {
            document.getElementById(field.errorId).textContent = field.message;
            allFieldsValid = false;
        }
    });

    // Attach listeners to clear errors when user starts typing
    attachInputListeners(fields.map(field => document.getElementById(field.id)));

    // If all fields are valid, proceed to BMI check
    if (allFieldsValid) {
        checkBMIandContinue();
    }
}

// Function to calculate BMI and navigate based on its value
function checkBMIandContinue() {
    const feet = parseFloat(document.getElementById('feet').value);
    const inches = parseFloat(document.getElementById('inches').value);
    const weight = parseFloat(document.getElementById('weight').value);

    if (!isNaN(feet) && !isNaN(inches) && !isNaN(weight)) {
        const heightInInches = (feet * 12) + inches;
        const bmi = (weight / (heightInInches * heightInInches)) * 703;
        document.getElementById('bmi').value = bmi.toFixed(2);  // Set BMI value in the input

        // Navigate based on BMI
        if (bmi < 27) {
            showStep('step-error');  // Redirect to error step
        } else {
            showStep('step-6');  // Proceed to the next step
        }
    }
}

// Add event listeners for input fields to auto-calculate BMI
document.getElementById('feet').addEventListener('input', calculateBMI);
document.getElementById('inches').addEventListener('input', calculateBMI);
document.getElementById('weight').addEventListener('input', calculateBMI);

// Function to just calculate BMI without step navigation (used for live updates)
function calculateBMI() {
    const feet = parseFloat(document.getElementById('feet').value);
    const inches = parseFloat(document.getElementById('inches').value);
    const weight = parseFloat(document.getElementById('weight').value);

    if (!isNaN(feet) && !isNaN(inches) && !isNaN(weight)) {
        const heightInInches = (feet * 12) + inches;
        const bmi = (weight / (heightInInches * heightInInches)) * 703;
        document.getElementById('bmi').value = bmi.toFixed(2);  // Set BMI value in the input
    }
}



// Function to check state and continue to the next step
function checkStateAndContinue() {
    const selectedState = document.getElementById('state').value.toLowerCase();  // Get the selected state value and convert it to lowercase

    // Array of restricted states
    const restrictedStates = ['alabama', 'arkansas', 'mississippi'];

    // Check if the selected state is in the restrictedStates array
    if (restrictedStates.includes(selectedState)) {
        showStep('step-state-error');  // Redirect to the error step if the state matches
    } else {
        showStep('step-5');  // Proceed to the next normal step (e.g., step-5)
    }
}


// Combined function to validate and check the state
function validateAndCheckState() {
    const currentStepContainer = document.querySelector(`[data-step="${currentStep}"]`);
    const requiredFields = currentStepContainer.querySelectorAll('input[required], select[required], textarea[required]');

    let allFieldsValid = true;

    // Clear previous error messages
    const errorMessages = currentStepContainer.querySelectorAll('.error-message');
    errorMessages.forEach(function (error) {
        error.textContent = '';  // Clear previous error
    });

    // Loop through each required field and check if it's filled
    requiredFields.forEach(function(field) {
        const errorMessageElement = document.getElementById(`${field.id}-error`);  // Find the corresponding error message element
        
        if (field.type === 'checkbox' && !field.checked) {
            allFieldsValid = false;
            errorMessageElement.textContent = 'This field is required';  // Show custom error message
        } 
        else if (!field.value) {
            allFieldsValid = false;
            errorMessageElement.textContent = 'This field is required';  // Show custom error message
        }
    });

    // If all fields are valid, check the state and navigate accordingly
    if (allFieldsValid) {
        checkStateAndContinue();
    }
}





document.addEventListener('DOMContentLoaded', function() {
    const productCards = document.querySelectorAll('.product-card');

    productCards.forEach(card => {
        card.addEventListener('click', function() {
            // Remove 'active' class from all cards
            productCards.forEach(c => c.classList.remove('active'));
            // Add 'active' class to the clicked card
            this.classList.add('active');

            // Get the product type from a data attribute (e.g., data-product="semag-1")
            const productType = this.getAttribute('data-product');

          

            // Use the reusable function to show the step based on the 'finalitem'
            handleFinalItemParameter();
        });
    });
});



// Select all checkboxes with the 'single-selector' class
// const checkboxes = document.querySelectorAll('.single-selector');

// // Add event listeners to all checkboxes to handle single selection
// checkboxes.forEach(function(checkbox) {
//     checkbox.addEventListener('change', function() {
//         // Deselect all checkboxes except the one that was clicked
//         checkboxes.forEach(function(otherCheckbox) {
//             if (otherCheckbox !== checkbox) {
//                 otherCheckbox.checked = false;
//             }
//         });
//     });
// });
