if (window.location.pathname.includes("horario.html")) {
    document.getElementById('seleccion').addEventListener('change', function () {
        const selectedGrado = this.value.toLowerCase().replace("-", "");
        const horarioTableBody = document.getElementById('horarioTable').getElementsByTagName('tbody')[0];
        const tituloHorario = document.getElementById('tituloHorario');
        
        // Limpiar la tabla de horarios
        horarioTableBody.innerHTML = '';

        if (selectedGrado) {
            fetch('datos.json')
                .then(response => response.json())
                .then(datos => {
                    const horario = datos.horarios[selectedGrado];

                    if (horario) {
                        // Cambia el título según el grado seleccionado
                        switch (selectedGrado) {
                            case "inicial":
                                tituloHorario.textContent = "Horario - Nivel Inicial 2024";
                                break;
                            case "primaria1":
                                tituloHorario.textContent = "Horario - Primer Grado de Primaria 2024";
                                break;
                            case "primaria2":
                                tituloHorario.textContent = "Horario - Segundo Grado de Primaria 2024";
                                break;
                            case "primaria3":
                                tituloHorario.textContent = "Horario - Tercer Grado de Primaria 2024";
                                break;
                            case "primaria4":
                                tituloHorario.textContent = "Horario - Cuarto Grado de Primaria 2024";
                                break;
                            case "primaria5":
                                tituloHorario.textContent = "Horario - Quinto Grado de Primaria 2024";
                                break;
                            case "primaria6":
                                tituloHorario.textContent = "Horario - Sexto Grado de Primaria 2024";
                                break;
                            case "secundaria1":
                                tituloHorario.textContent = "Horario - Primer Grado de Secundaria 2024";
                                break;
                            case "secundaria2":
                                tituloHorario.textContent = "Horario - Segundo Grado de Secundaria 2024";
                                break;
                            case "secundaria3":
                                tituloHorario.textContent = "Horario - Tercer Grado de Secundaria 2024";
                                break;
                            case "secundaria4":
                                tituloHorario.textContent = "Horario - Cuarto Grado de Secundaria 2024";
                                break;
                            case "secundaria5":
                                tituloHorario.textContent = "Horario - Quinto Grado de Secundaria 2024";
                                break;
                            default:
                                tituloHorario.textContent = "Horario de Clases";
                        }

                        // Insertar las filas y celdas en la tabla
                        horario.forEach(fila => {
                            let row = document.createElement("tr");

                            fila.forEach(celda => {
                                let cell = document.createElement("td");
                                cell.textContent = celda;
                                row.appendChild(cell);
                            });

                            horarioTableBody.appendChild(row);
                        });
                    }
                })
                .catch(error => console.error('Error al cargar el archivo JSON:', error));
        }
    });
}
