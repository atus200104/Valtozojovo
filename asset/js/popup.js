document.addEventListener('DOMContentLoaded', function() {
  const acceptBtn = document.getElementById('acceptBtn');
  const closeBtn = document.getElementById('closeBtn');
  const cookiesPopup = document.getElementById('cookiesPopup');

  acceptBtn.addEventListener('click', function() {
    const expirationDate = new Date(new Date().getTime() +12 * 60 * 60 * 1000);
    cookiesPopup.classList.remove('show');
    cookiesPopup.classList.add('hide');
    document.cookie = 'cookiesAccepted=true; expires=' + expirationDate.toUTCString() + '; path=';
  });

  closeBtn.addEventListener('click', function() {
    cookiesPopup.classList.remove('show');
    cookiesPopup.classList.add('hide');
    document.cookie = 'cookiesAccepted=false; expires=Thu, 01 Jan 1970 000000 UTC; path=;';
  });

  const cookiesAccepted = document.cookie.includes('cookiesAccepted=true');
  const now = new Date().getTime();

  if (cookiesAccepted) {
    cookiesPopup.style.display = 'none';
    const userEmail = getCookie('userEmail');
    if (userEmail) {
      const emailInputs = document.querySelectorAll('[name="email2"]');
      emailInputs.forEach(function(input) {
        input.value = atob(userEmail);
      });
    }
  } else {
    cookiesPopup.classList.add('show');
  }
  
  const submitBtn = document.getElementById('submitBtn');
  submitBtn.addEventListener('click', function() {
    const userEmail = document.getElementById('email').value;
    const encryptedEmail = btoa(userEmail);
    const expirationDate = new Date(new Date().getTime() + 12 * 60 * 60 * 1000);
    document.cookie = 'userEmail=' + encryptedEmail + '; expires=' + expirationDate.toUTCString() + '; path=;';
  });
  
  function getCookie(name) {
    const cookies = document.cookie.split(';');
    for (let i = 0; i < cookies.length; i++) {
      const cookie = cookies[i].trim();
      if (cookie.startsWith(name + '=')) {
        return cookie.substring(name.length + 1);
      }
    }
    return null;
  }
});