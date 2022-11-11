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
        {{$tweet->user->name}} - {{$tweet->content}} <br>
    @endforeach

    <br>
    <div>
        {{ $tweets->links() }}
    </div>
</div>
