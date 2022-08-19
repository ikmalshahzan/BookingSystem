<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Services') }}
        </h2>
    </x-slot>

    <div class="overflow-x-auto">
        <div class="min-w-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-full lg:w-5/6">
                <form class="w-full max-w-lg" method="POST" action="{{route('service.store')}}">
                    @csrf 

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                             Name
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="name" type="text" placeholder="Name">
                        </div>
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                             Description
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="description" type="text" placeholder="Description">
                        </div>
                        <button type="submit"  class="border border-indigo-500 bg-indigo-500 text-white rounded-lg shadow-lg px-4 py-2 mt-8 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">Create Service</button>
                    </div>
                </form>

            </div>
        </div>
    </div>



</x-app-layout>