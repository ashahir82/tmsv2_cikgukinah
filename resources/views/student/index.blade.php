@extends('app')

@section('content')
    <!-- Page Title -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">List Students </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Student</li>
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
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">List Students</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>NDP</th>
                                        <th>Name</th>
                                        <th>Nric</th>
                                        <th>Tel No</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $s)
                                        <tr>
                                            <td>{{ $s->ndp }}</td>
                                            <td>{{ $s->name }}</td>
                                            <td>{{ $s->ic }}</td>
                                            <td>{{ ($s->tel_no) ? $s->tel_no : '-' }}</td>
                                            <td>
                                                <a href="{{ route('student.show', $s->id) }}" class="btn btn-primary">Show</a>
                                                <a href="{{ route('student.edit', $s->id) }}" class="btn btn-info">Edit</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>NDP</th>
                                        <th>Name</th>
                                        <th>Nric</th>
                                        <th>Tel No</th>
                                        <th>Actions</th>
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

@section('script')
@endsection
