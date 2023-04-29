document.getElementById("donation-form").addEventListener("submit", function(event) {
    var paymentMethod = document.querySelector('input[name="payment-method"]:checked').value;
    if (paymentMethod == "card") {
      var cardNumber = document.getElementById("card-number").value;
      if (cardNumber.length != 19) {
        event.preventDefault();
        document.getElementById("card-number-error").style.display = "block";
      }
    }
  });