@extends('layouts.app')

@section('template_title')
    Types Print
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Types Print') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('types-prints.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Type Invoice</th>
										<th>Type Ticket</th>
										<th>User Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($typesPrints as $typesPrint)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $typesPrint->type_invoice }}</td>
											<td>{{ $typesPrint->type_ticket }}</td>
											<td>{{ $typesPrint->user_id }}</td>

                                            <td>
                                                <form action="{{ route('types-prints.destroy',$typesPrint->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('types-prints.show',$typesPrint->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('types-prints.edit',$typesPrint->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $typesPrints->links() !!}
            </div>
        </div>
    </div>
@endsection
