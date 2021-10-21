@extends('app')

@section('content')
<!-- Page Title -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                List Users
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Users</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Page Content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                @if (Session::has('successMessage'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Success!</h5>
                        {{ Session::get('successMessage') }}
                    </div>
                    {{ Session::forget('successMessage') }}
                @endif

                @if (Session::has('errorMessage'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Error!</h5>
                        {{ Session::get('errorMessage') }}
                    </div>
                    {{ Session::forget('errorMessage') }}
                @endif

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List Users</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Profile Imag</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $u)
                                <tr>
                                    <td>{{ $u->id }}</td>
                                    <td>{{ $u->name }}</td>
                                    <td>{{ $u->email }}</td>
                                    <td>
                                       <img src="{{ asset($u->profile_img) }}" class="table-avatar">
                                    </td>
                                    <td>
                                        {{-- <a href="{{ route('user.show', $u->id) }}" class="btn btn-primary">Show</a> --}}
                                        {{-- <a href="{{ route('user.edit', $u->id) }}" class="btn btn-info">Edit</a> --}}
                                        <a href="{{ route('user.delete', $u->id) }}" class="btn btn-info">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Profile Imag</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
