$(document).ready(function(){
   $('.tab-cont-container').on('click',function(){

    if($(this).hasClass('selected')){
        return;
    }
    else{
        var contId = $(this).data('id');
        console.log(contId);
        $('img.tabs-two-img.selected').removeClass('selected');
        $('img.tabs-two-img[data-id=' + contId + ']').addClass('selected');
        $('.tab-cont-container.selected').removeClass('selected');
        $('.tab-cont-container[data-id=' + contId + ']').addClass('selected');
    }

   });

});