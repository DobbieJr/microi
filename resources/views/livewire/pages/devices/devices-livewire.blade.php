<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Devices</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-end"><button class="btn btn-info"
                                    wire:click.prevent='add_modal'>Add</button></div>
                            <table class="table table-striped table-inverse table-responsive-lg">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>Name</th>
                                        <th>Details</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
{{-- @dd($devices) --}}
                                    @forelse ($devices as $item)
                                        <tr>
{{-- @dd($item) --}}
                                            <td scope="row">{{ $item->name }}</td>
                                            <td>{{ $item->details }}</td>
                                            <td> <span
                                                    class="badge text-capitalize h5 @if ($item->status == 'active') bg-success @else bg-danger @endif">{{ $item->status }}</span>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-outline-primary dropdown-toggle"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Options
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="{{route('device',$item->id)}}">View</a>
                                                        <a class="dropdown-item" href="#"
                                                            wire:click.prevent='edit_device({{ $item->id }})'>Edit
                                                        </a>
                                                        <a class="dropdown-item"
                                                            wire:click.prevent='change_status({{ $item->id }})'
                                                            href="#">
                                                            @if ($item->status == 'active')
                                                                Deactivate
                                                            @else
                                                                Activate
                                                            @endif
                                                        </a>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td scope="row" class="text-center" colspan="4">Empty</td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                            <!-- Modal -->
                            <div class="modal fade  @if ($modal) show @endif " id="exampleModal"
                                @if ($modal) style="display:block" @endif tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ $button_status }}</h5>
                                            <button type="button" wire:click.prevent='cancel' class="close"
                                                data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" wire:submit.prevent='add_device'>
                                                <div class="form-group">
                                                    <label for="">Name</label>
                                                    <input type="text" class="form-control"
                                                        wire:model.defer='name'>
                                                    @error('name')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Details</label>
                                                    <textarea class="form-control" wire:model.defer='details'></textarea>
                                                    @error('details')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- modal --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
