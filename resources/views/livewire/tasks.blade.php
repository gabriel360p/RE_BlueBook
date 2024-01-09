<div>
    <div class="d-flex justify-content-center align-items-center flex-column">
        <div class="card w-100">
            <div class="d-flex flex-column">
                <div class="text-center mt-4">
                    <h1>Tarefas</h1>
                </div>

                <div class="m-3 text-center text-md-start" id="control-buttons">
                    <button class="btn">Todos</button>
                    <button class="btn">Concluídos</button>
                    <button class="btn">Não concluídos</button>
                </div>

            </div>
        </div>
        @foreach ($tasks as $task)
            {{-- Listagem de tarefas e subtarefas --}}
            <div class="card w-100">
                <div>
                    <div class=" m-3 d-flex align-items-center -content-center">
                        <div style="margin-right: 20px; display:flex; flex-direction:column;">
                            @if ($task->completed)
                                <button class="btn" wire:click="uncheck({{ $task }})">
                                    <i class="ti ti-checks mt-2"></i>
                                </button>
                            @else
                                <button class="btn" wire:click="check({{ $task }})">
                                    <i class="ti ti-check mt-2"></i>
                                </button>
                            @endif
                            <button class="btn" wire:click="delete({{ $task }})">
                                <i class="ti ti-trash mt-2"></i>
                            </button>
                            <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                                @csrf
                                <button class="btn">
                                    <i class="ti ti-pencil mt-2"></i>
                                </button>
                        </div>
                        <div>
                            <textarea cols="200" rows="3" class="form-control" name="task">{{ $task->task }}</textarea>
                            <div class="mt-2 row">
                                <div class="col-6">
                                    <input type="datetime-local" value="{{ $task->date }}" name="date"
                                        class="form-control">
                                </div>

                                <div class="col-6">
                                    <select name="categorie" class="form-control" id="">
                                        <option value="{{ $task->categorie->id }}" selected>
                                            {{ $task->categorie->name }}
                                        </option>
                                        @foreach (\App\Models\Categorie::where('user_id', Auth::user()->id)->get() as $categorie)
                                            <option value="{{ $categorie->id }}">
                                                {{ $categorie->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div>

                        <p class="d-inline-flex gap-1">
                            @if (sizeof($task->subtasks) != 0)
                                <button class="btn" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#task-id-subtasks" aria-expanded="false"
                                    aria-controls="task-id-subtasks">
                                    <i class="ti ti-arrow-narrow-down"></i>Subtarefas
                                </button>
                            @endif

                            {{-- ------------------------------------------------------------------------------------------ --}}

                            {{-- MODAL de criação de subtarefa --}}
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#task-id"
                                data-bs-whatever="@mdo"> <i class="ti ti-plus"></i>Subtarefa</button>

                        <div class="modal fade" id="task-id" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Nova Subtarefa</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <textarea class="form-control" id="message-text"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Fechar</button>
                                        <button type="button" class="btn btn-primary">Salvar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- ------------------------------------------------------------------------------------------ --}}
                        </p>

                        @if (sizeof($task->subtasks) != 0)
                            {{-- ------------------------------------------------------------------------------------------ --}}
                            {{-- Listagem de subtarefas --}}
                            <div class="collapse" id="task-id-subtasks">
                                @foreach ($task->subtasks as $subtask)
                                    <div class="card card-body">
                                        <div class=" m-3 d-flex align-items-center -content-center">
                                            <div style="margin-right: 20px; display:flex; flex-direction:column;">
                                                <i class="ti ti-check mt-2"></i>
                                                <i class="ti ti-trash mt-2"></i>
                                                <i class="ti ti-pencil mt-2"></i>
                                            </div>
                                            <div>
                                                <textarea cols="200" class="form-control">{{ $subtask->subtask }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            {{-- ------------------------------------------------------------------------------------------ --}}
                        @endif

                    </div>
                </div>

            </div>
            {{-- ------------------------------------------------------------------------------------------ --}}
        @endforeach

    </div>
</div>
