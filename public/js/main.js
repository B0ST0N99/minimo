let form = $('.js-subscription-form');

form.on('submit', function (e) {
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: '/subscription_ajax.php',
        data: form.serialize(),
        success: (response) => {
            form.trigger('reset');
            alert('Thank you for the subscription!');
        },
        error: (error) => {
            alert('Something went wrong')
        }
    })

})

