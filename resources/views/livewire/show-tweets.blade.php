<section >
    <div class="bg-white p-4 shadow-xl overflow-hidden rounded-xl">
        <h2 class="text-lg font-bold pb-4">Tweets</h2>

        @error('content')
            <div class="bg-orange-200 p-1 my-1 rounded">
                <p>{{ $message }}</p>
            </div>
        @enderror

        <form autocomplete="off" method="post" wire:submit.prevent="create">
            <textarea class="w-full" name="content" id="content" cols="30" rows="4" placeholder="Escreva um novo tweet!" wire:model="content"></textarea>
            <button class="bg-blue-700 text-white p-1 px-3 rounded hover:bg-blue-900" type="submit">Criar Tweet</button>
        </form>
    </div>

    @foreach ($tweets as $tweet)
        <div class="bg-white p-4 my-4 shadow-xl overflow-hidden rounded-xl">
            <div class="flex">
                <div class="w-2/8 min-w-[40px]">
                    @if ($tweet->user->photo)
                        <img src="{{ url("storage/{$tweet->user->photo}") }}" alt="{{ $tweet->user->name }}" class="rounded-full h-8 w-8">
                    @else
                        <img src="{{ url('imgs/no-image.png') }}" alt="{{ $tweet->user->name }}">
                    @endif
                </div>
                <div class="w-6/8 pl-2">
                    <p class="font-bold ">{{$tweet->user->name}}</p>
                    <p class="break-all ">{{$tweet->content}}</p>
                    @if ($tweet->likes->count())
                        <button class="bg-red-500 hover:bg-red-700 px-2 text-white rounded-full" wire:click.prevent="unlike({{$tweet->id}})">Descurtir</button>
                    @else
                        <button class="bg-green-500 hover:bg-green-700 px-2 text-white rounded-full" wire:click.prevent="like({{$tweet->id}})">Curtir</button>
                    @endif

                </div>

            </div>
        </div>
    @endforeach

    <div class="bg-white p-4 my-4 shadow-xl overflow-hidden rounded-xl">
        {{ $tweets->links() }}
    </div>

</section>
