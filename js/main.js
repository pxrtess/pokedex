function btnAdicionar() {
    document.getElementById("adicionar").style.display = "block";
    document.getElementById("deletar").style.display = "none";
    document.getElementById("alterar").style.displAy = "none";
}
function btnAlterar() {
   document.getElementById("adicionar").style.display = "none";
    document.getElementById("deletar").style.display = "none";
    document.getElementById("alterar").style.displAy = "block";
}
function btnDeletar(){
    document.getElementById("adicionar").style.display = "none";
    document.getElementById("deletar").style.display = "block";
    document.getElementById("alterar").style.displAy = "none";
}