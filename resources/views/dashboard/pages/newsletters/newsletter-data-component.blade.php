<div>

    <!-- Search -->
    <div class="input-group mb-2   w-25">
        <span class="input-group-text">
            <i class='bx bx-search'></i>
        </span>
        <input type="text" class="form-control" placeholder="Search..." wire:model.live='search'>
    </div>
    <!-- / Search -->
    @if (session()->has('success'))
    <div class=" alert alert-primary success-alert">{{ session('success') }}</div>
    @endif
    @if (count($newsletters) > 0)
    <!-- Table -->
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($newsletters as $newsletter)
                <tr>
                    <td>{{ $newsletter->id }}</td>
                    <td>{{ $newsletter->email }}</td>

                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"
                                    wire:click.prevent="$dispatch('newsletterDelete',{ id:{{ $newsletter->id }} })"><i
                                        class="bx bx-trash me-1"></i>
                                    Delete</a>
                                <a class="dropdown-item" href="#"
                                    wire:click.prevent="$dispatch('newsletterShow',{ id:{{ $newsletter->id }} })"><i
                                        class='bx bx-show-alt'></i>
                                    Show</a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        <hr class="">

        <div class="mt-4">
            {{ $newsletters->links() }}
        </div>
    </div>
    <!-- / Table -->
    @else
    <div class="col-12 alert alert-danger mt-4">
        No result found
    </div>
    @endif

</div>