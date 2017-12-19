@extends('menu')

@section('content')
    <div class="alert alert-success">Aqui entrará os dados dos pacientes</div>


    @foreach ($obj_paciente as $value)
        {{$value['nome']}}
    @endfor

    
@endsection
