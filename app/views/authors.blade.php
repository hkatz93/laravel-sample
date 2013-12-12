@extends('layout')

@section('content')
    @foreach($authors as $author)
        <p>{{ $author->name }}</p>
    @endforeach
@stop

<?php
echo Helpers::doMessage();

?>