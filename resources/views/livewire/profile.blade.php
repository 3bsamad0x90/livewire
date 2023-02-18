<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Profile Information
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="updateProfile">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="required">Name</label>
                            {{-- first way to send more request to sever --}}
                            {{-- <input wire:model.debounce.500ms="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"> --}}

                            {{-- Second way to send more request to sever --}}
                            <input wire:model.lazy="user.name" type="text" class="form-control @error('user.name') is-invalid @enderror" id="name" name="name">

                            {{-- Third way to send more request to sever --}}
                            {{-- <input wire:model.defer="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"> --}}
                            @error('user.name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input wire:model.lazy="user.email" type="email" class="form-control @error('user.email') is-invalid @enderror" id="email" name="user.email">
                            @error('user.email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger">Update</button>
                        </div>
                        @if($success)
                        <div class="alert alert-success mt-2">
                            Successfully updated profile!
                        </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
