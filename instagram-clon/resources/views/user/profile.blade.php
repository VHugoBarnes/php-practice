@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="data-user">
            <div class="row">
                <div class="col-md-3">
                    @if ($user->image)
                        <img src="{{ route('user.avatar', ['filename' => $user->image]) }}" alt="Avatar" class="avatar-profile">
                    @endif
                </div>
                <div class="col-md-9">
                    <h2 class="mt-5">{{ $user->name . ' ' . $user->surname }}</h2>
                    <h3 class="nickname-profile">{{ '@'.$user->nick }}</h3>
                </div>
            </div>
            <hr>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Perfil de {{ $user->name }}</h1>
    
                @foreach ($user->images as $image)
                    @include('includes.image', ['image', $image])
                @endforeach
    
            </div>
        </div>
    </div>
@endsection