<div>
    <div class="d-flex justify-content-center align-items-center">
        <div class="card w-100">
            <div class="text-center p-4">
                <h1 style="font-size: 25px">Todas as Categorias</h1>
            </div>
            <div class="row px-3 mb-2">
                <div class="col-8">
                    <input type="text" wire:model.live="query" placeholder="Buscar categoria" class="form-control">
                </div>
                <div class="col-4">
                    <a href="{{ route('categories.create') }}" style="border: none" class="btn">
                        <i class="ti ti-plus"></i>
                    </a>
                </div>
            </div>
            @if (sizeof($categories) != 0)

                <div class="table-responsive p-2">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Categoria</th>
                                <th scope="col">Data de criação</th>
                                <th scope="col">Data de atualização</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $categorie)
                                <tr class="">
                                    <td scope="row">{{ $categorie->name }}</td>
                                    <td>{{ $categorie->created_at }}</td>
                                    <td>{{ $categorie->updated_at }}</td>
                                    <td>
                                        <button type="button" class="btn" style="border:none;"
                                            data-bs-toggle="modal" data-bs-target="{{ "#show-$categorie->id" }}"
                                            data-bs-whatever="@mdo">
                                            <i class="ti ti-settings"></i>
                                        </button>

                                        <div class="modal fade" id="{{ "show-$categorie->id" }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">

                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                            Edição de categoria
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('categories.update', $categorie->id) }}"
                                                            method="post">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <input type="text" required class="form-control"
                                                                    name="name" value="{{ $categorie->name }}"
                                                                    aria-describedby="helpId"
                                                                    placeholder="Alterar o nome da categoria" />
                                                                <div class="mt-3">
                                                                    @error('name')
                                                                        <span style="font-size: 13px"
                                                                            class="badge bg-warning">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-bs-dismiss="modal" aria-label="Close"
                                                            type="submit" class="btn btn-primary">Editar</button>
                                                        </form>
                                                        <form action="{{ route('categories.destroy', $categorie->id) }}"
                                                            method="post">
                                                            @csrf
                                                            <button data-bs-dismiss="modal" aria-label="Close"
                                                                class="btn btn-danger">Apagar</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            @else
                <div class="text-center mt-3 mb-3">
                    <h1 style="font-size: 20px">Nenhuma categoria foi encontrada</h1>
                </div>
        </div>
        @endif

    </div>
</div>

{{ $categories->links() }}
</div>
