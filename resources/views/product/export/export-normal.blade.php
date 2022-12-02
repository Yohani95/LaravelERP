<table id="" class="">
    <thead class="thead">
        <tr>
            <th>N°</th>
            
            <th>Nombre</th>
            <th>Código</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Usuario</th>
            <th>Bodega</th>
            <th>Categoría</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->code }}</td>
                <td>{{ $product->count }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->user->name }}</td>
                <td>{{ $product->cellar->name }}</td>
                <td>{{ $product->subCategory->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>