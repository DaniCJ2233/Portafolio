function changeColor() {
    var inputField = document.getElementById("input");


    // Cambia el color del borde del input a azul de manera gradual
    setTimeout(function () {
        inputField.style.borderColor = "lightblue";
        inputField.style.borderWidth = ".2px";
        inputField.style.boxShadow = " inset 0px 0px 0px 1.5px blue"
        inputField.placeholder = ""
    }, 10);
}

document.addEventListener("click", function (event) {
    var inputField = document.getElementById("input");

    // Verifica si el clic no se produjo en el input
    if (event.target !== inputField) {

        // Restablece el color del borde del input a negro de manera gradual
        setTimeout(function () {
            inputField.style.borderColor = "grey";
            inputField.style.borderWidth = "0.2px";
            inputField.style.boxShadow = "none"
            inputField.placeholder = "Correo electronico o teléfono"
            
        }, 10);
    }
});
