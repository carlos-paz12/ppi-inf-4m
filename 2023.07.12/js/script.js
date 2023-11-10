let campo = document.querySelector("#msg");
let caracteres = document.querySelector("#caracteres");

function contaLetras(){
    caracteres.innerHTML = campo.value.length;
}

campo.addEventListener("input", contaLetras);
