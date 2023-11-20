<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tasks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if(session()->has('message'))
                        <div class="py-2 px-2 mb-3 rounded-md bg-green-600 text-white">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    <table class="table w-full">
                        <thead>
                        <tr class="border-b-2 border-gray-400">
                            <th scope="col">Task</th>
                            <th scope="col" class="text-right">Created On</th>
                            <th scope="col" class="text-right">Due Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tasks as $task)
                            <tr class="border-b-2 border-gray-200">
                                <td class="py-2">{{ $task->title }}</td>
                                <td class="text-right">{{ $task->created_at }}</td>
                                <td class="text-right">{{ $task->dueDate }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <a href="{{ route('tasks.create') }}" class="px-3">
                    <x-primary-button class="ms-3">
                        {{ __('Add New Task') }}
                    </x-primary-button>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
