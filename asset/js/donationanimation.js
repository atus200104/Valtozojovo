// Get a reference to the payment method radio buttons
const paymentMethodRadios = document.querySelectorAll('input[name="payment-method"]');

// Get a reference to the card details div and the card details input elements
const cardDetails = document.getElementById('card-details');
const cardDetailsInputs = document.querySelectorAll('#card-details input');


// Add an event listener to the payment method radio buttons
paymentMethodRadios.forEach(radio => {
  radio.addEventListener('change', event => {
    // If the "Card" payment method is selected, show the card details and set the required attribute on the input elements
    if (event.target.value === 'card') {
      cardDetails.style.display = 'block';
      cardDetailsInputs.forEach(input => {
        input.required = true;
      });
    }
    // Otherwise, hide the card details and remove the required attribute from the input elements
    else {
      cardDetails.style.display = 'none';
      cardDetailsInputs.forEach(input => {
        input.required = false;
      });
    }
  });
});



/*Check the card providers*/
const paymentMethodRadioButtons = document.querySelectorAll('#payment-method input[type="radio"]');
const cardDetailsForm = document.getElementById('card-details');

paymentMethodRadioButtons.forEach(radioButton => {
  radioButton.addEventListener('change', () => {
    if (radioButton.value === 'card') {
      cardDetailsForm.style.display = 'block';
    } else {
      cardDetailsForm.style.display = 'none';
    }
  });
});



const cardNumberInput = document.getElementById('card-number');
const cardProviderSpan = document.getElementById('card-provider');


// ERROR when the invalid card want to be submitted
var submitButton = document.querySelector('button[type="submit"]');
const errorMessage = document.createElement('div');
errorMessage.classList.add('error-message');
cardNumberInput.parentNode.insertBefore(errorMessage, cardNumberInput.nextSibling);

cardNumberInput.addEventListener('input', () => {
  let cardNumber = cardNumberInput.value;

  if (cardNumber.length > 19) {
    cardNumberInput.value = cardNumber.slice(0, 19);
    return;
  }

  cardNumber = cardNumber.replace(/[^\d]/g, '').replace(/(.{4})/g, '$1-');
  cardNumberInput.value = cardNumber.slice(0, 19);

  // Check if the card number is a valid Visa card
  if (/^4/.test(cardNumber)) {
    cardProviderSpan.innerText = ' (Visa)';
    errorMessage.style.display = 'none';
    submitButton.disabled = false;
  }
  // Check if the card number is a valid Mastercard
  else if (/^(?:5[1-5])/.test(cardNumber)) {
    cardProviderSpan.innerText = ' (Mastercard)';
    errorMessage.style.display = 'none';
    submitButton.disabled = false;
  }
  else {
    cardProviderSpan.innerText = '';
    errorMessage.innerText = 'Hibás vagy nem létező kártyaszám. Kérlek adj meg egy másikat! Csak Visa vagy Masterrcard lehet!';
    errorMessage.style.display = 'block';
    submitButton.disabled = true;
  }
});


//CVC Number only
function onlyNumberKey(evt) {
    // Get the current input value
    var input = evt.target.value;

    // Replace any non-numeric characters with an empty string
    var cleanInput = input.replace(/[^\d]/g, '');

    // Update the input value with the cleaned input
    evt.target.value = cleanInput;
}

const monthInput = document.getElementById('month');
const monthError = document.getElementById('month-error');

monthInput.addEventListener('input', function(event) {
  const value = parseInt(event.target.value);
  if (value < 1 || value > 12) {
    monthError.style.display = 'block';
    submitButton.disabled = true;
  } else {
    monthError.style.display = 'none';
    submitButton.disabled = false;
  }
});


const yearInput = document.getElementById('year');
const yearError = document.getElementById('year-error');
const yearError2 = document.getElementById('year-error2');


yearInput.addEventListener('input', function(event) {
  const value = parseInt(event.target.value);
  if (value < 23) {
    yearError.style.display = 'block';
        yearError2.style.display = 'none';
    submitButton.disabled = true;
  } else if(value > 26) {
    yearError2.style.display = 'block';
    yearError.style.display = 'none';
    submitButton.disabled = true;
  }
  else{
    yearError2.style.display = 'none';
    yearError.style.display = 'none';
    submitButton.disabled = false;
  }
});



