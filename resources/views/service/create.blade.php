<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Services') }}
        </h2>
    </x-slot>

    <div class="overflow-x-auto">
        <div class="min-w-screen bg-gray-100 flex items-center justify-center font-sans overflow-hidden mt-4">
            <div class="w-full lg:w-5/6 px-auto items-center">
                <form class="w-full items-center" method="POST" action="{{ route('service.store') }}">
                    @csrf
                    <div class="flex-col mx-auto w-3/6 mb-6 bg-white rounded-lg">
                        <div class="w-full mx-auto px-6 pt-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold py-2"
                                for="grid-first-name">
                                Name
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                                id="grid-first-name" name="name" type="text" placeholder="Name">
                        </div>
                        <div class="w-full mx-auto  px-6">
                            <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold py-2"
                                for="grid-first-name">
                                Description
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 rounded-lg text-gray-700 border py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                                id="grid-first-name" name="description" type="text" placeholder="Description">
                        </div>
                        <div class="w-full mx-auto px-6">
                            <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold py-2"
                                for="grid-first-name">
                                Upload file
                            </label>
                            <input
                                class="block w-full bg-gray-200 text-gray-700 border rounded-lg px-4 py-3 leading-tight focus:outline-none focus:bg-white file:py-2 file:px-4 file:rounded-lg file:border-none file:hover:bg-gray-500"
                                id="grid-first-name" name="file" type="file" />
                        </div>
                        <div class="flex w-full mx-auto px-6 py-3 justify-center">
                            <button type="submit"
                                class="border border-indigo-500 bg-indigo-500 text-white rounded-lg shadow-lg px-4 mt-auto py-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">Create
                                Service</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>



</x-app-layout>
