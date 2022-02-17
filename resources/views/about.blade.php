{{--<h1>This is about page</h1>--}}
{{--<a href="{{ url('/') }}">Home</a>--}}
{{--<a href="{{ url('/bitm')}}">BITM</a>--}}
{{--<a href="{{ url('/about') }}">About</a>--}}
{{--<a href="{{ url('/contact') }}">Contact</a>--}}


{{--mastering --}}

@extends('master')

@section('title')
    About Page
@endsection

@section('body')
{{--    <h1>This is About Page</h1>--}}
{{--    --}}
{{--    //app folder->provider->APPServieProvider e boot e likhai jekono view theke return na kore dekha jai--}}
{{--    <h1>{{$email}}</h1>--}}

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{$product['image']}}" alt="" class="card-img-top h-300" />
                        <div class="card-body">
                            <h3 class="card-title">{{$product['name']}}</h3>
                            <p>Tk.{{$product['price']}}</p>
                            <hr/>
                            <a href="{{route('detail',['id' =>$product['id']])}}" class="btn btn-outline-success">Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

