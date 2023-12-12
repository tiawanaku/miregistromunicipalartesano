<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Formulario de Registro</title>
</head>

<body>

    <form id="registrationForm" class="container mt-5" action="/registro" method="post">

        <div id="progressBar" class="progress mb-4">
            <div id="progress" class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <!-- Paso 1: Datos personales -->
        <fieldset class="step mb-4">
            <h2>Paso 1: Datos personales</h2>
            <!-- Name -->
            <div class="mb-3">
                <label for="name" class="form-label">¿Cuál es su(s) Nombre(s)?:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="ejemplo: Carlos" required>
            </div>

            <!-- Surname -->
            <div class="mb-3">
                <label for="ApellidoPaterno" class="form-label">¿Cuál es su Apellido Paterno?</label>
                <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" placeholder="ejemplo: Perez" required>
            </div>

            <!-- Second surname -->
            <div class="mb-3">
                <label for="ApellidoMaterno" class="form-label">¿Cuál es su Apellido Materno?</label>
                <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" placeholder="ejemplo: Morales" required>
            </div>

            <!-- Date of birth -->
            <div class="mb-3">
                <label for="FechaNacimiento" class="form-label">¿Cuál es su fecha de Nacimiento?</label>
                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
            </div>

            <!-- Gender -->
            <div class="mb-3">
                <label for="Genero" class="form-label">¿Cuál es su Género?</label>
                <select id="Genero" class="form-select" name="genero" required>
                    <option value="">--Seleccione una opción--</option>
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                </select>
            </div>

            <!-- Address -->
            <div class="mb-3">
                <label for="DireccionArtesano" class="form-label">¿Cuál es su dirección de su Domicilio actual en la
                    ciudad del ALTO?</label>
                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="ejemplo: calle eulert No 1205 Zona 16 de Julio" required>
            </div>

            <!-- Identity card number -->
            <div class="mb-3">
                <label for="CI" class="form-label">¿Cuál es su numero de Cedula de Identidad? (CI)</label>
                <input type="text" class="form-control" id="ci" name="ci" placeholder="ejemplo: 2235678" required>
            </div>

            <!-- CI Extension -->
            <div class="mb-3">
                <label for="CIExt" class="form-label">¿Cuál es la ciudad de emisión de tu Cédula de Identidad?</label>
                <select id="CIExt" class="form-select" name="ci_ext" required>
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
            </div>

            <!-- CI Complement -->
            <div class="mb-3">
                <label for="Complemento" class="form-label">¿Tu Célula de Identidad tiene Complemento?</label>
                <select id="Complemento" class="form-select" name="ci_complemento" required>
                    <option value="">--Seleccione una opción--</option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>
            <!-- Mobile phone number -->
            <div class="mb-3">
                <label for="NumeroCelular" class="form-label">¿Cuál es su Numero de Celular?:</label>
                <input type="text" class="form-control" id="numero_celular" name="numero_celular" placeholder="ejemplo: 70512346" required>
            </div>

            <button type="button" class="btn btn-primary" onclick="nextStep()">Siguiente</button>
        </fieldset>

        <!-- Paso 2: Datos de su Unidad Productiva -->
        <fieldset class="step mb-4" style="display: none;">
            <h2>Paso 2: Datos de su Unidad Productiva</h2>

            <!-- Address of Productive Unit -->
            <div class="mb-3">
                <label for="DireccionProductiva" class="form-label">¿Cuál es la dirección de la Unidad Productiva
                    Artesanal a la que pertenece?</label>
                <input type="text" class="form-control" id="direccion_productiva" name="direccion_productiva" placeholder="ejemplo: calle pascoe Nro2671 zona 16 de julio" required>
            </div>

            <!-- District -->
            <div class="mb-3">
                <label for="DistritoProductiva" class="form-label">¿A qué Distrito Pertenece su Unidad Productiva
                    Artesanal?</label>
                <select id="distrito_productivo" class="form-select" name="distrito_productivo" required>
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
            </div>

            <!-- Sector -->
            <div class="mb-3">
                <label for="Rubro" class="form-label">¿A qué Rubro Pertenece?</label>
                <select id="Rubro" class="form-select" name="rubro" onchange="updateAsociacionOptions()" required>
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
                    <option value="MODELAJE DE CHOLITAS Y ARTESANIAS DE DIFERTENTES RUBROS ">MODELAJE DE CHOLITAS Y
                        ARTESANIAS DE DIFERTENTES RUBROS </option>
                    <option value="ARTESANIA CULINARIA Y ARTESANIA  EN ARTE POPULAR ">ARTESANIA CULINARIA Y ARTESANIA EN
                        ARTE POPULAR </option>
                </select>
            </div>

            <!-- Association -->
            <div class="mb-3">
                <label for="Asociacion" class="form-label">¿A qué Organización Pertenece?</label>
                <select id="Asociacion" class="form-select" name="asociacion" required>
                    <option value="">--Seleccione una Asociación--</option>
                    <!-- Options can be dynamically loaded here -->
                </select>
            </div>

            <button type="button" class="btn btn-primary" onclick="nextStep()">Siguiente</button>
        </fieldset>


        <!-- Paso 3: Datos de producción -->
        <fieldset class="step mb-4" style="display: none;">
            <h2>Paso 3: Datos de Producción</h2>
            <!-- Main Product -->
            <div class="mb-3">
                <label for="ProductoPrincipal" class="form-label">¿Cual es el principal producto que elabora?</label>
                <input type="text" class="form-control" id="ProductoPrincipal" name="producto_principal" placeholder="Ejemplo: Muebles de Cocina">
            </div>
            <!-- Secondary Product -->
            <div class="mb-3">
                <label for="ProductoSecundario" class="form-label">¿Cual es el segundo producto que elabora?</label>
                <input type="text" class="form-control" id="ProductoSecundario" name="producto_secundario" placeholder="Ejemplo: Chamarras">
            </div>
            <!-- ... -->

            <button type="button" class="btn btn-primary" onclick="nextStep()">Siguiente</button>
        </fieldset>

        <!-- Paso 4: Datos de proreferenciales -->
        <fieldset class="step mb-4" style="display: none;">
            <h2>Paso 4: Datos Referenciales</h2>

            <!-- Licencia de Funcionamiento -->
            <div class="mb-3">
                <label for="Licencia" class="form-label">¿Cuenta con Licencia de Funcionamiento por el GAMEA?</label>
                <select id="Licencia" class="form-select" name="licencia_funcionamiento">
                    <option value="">--Seleccione una Opción--</option>
                    <option value="1">SI</option>
                    <option value="0">NO</option>
                </select>
            </div>

            <!-- Impuestos GAMEA -->
            <div class="mb-3">
                <label for="ImpuestoGamea" class="form-label">¿Qué tipo de Impuestos paga al GAMEA?</label>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="venta" name="impuesto_venta" value="venta">
                    <label for="venta" class="form-check-label">Patente de puesto de venta</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="productiva" name="impuesto_productiva" value="productiva">
                    <label for="productiva" class="form-check-label">Patente de unidad productiva</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="comercio" name="impuesto_comercio" value="comercio">
                    <label for="comercio" class="form-check-label">Patente de Tienda de comercio prod.</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="feria" name="impuesto_feria" value="feria">
                    <label for="feria" class="form-check-label">Patente Temporal de Feria</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="ninguno" name="impuesto_ninguno" value="ninguno">
                    <label for="ninguno" class="form-check-label">Ninguno</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="otro" name="impuesto_otro" value="1"> <!-- Checkbox que, si se marca, sobrescribe el campo oculto con true -->
                </div>
            </div>

            <button type="button" class="btn btn-primary" onclick="nextStep()">Siguiente</button>
        </fieldset>

        <!-- Paso 5: Agradecimiento -->
        <fieldset class="step mb-4" style="display: none;">
            <h2>Registro completo</h2>
            <p>Gracias por registrar tu información.</p>
            <button type="submit" class="btn btn-success">Finalizar</button>
        </fieldset>
    </form>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inicializar el paso actual
            let currentStep = 0;
            showStep(currentStep); // Mostrar el primer paso

            // Función para mostrar el paso actual
            function showStep(n) {
                // Obtener todos los elementos con la clase "step"
                let steps = document.getElementsByClassName("step");
                // Asegurarse de que el índice del paso esté dentro de los límites
                if (n < steps.length) {
                    // Ocultar todos los pasos
                    for (let i = 0; i < steps.length; i++) {
                        steps[i].style.display = "none";
                    }
                    // Mostrar el paso actual
                    steps[n].style.display = "block";
                    // Actualizar el ancho de la barra de progreso
                    let progress = document.getElementById("progress");
                    if (progress) {
                        progress.style.width = ((n + 1) / steps.length) * 100 + "%";
                    }
                }
            }

            // Función para avanzar al siguiente paso
            function nextStep() {
                // Obtener todos los elementos con la clase "step"
                let steps = document.getElementsByClassName("step");
                // Verificar si currentStep no es el último paso
                if (currentStep < steps.length - 1) {
                    // Ocultar el paso actual
                    steps[currentStep].style.display = "none";
                    // Incrementar currentStep
                    currentStep++;
                    // Mostrar el siguiente paso
                    showStep(currentStep);
                }
            }

            // Adjuntar el controlador de eventos de envío del formulario
            //document.getElementById("registrationForm").onsubmit = function(event) {
            //event.preventDefault(); // Prevenir el envío por defecto del formulario
            // Lógica para manejar el envío del formulario
            // alert("¡Formulario enviado!");
            //};

            // Exponer la función nextStep al alcance global para que se pueda llamar desde HTML
            window.nextStep = nextStep;

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

                // Limpiar las opciones actuales
                asociacionSelect.innerHTML = '';

                // Añadir una opción por defecto
                const defaultOption = document.createElement('option');
                defaultOption.value = '';
                defaultOption.textContent = '--Seleccione una opción--';
                asociacionSelect.appendChild(defaultOption);

                // Añadir nuevas opciones basadas en el Rubro seleccionado
                const asociacionOptions = asociaciones[rubro] || [];
                asociacionOptions.forEach(asociacion => {
                    const option = document.createElement('option');
                    option.value = asociacion;
                    option.textContent = asociacion;
                    asociacionSelect.appendChild(option);
                });
            }

            // Controlador de eventos para cambios en el desplegable de Rubro
            document.getElementById('Rubro').addEventListener('change', updateAsociacionOptions);

            // ... (cualquier código adicional)

        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inicializar el paso actual
            let currentStep = 0;
            showStep(currentStep); // Mostrar el primer paso

            // Función para mostrar el paso actual
            function showStep(n) {
                // Obtener todos los elementos con la clase "step"
                let steps = document.getElementsByClassName("step");
                // Asegurarse de que el índice del paso esté dentro de los límites
                if (n < steps.length) {
                    // Ocultar todos los pasos
                    for (let i = 0; i < steps.length; i++) {
                        steps[i].style.display = "none";
                    }
                    // Mostrar el paso actual
                    steps[n].style.display = "block";
                    // Actualizar el ancho de la barra de progreso
                    let progress = document.getElementById("progress");
                    if (progress) {
                        progress.style.width = ((n + 1) / steps.length) * 100 + "%";
                    }
                }
            }

            // Función para avanzar al siguiente paso
            function nextStep() {
                // Obtener todos los elementos con la clase "step"
                let steps = document.getElementsByClassName("step");
                // Verificar si currentStep no es el último paso
                if (currentStep < steps.length - 1) {
                    // Ocultar el paso actual
                    steps[currentStep].style.display = "none";
                    // Incrementar currentStep
                    currentStep++;
                    // Mostrar el siguiente paso
                    showStep(currentStep);
                }
            }

            // Exponer la función nextStep al alcance global para que se pueda llamar desde HTML
            window.nextStep = nextStep;

            // Código para manejar la carga dinámica de las opciones de asociación...
            // ... (código de manejo de las opciones de asociación aquí) ...

            // Establecer un temporizador de 5 minutos (300000 milisegundos)
            setTimeout(function() {
                // Mostrar un mensaje al usuario
                alert('El tiempo para completar este formulario ha expirado. Se reiniciará para que puedas intentarlo de nuevo.');

                // Reiniciar el formulario
                document.getElementById('miFormulario').reset();

                // Opcionalmente, redirigir a otra página o recargar la página actual
                // location.reload(); o window.location.href = 'tu_pagina.html';
            }, 300000); // Ajusta el tiempo según sea necesario
        });
    </script>


</body>

</html>