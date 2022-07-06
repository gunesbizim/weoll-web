$(document).ready(function () {
    $('.packages-button').on('click', function () {


        if($(this).attr('data-id') == 1){
            console.log('1')
        }else{
            console.log('2')
        }

    });
});
