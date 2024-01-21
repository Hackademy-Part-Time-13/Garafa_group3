const navbar_toggle = document.getElementById('navbarToggle');
const mobile_nav = document.getElementById('mobile_nav');
const haburget_colose = document.getElementById('haburget_colose');


navbar_toggle.addEventListener('click',(e)=>{
    
    mobile_nav.classList.toggle('nav_show');

    // big_nav.classList.toggle('nav_didden');

    console.log(haburget_colose.className == 'bi bi-list');
    
    if(haburget_colose.className == 'bi bi-list'){
        haburget_colose.className =  'bi bi-x';
    }else{
        haburget_colose.className =  'bi bi-list';
        
    }
})