<x-app-layout>
    <x-slot name="header">
        <x-header title="Category"></x-header>
    </x-slot>
    <x-container>
        <x-table.first-table-div>
            <x-a href="{{ route('categories.create') }}" text="Create"/>
            <x-table.table>
                <x-table.thead>
                <tr>
                    <x-table.th>{{ __('Serial') }}</x-table.th>
                    <x-table.th>{{ __('Name') }}</x-table.th>
                    <x-table.th>{{ __('Code') }}</x-table.th>
                    <x-table.th>{{ __('Action') }}</x-table.th>
                </tr>
            </x-table.thead>
            <tbody>
                @foreach ($categories as $category)
                    <x-table.tr>
                        <x-table.th class="dark:text-white">{{ $loop->index +1 }} </x-table.th>
                        <x-table.td>{{ $category->name }}</x-table.td>
                        <x-table.td>{{ $category->code }}</x-table.td>
                        <x-table.td>
                            <x-button.button-group>
                                <x-button.button-group-link href="{{ route('categories.edit', $category->id) }}" class="rounded-l-lg bg-green-700">Edit</x-button.button-group-link>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <x-button.button-group-btn type="submit" class="rounded-r-md bg-red-600">Delete</x-button.button-group-btn>
                                </form>
                            </x-button.button-group>
                        </x-table.td>
                    </x-table.tr>
                @endforeach
            </tbody>
        </x-table.table>
    </x-table.first-table-div>
    </x-container>
</x-app-layout>
