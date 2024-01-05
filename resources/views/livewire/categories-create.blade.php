<div>

    <div class="d-flex justify-content-center align-items-center" style="height: 400px">

        <div class="card w-75">
            <div class="text-center m-4">
                <h1 style="font-size: 25px">Nova categoria</h1>
            </div>
            <form class="m-4" wire:submit="save">
                @csrf
                <div class="mb-3">
                    {{-- <label for="" class="form-label">Name</label> --}}
                    <input type="text" required class="form-control" name="name" wire:model="name"
                        value="{{ @old('name') }}" aria-describedby="helpId" placeholder="Nome da categoria" />
                    <div class="mt-3">
                        @error('name')
                            <span style="font-size: 13px" class="badge bg-warning">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>

</div>
