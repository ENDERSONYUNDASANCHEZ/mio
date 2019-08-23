hola soy create
<form action="{{ url('/empleado')}}" method="post">
{{ csrf_field() }}
<label for="Nombre">{{'Nombre'}}</label>
<input type="text" name="Nombre" id="Nombre">

<input type="submit" value="Agregar">
</form>
