<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Clients -> Edit -> {{ $data['name'] }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 antialiased">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-2 py-2">
                <form action="/clients/edit/{{ $data['id'] }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="p-4 text-gray-900">
                        <label for="Client Name">Client Name</label>
                        <input type="text" class="mt-1 block w-full rounded" name="name" value="{{ $data['name'] }}">
                    </div>
                    <div class="p-4 text-gray-900">
                        <label for="is_show" class="block mb-2 text-sm font-medium text-gray-900">Show Logo On Website?</label>
                            <select id="is_show" name="is_show" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="1" @if(($data['is_show']) == 1) selected @endif>Yes</option>
                            <option value="0" @if(($data['is_show']) == 0) selected @endif>No</option>
                        </select>
                    </div>
                    
                    <div class="mt-2 py-2 px-2" id="image-preview" style="text-align: center; display: flex; align-items: none; justify-content: center;">
                        <div>
                            <label for="Wings Name" class="underline">Image Preview</label>
                            <br>
                            <img src="{{ asset('client_images/'.$data['path']) }}" id="preview">
                        </div>
                    </div>
                    <div class="p-4 text-gray-900">
                        <label for="Client Logo">Client Logo</label>
                        <input type="file" class="mt-1 block w-full rounded" accept="image/jpeg, image/png, image/jpg" name="logo" id="logo">
                    </div>
                    <div class="px-4">
                        <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
                        <button type="button" onclick="window.location.href='/clients';" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    var fileTag = document.getElementById("logo"),
       preview = document.getElementById("preview");
        
    fileTag.addEventListener("change", function() {
        document.getElementById('image-preview').style.display = 'flex';
        changeImage(this);
    });

    function changeImage(input) {
    var reader;

    if (input.files && input.files[0]) {
        reader = new FileReader();

        reader.onload = function(e) {
        preview.setAttribute('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
    }
</script>