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
                    <div>
                        <label for="Wings Name">Wings Name</label>
                        <input type="text" class="mt-1 block w-full rounded" name="name">
                    </div>
                    <br>
                    <div>
                        <label for="Wings Name">Wings Description</label>
                        <textarea type="text" class="mt-1 block w-full rounded" name="description" rows="5"></textarea>
                    </div>
                    <br>
                    <button type="submit" class="mt-2 rounded px-2 py-2 text-white" style="background-color: rgb(105, 187, 105)">Submit</button>
                    <button type="button" onclick="window.location.href='/wings';" class="mt-2 rounded px-2 py-2 text-white" style="background-color: rgb(230, 77, 57)">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
