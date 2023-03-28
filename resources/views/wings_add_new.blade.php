<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Our Wings -> Add New
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 antialiased">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-2 py-2">
                <form action="/wings/add-new" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="p-4 text-gray-900">
                        <label for="Wings Name">Wings Name</label>
                        <input type="text" class="mt-1 block w-full rounded" name="name">
                    </div>
                    <div class="p-4 text-gray-900">
                        <label for="Wings Name">Wings Description</label>
                        <textarea type="text" class="mt-1 block w-full rounded" name="description" rows="5"></textarea>
                    </div>
                    <div class="px-4">
                        <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
                        <button type="button" onclick="window.location.href='/wings';" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
