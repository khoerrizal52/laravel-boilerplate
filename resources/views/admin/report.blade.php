@extends('admin.layouts.admin')

@section('content')
    <!-- page content -->

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          Halaman reporting  
        </div>

    </div>
@endsection

@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/dashboard.js')) }}
@endsection

@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/dashboard.css')) }}
@endsection
