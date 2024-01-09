<div>
    <link rel="stylesheet" href="{{ asset('task/style.css') }}">

    <div class="d-flex justify-content-center align-items-center" id="div-master" style="height: 400px">

        <div class="card">
            <div class="text-center m-4">
                <h1 style="font-size: 25px">Nova Tarefa</h1>
                {{-- <h2 style="font-size:10px;">{{$task}}</h2> --}}
            </div>
            <form class="m-4" method="POST" action="{{ route('tasks.store') }}">
                @csrf
                <div class="mb-3">
                    <textarea rows="1" id="txt" autofocus class="form-control" name="task" wire:model.live="task"
                        aria-describedby="helpId"> {{ @old('task') }} </textarea>
                    <div class="mt-3">
                        @error('name')
                            <span style="font-size: 13px" class="badge bg-warning">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <input type="datetime-local" value="{{ @old('task') }}" name="date"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 ">
                        <div class="mb-3">
                            <select name="categorie" class="form-control">
                                @foreach ($categories as $categorie)
                                    <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="text-end mb-3">
                    <a id="btn-subtask" class="btn btn-primary" style="color:white;">Subtarefa <i
                            class="ti ti-plus"></i> </a>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#task-id"
                        data-bs-whatever="@mdo"> Categoria <i class="ti ti-plus"></i></button>
                </div>

                <div id="div-subtask">

                    {{-- <div class="mb-3">
                        <input id="subtask-input" type="text" placeholder="Subtarefa" name="subtask[]"
                            class="form-control">
                    </div> --}}

                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="task-id" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nova Categoria</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit="save">
                        <div class="mb-3">
                            <input type="text" class="form-control" value="{{ $categorie_name }}"
                                wire:model="categorie_name" required name="categorie_name" placeholder="Nome da categoria">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal"
                        aria-label="Close">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('task/js.js') }}"></script>
</div>
