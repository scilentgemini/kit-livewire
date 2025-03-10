<div>
    <flux:modal name="create-post" class="md:w-96">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Create Post</flux:heading>
                <flux:subheading>Add details for the post.</flux:subheading>
            </div>

            <flux:input wire:model="title" label="Title" placeholder="Your title" />
            <flux:textarea wire:model='body' label="Body" placeholder="Your body" />

            <div class="flex">
                <flux:spacer />

                <flux:button wire:click='submit' type="submit" variant="primary">Save</flux:button>
            </div>
        </div>
    </flux:modal>
</div>
