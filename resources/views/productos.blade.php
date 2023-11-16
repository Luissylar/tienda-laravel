<h1>Productos de la categoría: {{ $categoria->nombre }}</h1>

@foreach($productos as $producto)
    <span>Nombre: <b>{{ $producto->nombre }}</p></b>
    <span>Descripcion: <b>{{ $producto->descripcion }}</p> </b>
    <span>Precio: <b>{{ $producto->precio }}</p></b>
@endforeach

