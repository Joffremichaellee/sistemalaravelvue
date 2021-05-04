@extends('contenido.contenido')

    @section('contenido')

    <div class="card-header" style="padding: 0px 0px 18px; font-family: 'Rubik', sans-serif;">
        <a href="{{'categoria/nuevacategoria'}}" type="button" class="btn btn-success button-registrar" style="border-radius:0;">
            <i class="icon-plus"></i>Nueva Categoria
        </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <button type="button" class="btn btn-warning button-importar" style="border-radius:0;">
            <i class="icon-plus"></i>CSV Importar
        </button>

        <button type="button" class="btn btn-outline-warning button-exportar" style="border-radius:0;">
            <i class="icon-plus"></i>CSV Exportar
        </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <button type="button" class="btn btn-danger button-reportar"  style="border-radius:0;">
            <i class="icon-plus"></i>Reportes
        </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    </div>



    <div class="card">
        <div class="card-header" style="background-color: #F7F7F7;">
            <h3 class="card-title" style="font-family: 'Roboto', sans-serif;">Lista de Categoria</h3>
        </div>
              
        <!-- /.card-header -->
        <div class="card-body" style="font-family: 'Rubik', sans-serif;">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Imagen</th>
            </tr>
            </thead>
            <tbody>

                @foreach ($categorias as $categoria)

                    <tr>
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->nombre }}</td>
                        <td>{{ $categoria->descripcion }}</td>
                        <td><img src="{{ $categoria->image }}" height="50" width="50"></td>
                    </tr>

                @endforeach 

            </tbody>
            <tfoot>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Imagen</th>
            </tr>
            </tfoot>
        </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

    @endsection