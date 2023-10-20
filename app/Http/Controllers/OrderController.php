<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product; 
use App\Models\OrderProduct; 


class OrderController extends Controller
{
    //index,show,store,update,destroy

    public function index()
    {
        $orders = Order::all();
        return view('orders.index', ['orders' => $orders]);
    }
    
    public function show($id)
    {
        $order = Order::with(['products'])->find($id);
    
        if (!$order) {
            return response()->json(['message' => ' Order not found'], 404);
        }
    
        return view('orders.show', ['order' => $order]);
    }

    public function create()
    {
        $products = Product::all(); 
        return view('orders.create', ['products' => $products]); 
    }


    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'sale_date' => 'required|date',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|numeric',
        ]);
    
        $order = Order::create([
            'sale_date' => $validatedData['sale_date'],
        ]);
    

        $orderproduct = OrderProduct::create([
            'order_id' => $order->id, 
            'product_id' => $validatedData['product_id'],
            'quantity' => $validatedData['quantity'],
        ]);
        return redirect()->route('orders.index');
    }
    
    

    public function edit($id)
    {
    $order = Order::find($id);

    if (!$order) {
        return response()->json(['message' => 'Order not found'], 404);
    }

    return view('orders.edit', ['order' => $order]);
    }

    
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
    
        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }
    
        $validatedData = $request->validate([
            'sale_date' => 'required|date',
        ]);
    
        $order->update($validatedData);
    
        return redirect()->route('orders.index');
    }
    
    public function destroy($id)
    {
        $order = Order::find($id);
    
        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }
    
        $order->delete();
    
        return redirect()->route('orders.index');
    }

    public function showByDateRange($start_date, $end_date)
    {
        $orders = Order::whereBetween('sale_date', [$start_date, $end_date])->get();
        
        return view('orders.byDateRange', ['orders' => $orders]);
    }
    
    
    

    public function showByProduct($productId)
    {
        $orders = Order::whereHas('products', function ($query) use ($productId) {
            $query->where('product_id', $productId);
        })->get();
    
        return view('orders.byProduct', ['orders' => $orders]);
    }
    
    
}
