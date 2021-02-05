@props(['post' => $post])

<div>
    <div class="w-64 p-6 bg-gray-50 rounded">
        <div class="text-sm">
            {{$post->user->id}}
            <a href="{{route('users.posts', $post->user)}}">
                <span class="my-2 text-gray-600">{{$post->user->name}}</span>
                <span class="ml-auto text-gray-400 font-light">{{$post->created_at->diffForHumans()}}</span>
            </a>
        </div>
        <div class="my-4 font-sans text-gray-800">{{$post->body}}</div>
        @can('delete', $post)
        <form method="post" action="{{route('posts.destroy', $post->id)}}">
            @csrf
            @method('DELETE')
            <button>Delete</button>
        </form>
        @endcan
        <div>
            <div class="flex">
                @if (!$post->likedBy(auth()->user()))
                <form class="my-12 mx-auto w-96 rounded-md" action="{{route('posts.likes', $post->id)}}" method="post">
                    @csrf
                    <button class="text-blue-600" type="submit">Like</button>
                </form>
                @else
                <form class="my-12 mx-auto w-96 rounded-md" action="{{route('posts.likes', $post->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="text-blue-600" type="submit">Dislike</button>
                </form>
                @endif
                <div>
                    {{$post->likes->count()}} {{Str::plural('like', $post->likes->count())}}
                </div>
            </div>
        </div>
    </div>
</div>
