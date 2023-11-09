function portugues() {
    alert("Olá Mundo!");
}

document.getElementById("portugues").addEventListener("click", portugues);

document.getElementById("alemao").onclick = function () {
    alert("Hallo Welt");
};

/* Cria um novo elemento e salva em uma variável */
let jpn = document.createElement("button");

jpn.innerHTML = "セイ・ハロー・ワールド"; /* Altera o conteúdo do elemento */

jpn.setAttribute("id", "japones"); /* Adiciona o atributo 'id' ao elemento */

/* Cria uma função anÔnima */
jpn.onclick = function () {
    alert("こんにちは世界");
}

/* 'Pendura' o novo elemento ao corpo do HTML */
document.body.appendChild(jpn);
