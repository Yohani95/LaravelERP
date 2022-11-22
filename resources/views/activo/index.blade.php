@extends('layouts.app')

@section('template_title')
    Activo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Activo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('activos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Count</th>
										<th>Price</th>
										<th>User Id</th>
										<th>Cellar Id</th>
										<th>Sub Category Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($activos as $activo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $activo->name }}</td>
											<td>{{ $activo->code }}</td>
											<td>{{ $activo->count }}</td>
											<td>{{ $activo->price }}</td>
											<td>{{ $activo->user_id }}</td>
											<td>{{ $activo->cellar->name}}</td>
											<td>{{ $activo->subCategory->name }}</td>

                                            <td>
                                                <form action="{{ route('activos.destroy',$activo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('activos.show',$activo->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('activos.edit',$activo->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $activos->links() !!}
            </div>
        </div>
    </div>
@endsection
