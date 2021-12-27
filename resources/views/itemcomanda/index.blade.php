@include('layouts.app')
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
<h1 class="text-uppercase">Mostrar la lista de productos</h1>
        </div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nro. Comanda</th>
            <th>Nro. Producto</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($itemcomandas as $itemcomanda)
        <tr class="align-text-bottom">
            <td>{{ $itemcomanda->id }}</td>
            <td>{{ $itemcomanda->idcomanda }}</td>
            <td>{{ $itemcomanda->idproducto }}</td>
            <td>{{ $itemcomanda->precio }}</td>
            <td class="btn-group">
                <a class="btn btn-primary rounded-3 mx-1 border-end border-bottom pt-2" href="{{ route('itemcomanda.edit',$itemcomanda->id) }}">Editar</a>

                <form action="{{ route('itemcomanda.destroy',$itemcomanda->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button class="btn-danger rounded-3 mx-1 p-2" type="submit" onclick="return confirm('¿Quieres borrar?')">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
    </div>
</div>
@include('includes.footer')

