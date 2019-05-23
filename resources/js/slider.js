
$( "#state" ).change(function() {
    var state = $('#state').val();
    $('#dependency').empty(); //limpiar las dependencias
    var url= '/get_dependency/'+state;
    axios.get(url)
        .then(function (response) {
            var result = response.data;
            $('#dependency').prop("disabled", false);
            $('#alerta-cotizador').hide(1000);
            for (let i_town = 0; i_town < result.length; i_town++) {
                $("#dependency").append(new Option(result[i_town].name, result[i_town].mounth_rate));
            }
            cotizador();
        })
        .catch(function (error) {

        })
        .then(function () {
        });
});

$( "#dependency" ).change(function() {
    cotizador();
});


$('#cantidad').rangeslider({
    polyfill: false,

    onSlide: function(position, value) {
        $('#valor').html('$'+value);
        if($('#dependency').val() === ''){
            $('#alerta-cotizador').show(1000);
        }else{
            $('#alerta-cotizador').hide(1000);
            cotizador();
        }
    },
});

$('#plazo').rangeslider({
    polyfill: false,

    onSlide: function(position, value) {
        $('#valor_plazo').html(value + ' quincenas');

        if($('#dependency').val() === ''){
            $('#alerta-cotizador').show(1000);
        }else{
            $('#alerta-cotizador').hide(1000);
            cotizador();
        }

        //total = Math.round(total,2);



    },
});

function cotizador() {
    var plazo        = $('#plazo').val();
    var monto        = $('#cantidad').val();

    var tasa_mensual = $('#dependency').val()/100;
    var interes      = ((monto*tasa_mensual)*plazo)/2;


    var total_monto = monto/plazo;
    var total_interes = interes/plazo;
    var total_iva = total_interes*0.16;
    var total = total_monto + total_iva + total_interes;

    $('#semanas').html(plazo);
    $('#abono').html('$'+number_format(total,2)+' MXN');


}

function number_format(amount, decimals) {

    amount += ''; // por si pasan un numero en vez de un string
    amount = parseFloat(amount.replace(/[^0-9\.]/g, '')); // elimino cualquier cosa que no sea numero o punto

    decimals = decimals || 0; // por si la variable no fue fue pasada

    // si no es un numero o es igual a cero retorno el mismo cero
    if (isNaN(amount) || amount === 0)
        return parseFloat(0).toFixed(decimals);

    // si es mayor o menor que cero retorno el valor formateado como numero
    amount = '' + amount.toFixed(decimals);

    var amount_parts = amount.split('.'),
        regexp = /(\d+)(\d{3})/;

    while (regexp.test(amount_parts[0]))
        amount_parts[0] = amount_parts[0].replace(regexp, '$1' + ',' + '$2');

    return amount_parts.join('.');
}
