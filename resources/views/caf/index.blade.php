@extends('layouts.app')

@section('template_title')
    Caf
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Caf') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cafs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Ruta</th>
										<th>Expiration Date</th>
										<th>Quantity Avaible</th>
										<th>Initial Folio</th>
										<th>Last Folio</th>
										<th>Current Folio</th>
										<th>Document Code</th>
										<th>User Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cafs as $caf)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caf->name }}</td>
											<td>{{ $caf->ruta }}</td>
											<td>{{ $caf->expiration_date }}</td>
											<td>{{ $caf->quantity_avaible }}</td>
											<td>{{ $caf->initial_folio }}</td>
											<td>{{ $caf->last_folio }}</td>
											<td>{{ $caf->current_folio }}</td>
											<td>{{ $caf->document_code }}</td>
											<td>{{ $caf->user_id }}</td>

                                            <td>
                                                <form action="{{ route('cafs.destroy',$caf->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cafs.show',$caf->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cafs.edit',$caf->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $cafs->links() !!}
            </div>
        </div>
    </div>
@endsection
