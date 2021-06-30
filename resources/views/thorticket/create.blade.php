@extends('layouts.panel')
@section('content')
<div class="card shadow" >
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Nueva Acertijo </h3>
        </div>
        <div class="col text-right">
            <a href="{{url('ticket')}}" class="btn btn-sm btn-default">
            Cancelar y Volver</a>
        </div>
        </div>
    </div>
    <div class="card-body">
        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach                
                </ul>
            </div>
        @endif
        <form action="{{url('ticket')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <h5>NOMBRE</h5>
                      <input type="text" name="t_nombre" class="form-control" value="{{old('t_nombre')}}" required/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <h5 for="">PISTAS</h5>
                      <input type="text" name="t_nombre" class="form-control" value="{{old('pistas_Ax')}}" required/>
                    </div>
                </div>
            </div>
            <div class="row"> 
                <div class="col-md-6">
                    <div class="form-group">
                        <h5 for="">PREGUNTA N°1</h5>
                      <input type="text" name="t_pregunta1" class="form-control"  value="{{old('t_pregunta1')}}" required/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group" >
                        <h5>RESPUESTA N°1</h5>
                        <input type="text" name="t_respuesta1" class="form-control" value="{{old('t_respuesta1')}}" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <h5 for="">PREGUNTA N°2 </h5>
                      <input type="text" name="t_pregunta2" class="form-control" value="{{old('t_pregunta2')}}" required/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <h5 for="">RESPUESTA N°2</h5>
                      <input type="text" name="t_respuesta2" class="form-control"  value="{{old('t_respuesta2')}}" required/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <h5 for="">PREGUNTA N°3 </h5>
                      <input type="text" name="t_pregunta3" class="form-control" value="{{old('t_pregunta3')}}" required/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <h5 for="">RESPUESTA N°3</h5>
                      <input type="text" name="t_respuesta3" class="form-control"  value="{{old('t_respuesta3')}}" required/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <h5 for="">LLAVE N°1</h5>
                      <input type="text" name="t_llave1" class="form-control" value="{{old('t_llave1')}}" required/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h5 for="">LLAVE N°2</h5>
                      <input type="text" name="t_llave2" class="form-control"  value="{{old('t_llave2')}}" required/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group" >
                        <h5>LLAVE N°3</h5>
                        <input type="text" name="t_llave3" class="form-control" value="{{old('t_llave3')}}" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-default">Guardar</button>
        </form>
    </div>
</div>
@endsection
{{-- <div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Nuevos acertijos</h3>
        </div>
        <div class="col text-right">
            <a href="{{url('ticket')}}" class="btn btn-sm btn-default">
            Cancelar y Volver</a>
        </div>
        </div>
    </div>
    <div class="card-body">
        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach                
                </ul>
            </div>
        @endif
        <form action="{{url('acertijo')}}" method="post">
            @csrf
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                       <th scope="col">Pregunta</th>
                        <th scope="col">Respuesta</th>
                        <th scope="col"><a href="javascript:void(0)" class="btn btn-success addRow">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i></a></th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($workDays as $key => $workDay) --}}
                    {{-- <tr>
                        <td>
                            <div class="row">
                                <div class="col">
                                
                                    <input type="text" name="pregunta[]" class="form-control" >
                                </div>
                            </div>
                        </td>
                        <td>
                        <div class="row">
                            <div class="col">
                                <input type="text" name="respuesta[]" class="form-control">
                            </div>
                        </div>          
                        </td>
                        <th scope="col"><a href="javascript:void(0)" class="btn btn-danger deleteRow"><i class="fa fa-trash" aria-hidden="true"></i></a></th>

                    </tr>
                    {{-- @endforeach --}}
                {{-- </tbody>
               
            </table>
            <button>guardar</button>
        </form>
    </div>
</div>   --}}

@push('scripts')
<script>
        let add;
    $('thead').on('click','.addRow',function() {
         add =  "<tr>"+
                        "<td>"+
                            "<div class='row'>"+
                                "<div class='col'>"+
                                    "<input type='text' name='pregunta[]' class='form-control' >"+
                            " </div>"+
                        " </div>"+
                        "</td>"+
                        "<td>"+
                            "<div class='row'>"+
                                "<div class='col'>"+
                                "<input type='text' name='respuesta[]' class='form-control'>"+
                                "</div>"+
                            " </div>"+          
                        "</td>"+
                         "<th scope='col'><a href='javascript:void(0)' class='btn btn-danger deleteRow'><i class='fa fa-trash' aria-hidden='true'></i></a></th>"+
                    "</tr>"+
         $('tbody').append(add);
    });
    $('tbody').on('click','.deleteRow',function () {
        $(this).parent().parent().remove();
    });
   
</script>
    
@endpush