<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <h4 class="card-title mb-4">Register</h4>

                    <form wire:submit.prevent="register">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input wire:model="name" type="text" class="form-control" id="name" required autofocus>
                            @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input wire:model="email" type="email" class="form-control" id="email" required>
                            @error('email') <div class="text-danger small">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input wire:model="password" type="password" class="form-control" id="password" required>
                            @error('password') <div class="text-danger small">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input wire:model="password_confirmation" type="password" class="form-control"
                                id="password_confirmation" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-sm">Register</button>
                        </div>

                        <div class="mt-3 text-center">
                            <a href="{{ route('login') }}" class="text-decoration-none">Already registered?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>