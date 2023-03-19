<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

   
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @include('alert')
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900">
                    <label style="font-weight: bold;">Company Name:</label>
                    <input type="text" class="mt-1 w-full rounded" name="name" readonly
                        value="{{ $data['name'] }}">
                </div>
                <form action="/dashboard/{{ $data['id'] }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="p-4 text-gray-900">
                        <label style="font-weight: bold;">Metatag Description:</label>
                        <input type="text" class="mt-1 w-full rounded" name="meta_description"
                            value="{{ $data['meta_description'] }}">
                    </div>
                    <div class="p-4 text-gray-900">
                        <label style="font-weight: bold;">Phone:</label>
                        <input type="text" class="mt-1 w-full rounded" name="phone" value="{{ $data['phone'] }}">
                    </div>
                    <div class="p-4 text-gray-900">
                        <label style="font-weight: bold;">Address:</label>
                        <input type="text" class="mt-1 w-full rounded" name="address"
                            value="{{ $data['address'] }}">
                    </div>
                    <div class="p-4 text-gray-900">
                        <label style="font-weight: bold;">Email:</label>
                        <input type="text" class="mt-1 w-full rounded" name="email" value="{{ $data['email'] }}">
                    </div>
                    <div class="p-4 text-gray-900">
                        <label style="font-weight: bold;">Who We Are:</label>
                        <textarea type="text" class="mt-1 w-full rounded" name="who_we_are"
                            rows="5">{{ $data['who_we_are'] }}</textarea>
                    </div>
                    <div class="p-4 text-gray-900">
                        <label style="font-weight: bold;">What We Do:</label>
                        <textarea type="text" class="mt-1 w-full rounded" name="what_we_do"
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
