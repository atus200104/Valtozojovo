$('.signup').hide();

$('#signin, #signup').on(
    'click',

    function(){
        $('.signin, .signup').toggle();
    }
)

const favcolor = document.getElementById('favcolor');
favcolor.type = 'color';

const form = document.querySelector('.form-container');
form.style.backgroundColor = favcolor.value;

const form2 = document.querySelectorAll('.profile');

favcolor.addEventListener('input', (event) => {
    const color = event.target.value;
    form.style.backgroundColor = color;
    form2.forEach((form) => {
        form.style.color = color;
    });

    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'save_color.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (xhr.status === 200) {
            console.log(xhr.responseText);
        } else {
            console.log('Error: ' + xhr.status);
        }
    };
    xhr.send('favcolor=' + encodeURIComponent(color));
});