/*
Metodo para cargar las evidencias desde el panel del docente
*/
const inputFile = document.querySelector("#microcurriculo");

btnEnviar.addEventListener("click", () => {
    if (inputFile.files.length > 0) {
        let formData = new FormData();
        console.log(formData);
        var idprovincia = document.getElementById("materiaActividad");
        var pro = idprovincia.options[idprovincia.selectedIndex].value;
        console.log(pro);
        formData.append("materia", pro);
        formData.append("archivo", inputFile.files[0]); // En la posición 0; es decir, el primer elemento
        fetch("../model/cargarMicrocurriculo.php", {
                method: 'POST',
                body: formData,
                cache: 'no-cache'
            })
            .then(respuesta => respuesta.text())
            .then(decodificado => {
                console.log(decodificado);
                if (decodificado == 'mal') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Debe de seleccionar una materia correcta'
                    })
                } else if (decodificado == 'exito') {
                    Swal.fire(
                        'Exito',
                        'Has subido correctamente la actividad',
                        'success'
                    )
                    document.getElementById("FormCargaCurriculo").reset();
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'No se pudo cargar la actividad'
                    })
                }
            });
    } else {
        Swal.fire({
            icon: 'error',
            title: '¡Ups!',
            text: 'No se ha cargado ningún archivo'
        })
    }
});