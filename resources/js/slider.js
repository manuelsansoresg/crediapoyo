$('#cantidad').rangeslider({
    polyfill: false,

    onSlide: function(position, value) {
        $('#valor').html('$'+value);
    },
});

$('#plazo').rangeslider({
    polyfill: false,

    onSlide: function(position, value) {
        $('#valor_plazo').html(value + ' quincenas');
    },
});
