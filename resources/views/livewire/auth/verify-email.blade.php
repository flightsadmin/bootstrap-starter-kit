<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <h4 class="card-title mb-2">Verify your email</h4>
                    <p class="text-muted mb-4">Thanks for signing up! Before getting started, could you verify your
                        email address by clicking on the link we just emailed to you?</p>

                    @if (session('status') === 'verification-link-sent')
                        <div class="alert alert-success" role="alert">
                            A new verification link has been sent to your email address.
                        </div>
                    @endif

                    <div class="d-flex justify-content-between align-items-center">
                        <form wire:submit.prevent="sendVerification">
                            <button type="submit" class="btn btn-link btn-sm p-0 m-0">
                                Resend Verification Email
                            </button>
                        </form>

                        <form wire:submit.prevent="logout" class="ms-2">
                            <button type="submit" class="btn btn-link btn-sm text-danger p-0 m-0">
                                Log Out
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>