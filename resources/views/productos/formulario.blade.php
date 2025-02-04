@extends('layout.plantilla')

@section('contenido')
    <h1>Crear un nuevo producto</h1>

    <form method="post" action="{{ route('productos.store') }}">
        @csrf
        <div class="row g-3" >
            <div class="col-md-5">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="codigo" placeholder="Código" name="codigo">
                    <label for="codigo">Código</label>
                </div>
            </div>
            <div class="col-md-7">
                <div class="form-floating">
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
                    <label for="nombre">Nombre de producto</label>
                </div>
            </div>


        </div>

        <div class="row g-3">
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="compra" placeholder="Precio de Compra" name="precio_compra">
                    <label for="compra">Precio de compra</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="venta" placeholder="Precio de venta" name="precio_venta">
                    <label for="venta">Precio de venta</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating">
                    <select class="form-select" id="proveedor" aria-label="Floating label select example" name="proveedor_id">
                        <option selected>Seleccione el proveedor</option>
                        @forelse($proveedores as $proveedor)
                            <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                        @empty
                            <option value="0">No hay proveedores</option>
                        @endforelse
                    </select>
                    <label for="proveedor">Proveedor</label>
                </div>
            </div>

        </div>

        <input class="btn btn-primary" type="submit" value="Guardar">
        <input class="btn btn-danger" type="reset" value="Limpiar">




    </form>


@endsection
