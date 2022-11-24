@extends('layouts.app')

@section('template_title')
    Dte
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Dte') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('dtes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Type Document</th>
										<th>Num Folio</th>
										<th>Track Id</th>
										<th>Name Route Xml</th>
										<th>Confirmed Send Sii</th>
										<th>User Id</th>
										<th>Status Id</th>
										<th>Payment Status</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dtes as $dte)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $dte->type_document }}</td>
											<td>{{ $dte->num_folio }}</td>
											<td>{{ $dte->track_id }}</td>
											<td>{{ $dte->name_route_xml }}</td>
											<td>{{ $dte->confirmed_send_sii }}</td>
											<td>{{ $dte->user_id }}</td>
											<td>{{ $dte->status_id }}</td>
											<td>{{ $dte->payment_status }}</td>

                                            <td>
                                                <form action="{{ route('dtes.destroy',$dte->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('dtes.show',$dte->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('dtes.edit',$dte->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $dtes->links() !!}
            </div>
        </div>
    </div>
@endsection
