<div>
    <div class="d-flex justify-content-center align-items-center flex-column">
        <div class="card w-100">
            <div class="d-flex flex-column">
                <div class="text-center mt-4">
                    <h1>Tarefas</h1>
                </div>

                <div class="m-3 text-center text-md-start" id="control-buttons">
                    <button class="btn" wire:click="set_filter({{ 0 }})">Todos</button>
                    <button class="btn" wire:click="set_filter({{ 1 }})">Concluídos</button>
                    <button class="btn" wire:click="set_filter({{ 2 }})">Não Concluídos</button>
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
                                <button class="btn" wire:click="uncheck({{ $task }})"
                                    style="color: red; border:none;" title="Desmarcar como concluído">
                                    <i class="ti ti-checks mt-2"></i>
                                </button>
                            @else
                                <button class="btn" wire:click="check({{ $task }})"
                                    style="color: green; border:none;" title="Marcar como concluído">
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
                                        <form method="POST" action="{{ route('subtasks.store', $task->id) }}">
                                            @csrf
                                            <div class="mb-3">
                                                <textarea class="form-control" id="message-text" name="subtask"></textarea>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button data-bs-dismiss="modal" type="submit"
                                            class="btn btn-primary">Salvar</button>
                                        </form>
                                        <a style="color:white;" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Fechar</a>
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
                                                @if ($subtask->completed)
                                                    <button class="btn" style="color: red; border:none;"
                                                        wire:click="uncheck_subtask({{ $subtask }})">
                                                        <i class="ti ti-checks mt-2"></i>
                                                    </button>
                                                @else
                                                    <button class="btn" style="color: green; border:none;"
                                                        wire:click="check_subtask({{ $subtask }})">
                                                        <i class="ti ti-check mt-2"></i>
                                                    </button>
                                                @endif
                                                <button class="btn"
                                                    wire:click="delete_subtask({{ $subtask }})">
                                                    <i class="ti ti-trash mt-2"></i>
                                                </button>
                                                <form action="{{ route('subtasks.update', $subtask->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <button class="btn">
                                                        <i class="ti ti-pencil mt-2"></i>
                                                    </button>
                                            </div>
                                            <div>
                                                <textarea cols="200" rows="3" class="form-control" name="subtask">{{ $subtask->subtask }}</textarea>
                                            </div>
                                            </form>
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
