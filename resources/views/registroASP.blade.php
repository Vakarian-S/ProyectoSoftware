@extends('UCN_layout')

@section('content')
<body>
<div class="flex-center title">
    Registrar Actividad de Aprendisaje + Servicios
</div>
<form action="{{route('registrarASP')}}" >
    <div class="flex-center"><p>Nombre  : <input type="text" name="nombre"></p></div>
    <div class="flex-center"><p>Asignatura : <input type="text" name="asignatura"></p></div>
    <div class="flex-center"><p>Profesor : <input type="text" name="profesor"></p></div>
    <div class="flex-center"><p>Periodo : <input type="text" name="periodo"></p></div>
    <div class="flex-center"><p>Cantidad de Estudiantes : <input type="number" name="cant_estudiantes"></p></div>
    <div class="flex-center"><p>Socio comunitario : <input type="text" name="nombreSocio"></p></div>
    <div class="flex-center"><p>Evidencia : <input type="text" name="evidencia"></p></div>
    <div class="flex-center"><p><button type="submit"> Enviar</button></p></div>
</form>
</body>
</html>
    @endsection