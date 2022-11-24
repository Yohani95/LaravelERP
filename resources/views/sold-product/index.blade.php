@extends('layouts.app')

@section('template_title')
    Sold Product
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Sold Product') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('sold-products.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Code</th>
										<th>Quantity</th>
										<th>Unit Price</th>
										<th>User Id</th>
										<th>Cellar Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($soldProducts as $soldProduct)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $soldProduct->name }}</td>
											<td>{{ $soldProduct->code }}</td>
											<td>{{ $soldProduct->quantity }}</td>
											<td>{{ $soldProduct->unit_price }}</td>
											<td>{{ $soldProduct->user_id }}</td>
											<td>{{ $soldProduct->cellar_id }}</td>

                                            <td>
                                                <form action="{{ route('sold-products.destroy',$soldProduct->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('sold-products.show',$soldProduct->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('sold-products.edit',$soldProduct->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $soldProducts->links() !!}
            </div>
        </div>
    </div>
@endsection
