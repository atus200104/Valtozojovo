grecaptcha.enterprise.ready(function() {
    grecaptcha.enterprise.execute('6LdK1AwlAAAAAJ0DnAHU-Gqa9lnCYx_WdyMPaEMd', {action: 'contact_form'}).then(function(token) {
      // Send the token to your server for validation.
    });
  });

  grecaptcha.enterprise.ready(function() {
    grecaptcha.enterprise.render('g-recaptcha', {
        'sitekey': '6LdK1AwlAAAAAJ0DnAHU-Gqa9lnCYx_WdyMPaEMd'
    });
});

function enableSubmit() {
    document.getElementById("submitBtn").disabled = false;
}

document.querySelector("form").addEventListener("submit", function(event) {
    document.getElementById("submitBtn").disabled = true;
    grecaptcha.execute();
    event.preventDefault();
});

function onSubmit(token) {
    document.getElementById("g-recaptcha-response").value = token;
    document.getElementById("submitBtn").disabled = false;
}


function enableSubmit2() {
    document.getElementById("submitBtn2").disabled = false;
}

document.querySelector("form").addEventListener("submit", function(event) {
    document.getElementById("submitBtn2").disabled = true;
    grecaptcha.execute();
    event.preventDefault();
});

function onSubmit2(token) {
    document.getElementById("g-recaptcha-response").value = token;
    document.getElementById("submitBtn2").disabled = false;
}

