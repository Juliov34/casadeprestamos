<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Configuración de Seguridad</title>
  <style>
    /* Estilos generales */
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
      padding: 20px;
      margin: 0;
    }

    /* Estilos del encabezado */
    header {
      background-color:  #4CAF50;
      padding: 10px;
      color: #fff;
      text-align: center;
    }

    /* Estilos del pie de página */
    footer {
      background-color:  #4CAF50;
      padding: 10px;
      color: #fff;
      text-align: center;
    }

    /* Estilos del formulario */
    form {
      width: 100%;
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-top: 10px;
      color: #555;
    }

    input, select, textarea {
      width: 100%;
      padding: 5px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
      background-color: #fff;
      color: #333;
    }

    button {
      margin-top: 10px;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <header>
    <h1>Implementación de seguridad y encriptación</h1>
  </header>
<br><br><br><br>
  <form id="security-form">
    <label for="password-strength">Fuerza de Contraseña:</label>
    <select id="password-strength">
      <option value="low">Baja</option>
      <option value="medium">Media</option>
      <option value="high">Alta</option>
    </select>
    
    <label for="session-expiration">Expiración de Sesión:</label>
    <input type="number" id="session-expiration" min="1" max="24" step="1" placeholder="Horas">
    
    <label for="firewall-config">Configuración de Firewall:</label>
    <textarea id="firewall-config" rows="5" placeholder="Configuración de Firewall"></textarea>
    
    <label for="encryption-algorithm">Algoritmo de Encriptación:</label>
    <select id="encryption-algorithm">
      <option value="aes">AES</option>
      <option value="3des">Triple DES</option>
      <option value="rsa">RSA</option>
    </select>
    
    <label for="backup-frequency">Frecuencia de Copias de Seguridad:</label>
    <input type="number" id="backup-frequency" min="1" max="365" step="1" placeholder="Días">
    
    <label for="two-factor-authentication">Autenticación de Dos Factores:</label>
    <select id="two-factor-authentication">
      <option value="enabled">Habilitada</option>
      <option value="disabled">Deshabilitada</option>
    </select>
    
    <label for="intrusion-detection">Detección de Intrusiones:</label>
    <select id="intrusion-detection">
      <option value="enabled">Habilitada</option>
      <option value="disabled">Deshabilitada</option>
    </select>
    
    <button type="submit">Guardar Configuración</button>
  </form>
<br><br><br><br><br><br>
  <footer>
    &copy; 2023 Todos los derechos reservados
  </footer>

  <script>
    document.getElementById("security-form").addEventListener("submit", function(event) {
      event.preventDefault();
  
      // Obtener los valores del formulario
      var passwordStrength = document.getElementById("password-strength").value;
      var sessionExpiration = document.getElementById("session-expiration").value;
      var firewallConfig = document.getElementById("firewall-config").value;
      var encryptionAlgorithm = document.getElementById("encryption-algorithm").value;
      var backupFrequency = document.getElementById("backup-frequency").value;
      var twoFactorAuthentication = document.getElementById("two-factor-authentication").value;
      var intrusionDetection = document.getElementById("intrusion-detection").value;
  
      // Realizar acciones con los valores obtenidos
      // Por ejemplo, enviar los datos al servidor para su procesamiento
  
      // Luego de procesar los datos, puedes mostrar un mensaje de éxito
      alert("Configuración guardada con éxito");
    });
  </script>
</body>
</html>
