    {{-- Care about people's approval and you will be their prisoner. --}}
    {{-- <div class="container-fluid"> --}}
    <div class="row justify-content-center">
        <div class="col-12 col-md-2 text-center">
            <h2 id="count">{{ $count }}</h2>
        </div>

        <div class="col-12 col-md-2 text-center">
            <button class="btn btn-primary" id="increment" wire:click="increment">
                +
            </button>
        </div>

        <div class="col-12 col-md-2 text-center">
            <button class="btn btn-primary" id="decrement" wire:click="decrement">
                -
            </button>
        </div>


    </div>
    {{-- </div> --}}
