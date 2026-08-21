<div class="card shadow-sm border-danger mt-4">
    <div class="card-body">
        <h5 class="card-title text-danger">Delete Account</h5>
        <p class="text-muted">Once your account is deleted, all of its resources and data will be permanently deleted.
        </p>

        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
            data-bs-target="#confirmUserDeletionModal">
            <i class="bi bi-trash3 me-1"></i> Delete Account
        </button>

        <!-- Modal -->
        <div class="modal fade" id="confirmUserDeletionModal" tabindex="-1"
            aria-labelledby="confirmUserDeletionModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form wire:submit.prevent="deleteUser">
                        <div class="modal-header">
                            <h5 class="modal-title" id="confirmUserDeletionModalLabel">Are you sure?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>
                                Please enter your password to confirm you would like to permanently delete your account.
                            </p>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input wire:model="password" type="password" class="form-control" id="password"
                                    required>
                                @error('password') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="bi bi-trash3 me-1"></i> Delete Account
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>