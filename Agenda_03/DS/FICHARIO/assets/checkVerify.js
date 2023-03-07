function checkInputs() {
    const checkCompra = document.querySelector("input[name='txtValorCompra']").value;
    const checkNome = document.querySelector("input[name='txtNome']").value;

    if (checkCompra == "" || parseFloat(checkCompra) <= 0) {
        alert("O valor da compra deve ser maior que zero.");
        return false;
    }
    if (checkNome == "") {
        alert("O campo nome não pode estar vazio!");
        return false;
    }
    return true;
}

function checkFileExistence(fileUrl) {
    if (!checkInputs()) {
        return false;
    }

    const xhr = new XMLHttpRequest();
    xhr.open('HEAD', fileUrl, false);
    xhr.send();

    if (xhr.status == 404) {
        //console.log(fileUrl);
        alert("Arquivo de destino não encontrado!");
        return false;
    }

    return true;
}
