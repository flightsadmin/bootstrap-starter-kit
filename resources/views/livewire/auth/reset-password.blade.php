<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <h4 class="card-title mb-4">Reset Password</h4>

                    <form wire:submit.prevent="resetPassword">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input wire:model="email" type="email" class="form-control" id="email" required>
                            @error('email') <div class="text-danger small">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">New Password</label>
                            <input wire:model="password" type="password" class="form-control" id="password" required>
                            @error('password') <div class="text-danger small">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input wire:model="password_confirmation" type="password" class="form-control"
                                id="password_confirmation" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="bi bi-key me-1"></i> Reset Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>