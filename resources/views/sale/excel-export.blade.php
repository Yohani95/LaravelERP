<table id="table-index" class="table table-striped table-hover">
    <thead class="thead">
        <tr class="bolded">
            <th>ID</th>
            
            <th>Description</th>
            <th>Iva</th>
            <th>Total</th>
            <th>Neto</th>
            <th>Type Document</th>
            <th>Discount</th>
            <th>Status Id</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sales as $sale)
            <tr>
                <td>{{ $sale->id }}</td>
                
                <td>{{ $sale->description }}</td>
                <td>{{ $sale->iva }}</td>
                <td>{{ $sale->total }}</td>
                <td>{{ $sale->neto }}</td>
                <td>{{ $sale->type_document }}</td>
                <td>{{ $sale->discount }}</td>
                <td>{{ $sale->status->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>