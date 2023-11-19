<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario Completo</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    padding: 20px;
  }

  form {
    background-color: #fff;
    padding: 20px;
    max-width: 500px;
    margin: 30px auto;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  label {
    display: block;
    margin-top: 20px;
    margin-bottom: 10px;
  }

  input[type="text"],
  input[type="email"],
  input[type="date"],
  select, /* Agregado select aquí */
  textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  button {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    display: block;
    width: 100%;
  }

  button:hover {
    background-color: #0056b3;
  }
</style>
</head>
<body>

<form id="myForm">
  <label for="name">¿Cuál es su(s) Nombre(s)?:</label>
  <input type="text" id="name" name="name" placeholder="ejemplo: Juan Carlos" required>

  <label for="ApellidoPaterno">¿Cuál es su Apellido Paterno?</label>
  <input type="text" id="ApellidoPaterno" name="ApellidoPaterno" placeholder="ejemplo: Perez" required>

  <label for="ApellidoMaterno">¿Cuál es su Apellido Materno?</label>
  <input type="text" id="ApellidoMaterno" name="ApellidoMaterno" placeholder="ejemplo: Morales" required>
  
  <label for="FechaNacimiento">¿Cuál es su fecha de Nacimiento?</label>
  <input type="date" id="FechaNacimiento" name="FechaNacimiento" required>

  <label for="Genero">¿Cuál es su Género?</label>
  <select id="Genero" name="Genero" required>
  <option value="">--Seleccione una opción--</option>
  <option value="Hombre">Hombre</option>
  <option value="Mujer">Mujer</option>
  </select>

  <label for="DireccionArtesano">¿Cuál es su dirección de su Domicilio actual en la ciudad del ALTO?</label>
  <input type="text" id="DireccionArtesano" name="DireccionArtesano" placeholder="ejemplo: calle eulert No 1205 Zona 16 de Julio" required>

  <label for="CI">¿Cuál es su numero de Cedula de Identidad? (CI)</label>
  <input type="text" id="CI" name="CI" placeholder="ejemplo: 2235678" required>

  <label for="CIExt">¿Cuál es la ciudad de emisión de tu Cédula de Identidad?</label>
  <select id="CIExt" name="CIExt" required>
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
  <select id="Complemento" name="Complemento" required>
  <option value="">--Seleccione una opción--</option>
  <option value="Si">Si</option>
  <option value="No">No</option>
  </select>

  <label for="NumeroCelular">¿Cuál es su Numero de Celular?:</label>
  <input type="text" id="NumeroCelular" name="NumeroCelular" placeholder="ejemplo: 70512346" required>

  <label for="DireccionProductiva">¿Cuál es la dirección de la Unidad Productiva Artesanal a la que pertenece?</label>
  <input type="text" id="DireccionProductiva" name="DireccionProductiva" placeholder="ejemplo: calle pascoe Nro2671 zona 16 de julio" required>

  <label for="DistritoProductiva">¿A qué Distrito Pertenece su Unidad Productiva Artesanal?</label>
<select id="DistritoProductiva" name="DistritoProductiva" required>
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

  <label for="email">Correo electrónico:</label>
  <input type="email" id="email" name="email" placeholder="ejemplo: tuemail@example.com" required>

  <label for="message">Mensaje:</label>
  <textarea id="message" name="message" placeholder="Escribe tu mensaje aquí" required></textarea>

  <button type="submit">Enviar</button>
</form>

<script>
  document.getElementById('myForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Previene el envío del formulario

    // Aquí podrías incluir el código para procesar el formulario
    // Como por ejemplo, validar los datos y enviarlos a un servidor
    console.log('Formulario enviado');
  });
</script>

</body>
</html>

<script>
  document.getElementById('myForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Previenen el envío del formulario

    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;

    alert('Nombre: ' + name + '\nEmail: ' + email + '\nMensaje: ' + message);
  });
</script>

</body>
</html>
