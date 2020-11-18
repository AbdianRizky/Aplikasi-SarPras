require('./bootstrap');
$(document).ready(() => {
    //! Toggle Dropdown
    $('.profile-toggle')
    .click(function () {
        $('ul').slideToggle(280);
    })
    .mouseleave(function () {
        $('ul').slideUp(280)
    })

    // $('.box')
    // .click(function (e) {
    //     e.preventDefault()
    //     Swal.fire({
    //         title: 'Sweet!',
    //         text: 'Modal with a custom image.',
    //         imageUrl: 'https://unsplash.it/400/200',
    //         imageWidth: 400,
    //         imageHeight: 200,
    //         imageAlt: 'Custom image',
    //     })
    // })
})
