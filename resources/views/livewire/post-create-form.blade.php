    <form wire:submit="storePost" class="shadow p-5 bg-white">
        @if (session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif
        <div class="mb-3">
            <label for="title" class="form-label">
                Titolo
            </label>
            <input type="text" class="form-control" wire:model="title" id="title">
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">
                Contenuto
            </label>
            <textarea class="form-control" id="content" cols="30" rows="10" wire:model="content"></textarea>
        </div>
        <div class="mt-3 text-center">
            <button type="submit" class="btn btn-info">
                Inserisci Post
            </button>
        </div>
    </form>
