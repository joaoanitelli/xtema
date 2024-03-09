function addProduto (nome, preco, tipo) {
    var tb = document.getElementById('tbProdutos');
    var qtdLinhas = tb.rows.length;
    var linha = tb.insertRow(qtdLinhas);

    var cellCodigo = linha.insertCell(0);
    var cellNome = linha.insertCell(1);
    var cellPreco = linha.insertCell(2);
    var cellTipo = linha.insertCell(3);

    cellCodigo.innerHTML = qtdLinhas;
    cellNome.innerHTML = nome;
    cellPreco.innerHTML = preco;
    cellTipo.innerHTML = tipo;

    preencheCampo()
}

document.addEventListener("DOMContentLoaded", function() {
    var linhasClicaveis = document.querySelectorAll(".linha-clicavel");

    linhasClicaveis.forEach(function(linha) {
        linha.addEventListener("click", function() {
            var codigoProduto = this.getAttribute("data-codigo");
            window.location.href = "alterar.php?codigo=" + codigoProduto;
        });
    });

    preencheCampo();
});

function preencheCampo() {
    var tb = document.getElementById("tbProdutos");
    var nomeInput = document.getElementById("nome");
    var precoInput = document.getElementById("preco");

    for (var i = 0; i < tb.rows.length; i++) {
        tb.rows[i].onclick = function() {
            var index = this.rowIndex;
            nomeInput.value = tb.rows[index].cells[1].innerText;
            precoInput.value = tb.rows[index].cells[2].innerText;
        }
    }
}