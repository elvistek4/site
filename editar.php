

<label>Año:</label>
<input type="number" name="anio" id="anio" min="1980" max="2050" value="<?= $videojuego['anio'] ?>" required>


<button type="submit" class="btn-editar">Actualizar</button>
</form>


<script>
// JS #3 - Validación adicional para edición
function validarEdicion() {
let anio = document.getElementById('anio').value;
if (anio < 1980 || anio > 2050) {
alert('El año debe estar entre 1980 y 2050');
return false;
}
return true;
}
</script>
</body>
</html>