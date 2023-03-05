// Verifica de o valor do campo é zero.
function checkValorCompra() {
    var valorCompra = document.getElementsByName("txtValorCompra").value;
    if (valorCompra == 0 || valorCompra == '') {
        alert("O valor da compra não pode ser zero.");
        return false;
    }
    return true;
};

// Verifica se o arquivo de destino existe.
function checkFileExistence(fileUrl) {
    // Primeiro chama a func checkValorCompra.
    if (checkValorCompra() == false) {
        return false;
    } else {

        var xhr = new XMLHttpRequest();
        xhr.open('HEAD', fileUrl, false);
        xhr.send();
        if (xhr.status == "404") {
            alert("Arquivo de destino não encontrado!");
            return false;
        }
        return true;
    }
}
