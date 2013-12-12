@extends('layout')

@section('content')


<table>
<tr><td>Request::server('REMOTE_ADDR') = </td><td>{{ Request::server('REMOTE_ADDR'); }}</td></tr>
<!--<tr><td>1st 12 number of Fibbonaci </td><td><?php echo implode(', ', Helpers::fibonacciList(12,true));  ?></td></tr> -->
<tr><td>Time of Day (RFC 2822 formatted date) </td><td>{{ date(DATE_RFC2822); }}</td></tr>
<tr><td>1st 12 number of Fibbonaci </td><td>{{ implode(', ', Helpers::fibonacciList(12,true)); }}</td></tr>


</table>

@stop