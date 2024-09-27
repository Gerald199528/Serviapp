$('#fecha').on('change', function(){
$('#edad').val(calcular_Edad());
});
function calcular_Edad(){
    var fecha_seleccionada = $('#fecha').val();
    var fecha_nacimiento = new Date(fecha_seleccionada);
    var fecha_Actual = new  Date();
    var edad = (parseInt((fecha_Actual - fecha_nacimiento) / (1000*60*60*24*365)));
    return edad;
    }
