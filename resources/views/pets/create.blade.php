@extends('pets.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="text-center">
            <h2>Create New Pet Record</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('pets.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Warning!</strong> Please check your input code<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('pets.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID:</strong>
                <input type="text" name="id" class="form-control" placeholder="ID">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pet Name:</strong>
                <input type="text" name="name_of_pet" class="form-control" placeholder="Name of pet">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pet Type:</strong>
                <input type="text" name="type_of_animal" class="form-control" placeholder="Type of Pet">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pet Owner:</strong>
                <input type="text" name="owner_of_pet" class="form-control" placeholder="Name of Owner">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Owner Address:</strong>
                <input type="text" name="address_of_owner" class="form-control" placeholder="Address of Owner">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection