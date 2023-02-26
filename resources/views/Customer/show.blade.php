@extends('customer.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">customers Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $customers->name }}</h5>
        <p class="card-text">National ID : {{ $customers->kipande }}</p>
        <p class="card-text">Mobile : {{ $customers->phone }}</p>
  </div>
       
    </hr>
  
  </div>
</div>