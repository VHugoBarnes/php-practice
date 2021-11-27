@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                @foreach ($users as $user)
                    
                @endforeach

                {{-- Paginación --}}
                <div class="clearfix"></div>
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection
