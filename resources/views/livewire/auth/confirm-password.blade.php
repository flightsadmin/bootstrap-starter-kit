<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <h4 class="card-title mb-2">Confirm Password</h4>
                    <p class="text-muted">
                        This is a secure area of the application. Please confirm your password before continuing.
                    </p>

                    <form wire:submit.prevent="confirmPassword">
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input wire:model="password" type="password" class="form-control" id="password" required
                                autofocus>
                            @error('password') <div class="text-danger small">{{ $message }}</div> @enderror
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="bi bi-shield-lock me-1"></i> Confirm
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>