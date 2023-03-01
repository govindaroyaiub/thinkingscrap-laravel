<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="/dasboard/{{ $data['id'] }}" method="POST" enctype="multipart/form-data">
                    <div class="p-4 text-gray-900">
                        Company Name: <input type="text" class="mt-1 w-full rounded" name="name"
                            value="{{ $data['name'] }}">
                    </div>
                    <div class="p-4 text-gray-900">
                        Phone: <input type="text" class="mt-1 w-full rounded" name="name" value="{{ $data['phone'] }}">
                    </div>
                    <div class="p-4 text-gray-900">
                        Address: <input type="text" class="mt-1 w-full rounded" name="name"
                            value="{{ $data['address'] }}">
                    </div>
                    <div class="p-4 text-gray-900">
                        Email: <input type="text" class="mt-1 w-full rounded" name="name" value="{{ $data['email'] }}">
                    </div>
                    <div class="p-4 text-gray-900">
                        Who We Are: <textarea type="text" class="mt-1 w-full rounded" name="name"
                            rows="5">{{ $data['who_we_are'] }}</textarea>
                    </div>
                    <div class="p-4 text-gray-900">
                        What We Do: <textarea type="text" class="mt-1 w-full rounded" name="name"
                            rows="5">{{ $data['what_we_do'] }}</textarea>
                    </div>
                    <div class="p-4 text-gray-900">
                        <button type="submit" class="mt-2 rounded px-2 py-2 text-white"
                            style="background-color: rgb(105, 187, 105)">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
