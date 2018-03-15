var countMail = 0;
$("form").submit(function(e) {
    e.preventDefault();

    var name = $('input[name="name"]').val();
    var mail = $('input[name="mail"]').val();
    var text = $('textarea[name="text"]').val();
    var token = $('input[name="_token"]').val();



    if (countMail < 2) {

        $('.progressBar').removeClass('hidden');
        $('.loaderMail').removeClass('hidden');
        $('form').addClass('hidden');

        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = evt.loaded / evt.total;
                        // console.log(percentComplete);
                        $('.progressBar').css({
                            width: percentComplete * 100 + '%'
                        });
                        if (percentComplete === 1) {
                            $('.progressBar').addClass('hidden');
                        }
                    }
                }, false);
                xhr.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = evt.loaded / evt.total;
                        // console.log(percentComplete);
                        $('.progressBar').css({
                            width: percentComplete * 100 + '%'
                        });
                    }
                }, false);
                return xhr;
            },
            type: "POST",
            url: "mail",
            async: true,
            data: {
                name: name,
                mail: mail,
                text: text,
                _token: token
            },
            success: function(data) {
                showAlert('Mensaje enviado', 'En breve me comunicare contigo.');
                $('form').removeClass('hidden');
                $('.loaderMail').addClass('hidden');

                $('input[name="name"]').val('');
                $('input[name="mail"]').val('');
                $('textarea[name="text"]').val('');
                countMail++;

            },
            error: function(xhr, ajaxOptions, thrownError) {


                    $('form').removeClass('hidden');
                    $('.loaderMail').addClass('hidden');

                    showAlert('ERROR', 'Estamos teniendo dificultades tecnicas');

                } //Error
        }); //AJAX    

    } else {
        showAlert('ERROR', 'Ya haz enviado demasiados mensajes');
    }
});

function showAlert(title, parraf) {

    $('.alert h1').text(title);
    $('.alert p').text(parraf);

    $('.alert').removeClass('hidden');
    $('.alert-container').removeClass('hidden');


    setTimeout(function() {
        $('.alert').addClass('hidden');
        $('.alert-container').addClass('hidden');
    }, 2500)


}