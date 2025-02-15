<x-layout>
    <x-slot:heading name="title">Edit Job: {{ $job->title  }} </x-slot>

    <form method="POST" action="/jobs/{{$job->id}}" class="space-y-12">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white px-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600"
                            >

                                <input
                                    type="text"
                                    name="title"
                                    id="title"
                                    value="{{ $job->title }}"
                                    class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6"
                                    placeholder="Shift leader"
                                     required
                                />
                            </div>
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white px-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600"
                            >

                                <input
                                    type="text"
                                    name="salary"
                                    value="{{ $job->salary }}"
                                    id="salary"
                                    class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6"
                                    placeholder="$50.000"
                                />
                            </div>
                        </div>
                    </div>
                    @if($errors->any())
                        <ul>
                            @foreach($errors->all() as $error)
                                <li class="text-red-500">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        <div class="mt-6 flex items-center justify-bewteen gap-x-6">
            <div class="flex items-center justify-start gap-x-6">
                <button form="delete-form" class="text-sm/6 font-semibold bg-red-200 hover:bg-red-100 rounded-md px-3 py-2 text-red-500">
                    Delete
                </button>
            </div>
            <a href="/jobs/{{$job ->id}}" type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <button
                type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
            >
              Update
            </button>
        </div>
    </form>

    <form method="POST" action="/jobs/{{$job->id}}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')

    </form>
</x-layout>
