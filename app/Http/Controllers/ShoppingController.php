<?php

namespace App\Http\Controllers;

// Modelファイルの読み込み

use Illuminate\Http\Request;
use App\Models\Item; // 追加
use App\Models\Category; // 追加
use App\Models\Cart; // 追加

class ShoppingController extends Controller
{
    // ルーティング設定によって各関数が呼び出される

    public function index($ctg_id = '') {

        if ($ctg_id === '') {
            $itemDetail = Item::all(); // Modelで指定したItemテーブルのカラムの値を全て取得
            $category = Category::all(); // categoryテーブルのカラムの値を全て取得
        } else {
            $query = Item::query(); // itemテーブルの実行準備
            $query->where('ctg_id', $ctg_id); // whereメソッドで条件指定 where('カラム名',値)
            $itemDetail = $query->get(); // get() データ取得
            $category = Category::all();// categoryテーブルの値を全て取得
        }

        // view()メソッド : viewファイルの呼び出し,viewに値を渡す
        // view('表示したいviewのファイルパス',[
        //    送信したいデータ
        // ]);

        return view('shopping/list',[
            'itemDetail' => $itemDetail,
            'category' => $category,
        ]);
    }

    public function detail($item_id) {
        $query = Item::query();
        $query->where('item_id', $item_id);
        $itemDetail = $query->get();
        $category = Category::all();

        return view('shopping/detail' , [
            'itemDetail' => $itemDetail[0],
            'category' => $category,
        ]);
    }

    public function cart($item_id = '') {
        $user = \Auth::user(); //現在認証しているユーザー情報の呼び出し
        if($item_id === ''){
            $query = Cart::query();
            $query->where('customer_id', $user->id); // $user->id : 認証中のidを取得
            $query->where('delete_flg', 0);
            $cart_items = $query
                        ->join('items', 'carts.item_id', '=', 'items.item_id') 
                        ->get();
            // join() : テーブル結合
            $cart_price = $query->sum('price'); // sum() 指定カラムの合計値を取得
            $cart_num = $query->sum('num');
        } else {
            $query = item::query();
            $query->where('item_id', $item_id);
            $item = $query->get()->toArray(); // toArray() : 通常の配列に戻す
            $item[0]['customer_id'] = $user->id;

            Cart::create($item[0]);
            return redirect()->route('cart'); // redirect() : リダイレクト処理
        }

        return view('shopping/cart' , [
            'cart_items' => $cart_items,
            'cart_price' => $cart_price,
            'cart_num' => $cart_num,
        ]);
    }

    public function delete($crt_id = '') {

        if ($crt_id == true) {
            $query = Cart::query();
            $query->where('crt_id', $crt_id)
              ->update(['delete_flg' => 1]); // update() : カラムの中の値を更新
        }
        
        return redirect()->route('cart');
    }
}
