
@extends('layouts.app')

@section('title', 'Proveedor')

@section('content')

<div class="container">
  <div class="col-lg-4 col-md-4 col-sm-4 text-center">
    <a href="proveedores/create" class="btn btn-sm btn-success">NUEVO PROVEEDOR</a>
  </div>
 
  
</div>
<br>
<div class="container">
  <table class="table table-bordered table-condensed tab-articles">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Rubro</th>
        <th>Telefono</th>
        <th>E-mail</th>
        <th>Cuit</th>

      </tr>
    </thead>
    <tbody>
 
     @foreach ($proveedores as $proveedor)
        <tr>
          <td class="text-center">{{$proveedor->nombre}}</td>
          <td class="text-center">{{$proveedor->apellido}}</td>
          <td class="text-center">{{$proveedor->rubro}}</td>
          <td class="text-center">{{$proveedor->telefono}}</td>
           <td class="text-center">{{$proveedor->email}}</td>
            <td class="text-center">{{$proveedor->cuit}}</td>
         
          <td>
 
               {!! Form::open(['method' => 'DELETE', 
                  'route' => ['proveedores.destroy', $proveedor->id]]) !!}
                  <button type="button" class="btn btn-sm btn-danger "data-toggle="modal" data-target="#exampleModal">Eliminar</button>
                  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ALERTA!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Deseas eliminar?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
       <button type="submit" class="btn btn-sm btn-danger" >Eliminar</button>
      </div>
    </div>
  </div>
</div>
                
            {!! Form::close() !!}
          </td>
            <td>
            <button type="submit" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal" >Editar</button>
            </td>
        </tr>

      @endforeach
     
    </tbody>
  </table>
</div>



<script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>

@endsection
