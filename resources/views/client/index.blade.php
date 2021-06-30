@extends('layouts.panel')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row justify-content-end">
            <div class="col">
                <h3 class="mb-0">Clientes Creados</h3>
            </div>
        </div>
    </div>
        {{-- <label class="custom-toggle">
            <input type="checkbox" class="toggle-class"  
            data-toggle="toggle" data-style="slow" >
            <span class="custom-toggle-slider rounded-circle"></span>
        </label> --}}
    <div class="card-body">
        <div class="table-responsive">
            <!-- Projects table -->
            <table class="table table-striped" id="usuarios">
                <thead>
                    <tr>
                   <th></th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Nombre </th>
                    <th scope="col">DNI</th>
                    <th scope="col">Celular</th>
                    @if (auth()->user()->role == 'adminusuario')  
                    <th></th>
                    @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($client as $clients)
                    <tr>
                        <th scope="row">
                            <button type="button" class="btn btn-sm" data-toggle="modal" 
                                data-target="#exampleModal{{$clients->i_idusuario}}" >
                                <i class="fa fa-search-plus" aria-hidden="true"></i></button>
                        </th>
                        <th scope="row">
                            {{$clients->t_username}}
                        </th>
                        {{-- <th scope="row">
                            {{$clients->b_acepto}}
                        </th> --}}
                        <td>
                            {{$clients->persona->t_apellidoper}}
                        </td>
                        <td>
                            {{$clients->persona->t_nombreper}}
                        </td>
                        <td>
                            {{$clients->t_correoper}}
                        </td>
                        <td>
                            {{$clients->n_celular}}
                        </td>
                        @if (auth()->user()->role == 'adminusuario')
                        <td>
                            <form action="{{url('/users/'.$clients->i_idusuario)}}" method="post">
                            @csrf
                            {{-- @method('DELETE') --}}
                            <a href="{{url('/users/'.$clients->i_idusuario.'/edit')}}" class="btn btn-sm btn-primary">Editar</a>
                            {{-- <button class="btn btn-sm btn-danger" type="submit">Eliminar</button> --}}
                            </form>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            @include('client.modal')
            
        </div>
        <div class="d-flex justify-content-center">
            {{ $client->links() }}
        </div> 
    </div>
    
</div>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
<script>
    $('#usuarios').DataTable({
        responsive:true,
        autoWidth:false,
        "ordering":false,
        "lengthChange": false,
        "paging":false,

        "language":{
            "lengthMenu":"Mostrar _MENU_ registros por página",
            "zeroRecords":"Nada encontrado",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty":"No hay registro",
            "infoFiltered":"(filtrado de _MAX_ registros totales)",
            "search":"Buscar:",
            "paginate":{
                "next":">",
                "previous":"<"
            }

        }

    });
</script>
<script>
    $('.toggle-class').change(function() {
        var b_acepto = $(this).prop('checked') == true ? 1:0;
        alert(b_acepto);
        $.ajax({
            type:'GET',
            dataType:'JSON',
            url: '{{route('changeStatus')}}',
            data:{
                'b_acepto':b_acepto ,
            },
            // done:function(data){

            // }
        });
    });
</script>
@endsection
