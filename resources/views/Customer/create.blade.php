@extends('customer.layout')
@section('content')
 
<div class="card">
  <div class="card-header">customers Page</div>
  <div class="card-body">
      
      <form action="{{ url('customer') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>National ID </label></br>
        <input type="text" name="kipande" id="kipande" class="form-control"></br>
        <label>Phone</label></br>
        <input type="text" name="phone" id="phone" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop