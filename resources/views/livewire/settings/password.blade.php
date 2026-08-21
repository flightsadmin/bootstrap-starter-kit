<x-layouts.settings>
    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="card-title">Update Password</h5>
            <p class="text-muted">Ensure your account is using a long, random password to stay secure.</p>

            <form wire:submit.prevent="updatePassword" class="mt-4">
                <div class="mb-3">
                    <label for="current_password" class="form-label">Current Password</label>
                    <input wire:model="current_password" type="password" class="form-control" id="current_password"
                        required>
                    @error('current_password') <div class="text-danger small">{{ $message }}</div> @enderror
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

                <div>
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="bi bi-check-lg me-1"></i> Update Password
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.settings>