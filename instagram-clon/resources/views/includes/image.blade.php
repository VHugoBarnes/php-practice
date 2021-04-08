
<div class="card pub_image">
    <div class="card-header">
        @if ($image->user->image)
            <div class="container-avatar">
                <img src="{{ route('user.avatar', ['filename' => $image->user->image]) }}" alt="Avatar"
                    class="avatar">
            </div>
        @endif
        <a href="{{ route('user.profile', ['id' => $image->user->id]) }}">
            <div class="data-user"><span class="nickname">{{ $image->user->nick }}</span></div>
        </a>
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
        <div class="comments">
            <a href="{{ route('image.detail', ['id' => $image->id]) }}" class="btn btn-sm btn-warning ml-3 mr-3 mb-3">
                Comentarios ({{ count($image->comments) }})
            </a>
        </div>
        <div>
            <span class="p-3 date">{{ \FormatTime::LongTimeFilter($image->created_at) }}</span>
        </div>
    </div>
</div>
