<x-layout>
    <x-slot:heading name="title">Create Job</x-slot>

    <h1>Create a New Job</h1>
    <form>
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Profile</h2>
                <p class="mt-1 text-sm/6 text-gray-600">
                    This information will be displayed publicly so be careful what you share.
                </p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="username" class="block text-sm/6 font-medium text-gray-900">Username</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600"
                            >
                                <div class="shrink-0 select-none text-base text-gray-500 sm:text-sm/6">
                                    workcation.com/
                                </div>
                                <input
                                    type="text"
                                    name="username"
                                    id="username"
                                    class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6"
                                    placeholder="janesmith"
                                />
                            </div>
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="about" class="block text-sm/6 font-medium text-gray-900">About</label>
                        <div class="mt-2">
                            <textarea
                                name="about"
                                id="about"
                                rows="3"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                            ></textarea>
                        </div>
                        <p class="mt-3 text-sm/6 text-gray-600">Write a few sentences about yourself.</p>
                    </div>
                </div>
            </div>





        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            <button
                type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
            >
                Save
            </button>
        </div>
    </form>
</x-layout>
