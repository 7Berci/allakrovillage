


$(window).scroll(function() {
    if ($(window).scrollTop() > 200) { // adjust this value according to your needs
        $('.sticky-top').css({
            'position': 'fixed',
            'top': '0',
            'width': '100%'
        });
    } else {
        $('.sticky-top').css({
            'position': 'static'
        });
    }
});
