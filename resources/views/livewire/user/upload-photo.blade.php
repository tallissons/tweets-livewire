<section>
    <div class="bg-white p-4 shadow-xl rounded-xl">
        <h2 class="text-lg font-bold pb-4">Atualizar Foto Perfil</h2>
        <form action="" method="post" wire:submit.prevent="storagePhoto">
            <div class="max-w-[150px] max-h-[150px] mb-2">
                @if ($photo)
                    <img src="{{ $photo->temporaryUrl() }}" class="border-2 max-w-[150px] max-h-[150px] ">
                @else
                    @if (auth()->user()->photo)
                        <img src="{{ url("storage/".auth()->user()->photo) }}" alt="{{ auth()->user()->name }}" class="border-2 max-w-[150px] max-h-[150px] ">
                    @else
                        <img src="{{ url('imgs/no-image.png') }}" alt="{{ auth()->user()->name }}" class="border-2 max-w-[150px] max-h-[150px] ">
                    @endif
                @endif
            </div>

            <input class="mb-2" type="file" id="photo" wire:model="photo">

            @error('photo')
                <div class="bg-orange-200 p-1 my-1 rounded border-l-4 border-orange-500">
                    <p>{{ $message }}</p>
                </div>
            @enderror

            <br>
            <button class="bg-blue-700 text-white p-1 px-3 rounded hover:bg-blue-900"  type="submit">Atualizar Foto</button>
        </form>
    </div>
</section>
