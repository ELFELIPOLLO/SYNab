<html>
<head>
	<title>Login</title>
  <script src="../js/scriptlogin.js"></script>
</head>
<body style="background-color: #FFFAD7">
  <link rel="stylesheet" type="text/css" href="../css/reporte.css">

  
  <img class="img1" src="../img/img1.png">
  <img class="img2" src="../img/img2.png">
  <img class="img3" src="../img/img3.png">
  <img class="img4" src="../img/img4.png">

  <div class="principal">
  <br>
    <center><div class="saludo">
      <b>Crea una cuenta</b>
    </div></center><br>
    ALUMNO A REPORTAR <br>
    <input type="text" id="TxtAlumno" class="textbox" readonly><br><br>

    RAZÓN <br>
    <div class="seleccionador">
        <table>
            <tr>
                <td><label><input type="checkbox" id="opcion1" value="opcion1"> Asistencia</label></td>
                <td><label><input type="checkbox" id="opcion2" value="opcion2"> Comportamiento</label></td>
            </tr>
            <tr>
                <td><label><input type="checkbox" id="opcion3" value="opcion3"> Entrega de trabajos</label></td>
                <td><label><input type="checkbox" id="opcion4" value="opcion4"> Salud</label></td>
            </tr>
            <tr>
                <td><label><input type="checkbox" id="opcion5" value="opcion5"> Otro</label></td>
                
            </tr>
        </table>
    </div><br>

    JUSTIFICA LA RAZÓN <br>
    <textarea id="TxtJustifica" class="textarea"></textarea><br>
    <a href="" style="font-size:14">Ya tengo una cuenta</a>
  </div>
  <div class="botones">
    <button class="regresar">Regresar</button>
    <button class="reportar">Reportar</button>
  </div>

</body>
</html>