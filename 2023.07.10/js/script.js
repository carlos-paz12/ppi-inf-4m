document.getElementById("botao").onclick = function () {
    let usuarioNumero = parseInt(document.getElementById("usuarioNumero").value);

    if (usuarioNumero < 1 || usuarioNumero > 10)
    {
        alert("Por favor, escolha um número válido de 1 a 10.");
        return;
    }

    var sorteioNumero, sorteiosRealizados = 0;

    do {

      sorteioNumero = Math.floor(Math.random() * 10) + 1;
      sorteiosRealizados++;

    } while (sorteioNumero !== usuarioNumero);

    document.getElementById("tentativas").innerHTML = "Achei! Foram necessárias " + sorteiosRealizados + " tentativas para acertar seu número.";
};
