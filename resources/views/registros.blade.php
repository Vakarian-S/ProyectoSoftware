@extends('UCN_layout')

@section('content')
<body>

<div class="title flex-center m-b-md">
    <font color="333333">Registros<font>
</div>
<div>
    <p align="center"><a href="{{route('registroConvenio')}}"><font size=7 > Registrar Convenios de Colaboracion </font></a></p>
</div>
<div>
    <p align="center"><a href="{{route('registroASP')}}"><font size=7 > Registrar  Actividad de Aprendisaje + Servicios</font></a></p>
</div>
<div>
    <p align="center"><a href="{{route('registroExtension')}}"><font size=7 > Registrar Actividad de Extencion </font></a></p>
</div>

</body>
</html>
    @endsection