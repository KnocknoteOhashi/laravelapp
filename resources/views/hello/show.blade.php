@extends('layouts.helloapp')

@section('title', 'Show')

@section('menubar')
    @parent
    詳細ページ
@endsection

@section('content')
    <table>
        @csrf
        <tr><th>id: </th><td>{{$form->id}}</td></tr>
        <tr><th>name: </th><td>{{$form->name}}</td></tr>
        <tr><th>mail: </th><td>{{$form->mail}}</td></tr>
        <tr><th>age: </th><td>{{$form->age}}</td></tr>
    </table>

@endsection

@section('footer')
copyright 2020 tuyano.
@endosection
