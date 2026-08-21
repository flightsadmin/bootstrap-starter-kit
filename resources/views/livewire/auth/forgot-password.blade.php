<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <h4 class="card-title mb-2">Forgot Password</h4>
                    <p class="text-muted">Enter your email address and we'll send you a password reset link.</p>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            We have emailed your password reset link!
                        </div>
                    @endif

                    <form wire:submit.prevent="sendPasswordResetLink">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input wire:model="email" type="email" class="form-control" id="email" required autofocus>
                            @error('email') <div class="text-danger small">{{ $message }}</div> @enderror
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('login') }}" class="text-decoration-none">
                                <i class="bi bi-arrow-left me-1"></i> Back to login
                            </a>
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="bi bi-send me-1"></i> Email Password Reset Link
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>