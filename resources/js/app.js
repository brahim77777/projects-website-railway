import './bootstrap';




document.querySelectorAll('.projects-nav-link').forEach((ele)=>{
    ele.addEventListener('click', function(event) {
        event.preventDefault();
        setTimeout(
        document.querySelector('#projects-heading').scrollIntoView({
            behavior: 'smooth',
            block: 'start',
            inline: 'nearest'
        }),500 )

    });
})


document.querySelectorAll('.newsletter-nav-link').forEach((ele)=>{
    ele.addEventListener('click', function(event) {
        event.preventDefault();
        setTimeout(()=>{document.getElementById('email-address').focus()}, 1000)

        setTimeout(

            document.getElementById('newsletter').scrollIntoView({
                behavior: 'smooth',
                block:'start',
                inline:'nearest'
            }), 2000)
    });
})
