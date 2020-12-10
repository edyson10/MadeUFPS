function descargar(materia, codigo) {
    console.log(materia);
    console.log(codigo);
    let formData = new FormData();
    formData.append("materia", materia);
    formData.append("alumno", codigo);
    fetch("../model/descargaArchivo.php", {
            method: 'POST',
            body: formData,
            cache: 'no-cache'
        })
        .then(respuesta => respuesta.text())
        .then(decodificado => {
            console.log(decodificado);
        });
}