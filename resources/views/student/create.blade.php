@extends('app')

@section('content')
<form action="{{ route('student.store') }}" class="" method="post">
    @csrf
    <label>Nama</label>
    <input type="text" name="name">
    <input type="text" name="url" value="{{ route('student.store') }}">

    <button type="submit">Hantar/Submit</button>
</form>
@endsection







