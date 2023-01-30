@extends('admin.layouts.admin')

@section('content')
    <!-- page content -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          Halaman reporting  
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <select id="products" name="products[]" class="select2" multiple="multiple" style="width: 100%" autocomplete="off">
                        @foreach($products as $product)
                            <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/dashboard.js')) }}
    {{ Html::script(mix('assets/admin/js/users/edit.js')) }}
@endsection

@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/dashboard.css')) }}
    {{ Html::style(mix('assets/admin/css/users/edit.css')) }}
@endsection
