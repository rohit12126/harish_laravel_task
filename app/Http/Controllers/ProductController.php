<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\StoreProductsRequest;
use App\Product;
use DataTables;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   	 public function index() {
        return view('admin.product.product_list');
    }

    public function getProductsData(){
        /*'. route('admin.faculty.destroy', $products->id) .'*/
       $products = Product::query();
    	return \DataTables::of($products)
            ->addIndexColumn()
            ->addColumn('action', function ($products) {
                $msg = "Are you sure?";
                return '<a href="'. route('edit_product', ['id' => $products->id]) .'"   ><i class="glyphicon glyphicon-edit"></i> </a>
                    <a href="'. route('delete_product', ['id' => $products->id]) .'"  style="color:red;"><i class="glyphicon glyphicon-trash"></i></a>';
            })
            ->make(true);
    }

    public function add_product(){
    	return view('admin.product.add_product');		
    }	

    public function edit_product(Request $request){
        $product = Product::where('id', $request->id)->first();
        if(!empty($product) && !is_null($product)){
          return view('admin.product.edit_product',compact("product"));       
        }else{
          return redirect()->route('product_list')->with('error',"Something went wrong.");
        }
    }   

    public function store_product(StoreProductsRequest $request){

        $product = new Product;
        $product->name    = $request->name;
        $product->amount  = $request->price;
        $product->description = $request->description;
        $res = $product->save();
       if($res) {
        return redirect()->route('product_list')->with('success',"Product added successfully.");  
       }else{
        return redirect()->route('product_list')->with('error',"Something went wrong.");  
       }
    }

    public function update_product(StoreProductsRequest $request){
          $data = [
            "name"=>$request->name,
            "amount"=>$request->price,
            "description"=>$request->description,
          ];
        Product::where('id', $request->id)
            ->update($data);
        return redirect()->route('product_list')->with('success',"Product updated successfully.");      
    }

    public function delete_product(Request $request){
        Product::where('id', $request->id)->delete();
        return redirect()->route('product_list')->with('success',"Product deleted successfully.");  
    }
}
