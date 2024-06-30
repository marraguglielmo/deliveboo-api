<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{-- {{ __('Delete Account') }} --}}
            Elimina account
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{-- {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }} --}}
            Una volta eliminato l'account, tutte le risorse e i dati ad esso collegati saranno eliminati in modo
            permanente. Prima di eliminare il tuo account, scarica ogni dato o informazione che vorresti mantenere.
        </p>
    </header>

    <!-- Modal trigger button -->
    <button type="button" class="btn btn-danger mt-4" data-bs-toggle="modal" data-bs-target="#delete-account">
        {{-- {{ __('Delete Account') }} --}}
        Elimina account
    </button>

    <!-- Modal Body -->
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div class="modal fade" id="delete-account" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="delete-account" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="delete-account">Elimina Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2 class="text-lg font-medium text-gray-900">
                        {{-- {{ __('Are you sure you want to delete your account?') }} --}}
                        Sei sicuro di voler eliminare il tuo account?
                    </h2>
                    <p class="mt-1 text-sm text-gray-600">
                        {{-- {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }} --}}
                        Una volta eliminato l'account, tutte le risorse e i dati ad esso collegati saranno eliminati in
                        modo permanente. Inserisci la tua password per confermare di voler eliminare il modo permanente
                        il tuo account.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-custom-secondary w-auto"
                        data-bs-dismiss="modal">Cancella</button>

                    <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                        @csrf
                        @method('delete')


                        <div class="input-group">

                            <input id="password" name="password" type="password" class="form-control"
                                placeholder="{{ __('Password') }}" />

                            @error('password')
                                <span class="invalid-feedback mt-2" role="alert">
                                    <strong>{{ $errors->userDeletion->get('password') }}</strong>
                                </span>
                            @enderror

                            <button type="submit" class="btn btn-danger mt-4">
                                {{-- {{ __('Delete Account') }} --}}
                                Elimina il tuo account
                            </button>
                            <!--  -->
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</section>
