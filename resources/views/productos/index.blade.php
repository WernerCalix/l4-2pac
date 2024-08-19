@extends("layout.plantilla")

@section('contenido')
    <h1>Lista de productos <a class="btn btn-primary" href="{{ route('productos.create') }}">Nuevo</a> </h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio de Compra</th>
            <th scope="col">Precio de Venta</th>
        </tr>
        </thead>
        <tbody>

        @foreach($productos as $producto)
            <tr>
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->codigo }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->precio_compra }}</td>
                <td>{{ $producto->precio_venta }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>

    {{ $productos->links() }}

@endsection
