<div>
    Show Tweets

    <p>{{$content}}</p>

    <form autocomplete="off" method="post" wire:submit.prevent="create">
        <input type="text" name="content" id="content" cols="30" rows="10" wire:model="content">
        @error('content')
            {{ $message }}
        @enderror
        <button type="submit">Criar Tweet</button>
    </form>
    <br>

    @foreach ($tweets as $tweet)
        <div class="flex">
            <div class="w-2/8">
                @if ($tweet->user->photo)
                    <img src="{{ url("storage/{$tweet->user->photo}") }}" alt="{{ $tweet->user->name }}" class="rounded-full h-8 w-8">
                @else
                    <img src="{{ url('imgs/no-image.png') }}" alt="{{ $tweet->user->name }}">
                @endif
                {{$tweet->user->name}}
            </div>
            <div class="w-6/8">
                {{$tweet->content}}
                @if ($tweet->likes->count())
                    <a href="" wire:click.prevent="unlike({{$tweet->id}})">Descurtir</a>
                @else
                    <a href="" wire:click.prevent="like({{$tweet->id}})">Curtir</a>
                @endif
            </div>
        </div>
        <br>
    @endforeach

    <br>
    <div>
        {{ $tweets->links() }}
    </div>
</div>
