<table id="" class="">
    <thead class="thead bolded">
        <tr>
            
            <th><strong> Nombre</strong></th>
            <th><strong>Código</strong></th>
            <th><strong>Cantidad</strong></th>
            <th><strong>Precio</strong></th>
            <th><strong>Usuario</strong></th>
            <th><strong>Bodega</strong></th>
            <th><strong>Categoría</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
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