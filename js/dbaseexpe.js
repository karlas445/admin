
 var InputEnviarExpe = document.getElementById('SubmitFormExpe');
 var InputNombreExpe = document.getElementById('selectoptionExpenombre');
 var InputSelectExpe = document.getElementById('selectoptionExpe');
 var InputArchivoExpe = document.getElementById('filearchivoExpe');
 var FormExpe = document.getElementById('FormExpe');
 var ExteArchivoExpe = /(.pdf|.docx|.xlsx|.pptx|.txt)$/i;


 InputEnviarExpe.addEventListener("click", ()=>{
    if(InputNombreExpe.value == "0"){
        alert("Seleccione su nombre");
        return false;
    }else if(InputSelectExpe.value == "0"){
        alert("Selecciona una opcion");
        return false;
    }else if(InputArchivoExpe.value =="" ){
        alert("Agrega un archivo");
        return false;
    }else if(!ExteArchivoExpe.exec(InputArchivoExpe.value)){
        alert("Solo se pueden subir archivos PDF, WORD, EXCEL, POWER POINT y TXT");
        InputArchivoExpe.value = '';
        return false;
    }else{
        FormExpe.action = "db-php/crudRegistroExpediente.php"
        FormExpe.method = "POST";
        FormExpe.onsubmit();
        
    }


 });