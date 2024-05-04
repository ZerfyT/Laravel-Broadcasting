<dialog id="create_user_modal" class="modal modal-bottom sm:modal-middle">
    <div class="modal-box">
        <h3 class="font-bold text-lg">Create New User</h3>
        <div class="modal-action">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
        </div>

        <form wire:submit="createUser">
            <input type="text" wire:model="name" placeholder="User Name"
                class="input input-bordered input-primary w-full max-w-xs" />
            <div>
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <input type="email" wire:model="email" placeholder="Email"
                class="input input-bordered input-primary w-full max-w-xs mt-3" />
            <div>
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex items-center justify-end mt-4">
                <button type="submit" class="btn btn-outline btn-primary">Save</button>
            </div>
        </form>
    </div>
</dialog>
