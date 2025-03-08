<div>
    <flux:modal.trigger name="create-post">
        <flux:button class="mb-2">Create Post</flux:button>
    </flux:modal.trigger>

    <livewire:post-create/>
    <livewire:post-edit/>
    
    {{-- pop up for confirm delete --}}
    <flux:modal name="delete-post" class="min-w-[22rem]">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">
                    Delete Post?
                </flux:heading>

                <flux:subheading>
                    <p>You're about to delete the post.</p>
                    <p>This action cannot be reversed.</p>
                </flux:subheading>
            </div>

            <div class="flex gap-2">
                <flux:spacer />

                <flux:modal.close>
                    <flux:button varient="ghost">Cancel</flux:button>
                </flux:modal.close>

                <flux:button type="submit" variant="danger" wire:click="destroy()">Delete Post</flux:button>
            </div>
        </div>
    </flux:modal>

    <div class="overflow-x-auto rounded-lg border">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Body</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($posts as $post)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3 text-sm text-gray-900">{{ $post -> id }}</td>
                    <td class="px-4 py-3 text-sm text-gray-600">{{  $post -> title }}</td>
                    <td class="px-4 py-3 text-sm text-gray-600">{{ $post -> body }}</td>
                    <td class="px-4 py-3 space-x-2">
                        <flux:button size="sm" wire:click="edit({{ $post->id }})">
                            Edit
                        </flux:button>
                        <flux:button size="sm" variant="danger" wire:click="delete({{ $post->id }})">
                            Delete
                        </flux:button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>