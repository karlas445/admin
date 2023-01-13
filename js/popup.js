var InpAbrirficha = document.getElementById('btn-abrirregistrooficha');
var InpCerrarficha = document.getElementById('btn-cerrarregistroficha');
var InpAbrirExpe = document.getElementById('btn-abrirregistrooexpe');
var InpCerrarExpe  = document.getElementById('btn-cerrarregistroexpe');
var InpAbrirAna = document.getElementById('btn-abrirregistrooana');
var InpCerrarAna  = document.getElementById('btn-cerrarregistroana');
var ModalPopficha = document.getElementById('overficha');
var ModalPopexpe = document.getElementById('overexpe');
var ModalPopana = document.getElementById('overana');


InpAbrirficha.addEventListener("click",() =>{
    ModalPopficha.classList.add("show");
    
});
InpCerrarficha.addEventListener("click",() =>{
    ModalPopficha.classList.remove("show");
    window.location = "registro_documentos.php";
});

InpAbrirExpe.addEventListener("click",() =>{
    ModalPopexpe.classList.add("show");
    
});
InpCerrarExpe.addEventListener("click",() =>{
    ModalPopexpe.classList.remove("show");
    window.location = "registro_documentos.php";
});
InpAbrirAna.addEventListener("click",() =>{
    ModalPopana.classList.add("show");
    
});
InpCerrarAna.addEventListener("click",() =>{
    ModalPopana.classList.remove("show");
    window.location = "registro_documentos.php";
});