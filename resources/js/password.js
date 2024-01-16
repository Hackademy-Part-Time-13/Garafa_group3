let show_password = document.getElementById('show_password');

show_password.addEventListener('click', (e)=>{

    let password = document.getElementById('password');

    password.setAttribute('type','text');

    let eye = document.getElementById('eye');

    eye.setAttribute('class','bi bi-eye-slash-fill');

    show_password.setAttribute('id','hide_password');



    
});

let hide_password = document.getElementById('hide_password');


hide_password.addEventListener('click', (e)=>{
 console.log('bhi');
    let password = document.getElementById('password');

    password.setAttribute('type','password');

    let eye = document.getElementById('eye');

    eye.setAttribute('class','bi bi-eye-fill');

    show_password.setAttribute('id','hide_password');
});