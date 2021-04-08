@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @include('includes.message')
                <div class="card pub_image">

                    <div class="card-header">
                        @if ($image->user->image)
                            <div class="container-avatar">
                                <img src="{{ route('user.avatar', ['filename' => $image->user->image]) }}" alt="Avatar"
                                    class="avatar">
                            </div>
                        @endif
                        <div class="data-user"><span class="nickname">{{ $image->user->nick }}</span></div>
                    </div>

                    <div class="card-body">
                        <div class="image-container">
                            <img src="{{ route('image.file', ['filename' => $image->image_path]) }}" alt="image">
                        </div>
                        <div class="description">
                            <strong>{{ '@' . $image->user->nick }}</strong><span>{{ $image->description }}</span>
                        </div>
                        <div class="likes">
                            <img src="{{ asset('img/hearts-gray.png') }}" alt="like">
                        </div>
                        <div class="comments">
                            <a href="" class="btn btn-sm btn-warning ml-3 mr-3 mb-3">
                                Comentarios ({{ count($image->comments) }})
                            </a>
                        </div>
                        <div>
                            <span class="p-3 date">{{ \FormatTime::LongTimeFilter($image->created_at) }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
