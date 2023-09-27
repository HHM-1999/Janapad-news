$(document).ready(function () {

    // sticky-menu
    $(window).scroll(function () {
        if ($(window).scrollTop() > 20) {
            $(".DHeaderNav").addClass('sticky');
        } else {
            $(".DHeaderNav").removeClass('sticky');
        }
    });

    // BackToTop
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back_to_top').fadeIn();
            } else {
                $('#back_to_top').fadeOut();
            }
        });
        $('#back_to_top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });

        $('#back_to_top').tooltip('show');

    });


    // back-to
    var btn = $('#button');

    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, '300');
    });

});


//search box//
function showSearchBox() {
    document.getElementById("searchcontainer").style.display = "block";
}

function hideSearchBox() {
    document.getElementById("searchcontainer").style.display = "none";
}

function performSearch() {
    document.getElementById("searchInput").value;
}