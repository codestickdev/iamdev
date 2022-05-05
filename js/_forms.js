(function($){
    function validateForm(form){
        let inputs = form.find('input[name]:not([type="checkbox"])'),
            textarea = form.find('textarea'),
            checkbox = form.find('input[type="checkbox"]'),
            response = [];

        inputs.each(function(){
            let name = $(this).attr('name');
            if(!$(this).attr('optional')){
                if($(this).val() == ''){
                    response.push(name);
                }
            }
        });

        if(!checkbox.parent().hasClass('checked')){
            response.push(checkbox.attr('name'));
        }

        if(response.length === 0){
            response = true;
        }

        return response;
    }

    function cleanForm(form){
        let inputs = form.find('input[name]:not([type="checkbox"])'),
            textarea = form.find('textarea'),
            checkbox = form.find('input[type="checkbox"]');

        inputs.each(function(){
            $(this).parent().removeClass('input-error');
        });

        textarea.parent().removeClass('input-error');
        checkbox.parent().removeClass('input-error');

        $('.contactForm__alert').removeClass('contactForm__alert--visible');
        $('.contactForm__alert').removeClass('contactForm__alert--error');
    }

    $(document).ready(function(){
        let form = $('#contactForm');

        $(form).on('submit', function(e){
            e.preventDefault();
            let validate = validateForm(form);
            cleanForm(form);

            let name = form.find('input[name="contactName"]').val(),
                mail = form.find('input[name="contactMail"]').val(),
                phone = form.find('input[name="contactPhone"]').val(),
                company = form.find('input[name="contactCompany"]').val(),
                file = form.find('input[name="contactFile"]').val(),
                message = form.find('textarea[name="contactMessage"]').val();

            if(validate == true){
                let data = {
                    action: 'contactForm',
                    contentType: false,
                    processData: false,
                    name: name,
                    mail: mail,
                    phone: phone,
                    company: company,
                    file: file,
                    message: message,
                }
                $.ajax({
                    type: 'POST',
                    url: iam.ajaxurl,
                    data: data,

                    beforeSend: function(){
                        form.addClass('loading');
                    },
                    success: function(response){
                        console.log(response);
                        form.removeClass('loading');
                        $('.contactForm__alert').addClass('contactForm__alert--visible');

                        if(response == true || response == 'true'){
                            $('.contactForm__alert p').html('Formularz został pomyślnie wysłany.');
                        }else{
                            $('.contactForm__alert').addClass('contactForm__alert--error');
                            $('.contactForm__alert p').html('Wystąpił błąd podczas wysyłania formularza. Spróbuj ponownie później.');
                        }
                    }
                });
            }else{
                $(validate).each(function(index, name){
                    console.log(name);
                    if(name == 'contactAcceptance'){
                        $('.contactForm__acceptance').addClass('input-error');
                    }else{
                        $('input[name="' + name + '"]').parent().addClass('input-error');
                        $('textarea[name="' + name + '"]').parent().addClass('input-error');
                    }
                });
            }
        });
    });

    /**
     * Contact form + career
     */
     $(document).ready(function(){
        // File upload
        $('.uploadFile').on('click', function(){
            $('#contactFile').click();
        });

        let deftext = $('.uploadFile').find('p').html();

        $('#contactForm').on('change', '#contactFile', function(){
            let fileName = $(this).val().split('\\').pop();

            if(fileName !== ''){
                $('.uploadFile').find('p').html(fileName);
            }else{
                $('.uploadFile').find('p').html(deftext);
            }
        });
    });

    /**
     * Career positions list
     */
    $(document).on('click', '.career_position', function(){
        let name = $(this).text(),
            val = 'Dzień dobry, interesuje mnie praca na stanowisku ' + name + '...';
        console.log(name);

        $('#contactForm').find('textarea').val(val);

        $([document.documentElement, document.body]).animate({
            scrollTop: $("#footerContact").offset().top
        }, 1000);
    });
}(jQuery));