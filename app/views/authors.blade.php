@extends('layout')

@section('content')
    @foreach($authors as $author)
        <p>{{ $author->name }}</p>
    @endforeach


<?php
echo Helpers::doMessage();

echo "<hr>";
echo "fibonacci(12) = " . print_r(Helpers::fibonacciList(12));
echo "<hr>";
echo "fibonacci(12) = " . print_r(Helpers::fibonacciList(12,true));


?>
<table style="padding: 2px">
<tr><td>Request::server('REMOTE_ADDR') = </td><td><?php echo Request::server('REMOTE_ADDR'); ?></td></tr>
<tr><td>1st 12 number of Fibbonaci </td><td><?php echo implode(', ', Helpers::fibonacciList(12,true));  ?></td></tr>

</table>

@stop