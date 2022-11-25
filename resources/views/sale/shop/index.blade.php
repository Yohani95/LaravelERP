@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endsection

@section('content')
    
    <section>
        <div class="row">
            {{-- col to left --}}
            <div class="div-lg-3">
            </div>
            {{-- col to right --}}
            <div class="div-lg-3">
                
            </div>
        </div>
    </section>

@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
@endsection
<script>
$(document).ready(function () {
    $('#example').DataTable();
});
</script>