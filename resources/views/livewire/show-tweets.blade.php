<div>
    Show Tweets

    <p>{{$message}}</p>

    <form action="" method="post" wire:submit.prevent="create">
        <input type="text" name="message" id="message" cols="30" rows="10" wire:model="message">
        <button type="submit">Criar Tweet</button>
    </form>
    <textarea name="message" id="message" cols="30" rows="10" wire:model="message"></textarea>

    <br>

    @foreach ($tweets as $tweet)
        {{$tweet->user->name}} - {{$tweet->content}} <br>
    @endforeach
</div>
