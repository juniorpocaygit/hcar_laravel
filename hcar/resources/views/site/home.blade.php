@extends('site.layout')
@section('title', 'Página Home')

@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col sm-12">
                <h1 class="alert alert-info">
                    Lorem ipsum dolor sit amet.                   
                </h1>
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, doloribus?</h4>
                <p class="py-3">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente id, in molestiae qui quas numquam natus consequatur. Modi atque aliquid hic explicabo eos? Ut dolor ipsa sint molestiae ab odio?
                </p>
                <p>
                    <a href="{{route('login')}}" class="btn btn-outline-info">Login</a>
                    <a href="{{route('register')}}" class="btn btn-outline-primary">Registrar-se</a>
                </p>
            </div>
        </div>
    </div>

@endsection