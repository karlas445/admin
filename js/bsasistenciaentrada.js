var NombreIn = document.getElementById('txtnombre');
var PuestoIn = document.getElementById('selectoption'); 
var FechaIn = document.getElementById('textfecha');
var Hora_enIn = document.getElementById('textentrada');
var SubmitInput = document.getElementById('Submitenvia');

SubmitInput.addEventListener("click", ()=>{
    if(NombreIn.value.length == 0){
        alert("Rellena todos los campos");
        return false;
    }else if(PuestoIn.value == "0"){
        alert("Selecciona un puesto");
        return false;
    }else{
        $.ajax({
            type: "POST",
            url: "db-php/crudAsistenciaEntrada.php",
            dataType: 'json',
            data:{
                nombre:NombreIn.value,
                puesto:PuestoIn.value,
                fecha:FechaIn.value,
                hora_entrada:Hora_enIn.value,
                hora_salida:'--/--',
            },
            success:function(r){
              if (r == 1) {
                alert("Asistencia registrada");
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