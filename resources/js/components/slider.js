$( ".item" ).click(function() {
    const code = $(this).attr("data-code");
    var url = '/showSliderContent/'+code;
    axios.get(url)
        .then(function (response) {
            var result = response.data;
            var ids = result.ids;
            var slider_content = result.slider_content;
            for (let i = 0; i < ids.length; i++) {
                $('#fa-'+ids[i].id).removeClass('text-success');
            }
            $('#fa-'+code).addClass('text-success');
            $('#slider-title').html(slider_content.title);
            console.log(slider_content.title);
            $('#slider-content').html(slider_content.content);

            var image = $("#slider-icon");
            image.fadeOut('fast', function () {
                image.attr('src', '/img/icon_slider/'+slider_content.icon);
                image.fadeIn('fast');
            });

        })
        .catch(function (error) {

        })
        .then(function () {
        });


});