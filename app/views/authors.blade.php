@extends('layout')

@section('content')
    @foreach($authors as $author)
        <p>{{ $author->name }}</p>
    @endforeach
@stop

<?php
echo Helpers::doMessage();

echo "fibonacci(12) = " . Helpers::fibonacci(12);
echo "<hr>";
echo "fibonacci(12) = " . Helpers::fib(12);
echo "<hr>";
echo "fibonacci(12) = " . print_r(Helpers::fib(12,1));
?>