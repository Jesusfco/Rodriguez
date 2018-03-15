$("form").submit(function(e) {
    e.preventDefault();

    var name = $('input[name="name"]').val();
    var mail = $('input[name="mail"]').val();
    var text = $('textarea[name="text"]').val();
    var token = $('input[name="_token"]').val();

    $('.progressBar').removeClass('hidden');

    $.ajax({
        xhr: function() {
            var xhr = new window.XMLHttpRequest();
            xhr.upload.addEventListener("progress", function(evt) {
                if (evt.lengthComputable) {
                    var percentComplete = evt.loaded / evt.total;
                    console.log(percentComplete);
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
                    console.log(percentComplete);
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

            console.log('email enviado');

            $('input[name="name"]').val('');
            $('input[name="mail"]').val('');
            $('textarea[name="text"]').val('');

        },
        error: function(xhr, ajaxOptions, thrownError) {



            } //Error
    }); //AJAX    
});