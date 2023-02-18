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
                            <input wire:model="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input wire:model="email" type="email" class="form-control @error('name') is-invalid @enderror" id="email" name="email">
                            @error('email')
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
