<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

use Illuminate\Support\Facades\Mail;
use App\Mail\Thanks;

class ShopController extends Controller
{
    //商品一覧表示
    public function index() 
    {
       $stocks = Stock::Paginate(6);
       return view('shop',compact('stocks'));
    }
    // カート
    public function myCart(Cart $cart)
  {
      $my_carts = $cart->showCart();
      return view('mycart',compact('my_carts'));
       
  }

    
   
  public function addMycart(Request $request,Cart $cart)
  {

      //カートに追加の処理
      $stock_id=$request->stock_id;
      $message = $cart->addCart($stock_id);

      //追加後の情報を取得
      $my_carts = $cart->showCart();

      return view('mycart',compact('my_carts' , 'message'));

  }
   
   
    public function deleteCart(Request $request,Cart $cart)
  {

      //カートから削除の処理
      $stock_id=$request->stock_id;
      $message = $cart->deleteCart($stock_id);

      //追加後の情報を取得
      $my_carts = $cart->showCart();

      return view('mycart',compact('my_carts' , 'message'));

  }


   public function checkout(Cart $cart)
   {
       $checkout_info = $cart->checkoutCart();       
       return view('checkout');
   }

}
