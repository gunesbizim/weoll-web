$(document).ready(function(){
   
    $('.tab-title').on('click',function(){
        if($(this).hasClass('selected')){
            return;
        }else{
            $('.tab-title.selected').removeClass('selected');
            $('.tab-content.selected').removeClass('selected');
            $(this).addClass('selected');
            var contId = $(this).data('id');
            $('.tab-content[data-id='+contId+']').addClass('selected');
        }
        
    });
});