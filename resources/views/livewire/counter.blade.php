<div class="container">
    <div class="row mt-3">
        <div class="col-lg-4">
            <input type="text" class="form-control" wire:model="name">
        </div>
        <div class="col-lg-1">
            <input type="checkbox" class="form-control" wire:model="load">
        </div>
        <div class="col-lg-3">
            <select class="form-control" wire:model="greeting">
                <option>Hello</option>
                <option>Goodbye</option>
                <option>Good luck</option>
            </select>
        </div>
        <div class="col-lg-3">
            <select class="form-control" wire:model="hobby" multiple>
                <option>Play game</option>
                <option>Football</option>
                <option>Swimming</option>
            </select>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md">
            <p>{{ $greeting }} {{ $name }}, {{ implode(', ', $hobby) }} @if ($load) ! @endif </p>
        </div>
    </div>
</div>
