$(document).ready(function() {
    $('.license_popup a').lightBox({
        fixedNavigation:true,
        imageLoading: base_url+'public/img/main_img/lightbox-ico-loading.gif',
        imageBtnClose: base_url+'public/img/main_img/lightbox-btn-close.gif',
        imageBtnPrev: base_url+'public/img/main_img/lightbox-btn-prev.gif',
        imageBtnNext: base_url+'public/img/main_img/lightbox-btn-next.gif',
        imageBlank: base_url+'public/img/main_img/lightbox-blank.gif',
        txtImage: 'Photo',
        txtOf: 'Close'
    });
});
