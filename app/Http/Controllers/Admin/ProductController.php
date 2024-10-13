<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Models\ProductPackage;
use App\Models\TopupgamePackage;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = ProductPackage::with('game_packages')->get();
    
        return view('pages.admin.product-packages.index', compact( 'items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = TopupgamePackage::all();
        return view('pages.admin.product-packages.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'price' => 'required|integer',
            'diamond' => 'required|integer',
            'topupgame_package_id' => 'required|integer|exists:topupgame_packages,id',
        ]);

        ProductPackage::create($data);
        Alert::success('Success Title', 'Success Message');
        return redirect()->route('product-packages.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
