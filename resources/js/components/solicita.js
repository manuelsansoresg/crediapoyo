if ( $("#solicita_state").length > 0 ) {
    /* asignar valores a dependencia*/
    $( "#solicita_state" ).change(function() {
        var state = $('#solicita_state').val();
        $('#solicita_dependency').empty(); //limpiar las dependencias
        var url= '/get_dependency/'+state;
        axios.get(url)
            .then(function (response) {
                var result = response.data;
                $('#solicita_dependency').prop("disabled", false);
                $('#alerta-cotizador').hide(1000);
                for (let i_town = 0; i_town < result.length; i_town++) {
                    $("#solicita_dependency").append(new Option(result[i_town].name, result[i_town].name));
                }

            })
            .catch(function (error) {

            })
            .then(function () {
            });
    });

    /* enviar formulario*/
    $( "#form-solicita" ).submit(function( event ) {
        event.preventDefault();
        $('#spinner-registro').show();
        $('.error-solicita').hide();
        $('.error-solicita').html('');
        var url = '/solicita_informacion';

        let myForm = document.getElementById('form-solicita');
        let formData = new FormData(myForm);
        axios.post
        (url, formData)
            .then(function (response) {
                var result = response.data;
                $('#spinner-contacto').hide();
                /*document.getElementById('form-contacto').reset();*/
                $('#spinner-registro').hide();


            })
            .catch(function (error) {
                var result = error.response.data;
                var errors = result.errors;
                $('.error-solicita').show();

                $('#spinner-registro').hide();
                for (var k in errors){
                    if (typeof errors[k] !== 'function') {
                        console.log(k);
                        $('.'+k).html(errors[k]);
                        /*$('#'+k).addClass('is-invalid');*/

                    }
                }


            })
            .then(function () {
            });
    });
}