<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
   
    public function index()
    {
        $items = Item::latest()->paginate(5);
        return view('items.index',compact('items'))->with('i', (request()->input('page',1)-1)*5);
    }
    
    public function create()
    {
        return view('items.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
         
            'itemname' =>'required',
            'quantity' =>'required',
            'category' =>'required',
            'price' =>'required',
        ]);
   
        Item::create($request->all());
   
        return redirect()->route('items.index')
        ->with('success','Items created successfully.');
    }

    
    public function show(Item $item)
    {
        return view('items.show',compact('item'));
    }

    
    public function edit(Item $item)
    {
        return view('items.edit',compact('item'));
    }
   
    public function update(Request $request, Item $item)
    {
        $request->validate([
     
        ]);
   
        $item->update($request->all());
   
        return redirect()->route('items.index')
        ->with('success','Item updated successfully.');
    }

    
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index')->with('success','Item deleted successfully.');
    }
}