{{-- @extends 親要素を継承する宣言 --}}
@extends('layouts/layout')

{{-- @section内に@yieldの部分に入るパーツを書き込む --}}
@section('content')

　　<div id="wrapper">
    {{-- @include ファイルの読み込み --}}
    @include('layouts/category_menu')
        <div id="item_list">
            {{-- @foreach ループ文 --}}
            {{-- @foreach ($data as $key => $value)の形で記述 --}}
            @foreach ($itemDetail as $item)
                <div class="item">  
                    <ul>
                        <li class="name"><a href="{{ route('detail', ['id' => $item->item_id]) }}">{{$item->item_name}}</a></li>
                        <li class="price">&yen;{{ number_format($item->price, 0) }}</li>
                        <li class="image">
                            <a href="{{ route('detail', ['id' => $item->item_id]) }}">
                            <img src="{{ asset('/img/' . $item->image) }}" alt="{{$item->item_name}}">
                            </a>
                        </li>
                        <li class="detail"><a href="{{ route('detail', ['id' => $item->item_id]) }}">詳細</a></li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
    {{--  コンポーネンネントの指定(Vue.js、最後の方で解説します)  --}}
    <tab-component></tab-component>

@endsection