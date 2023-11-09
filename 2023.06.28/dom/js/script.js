/*
 * Maneiras para obter referência dos elementos HTML via DOM
 *
 * 'getElementById' -> recupera um elemento pelo id
 * 'getElementsByClassName' recupera um ou mais elementos pela classe
 * 'getEmementsByTagName' recupera um ou mais elementos pela tag
 * 'queryElement' recupera um ou mais elementos por seletores css
 */
let btnById = document.getElementById("btn"); // 'let' é uma variável em js
// let btnByQS = document.querySelector("#{id}");
// let classesByName = document.getElementsByClassName("{class}");
// let classesByQS = document.querySelector(".{class}");
// let tagsByName = document.getElementsByTagName("{tag}");
// let tagsByQS = document.querySelector("{nomeTag}");

btnById.onclick = function () {
    /* Imprimir no console do navegador a estrutura do HTML */
    console.log(document);
};

// innerHTML altera o conteúdo de um elemento HTML
btnById.innerHTML = "Click here"; // O texto do botão deve mudar para 'Click here'
