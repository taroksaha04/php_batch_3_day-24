{{--<h1>This is Bitm</h1>--}}
{{--<a href="{{ url('/') }}">Home</a>--}}
{{--<a href="{{ url('/bitm')}}">BITM</a>--}}
{{--<a href="{{ url('/about') }}">About</a>--}}
{{--<a href="{{ url('/contact') }}">Contact</a>--}}

@extends('master')

@section('title')
    BITM Page

@endsection
@section('body')
{{--    <h1>{{$a}}</h1>--}}
{{--    <h1>{{$topu}}</h1>--}}

{{--    <h1>{{$fahim[2]}}</h1>--}}
{{--    @foreach($fahim as $key => $value)--}}
{{--            <h1>{{$value}}</h1>--}}
{{--<span>Index No :{{$key}} and value : {{$value}}</span><br/>--}}
{{--        @if($key >=3 && $key <=5)--}}
{{--        <span>Index No :{{$key}} and value : {{$value}}</span><br/>--}}
{{--        @else--}}
{{--            <h1>Out of Range....</h1>--}}
{{--        @endif--}}
{{--    @endforeach--}}



{{--    for multidimensional array--}}
@foreach($fahim as $key => $value)
    @foreach($value as $item)
        <span>{{$item}}</span><br/>
@endforeach
    <br/>
    @endforeach





















@endsection
