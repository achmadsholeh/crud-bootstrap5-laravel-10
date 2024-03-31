<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

use App\Models\Product;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = product::all();

        return view('products.index', compact('products'));
    }

    public function create(): View
    {
        return view('products.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request,[
            'firstname' => 'required',
            'lastname' => 'required',
            'age'   => 'required'
        ]);

        product::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'age'   => $request->age
        ]);

        return redirect()->route('products.index')->with(['success' => 'Data berhasil disimpan']);
    }

    public function show($id): View
    {
        $products = product::findorfail($id);

        return view('products.show', compact('products'));
    }

    public function edit($id): View
    {
        $products = product::findorfail($id);

        return view('products.edit', compact('products'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request,[
            'firstname' => 'required',
            'lastname' => 'required',
            'age'   => 'required'
        ]);

        $products = product::findorfail($id);
        $products->update($request->all());

        return redirect()->route('products.index')->with(['success' => 'Data berhasil disimpan']);   
    }

    public function destroy($id)
    {
        $products = product::findorfail($id);
        $products->delete();
        return redirect()->route('products.index')->with(['success' => 'Data berhasil disimpan']);   

    }
}


