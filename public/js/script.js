String.prototype.permalink = function () {
    return this.toString().trim().toLowerCase().replace(/\s/g, '-');
};
var $sm = $('#sm-box');
if ($sm.length) {
    $sm.delay(5000).fadeOut('fast');
}
$('.add-to-cart').on('click', function () {
    $.ajax({
        url: BASE_URL + 'add-to-cart',
        type: "GET",
        dataType: "html",
        data: { id: $(this).data('id') },
        success: function (data) {
            location.reload();
        }
    });
});
$('.quanitySniper').on('change', function () {
    $.ajax({
        url: BASE_URL + 'cart/update-cart',
        type: "GET",
        dataType: "html",
        data: { val: $(this).val(), id: $(this).data('id') },
        success: function (data) {
            location.reload();
        }
    });
});
$('.logOut').on('click', function () {
    $.ajax({
        url: BASE_URL + 'user/log-out',
        type: "GET",
        dataType: "html",
        data: { rd: $(this).data('rd') },
        success: function (data) {
            location.reload();
        }
    });
});
$('.origin-field').on('focusout', function () {
    $('.target-field').val($(this).val().permalink());
});

$('#article').summernote({
    height: 300
});
$('#description-grid').summernote({
    height: 100
});
$('#description-list').summernote({
    height: 300
});

//for to fix the fooetr in the bottom of the page
var docHeight = $(window).height();
var footerHeight = $('footer').height();
var footerTop = $('footer').position().top + footerHeight;
if (footerTop < docHeight) {
    $('footer').css('margin-top', 10 + (docHeight - footerTop) + 'px');
}

const seleCat = document.querySelector('.seleCat') || false;
if (seleCat) {
    const fieldUrl = document.querySelector('.plaUrl');
    const fieldUrlBase = fieldUrl.placeholder;
    function changeUrlField() {
        const selected = seleCat.options[seleCat.selectedIndex];
        fieldUrl.placeholder = '';
        fieldUrl.placeholder += selected !== seleCat.options[0] ? fieldUrlBase + selected.getAttribute('data-category-url') + '/' : fieldUrlBase + '.../';
    }
    changeUrlField();
    seleCat.onchange = changeUrlField;
}