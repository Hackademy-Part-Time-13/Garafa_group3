
if(localStorage.getItem('red_theme')){

    document.body.classList.toggle('red-theme')

}else if(localStorage.getItem('green_theme')){
    
    document.body.classList.toggle('green-theme')


} else if(localStorage.getItem('blu_theme')){

    document.body.classList.toggle('blu-theme')


}


const them_red = document.getElementById('them_red');
const them_green = document.getElementById('them_green');
const them_blu = document.getElementById('them_blu');







them_red.addEventListener('click', (e) => {
    console.log('ciao');
    
    localStorage.clear();
    
    let red_theme  = document.body.classList.toggle('red-theme')
    
    
    localStorage.setItem('red_theme', red_theme);
    
    location.reload()
    
})

them_green.addEventListener('click', (e) => {

    localStorage.clear();
    
    let green_theme  = document.body.classList.toggle('green-theme')
    
    
    localStorage.setItem('green_theme', green_theme);
    
    location.reload()
    
})

them_blu.addEventListener('click', (e) => {
    localStorage.clear();
    let blu_theme  = document.body.classList.toggle('blu-theme')
    
    
    localStorage.setItem('blu_theme', blu_theme);
    
    location.reload()
    
})



const them_red_responsiv = document.getElementById('them_red_responsiv');
const them_green_responsiv = document.getElementById('them_green_responsiv');
const them_blu_responsiv = document.getElementById('them_blu_responsiv');


if (them_red_responsiv && them_green_responsiv && them_blu_responsiv) {
them_red_responsiv.addEventListener('click', (e) => {
    
    localStorage.clear();

    let red_theme  = document.body.classList.toggle('red-theme')


    localStorage.setItem('red_theme', red_theme);

    location.reload()

})

them_green_responsiv.addEventListener('click', (e) => {

    localStorage.clear();

    let green_theme  = document.body.classList.toggle('green-theme')


    localStorage.setItem('green_theme', green_theme);

    location.reload()

})

them_blu_responsiv.addEventListener('click', (e) => {
    localStorage.clear();
    let blu_theme  = document.body.classList.toggle('blu-theme')


    localStorage.setItem('blu_theme', blu_theme);

    location.reload()

})

}

