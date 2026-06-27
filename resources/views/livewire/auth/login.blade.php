<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <h4 class="card-title mb-4">Login</h4>

                    <form wire:submit.prevent="login">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input wire:model="email" type="email" class="form-control" id="email" required autofocus>
                            @error('email') <div class="text-danger small">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input wire:model="password" type="password" class="form-control" id="password" required>
                            @error('password') <div class="text-danger small">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3 form-check">
                            <input wire:model="remember" type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-sm">Log in</button>
                        </div>

                        <div class="mt-3 text-center">
                            <a href="{{ route('password.request') }}" class="text-decoration-none">Forgot your
                                password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>