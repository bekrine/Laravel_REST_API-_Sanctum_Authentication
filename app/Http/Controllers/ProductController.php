<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $products=Product::all();

    return view('page.AllProducts')->with(['products'=> $products]);
    }


    public function infinitScroll(){
        $products = Product::paginate(10);
        return view('page.infinitScrollProducts', compact('products'));
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'slug'=>'required',
            'price'=>'required',
        ]);
        Product::create($request->all());
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Product::find($id);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return $product;
    }
    
    public function search(Request $request)
    {
        if($request->ajax()){
 
            $data=Product::where('name','like','%'.$request->search.'%')->get();
 
            $output='';
            if(count($data)>0){
            

                $output='<div name="products" class="searchselect">
                ';
                    foreach($data as $product){
                        $output.='<div class="result" value='.$product->name.'>
                        '.$product->name.'
                        </div>';
                    }
                    $output.='</div>';
            }
            else{
                $output .='No results';
            }
            return $output;
        }
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Product::destroy($id);

    }
    /**
     * search for product
     */
   
}
