@extends('master')
        
@section('main-content')

        <h1>Welcome to my page</h1>
        
        <h2>Customers:</h2>
        
        <ul>
            @foreach($customers as $customer)
                <li>{{ $customer->name }}</li>
            @endforeach
        </ul>
@stop