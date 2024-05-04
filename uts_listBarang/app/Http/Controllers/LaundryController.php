<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Products;
use App\Models\Units;
use Validator;

use Illuminate\Http\Request;

class LaundryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Laundry List';

        //Eloquent
        $products = Products::all();

        return view ('laundry.index',
        [
            'pageTitle' => $pageTitle,
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Product';

        //Eloquent
        $units = Units::all();

        return view('laundry.create', compact('pageTitle', 'units'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $massages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute nominal tersebut'
        ];

        $validator = Validator::make($request->all(), [
            'Code_product' => 'required',
            'name_product' =>'required',
            'description' => 'required',
            'price'=> 'required |numeric'
        ], $massages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //Eloquent
        $product = New Products;
        $product->Code_product = $request->Code_product;
        $product->name_product = $request->name_product;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->unit_id = $request->unit;
        $product->save();

        return redirect()->route('laundry.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Detail Product';

        //Eloquent
        $product = Products::find($id);

        return view('laundry.show', compact('pageTitle', 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Product';

        //Eloquent
        $units = Units::all();
        $product = Products::find($id);

        return view('laundry.edit', compact('pageTitle', 'units', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $massages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute nominal tersebut'
        ];

        $validator = Validator::make($request->all(), [
            'Code_product' => 'required',
            'name_product' =>'required',
            'description' => 'required',
            'price'=> 'required |numeric'
        ], $massages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //Eloquent
        $product = Products::find($id);
        $product->Code_product = $request->Code_product;
        $product->name_product = $request->name_product;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->unit_id = $request->unit;
        $product->save();

        return redirect()->route('laundry.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Eloquent
        Products::find($id)->delete();

        return redirect()->route('laundry.index');
    }
}
