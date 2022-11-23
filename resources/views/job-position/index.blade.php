@extends('layouts.app')

@section('template_title')
    Job Position
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Listado de Puestos de Trabajo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('job-positions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Añadir Cargo') }}
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
                                        <th>N°</th>
                                        
										<th>Cargo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jobPositions as $jobPosition)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $jobPosition->name }}</td>

                                            <td>
                                                <form action="{{ route('job-positions.destroy',$jobPosition->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('job-positions.show',$jobPosition->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('job-positions.edit',$jobPosition->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $jobPositions->links() !!}
            </div>
        </div>
    </div>
@endsection
