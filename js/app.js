$(document).ready(function(){
    work_projects();
});

/*
Popup functionality
 */
function work_projects()
{
    /*
     Adds listener for project clicks
     Grabs appropriate project content and shoves it into the popup
     Adjusts styles and shows popup
     */
    $('.Work').on('click','.project',function(){
        var target = '.popup_' + $(this).data('project');
        var $target_html = $(target).html();
        var $popup_content = $('.Popup .content > div');
        $popup_content.html($target_html);
        $('.Popup').show();
        setTimeout(function(){
            $('.Popup').addClass('shown');
            $('body').css('overflow','hidden');
        },20);
    });
    /*
    Adds listener for popup close button click
    Resets everything to previous state
     */
    $('.Popup .close').click(function(){
        $('.Popup').hide();
        $('.Popup').removeClass('shown');
        $('body').css('overflow','auto');
    });
}
