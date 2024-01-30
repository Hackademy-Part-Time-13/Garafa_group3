if (location.href.includes('/ad/') || location.href.includes('/seller/profile')) {

    const form_iframe = document.getElementById('form_iframe');
    const input_for_chat = document.getElementById('user_id_for_chat')

    const iframe_chat = document.getElementById('iframe_chat')
    const iframe_chat_componet = document.getElementById('iframe_chat_componet')

    const fa_arrow = document.getElementById('fa_arrow')
    const responsiv_arrow = document.getElementById('responsiv_arrow')


    form_iframe.addEventListener('submit', function (event) {
        event.preventDefault()
        // console.log(input_for_chat.value);

        let srcFrame = 'http://127.0.0.1:8000/contact_seller/' + input_for_chat.value;

        iframe_chat.setAttribute('src', srcFrame);

        iframe_chat_componet.style.display = 'block';

    })

    fa_arrow.addEventListener('click', (e) => {

        iframe_chat.setAttribute('src', '');

        iframe_chat_componet.style.display = 'none';
    })

    responsiv_arrow.addEventListener('click', (e) => {

        iframe_chat.setAttribute('src', '');

        iframe_chat_componet.style.display = 'none';
    })

}

