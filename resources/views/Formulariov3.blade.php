<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro del Artesano(a)</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Agrega jQuery -->
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            height: 100%;
            font-family: Arial, sans-serif;
        }

        #registrationForm {
            width: 50%;
            margin-top: 20px;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
        }

        button {
            padding: 10px;
            background-color: #333;
            color: white;
            border: none;
            cursor: pointer;
            width: 100%;
            box-sizing: border-box;
        }

        .step {
            display: none;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        .step.active {
            display: flex;
        }

        #progressBar {
            width: 100%;
            background-color: #ddd;
            position: fixed;
            top: 0;
        }

        #progress {
            height: 20px;
            background-color: #4CAF50;
            width: 0%;
        }

        /* Estilo para ocultar el campo con ID "AsociacionCarpinteros" */
        #AsociacionCarpinteros {
            display: none;
        }
    </style>
</head>

<body>

    <form id="registrationForm">
        <div id="progressBar">
            <div id="progress"></div>
        </div>

        <fieldset class="step">
            <h2>Paso 1: Datos personales</h2>
            <input type="text" class="input-field" id="name" name="name" placeholder="ejemplo: Juan Carlos" required>
            <input type="text" class="input-field" id="ApellidoPaterno" name="ApellidoPaterno" placeholder="ejemplo: Perez" required>
            <input type="text" class="input-field" id="ApellidoMaterno" name="ApellidoMaterno" placeholder="ejemplo: Morales" required>
            <input type="date" class="input-field" id="FechaNacimiento" name="FechaNacimiento" required>
            <select id="Genero" class="input-field" name="Genero" required>
                <option value="">--Seleccione una opción--</option>
                <option value="Hombre">Hombre</option>
                <option value="Mujer">Mujer</option>
            </select>
            <input type="text" id="DireccionArtesano" class="input-field" name="DireccionArtesano" placeholder="ejemplo: calle eulert No 1205 Zona 16 de Julio" required>
            <input type="text" id="CI" class="input-field" name="CI" placeholder="ejemplo: 2235678" required>
            <select id="CIExt" class="input-field" name="CIExt" required>
                <option value="">--Seleccione una opción--</option>
                <option value="LP">LP</option>
                <option value="SC">SC</option>
                <option value="CB">CB</option>
                <option value="BE">BE</option>
                <option value="PA">PA</option>
                <option value="OR">OR</option>
                <option value="PT">PT</option>
                <option value="TJ">TJ</option>
                <option value="CH">CH</option>
                <option value="QR">Sin extensión (QR)</option>
            </select>
            <select id="Complemento" class="input-field" name="Complemento" required>
                <option value="">--Seleccione una opción--</option>
                <option value="Si">Si</option>
                <option value="No">No</option>
            </select>
            <input type="text" class="input-field" id="NumeroCelular" name="NumeroCelular" placeholder="ejemplo: 70512346" required>
            <button type="button" onclick="nextStep()">Siguiente</button>
        </fieldset>

        <fieldset class="step">
            <h2>Paso 2: Datos de la empresa</h2>
            <input type="text" id="DireccionProductiva" class="input-field" name="DireccionProductiva" placeholder="ejemplo: calle pascoe Nro2671 zona 16 de julio" required>
            <select id="DistritoProductiva" class="input-field" name="DistritoProductiva" required>
                <option value="">--Seleccione una opción--</option>
                <option value="Distrito1">Distrito1</option>
                <option value="Distrito2">Distrito2</option>
                <option value="Distrito3">Distrito3</option>
                <option value="Distrito4">Distrito4</option>
                <option value="Distrito5">Distrito5</option>
                <option value="Distrito6">Distrito6</option>
                <option value="Distrito7">Distrito7</option>
                <option value="Distrito8">Distrito8</option>
                <option value="Distrito9">Distrito9</option>
                <option value="Distrito10">Distrito10</option>
                <option value="Distrito11">Distrito11</option>
                <option value="Distrito12">Distrito12</option>
                <option value="Distrito13">Distrito13</option>
                <option value="Distrito14">Distrito14</option>
            </select>
            <select id="Rubro" class="input-field" name="Rubro" required>
                <option value="">--Seleccione una opción--</option>
                <option value="CARPINTERIA">CARPINTERIA</option>
                <option value="METAL MECANICA">METAL MECANICA</option>
                <!-- Agregar más opciones según sea necesario -->
            </select>
            <select id="AsociacionCarpinteros" class="input-field" name="AsociacionCarpinteros" required>
                <option value="">--Seleccione una Asociación--</option>
                <!-- Las opciones se llenarán dinámicamente en función de la selección de Rubro -->
            </select>
            <button type="button" onclick="nextStep()">Siguiente</button>
        </fieldset>

        <fieldset class="step">
            <h2>Paso 3: Datos de Unidad Productiva Artesanal</h2>
            <input type="text" name="producttype" placeholder="Tipo de producto">
            <input type="number" name="quantity" placeholder="Cantidad">
            <button type="button" onclick="nextStep()">Siguiente</button>
        </fieldset>

        <fieldset class="step">
            <h2>Registro completo</h2>
            <p>Gracias por registrar tu información.</p>
            <button type="submit">Finalizar</button>
        </fieldset>
    </form>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let currentStep = 0;
            showStep(currentStep);

            function showStep(n) {
                let steps = document.getElementsByClassName("step");
                if (n < steps.length) {
                    for (let i = 0; i < steps.length; i++) {
                        steps[i].style.display = "none";
                    }
                    steps[n].style.display = "block";
                    let progress = document.getElementById("progress");
                    if (progress) {
                        progress.style.width = ((n + 1) / steps.length) * 100 + "%";
                    }
                }
            }

            function nextStep() {
                let steps = document.getElementsByClassName("step");
                if (currentStep < steps.length - 1) {
                    steps[currentStep].style.display = "none";
                    currentStep++;
                    showStep(currentStep);
                }
            }

            document.getElementById('Rubro').addEventListener('change', function() {
                var selectedRubro = this.value;
                var asociacionSelect = document.getElementById('AsociacionCarpinteros');
                var relevantAssociations = associations[selectedRubro] || [];
                asociacionSelect.innerHTML = '';
                var defaultOption = document.createElement('option');
                defaultOption.value = '';
                defaultOption.textContent = 'Seleccione una asociación';
                asociacionSelect.appendChild(defaultOption);
                relevantAssociations.forEach(function(association) {
                    var option = document.createElement('option');
                    option.value = association;
                    option.textContent = association;
                    asociacionSelect.appendChild(option);
                });
                asociacionSelect.style.display = relevantAssociations.length ? 'block' : 'none';
            });

            document.getElementById("registrationForm").onsubmit = function(event) {
                event.preventDefault();
                alert("Formulario enviado!");
            };

            // Oculta el campo con el ID "AsociacionCarpinteros" con jQuery
            // $("#AsociacionCarpinteros").hide();

            // Corrige el botón "Siguiente" para que llame a la función nextStep()
            $("#registrationForm button[type='button']").click(function() {
                nextStep();
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Escuchar el cambio en el elemento select con id "Rubro"
            $("#Rubro").change(function() {
                // Obtener el valor seleccionado
                var seleccion = $(this).val();

                // Comprobar si se seleccionó "CARPINTERIA"
                if (seleccion === "CARPINTERIA") {
                    // Mostrar el div "#AsociacionCarpinteros" si se seleccionó "CARPINTERIA"
                    $("#AsociacionCarpinteros").show();
                } else {
                    // Ocultar el div "#AsociacionCarpinteros" en otros casos
                    $("#AsociacionCarpinteros").hide();
                }
            });
        });
    </script>
</body>

</html>