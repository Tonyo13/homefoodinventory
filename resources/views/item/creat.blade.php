@extends('items.designlayout')

@section('content')

<div class = "row">
    <div class = "col-lg-12 margin-tb">
        <div class = "pull-left">

            <h2>Add New Items</h2>
        
        </div>

        <div class = "pull-right">

            <a class = "btn btn-primary" href = "{{ route('student.index') }}">Back</a>

        </div>

    </div>
</div>

@if($errors->any())

    <div class = "alert alert-danger">
        <strong>Whoops!</strong>There's Something error to your input.<br><br>

        <ul>

            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

        </ul>
    
    </div>

@endif

<form action = "{{ route('students.store') }}"method = "POST">
    @csrf

    <div class = "row">
        <div class = "col-xs-12 col-sm-12 col-md-12">
            <div class = "form-group">
                <strong>Item Name:</strong>

                <input type = "text" name = "itemname" class = "form-control" placeholder = "itemname">
            </div>
        </div>
    </div>

    <div class = "col-xss-12 col-sm-12 col-md-12">
        <div class = "form-group">
            <strong>Quantity</strong>

            <input type = "text" name = "quantity" class = "form-control" placeholder = "quantity">
        </div>
    </div>

    <div class = "col-xss-12 col-sm-12 col-md-12">
        <div class = "form-group">
            <strong>Category</strong>

            <input type = "text" name = "category" class = "form-control" placeholder = "category">
        </div>
    </div>

    <div class = "col-xss-12 col-sm-12 col-md-12">
        <div class = "form-group">
            <strong>Price</strong>

            <input type = "text" name = "price" class = "form-control" placeholder = "price">
        </div>
    </div>

    <div class = "col-xss-12 col-sm-12 col-md-12 text-center">
        <button type = "submit" class = "btn btn-primary">Submit</button>
    </div>
</form>
@endsection