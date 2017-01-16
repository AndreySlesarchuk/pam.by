/**
 * Created by admin on 16.08.2016.
 */
$(document).ready(function () {
function vid_play_pause() {
    var myVideo = document.getElementById("myVideo");
    if (myVideo.paused) {
        myVideo.play();
    } else {
        myVideo.pause();
    }
}

//
$('.atmm-contact_link_gs').mouseenter(function () {
    // $(this).append($('.atmm-contact-box'));
    $('.atmm-parent_popup_gs').show(800);
    $('.atmm-parent_popup_as').css('display', 'none');
    $('.atmm-parent_popup_et').css('display', 'none');
    $('.atmm-parent_popup_vl').css('display', 'none');
    $('.atmm-parent_popup_ved').css('display', 'none');
});

$('.con_close').mouseenter(function () {

    $('.atmm-parent_popup_gs').css('display', 'none');
});

$('.atmm-contact_link_et').mouseenter(function () {
    // $(this).append($('.atmm-contact-box'));
    $('.atmm-parent_popup_et').show(800);
    $('.atmm-parent_popup_as').css('display', 'none');
    $('.atmm-parent_popup_gs').css('display', 'none');
    $('.atmm-parent_popup_vl').css('display', 'none');
    $('.atmm-parent_popup_ved').css('display', 'none');

});

$('.con_close').mouseenter(function () {

    $('.atmm-parent_popup_et').css('display', 'none');
});

$('.con_close').mouseenter(function () {

    $('.atmm-parent_popup_vl').css('display', 'none');
});
$('.atmm-contact_link_vl').mouseenter(function () {
    // $(this).append($('.atmm-contact-box'));
    $('.atmm-parent_popup_vl').show(800);
    $('.atmm-parent_popup_as').css('display', 'none');
    $('.atmm-parent_popup_gs').css('display', 'none');
    $('.atmm-parent_popup_et').css('display', 'none');
    $('.atmm-parent_popup_ved').css('display', 'none');
});
$('.atmm-contact_link_ved').mouseenter(function () {
    // $(this).append($('.atmm-contact-box'));
    $('.atmm-parent_popup_ved').show(800);
    $('.atmm-parent_popup_as').css('display', 'none');
    $('.atmm-parent_popup_gs').css('display', 'none');
    $('.atmm-parent_popup_et').css('display', 'none');
    $('.atmm-parent_popup_vl').css('display', 'none');
});
$('.atmm-contact_link_as').mouseenter(function () {
    // $(this).append($('.atmm-contact-box'));
    $('.atmm-parent_popup_as').show(800);
    $('.atmm-parent_popup_ved').css('display', 'none');
    $('.atmm-parent_popup_gs').css('display', 'none');
    $('.atmm-parent_popup_et').css('display', 'none');
    $('.atmm-parent_popup_vl').css('display', 'none');
});

