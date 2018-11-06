var homePath = $('#homePath').val();
var id = $('#galleryId').val();
var type = $('#photoType').val();


var app = new Vue({
    el: '#app',
    data: {

        photos: [],
    },

    created: function() {

        $(window).load(() => {

            let url = homePath;

            if (type == 1) {
                url = url + '/blog/' + id + '/getPhotos';
            } else if (type == 2) {
                url = url + '/portafolio/' + id + '/getPhotos';
            } else if (type == 3) {
                url = url + '/servicios/' + id + '/getPhotos';
            }
            axios.get(url)
                .then((response) => {

                    for (let pho of response.data) {

                        pho.img = pho.img.split(' ').join('%20');

                        if (pho.type == 1)
                            pho.path = homePath + '/img/app/blog/' + id + '/' + pho.img;

                        else if (pho.type == 2)
                            pho.path = homePath + '/img/app/works/' + id + '/' + pho.img;

                        else if (pho.type == 3)
                            pho.path = homePath + '/img/app/services/' + id + '/' + pho.img;

                        app.photos.push(pho);

                    }

                    this.setBackground();

                }).catch(function(error) {
                    console.log(error);
                });

        });

    },

    methods: {

        setBackground: function() {

            setTimeout(() => {

                for (let pho of this.photos) {

                    var doc = document.getElementById('pho-' + pho.id);

                    if (pho.type == 1) {

                        doc.style.backgroundImage = 'url(' + homePath + '/img/app/blog/' + id + '/' + pho.img + ')';
                        pho.path = homePath + '/img/app/blog/' + id + '/' + pho.img;

                    } else if (pho.type == 2) {

                        doc.style.backgroundImage = 'url(' + homePath + '/img/app/works/' + id + '/' + pho.img + ')';
                        pho.path = homePath + '/img/app/works/' + id + '/' + pho.img;
                    } else if (pho.type == 3) {

                        doc.style.backgroundImage = 'url(' + homePath + '/img/app/services/' + id + '/' + pho.img + ')';
                        pho.path = homePath + '/img/app/services/' + id + '/' + pho.img;
                    }

                    var width = doc.offsetWidth;
                    doc.parentElement.style.height = width + 'px';

                }

            }, 50);


        },



    }

});