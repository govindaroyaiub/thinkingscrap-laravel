<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="{{ URL::asset('assets/vendors/jquery/jquery-3.4.1.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<style>
    .preview_image p {
        text-align: center;
    }

    #images {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .image_box {
        width: 45%;
    }

    img {
        width: 100%;
    }

    .image_name {
        display: block;
        font-size: 14px;
        text-align: center;
    }

</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Our Works -> Add New
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 antialiased">
            @include('alert')

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-2 py-2">
                <form action="/works/add-new" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="p-4 text-gray-900">
                        <label for="clients" class="block mb-2 font-medium text-gray-900 dark:text-white">Select a client</label>
                        <select id="client" name="client_id"
                            class="bg-gray-50 border js-example-basic-single border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Choose a client</option>
                            @foreach ($clients as $client)
                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="p-4 text-gray-900">
                        <label for="Summary">Summary</label>
                        <textarea type="text" class="mt-1 block w-full rounded" name="summary" rows="3"></textarea>
                    </div>

                    <div class="p-4 text-grey-900">
                        <label class="block mb-2 font-medium text-gray-900 dark:text-white" for="multiple_files">Upload
                            multiple files</label>
                        <input
                            class="block w-full text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none dark:placeholder-gray-400"
                            id="multiple_files" type="file" name="files[]" multiple>
                    </div>
                    <div class="container preview_image">
                        <!-- It will show the total number of files selected -->
                        <p><span id="total-images">0</span> File(s) Selected</p>

                        <!-- All images will display inside this div -->
                        <div id="images"></div>
                    </div>
                    <div class="px-4">
                        <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
                        <button type="button" onclick="window.location.href='/works';" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    $(document).ready(function () {
        $('.js-example-basic-single').select2();
    });

    const fileInput = document.getElementById('multiple_files');
    const images = document.getElementById('images');
    const totalImages = document.getElementById('total-images');

    // Listen to the change event on the <input> element
    fileInput.addEventListener('change', (event) => {
        // Get the selected image file
        const imageFiles = event.target.files;

        // Show the number of images selected
        totalImages.innerText = imageFiles.length;

        // Empty the images div
        images.innerHTML = '';

        if (imageFiles.length > 0) {
            // Loop through all the selected images
            for (const imageFile of imageFiles) {
                const reader = new FileReader();

                // Convert each image file to a string
                reader.readAsDataURL(imageFile);

                // FileReader will emit the load event when the data URL is ready
                // Access the string using reader.result inside the callback function
                reader.addEventListener('load', () => {
                    // Create new <img> element and add it to the DOM
                    images.innerHTML += `
                <div class="image_box">
                    <img src='${reader.result}'>
                    <span class='image_name'>${imageFile.name}</span>
                </div>
            `;
                });
            }
        } else {
            // Empty the images div
            images.innerHTML = '';
        }
    });

</script>
