@extends('layouts.bookapp')

@section('title', 'Add')

@section('menubar')
    @parent
    新規作成ページ
@endsection

@section('content')
    <form action="/book/add" method="post">
    <table>
        @csrf
        <tr><th>ISBN-10: </th><td><input type="text" name="ISBN10"></td></tr>
        <tr><th>Title: </th><td><input type="text" name="title"></td></tr>
        <tr><th>Author: </th><td><input type="text" name="author"></td></tr>
        <tr><th>Publisher: </th><td><input type="text" name="publisher"></td></tr>
        <tr><th>Price: </th><td><input type="text" name="price"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
</form>
@endsection