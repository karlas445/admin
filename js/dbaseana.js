
 var InputEnviarAna = document.getElementById('SubmitFormAna');
 var InputNombreAna = document.getElementById('selectoptionAnanombre');
 var InputSelectAna = document.getElementById('selectoptionAna');
 var InputArchivoAna = document.getElementById('filearchivoAna');
 var FormAna = document.getElementById('FormAna');
 var ExteArchivoAna = /(.pdf|.docx|.xlsx|.pptx|.txt)$/i;


 InputEnviarAna.addEventListener("click", ()=>{
    if(InputNombreAna.value == "0"){
        alert("Seleccione su nombre");
        return false;
    }else if(InputSelectAna.value == "0"){
        alert("Selecciona una opcion");
        return false;
    }else if(InputArchivoAna.value =="" ){
        alert("Agrega un archivo");
        return false;
    }else if(!ExteArchivoAna.exec(InputArchivoAna.value)){
        alert("Solo se pueden subir archivos PDF, WORD, EXCEL, POWER POINT y TXT");
        InputArchivo.value = '';
        return false;
    }else{
        FormAna.action = "db-php/crudRegistroanalisis.php";
        FormAna.method = "POST";
        FormAna.onsubmit();
        
    }


 });