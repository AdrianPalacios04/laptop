
@foreach ($reclamo as $reclamos)
<div class="modal fade" id="exampleModal{{$reclamos->id_reclamaciones}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            {{-- <p><b>ID : </b><span>{{$reclamos->i_id}}</span></p> --}}
            <p><b style="font-weight: bold" >Pedido : </b><span >{{$reclamos->pedido}}</span></p>
            <p><b  style="font-weight: bold">Detalle : </b><span >{{$reclamos->detalle}}</span></p>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
    </div>
</div>
    
@endforeach
