<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}
td {
  padding: 10px;
}
.rowspan {
  height: 50px;
}
/* Clase para la imagen */
.imagen {
  width: 90px; /* Puedes cambiar esto a tu gusto */
  height: auto;
}

/* Clase para el título */
.titulo {
  font-size: 20px; /* Puedes cambiar esto a tu gusto */
  font-weight: bold;
  text-align: center; /* Centra el texto */

}
.texto {
  font-size: 16px; /* Puedes cambiar esto a tu gusto */
}
.mt{
	margin-top: 10px;
}

</style>
</head>
<body>

<table>
  <tr>
	  <td><img class="imagen" src="{!!$SEDEBAT!!}" alt="Imagen Izquierda"></td>
	  <td colspan="3"><p class="titulo">Servicio Desconcentrado de Administración Tributaria del Estado Táchira</p></td>
	  <td><img class="imagen" src="{!!$gobernacion!!}" alt="Imagen Derecha"></td>
  </tr>
  <tr>
    <td colspan="6">
		<br>
		<p class="texto mt">
			{!!$contenido!!}
		</p>
		<p class="texto">
			{!!$contenido!!}
		</p>
		<p class="texto">
			{!!$contenido!!}
		</p>
	</td>
  </tr>
  <tr>
    <td colspan="6">
		- - - - - - - - - - - - - - - - - - - - - - - -
		- - - - - - - - - - - -
		- - - - - - - - - - - -
		- - - - - - - - - - - -
		- - - - - - - - - - - -

	</td>
  </tr>
  <tr>
    <td colspan="6">
		<img src="{!!$timbre!!}" width="150">

	</td>
  </tr>
</table>

</body>
</html>
