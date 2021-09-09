@extends('items.designlayout')

@section('content')

<div class = "pull-left">
    <h2>Home Food Inventory and Management System</h2>
</div>

<div class = "row">
    
    <div class = "col-lg-12 margin-tb">
        <a class = "btn btn-success" href = "{{ route('items.creat') }}"> Creat New Item</a>

    </div>
</div>

@if($message = Session::get('success'))

    <div class = "alert alert-success">
        <p>{{ $message }}</p>
    </div>

@endif

<table class = "table table-bordered">
    <tr>
      <th>No</th>

      <th>Item Name</th>
      <th>Quantity</th>
      <th>Category</th>
      <th>Price</th>

      <th width = "280px">Action</th>
    </tr>

    @foreach($items as $item)

        <tr>
            <td>{{++$i}}</td>
            <td>{{ $item->itemname }}</td>
            <td>{{ $item->quantity }}</td>
            <td>{{ $item->category }}</td>
            <td>{{ $item->price }}</td>
            
            <td>
                <form action = "{{ route('items.destroy',$item->id) }}"method = "POST">
                    <a class = "btn btn-info" href = "{{ route('items.show',$item->id) }}">Show</a>
                    <a class = "btn btn-primary" href = "{{ route('item.edit',$item->id) }}">Edit</a>
                    
                    @csrf
                    @method('DELETE')
                    <button type = "submit" class = "btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

    @endforeach

</table>