$(document).ready(function(){

    $('.click_table').click(function() {/**---Tables---**/
        $(this).parent().parent().children('.table_hide').slideToggle(600);
        $(this).parent().parent().children('.table_hide').css({
                                                                'display':'block',
                                                                'border': '1px double #CCCCCC',
                                                                'marginLeft':'-1px',
                                                                'background':'#F0F2F2'

                                                                });
    });

});
