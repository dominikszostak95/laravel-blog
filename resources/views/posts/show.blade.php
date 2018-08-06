

@extends ('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">
        <h1>{{ $post->title }}</h1>

        @if (count($post->tags))
            <ul>
                @foreach ($post->tags as $tag)
                    <li>
                        <a href="/posts/tags/{{ $tag->name }}">
                            {{ $tag->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif

        {{ $post->body }}

        <hr>

        <div class="comments">
            <ul class="list-group">
                    @foreach ($post->comments as $comment)
                    <li class="list-group-item">
                            <strong>
                                {{ $comment->created_at->diffForHumans() }}:
                            </strong>
                            {{ $comment->body }}
                    </li>
                    @endforeach
            </ul>
        </div>

        {{-- add comments section --}}
        <hr>

                <form method="POST" action="/posts/{{ $post->id }}/comments">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="body">Comment:</label>
                        <textarea id="body" name="body" class="form-control" required>
                        </textarea>
                    </div>

                    <div class="form-group">
                        <button type="Submit" class="btn btn-primary">Add</button>
                    </div>
                </form>

                @include('layouts.errors')

    </div>

@endsection