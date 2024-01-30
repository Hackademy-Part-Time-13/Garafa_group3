if (location.href.includes('/ad/') ||location.href.includes('/ad') || location.href.includes('/revisor/home')) {

    console.log(location.href);
    const min_jsSelect = document.querySelectorAll('.min_jsSelect');
    const show_main_img = document.querySelectorAll('.show_main_img');



    min_jsSelect.forEach((min_img, index) => {

        min_img.setAttribute('id', index + "_min_img");

        min_img.addEventListener('click', (e) => {

            show_main_img.forEach((min_img, index) => {
                min_img.setAttribute('id', index + "_big_img");

                min_img.className = 'show_main_img';
            })


            let big_img = document.getElementById(index + "_big_img");

            if (min_img.id[0] == big_img.id[0]) {
                big_img.className = 'show_main_img adShow';
            }
            // if(big_img.)


        })
    })

}

