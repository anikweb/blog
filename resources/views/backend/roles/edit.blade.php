@extends('backend.master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Assign Role</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Edit Role</li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-success">
                            <h3 class="card-title">Edit Role</h3>
                        </div>
                        <div class="card-body">
                            <h3>{{ $role->name }}</h3>
                            <form action="">
                                @foreach ($permissions as $permission)
                                    <input type="checkbox" name="{{ $permission->name }}" id="{{ $permission->name }}">
                                    <label style="font-weight:500" for="{{ $permission->name }}">{{ $permission->name }}</label>
                                @endforeach
                                <div class="form-group">
                                    <button class="btn btn-success"><i class="fa fa-save"></i> Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer_js')
<script>
    $(document).ready(function() {
        $('.users-input').select2();
    });
</script>
@endsection
@section('internal_style')
<style>
    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        background: #17a2b8 !important;
        color: #fff !important;
    }
    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
        color: #fff !important;
    }
    .select2-container--default .select2-selection--single {
        height: 38px !important;
    }
    .select2{
        text-align: left;
    }
</style>
@endsection
