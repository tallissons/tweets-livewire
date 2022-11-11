<div>
    Show Tweets

    <p>{{$message}}</p>

    <textarea name="message" id="message" cols="30" rows="10" wire:model="message"></textarea>

    <br>

    @foreach ($tweets as $tweet)
        {{$tweet->user->name}} - {{$tweet->content}} <br>
    @endforeach
</div>
