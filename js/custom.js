(function($){
    $(document).ready(function(){

        // Checkbox engine
        $('input[type="checkbox"]').on('click', function(){
            if($(this).is(':checked')){
                $(this).parent().addClass('checked');
            }
            else if($(this).is(':not(:checked)')){
                $(this).parent().removeClass('checked');
            }
        });
    });
}(jQuery));