@extends('user_layout.print')
@section('content')
<center>
<h1>Invoice Information List </h1>
<table class="table" >
<tr><th>Id</th><th>Title</th><th>Price</th></tr>
@foreach($printlist as $print)
<tr><td>{{ $print['id'] }}</td>
<td>{{ $print['title'] }}</td>
<td>{{ $print['cprice'] }}</td>
</tr>
@endforeach
</center>
@endsection