@extends('UCN_layout')

@section('content')
<body>
<div class="flex-center title">
    Registrar Actividad de Extension
</div>
<form action="{{route('registrarExtension')}}" >
    <div class="flex-center"><p>Nombre de Actividad : <input type="text" name="nombre"></p></div>
    <div class="flex-center"><p>Localizacion : <input type="text" name="localizacion"></p></div>
    <div class="flex-center"><p>Organizador : <input type="text" name="organizador"></p></div>
    <div class="flex-center"><p>Orador : <input type="text" name="orador"></p></div>
    <div class="flex-center"><p>Fecha : <input type="date" name="fecha"></p></div>
    <div class="flex-center"><p>Cantidad de Asistentes : <input type="number" name="cant_asistentes"></p></div>
    <div class="flex-center"><p>Evidencia : <input type="text" name="evidencia"></p></div>
    <div class="flex-center"><p><button type="submit"> Enviar</button></p></div>
</form>
</body>
</html>
    @endsection