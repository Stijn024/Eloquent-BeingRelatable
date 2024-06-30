@extends('app')

@section('content')
    <div class="mx-auto prose">
        <h1 class="font-bold text-3xl">{{ $post->title }}</h1>

        <div class="flex">
            @foreach($post->tags as $tag)
                <span class="px-2 py-1 mr-3 rounded-full text-white" style="background-color: {{ $tag->color }}">{{ $tag->name }}</span>
            @endforeach
        </div>        

        <!-- author -->
        <div class="flex items-center">
                <img src="http://placehold.jp/150x150.png" class="rounded-full mr-2" width="40" height="40">
                <div>
                    <p class="font-bold">{{ $post->user->name }}</p>
                    <p>{{ $post->user->email }}</p>
                </div>
        </div>

        <p class="text-gray-700 whitespace-pre-wrap">{{ $post->body }}</p>

    </div>

@endsection
