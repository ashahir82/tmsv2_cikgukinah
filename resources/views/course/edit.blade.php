@extends('app')

@section('content')
<form method="post" action="{{ route('course.update', $course->id) }}">
    @csrf

    <input type="text" name="name" value="{{ $course->name }}">
    <button type="submit">Update</button>
</form>
@endsection
