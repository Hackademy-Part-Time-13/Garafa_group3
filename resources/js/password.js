if (location.href.includes('/register')) {

let show_password = document.getElementById('show_password');

show_password.addEventListener('click', (e) => {

    let password = document.getElementById('password');

    let eye = document.getElementById('eye');

    if (eye.className == 'bi bi-eye-fill') {

        password.setAttribute('type', 'text');
        eye.setAttribute('class', 'bi bi-eye-slash-fill');

    } else {

        password.setAttribute('type', 'password');
        eye.setAttribute('class', 'bi bi-eye-fill');

    }

});

    let Confirm_show_password = document.getElementById('Confirm_show_password');

    Confirm_show_password.addEventListener('click', (e) => {

        let Confirm_password = document.getElementById('Confirm_password');

        let Confirm_eye = document.getElementById('Confirm_eye');

        if (Confirm_eye.className == 'bi bi-eye-fill') {

            Confirm_password.setAttribute('type', 'text');
            Confirm_eye.setAttribute('class', 'bi bi-eye-slash-fill');

        } else {

            Confirm_password.setAttribute('type', 'password');
            Confirm_eye.setAttribute('class', 'bi bi-eye-fill');

        }

    });
}


if (location.href.includes('/login')) {

let show_password = document.getElementById('show_password');

show_password.addEventListener('click', (e) => {

    let password = document.getElementById('password');

    let eye = document.getElementById('eye');

    if (eye.className == 'bi bi-eye-fill') {

        password.setAttribute('type', 'text');
        eye.setAttribute('class', 'bi bi-eye-slash-fill');

    } else {

        password.setAttribute('type', 'password');
        eye.setAttribute('class', 'bi bi-eye-fill');

    }

});
}