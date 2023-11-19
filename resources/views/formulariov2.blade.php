<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Formulario de Registro del Artesano(a)</title>
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
    </style>
</head>

<body>

    <form id="registrationForm">
        <div id="progressBar">
            <div id="progress"></div>
        </div>

        <fieldset class="step">
            <h2>Paso 1: Datos personales</h2>
            <label for="name">¿Cuál es su(s) Nombre(s)?:</label>
            <input type="text" class="input-field" id="name" name="name" placeholder="ejemplo: Juan Carlos" required>

            <label for="ApellidoPaterno">¿Cuál es su Apellido Paterno?</label>
            <input type="text" class="input-field" id="ApellidoPaterno" name="ApellidoPaterno" placeholder="ejemplo: Perez" required>

            <label for="ApellidoMaterno">¿Cuál es su Apellido Materno?</label>
            <input type="text" class="input-field" id="ApellidoMaterno" name="ApellidoMaterno" placeholder="ejemplo: Morales" required>

            <label for="FechaNacimiento">¿Cuál es su fecha de Nacimiento?</label>
            <input type="date" class="input-field" id="FechaNacimiento" name="FechaNacimiento" required>

            <label for="Genero">¿Cuál es su Género?</label>
            <select id="Genero" class="input-field" name="Genero" required>
                <option value="">--Seleccione una opción--</option>
                <option value="Hombre">Hombre</option>
                <option value="Mujer">Mujer</option>
            </select>

            <label for="DireccionArtesano">¿Cuál es su dirección de su Domicilio actual en la ciudad del ALTO?</label>
            <input type="text" id="DireccionArtesano" class="input-field" name="DireccionArtesano" placeholder="ejemplo: calle eulert No 1205 Zona 16 de Julio" required>

            <label for="CI">¿Cuál es su numero de Cedula de Identidad? (CI)</label>
            <input type="text" id="CI" class="input-field" name="CI" placeholder="ejemplo: 2235678" required>

            <label for="CIExt">¿Cuál es la ciudad de emisión de tu Cédula de Identidad?</label>
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

            <label for="Complemento">¿Tu Célula de Identidad tiene Complemento?</label>
            <select id="Complemento" class="input-field" name="Complemento" required>
                <option value="">--Seleccione una opción--</option>
                <option value="Si">Si</option>
                <option value="No">No</option>
            </select>

            <label for="NumeroCelular">¿Cuál es su Numero de Celular?:</label>
            <input type="text" class="input-field" id="NumeroCelular" name="NumeroCelular" placeholder="ejemplo: 70512346" required>

            <button type="button" onclick="nextStep()">Siguiente</button>
        </fieldset>

        <!-- Paso 2: Datos de la empresa -->
        <fieldset class="step">
            <h2>Paso 2: Datos de la empresa</h2>
            <label for="DireccionProductiva">¿Cuál es la dirección de la Unidad Productiva Artesanal a la que pertenece?</label>
            <input type="text" id="DireccionProductiva" class="input-field" name="DireccionProductiva" placeholder="ejemplo: calle pascoe Nro2671 zona 16 de julio" required>

            <label for="DistritoProductiva">¿A qué Distrito Pertenece su Unidad Productiva Artesanal?</label>
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

            <label for="Rubro">¿A qué Rubro Pertenece?</label>
            <select id="Rubro" class="input-field" name="Rubro" required>
                <option value="">--Seleccione un Rubro--</option>
                <option value="CARPINTERIA">CARPINTERIA</option>
                <option value="METAL MECANICA">METAL MECANICA</option>
                <option value="ALASITAS PRODUCTOS EN MINIATURA">ALASITAS PRODUCTOS EN MINIATURA</option>
                <option value="ZAPATEROS">ZAPATEROS</option>
                <option value="FLORICULTORES">FLORICULTORES</option>
                <option value="ARTESANIA EN ARTE POPULAR">ARTESANIA EN ARTE POPULAR</option>
                <option value="PELUQUEROS">PELUQUEROS</option>
                <option value="ORFEBRES Y RELOJEROS">ORFEBRES Y RELOJEROS</option>
                <option value="FOTOGRAFOS">FOTOGRAFOS</option>
                <option value="ARTESANIA EN COTILLONES ">ARTESANIA EN COTILLONES </option>
                <option value="BORDADORES">BORDADORES</option>
                <option value="ARREGLOS FLORALES">ARREGLOS FLORALES</option>
                <option value="DIFERENTES RUBROS">DIFERENTES RUBROS</option>
                <option value="MODELAJE DE CHOLITAS Y ARTESANIAS DE DIFERTENTES RUBROS ">MODELAJE DE CHOLITAS Y ARTESANIAS DE DIFERTENTES RUBROS </option>
                <option value="ARTESANIA CULINARIA Y ARTESANIA  EN ARTE POPULAR ">ARTESANIA CULINARIA Y ARTESANIA EN ARTE POPULAR </option>
            </select>

            <label for="Asociacion">¿A qué Asociación Pertenece?</label>
            <select id="Asociacion" class="input-field" name="Asociacion" required>
                <option value="">--Seleccione una Asociación--</option>
            </select>

            <button type="button" onclick="nextStep()">Siguiente</button>
        </fieldset>

        <!-- Paso 3: Datos de producción -->
        <fieldset class="step">
            <h2>Paso 3: Datos de Unidad Productiva Artesanal</h2>
            <input type="text" name="producttype" placeholder="Tipo de producto">
            <input type="number" name="quantity" placeholder="Cantidad">
            <!-- Más campos según necesites -->
            <button type="button" onclick="nextStep()">Siguiente</button>
        </fieldset>

        <!-- Paso 4: Agradecimiento -->
        <fieldset class="step">
            <h2>Registro completo</h2>
            <p>Gracias por registrar tu información.</p>
            <button type="submit">Finalizar</button>
        </fieldset>
    </form>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize the current step
            let currentStep = 0;
            showStep(currentStep); // Show the first step

            // Function to display the current step
            function showStep(n) {
                // Get all elements with the class "step"
                let steps = document.getElementsByClassName("step");
                // Ensure the step index is within bounds
                if (n < steps.length) {
                    // Hide all steps
                    for (let i = 0; i < steps.length; i++) {
                        steps[i].style.display = "none";
                    }
                    // Show the current step
                    steps[n].style.display = "block";
                    // Update the progress bar width
                    let progress = document.getElementById("progress");
                    if (progress) {
                        progress.style.width = ((n + 1) / steps.length) * 100 + "%";
                    }
                }
            }

            // Function to advance to the next step
            function nextStep() {
                // Get all elements with the class "step"
                let steps = document.getElementsByClassName("step");
                // Check if currentStep is not the last step
                if (currentStep < steps.length - 1) {
                    // Hide the current step
                    steps[currentStep].style.display = "none";
                    // Increment the currentStep
                    currentStep++;
                    // Show the next step
                    showStep(currentStep);
                }
            }

            // Attach the form submission event handler
            document.getElementById("registrationForm").onsubmit = function(event) {
                event.preventDefault(); // Prevent the default form submission
                // Logic to handle form submission
                alert("Formulario enviado!");
            };

            // Expose the nextStep function to the global scope so it can be called from HTML
            window.nextStep = nextStep;

            // Hide the element with ID "AsociacionCarpinteros"
            $("#AsociacionCarpinteros").hide();

            // Code for dynamic dropdown starts here
            const asociaciones = {
                CARPINTERIA: [
                    "ASOCIACION DE CARPINTEROS 19 DE MARZO",
                    "ASOCIACION DE ARTESANOS CARPINTEROS Y RAMAS ANEXAS CIUDAD SATELITE",
                    "ASOCIACION DE CARPINTEROS 30 DE MAYO",
                    "ASOCIACION DE CARPINTEROS PACAJES CALUJO",
                    "ASOCIACION DE CARPINTEROS Y VARIOS SAN JUAN",
                    "ASOCIACION DE CARPINTEROS SAN CRIPIN",
                    "ASOCIACION DE ARTESANOS EN MUEBLES VARIOS Y TAPICEROS 26 DE MAYO",
                    "ASOCIACION DE TAPICEROS 30 DE JUNIO",
                    "ASOCIACION DE CARPINTEROS MIXTOS SAN JOSE",
                    "ASOCIACION DE CARPINTEROS Y ARTESANOS 16 DE MARZO",
                    "ASOCIACION DE CARPINTEROS Y ARTESANOS CENTRAL CENTRAL 16 DE JULIO",
                    "ASOCIACION DE CARPINTEOS ARTESANOS MIXTOS 8 DE DICIEMBRE",
                    "ASOCIACION DE CARPINTEROS EL NORTE SAN ROQUE A.C.S.M.E.N.S.A.R.",
                    "ASOCIACION DE CARPINTEROS NUEVA ALIANZA",
                    "ASOCIACION DE CARPINTEROS PERIFERICA",
                    "ASOCIACION DE CARPINTEROS EX TRANCA CENTRAL RIO SECO"
                ],
                "METAL MECANICA": [
                    "ASOCIACION (AS.A.PRO. M.M.)",
                    "ASOCIACION (METAL SUR)",
                    "ASOCIACION (ASAPROGAL)",
                    "ASOCIACION (APSDI)",
                    "ASOCIACION (A.T.M.M.R.A)",
                    "ASOCIACION (AMAPROHAL)",
                    "ASOCIACION (ASTRAMET-D8)",
                    "ASOCIACION (ASPROMMECRA)",
                    "ASOCIACION (ADEFAMM)",
                    "ASOCIACION (A.P.E.M.M.)",
                    "ASOCIACION (PROGRESO)",
                    "ASOCIACION (ASPROMETAL- SUR)",
                    "ASOCIACION (PROCIS)",
                ],
                "ALASITAS PRODUCTOS EN MINIATURA": [
                    "ASOCIACION SECTOR BILLETE",
                    "ASOCIACION DE ARTESANOS SECTOR YESO VILLA DOLORES",
                    "ASOCIACION SECTOR MINIATURA MIXTO SATELITE",
                    "ASOCIACION SECTOR YESO SATELITE",
                    "ASOCIACION (PANTAS ALAMOS)",
                    "ASOCIACION (24 DE ENERO) CENTRAL DOLORES MIXTOS APIS",
                    "ASOCIACION (JUEGO CRUZ DEL SUR)",
                    "ASOCIACION (COMIDA SABOR ANDINO)",
                    "ASOCIOCION (JUANA AZURDUY DE PADILLA)",
                    "ASOCIACION (14 DE SEPTIEMBREYESO MINIATIRA)",
                    "ASOCIACION MIXTO ANTOFAGASTA",
                    "ASOCIACION COMIDA Y REFRIGIRIO BOLIVIA",
                    "ASOCIACION JUEGOS DINAMICOS",
                    "ASOCIACION JUEGOS POPULARES Y RECREATIVOS VIAJEROS 24 DE ENERO",
                    "ASOCIACION DE ARTESANOS EXPOSITORES EN FERIA ANUAL 24 DE ENERO",
                    "ASOCIACION DE FERIAS DE ALASITAS VIRGEN DE CANDELARIA",
                    "ASOCIACION DE ARTESANOS EN JUEGOS RECREATIVOS YESO MINIATURA Y VARIOS PLAZA DE LA CRUZ",
                    "ASOCIACION DE ARTESANOS PRODUCTORES EN MINIATURAS A VARIEDADES ALASITA VILLA CALUYO D3",
                    "ASOCIACION BILLETES Y FRUTAS SECAS",
                    "SECTOR YESO",
                    "SECTOR MINIATURA",
                    "SECTOR JUEGOS POPULARES",
                    "SECTOR FUTBOLINES",
                    "SECTO API Y CAFÉ",
                    "ASOCIACION DE FLORICULTORES  2 CLAVELES",
                    "SECTOR COMIDA",
                    "SECTOR JUEGOS RECREATIVOS METALMECANICA",
                    "SECTOR 23 DE ENERO",
                    "SECTOR BALLIVIAN",
                ],
                "ZAPATEROS": [
                    "ASOCIACION NORTE",
                    "ASOCIACION CENTRAL CEJA",
                    "ASOCIACION SUR SAN CRISPIN",
                    "ASOCIACION SUD OESTE",
                    "ASOCIACION NOR ESTE “ RIO SECO” ",
                    "ASOCIACION MACHAK SARTAWI",
                    "ASOCIACION UNION ALIANZA LIMA",
                    "ASOCIACION 1RO DE MAYO SAN ROQUE",
                    "ASOCIACION UNION LOS ANDES",

                ],
                "FLORICULTORES": [
                    "ASOCIACION DE ARTESANOS FLORICULTORES KANTUTA",
                    "ASOCIACION DE PRODUCTORES DE PLANTAS “LAS ROSAS” ",
                    "ASOCIACION DE PRODUCTORES EN HORTICULTURA EL PORVENIR",
                    "ASOCIACION ETERNA PRIMAVERA",
                    "ASOCIACION  PODER MAGICO",
                    "ASOCIACION  PRODUCTORES EN PLANTAS “ROSACEAS”",
                ],
                "ARTESANIA EN ARTE POPULAR": [
                    "ASOCIACION MIXTA DE ARTESANOS PRODUCTORES WARA WARA",
                    "ASOCIACION 3 DE MAYO REGALOS",
                    "ASOCIACION 27 DE MAYO CONFECCION DE POLLERAS",
                    "ASOCIACION DE ARTESANOS  EN POLLERAS Y VARIOS EL ALTO",
                    "ASOCIACION DE ARTESANOS PRODUCTORES MIXTOS LIRAWISA",
                    "ASOCIACION ARTESANOS PRODUCTORES EN SOMBREROS RENASER",
                    "ASOCIACION DE ARTESANOS PRODUCTORES EN VARIEDADES PACHAMAMA",
                    "ASOCIACION CRUZ ANDINA",
                    "ASOCIACION ASOMOD Y MODISTAS ",

                ],
                "PELUQUEROS": [
                    "ASOCIACION MIXTA DE PELUQUEROS ESTETICA TIHUANACU",
                    "ASOCIACION PELUQUEROS Y PEINADORAS NUEVOS  AMANECER",
                    "ASOCIACION DE PELUQUEROS PEINADOS RAMASANEXAS BALLIVIAN",
                    "ASOCIACION DE PELUQUEROS PEINADOS 18 DE OCTUBRE SENKATA",
                    "ASOCIACIACION DE PELUQUEROS Y PEINADORAS EL ALTO",
                ],
                "ORFEBRES Y RELOJEROS": [
                    "ASOCIACION UMORA CENTRAL CEJA ",
                    "ASOCIACION UMORA “SUR”",
                    "ASOCIACION AMORS",
                    "ASOCIACION UMORA NORTE",
                    "ASOCIACION AMORBA",
                ],
                "FOTOGRAFOS": [
                    "ASOCIACION UNION MIXTO DE FOTOGRAFOS DE LA PAZ “UMFALP”",
                    "ASOCIACION DE FOTOGRAFOS PROFESIONAL 20DE OCTUBRE",
                    "ASOCIACION DE FOTOGRAFOS DE LA CIUDAD DE EL ALTO, LA PAZ “AFCAL”",
                    "ASOCIACION TRABAJADORAS EN ARTE FOTOGRAFICO “ATAF”",
                    "ASOCIACION DE CIRCULO  FOTOGRAFOS  ASOCIADOS EL ALTO “CFAE”",
                    "ASOCIACION INTEGRAL DE FOTOGRAFOS “QHANA R.A.DOTAL.",
                ],
                "ARTESANIA EN COTILLONES": [
                    "prueba",
                ],
                "BORDADORES": [
                    "ASOCIACION MIXTA DE BORDADORES AUTODIDACTAS EN ARTE FOLCLORICO",
                ],
                "ARREGLOS FLORALES": [
                    "ASOCIACION “PRIMAVERA”",
                ],
                "DIFERENTES RUBROS": [
                    "ASOCIACION ARTESANOS “VIRGEN DE URKUPIÑA",
                    "ASOCICION DE ARTESANOS EN DIFERENTES RUBROS  DE LA CIUDAD DE EL ALTO",
                ],
                "MODELAJE DE CHOLITAS Y ARTESANIAS DE DIFERTENTES RUBROS": [
                    "CENTRO CULTURAL CHOLITA PÀCEÑA ALTEÑA WUMA  WARMI",
                ],
                "ARTESANIA CULINARIA Y ARTESANIA  EN ARTE POPULAR ": [
                    "COMUNIDAD INDIGENA “ALTO MILLUNI” DISTRITO 13",
                ],
            };

            // Function to update Asociacion options
            function updateAsociacionOptions() {
                const rubro = document.getElementById('Rubro').value;
                const asociacionSelect = document.getElementById('Asociacion');

                // Clear current options
                asociacionSelect.innerHTML = '';

                // Add a default option
                const defaultOption = document.createElement('option');
                defaultOption.value = '';
                defaultOption.textContent = '--Seleccione una opción--';
                asociacionSelect.appendChild(defaultOption);

                // Add new options based on the selected Rubro
                const asociacionOptions = asociaciones[rubro] || [];
                asociacionOptions.forEach(asociacion => {
                    const option = document.createElement('option');
                    option.value = asociacion;
                    option.textContent = asociacion;
                    asociacionSelect.appendChild(option);
                });
            }

            // Event listener for Rubro dropdown changes
            document.getElementById('Rubro').addEventListener('change', updateAsociacionOptions);
        });
    </script>
</body>

</html>