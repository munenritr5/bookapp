@extends('layouts.bookapp')

@section('title', 'Index')
{{-- @section('title')
    Index // 上と同じ --}}

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table>
        <tr><th>ISBN-10</th><th>Title</th><th>Author</th><th>Publisher</th><th>Price</th></tr>
        @foreach($items as $item)
            <tr>
                <td>{{$item->ISBN10}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->author}}</td>
                <td>{{$item->publisher}}</td>
                <td>{{$item->price}}</td>
            </tr>
        @endforeach
    </table>
</form>
@endsection