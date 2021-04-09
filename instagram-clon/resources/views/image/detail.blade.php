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
                        <div class="data-user"><a href="{{ route('user.profile', ['id' => $image->user->id]) }}"
                                class="nickname">{{ $image->user->nick }}</a></div>
                    </div>

                    <div class="card-body">
                        <div class="image-container">
                            <img src="{{ route('image.file', ['filename' => $image->image_path]) }}" alt="image">
                        </div>
                        <div class="description">
                            <strong>{{ '@' . $image->user->nick }}</strong><span>{{ $image->description }}</span>
                        </div>
                        <div class="likes">
                            {{-- Comprobar si el usuario le dio like a la imagen --}}
                            <?php $user_like = false; ?>
                            @foreach ($image->likes as $like)
                                @if ($like->user->id == \Auth::user()->id)
                                    <?php $user_like = true; ?>
                                @endif
                            @endforeach

                            @if ($user_like)
                                <img src="{{ asset('img/heart-red.png') }}" alt="like" data-id="{{ $image->id }}"
                                    class="btn-dislike">
                            @else
                                <img src="{{ asset('img/heart-gray.png') }}" alt="like" data-id="{{ $image->id }}"
                                    class="btn-like">
                            @endif
                            <span class="count-likes">{{ count($image->likes) }}</span>
                        </div>
                        <div>
                            <span class="p-3 date">{{ \FormatTime::LongTimeFilter($image->created_at) }}</span>
                        </div>
                        @if ($image->user->id == Auth::user()->id)
                            <div class="actions mt-3 ml-3">
                                <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">Borrar</button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">¿Eliminar publicación?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                La publicación se eliminará permanentemente
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancelar</button>
                                                <a href="{{ route('image.delete', ['id' => $image->id]) }}" type="button" class="btn btn-danger">Eliminar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="" class="btn btn-sm btn-warning">Actualizar</a>
                            </div>
                        @endif
                        <div class="clearfix"></div>
                        <div class="comments">
                            <h4 class="p-3">Comentarios ({{ count($image->comments) }})</h4 class="p-3">
                            <hr>
                            <h5>Agregar comentario</h5>
                            <form action="{{ route('comment.save') }}" method="post">
                                @csrf
                                <input type="hidden" name="image_id" value="{{ $image->id }}">

                                <p>
                                    <textarea name="content" id="content" cols="30" rows="10"
                                        class="form-control {{ $errors->has('content') ? 'is-invalid' : '' }}"
                                        required></textarea>
                                    @if ($errors->has('content'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('content') }}</strong>
                                        </span>
                                    @endif
                                </p>
                                <button type="submit" class="btn btn-success">Enviar</button>
                            </form>
                            <hr>
                            @foreach ($image->comments as $comment)
                                <div class="comment mt-2 ml-2">
                                    <strong>{{ '@' . $comment->user->nick }}</strong><span>
                                        {{ $comment->content }}</span>
                                    <p class="pt-1 date">{{ \FormatTime::LongTimeFilter($image->created_at) }}</p>
                                    @if (Auth::check() && ($comment->user_id == \Auth::user()->id || $comment->image->user_id == Auth::user()->id))
                                        <a href="{{ route('comment.delete', ['id' => $comment->id]) }}"
                                            class="btn btn-sm btn-danger">Eliminar</a>
                                    @endif
                                </div>
                                <hr>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
