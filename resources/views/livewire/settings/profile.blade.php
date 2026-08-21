<x-layouts.settings>
    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="card-title">Profile Information</h5>
            <p class="text-muted">Update your account's profile information and email address.</p>

            <form wire:submit.prevent="updateProfileInformation" class="mt-4">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input wire:model="name" type="text" class="form-control" id="name" required>
                    @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input wire:model="email" type="email" class="form-control" id="email" required>
                    @error('email') <div class="text-danger small">{{ $message }}</div> @enderror

                    @if (auth()->user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !auth()->user()->hasVerifiedEmail())
                        <div class="mt-2">
                            <p class="text-muted">
                                Your email address is unverified.
                                <button type="button" class="btn btn-link btn-sm p-0 m-0 align-baseline"
                                    wire:click="resendVerificationNotification">
                                    Click here to re-send the verification email.
                                </button>
                            </p>

                            @if (session('status') === 'verification-link-sent')
                                <p class="text-success small">A new verification link has been sent to your email address.</p>
                            @endif
                        </div>
                    @endif
                </div>

                <div>
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="bi bi-check-lg me-1"></i> Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Delete User Form -->
    <livewire:settings.delete-user-form />
</x-layouts.settings>