let campoMensagem = $("#campo-mensagem");
let mensagemCaracteres = $("#mensagem-caracteres");

function atualizarQuantidadeCaracteres(){
    mensagemCaracteres.html(campoMensagem.val().length);
}

campoMensagem.on("input", atualizarQuantidadeCaracteres);

let btnSalvar = $("#btn-salvar");

function salvarMensagem() {
    let novoParagrafo = $("<p>");
    novoParagrafo.html(campoMensagem.val());
    novoParagrafo.addClass('mensagem');

    let conteudoParagrafo = novoParagrafo.prop('scrollHeight');
    $("#novoParagrafo").css('height', conteudoParagrafo + 'px');

    campoMensagem.val("");
    mensagemCaracteres.html("0");

    btnSalvar.after(novoParagrafo);
}

btnSalvar.click(salvarMensagem);
