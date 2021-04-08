@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @include('includes.message')
                <div class="card pub_image pub_image_detail">

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
                        <div>
                            <span class="p-3 date">{{ \FormatTime::LongTimeFilter($image->created_at) }}</span>
                        </div>
                        <div class="clearfix"></div>
                        <div class="comments">
                            <h4 class="p-3">Comentarios ({{ count($image->comments) }})</h4 class="p-3">
                            <hr>
                            <form action="{{ route('comment.save') }}" method="post">
                                @csrf
                                <input type="hidden" name="image_id" value="{{ $image->id }}">

                                <p>
                                    <textarea name="content" id="content" cols="30" rows="10" class="form-control" required></textarea>
                                    @if ($errors->has('content'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('content') }}</strong>
                                        </span>
                                    @endif
                                </p>
                                <button type="submit" class="btn btn-success">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
