
 var InputEnviarFicha = document.getElementById('SubmitFormficha');
 var InputNombreFicha = document.getElementById('selectoptionfichanombre');
 var InputSelect = document.getElementById('selectoptionficha');
 var InputArchivo = document.getElementById('filearchivo');
 var FormFicha = document.getElementById('FormFicha');
 var ExteArchivo = /(.pdf|.docx|.xlsx|.pptx|.txt)$/i;


 InputEnviarFicha.addEventListener("click", ()=>{
    if(InputNombreFicha.value == "0"){
        alert("Seleccione su nombre");
        return false;
    }else if(InputSelect.value == "0"){
        alert("Selecciona una opcion");
        return false;
    }else if(InputArchivo.value =="" ){
        alert("Agrega un archivo");
        return false;
    }else if(!ExteArchivo.exec(InputArchivo.value)){
        alert("Solo se pueden subir archivos PDF, WORD, EXCEL, POWER POINT y TXT");
        InputArchivo.value = '';
        return false;
    }else{
        FormFicha.action = "db-php/crudRegistroficha.php"
        FormFicha.method = "POST";
        FormFicha.onsubmit();
        
    }


 });