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
                <li class="breadcrumb-item active">Assign Role</li>
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
                            <h3 class="card-title">Assign Role</h3>
                        </div>
                        <div class="card-body">
                            <form action="#">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6  mx-auto pb-4 text-md-left text-center ">
                                        <label for="user" style="text-align: left !important !important">Select user and role to assign between <span>*</span></label>
                                        <div class="input-group">
                                            <select name="user" id="user" class="form-control users-input" style="text-align: left">
                                                @foreach ($users as $user)
                                                    <option value="">{{ $user->name  }} ({{ $user->email  }})</option>
                                                @endforeach
                                            </select>
                                            <div class="input-group-append">
                                                {{-- <button class="btn  " type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button> --}}
                                                {{-- <div class="dropdown-menu"> --}}
                                                    <select name="" id="" class=" form-control">
                                                        @foreach ($roles as $role)
                                                            <option value="">{{ $role->name }}</option>

                                                        @endforeach
                                                    </select>
                                                {{-- </div> --}}
                                            </div>
                                            <button class="btn btn-success px-5 mx-1 d-none d-md-block">Add</button>
                                        </div>
                                        <button class="btn btn-success px-5 mt-1 text-center mx-auto d-block d-md-none">Add</button>
                                    </div>
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
