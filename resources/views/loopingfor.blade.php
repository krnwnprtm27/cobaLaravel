@extends('layout/main')
@section('title','About')
@section('container')
@for($i=1;$i<11;$i++) <li>{{$i}} ditambah {{$i}} sama dengan {{$i + $i}}</li>
    @endfor
    @endsection