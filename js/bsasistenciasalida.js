var IDsalida = document.getElementById('idasistenc');
var Hora_salIn = document.getElementById('textsalida');
var SubmitInputdos = document.getElementById('Submitenviados');

SubmitInputdos.addEventListener("click", ()=>{
    if(IDsalida.value.length == 0){
        alert("Rellena todos los campos");
        return false;
    }else{
        $.ajax({
            type: "POST",
            url: "db-php/crudAsistenciaSalida.php",
            dataType: 'json',
            data:{
                id:IDsalida.value,
                hora_salida:Hora_salIn.value,
            },
            success:function(r){
              if (r == 1) {
                alert("Salida registrada");
                $('#form_soli')[0].reset();
                return false;
              } else{
                alert("¡Intealo de nuevo!- Reporta al admin.");
                return false;
            }}
        });
        return false;
    }
})