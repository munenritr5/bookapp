@extends('layouts.bookapp')

@section('title', 'Edit')

@section('menubar')
    @parent
    更新ページ
@endsection

@section('content')
    <form action="/book/edit" method="post">
    <table>
        @csrf
        <input type="hidden" name="ISBN10" value="{{$form->ISBN10}}">
        <tr><th>ISBN-10: </th><td><input type="text" name="ISBN10" value="{{$form->ISBN10}}"></td></tr>
        <tr><th>Title: </th><td><input type="text" name="title" value="{{$form->title}}"></td></tr>
        <tr><th>Author: </th><td><input type="text" name="author" value="{{$form->author}}"></td></tr>
        <tr><th>Publisher: </th><td><input type="text" name="publisher" value="{{$form->publisher}}"></td></tr>
        <tr><th>Price: </th><td><input type="text" name="price" value="{{$form->price}}"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
</form>
@endsection