<div>

    <flux:modal.trigger name="create-post">
        <flux:button class="mb-2">Create Post</flux:button>
    </flux:modal.trigger>

    <livewire:post-create/>
    

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
                        <button class="px-3 py-1.5 text-xs font-medium text-white bg-blue-600 hover:bg-blue-700 rounded-md">
                            Edit
                        </button>
                        <button class="px-3 py-1.5 text-xs font-medium text-white bg-red-600 hover:bg-red-700 rounded-md">
                            Delete
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>