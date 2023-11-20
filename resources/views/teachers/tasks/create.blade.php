<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Task') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('tasks.store') }}">
                        @csrf

                        <!-- Title -->
                        <div>
                            <x-input-label for="title" :value="__('Task Title')" />
                            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus autocomplete="title" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <!-- Due Date -->
                        <div class="mt-4">
                            <x-input-label for="dueDate" :value="__('Due Date')" />
                            <x-text-input id="dueDate" class="block mt-1 w-full" type="text" name="dueDate" :value="old('dueDate')" />
                            <x-input-error :messages="$errors->get('dueDate')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Add New Task') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $( function() {
            $( "#dueDate" ).datepicker({ dateFormat: 'dd/mm/yy' });
        } );
    </script>
</x-app-layout>
