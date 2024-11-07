    <form wire:submit="storePost" class="shadow p-5 bg-white">
    <div class="mb-3">
        <label for="
        " class="form-label">
            Titolo
        </label>
        <input type="text" class="form-control" wire:model="title" id="title">
    </div>

    <div class="mb-3">
        <label for="
    " class="form-label">
            Contenuto
        </label>
        <textarea class="form-control" id="content" cols="30" rows="10" wire:model="content"></textarea>
    </div>
    <div class="mt-3 text-center">
        <button type="submit"  class="btn btn-info">
            Inserisci Post
        </button>
    </div>
</form>
