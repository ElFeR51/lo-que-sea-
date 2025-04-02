/* validaciones.js */
document.getElementById("uploadForm").addEventListener("submit", function(event) {
    let password = document.getElementById("password").value;
    if (password !== "claveSegura") {
        event.preventDefault();
        alert("Contraseña incorrecta. No puedes subir el archivo.");
    }
});