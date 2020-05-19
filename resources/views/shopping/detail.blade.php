@extends('layouts/layout')

@section('content')
    <input type="hidden" name="entry_url" value="" id="entry_url">
    <div id="wrapper">
        @include('layouts/category_menu')
        <div id="item_detail">
        <div class="image">
            <img src="{{ asset('/img/' . $itemDetail['image']) }}" alt="{{ $itemDetail['item_name'] }}">
        </div>
        <div class="detail">
            <dl>
            <dt>商品名</dt><dd>{{ $itemDetail['item_name'] }}</dd>
            <dt>詳細</dt><dd>{{ $itemDetail['detail'] }}</dd>
            <dt>価格</dt><dd>&yen;{{ number_format($itemDetail['price'], 0) }}</dd>
            <input type="hidden" name="item_id" id="item_id" value="{{ $itemDetail['item_id'] }}">
            </dl>
        </div>
        <div class="cart_in">
            <input type="button" name="back" value="一覧へ戻る" onclick="history.back(); return false;">
            <a href="{{ route('cart', ['id' => $itemDetail['item_id']]) }}">ショッピングカートへ入れる</a>
        </div>
        </div>
    </div>
    {{--  コンポーネントは使えまわせます  --}}
    <tab-component></tab-component>
@endsection