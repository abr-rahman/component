<x-app-layout>
    <x-container class="flex min-h-full items-center justify-center">
        <x-form.small-container class="w-full max-w-md space-y-8">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <x-form.input-form-group>
                    <x-form.label>{{ __('Category Name') }}</x-form.label>
                    <x-form.input name="name" placeholder="Category Name" />
                    <x-form.label>{{ __('Category Code') }}</x-form.label>
                    <x-form.input type="number" name="code" placeholder="Category Code" />
                    <x-button.primary-button>{{ __('Submit') }}</x-button.primary-button >
                </x-form.input-form-group>
            </form>
        </x-form.small-container>
    </x-container>
</x-app-layout>
