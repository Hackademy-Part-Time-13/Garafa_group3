const navbar_toggle = document.getElementById('navbarToggle');
const mobile_nav = document.getElementById('mobile_nav');


console.log(navbar_toggle);

navbar_toggle.addEventListener('click',(e)=>{
    
    console.log('click');
    mobile_nav.classList.toggle('nav_show');
    big_nav.classList.toggle('nav_didden');
})