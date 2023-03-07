function hideIdForm(id) {
    const checkIdFormPagt = document.getElementById(id)
    if (checkIdFormPagt.style.visibility = "visible") {
        checkIDFormPagt.style.visibility = "hidden";
    };
}

function showIdForm(id) {
    // Remove atributo da div.
    // Habilita o campo no index.
    const checkIDFormPagt = document.getElementById(id)
    if (checkIDFormPagt.style.visibility == "hidden") {
        //checkIDFormPagt.removeAttribute("style");

        checkIDFormPagt.style.visibility = "visible";
    }
}