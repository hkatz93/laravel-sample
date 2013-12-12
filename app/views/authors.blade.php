@extends('layout')

@section('content')
    @foreach($authors as $author)
        <p>{{ $author->name }}</p>
    @endforeach
@stop

<?php
echo Helpers::doMessage();

echo "<hr>";
echo "fibonacci(12) = " . print_r(Helpers::fibonacci_list(12));
echo "<hr>";
echo "fibonacci(12) = " . print_r(Helpers::fibonacci_list(12,true));
?>