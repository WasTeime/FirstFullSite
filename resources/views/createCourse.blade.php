@extends('layouts.mainLayout')
@section('content')
    <form action="{{ route('pages.createCourseSend') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <p>name</p>
        <input type="text" name="name">
        <p>description</p>
        <input type="text" name="description">
        {{--<p>author</p>
        <input type="text" name="author">--}}
        <p>course image</p>
        <input type="file" name="course_image">
        <p>passage_time</p>
        <input type="date" name="passage_time">
        <br>
        <button type="submit">Отправить</button>
    </form>
@endsection
