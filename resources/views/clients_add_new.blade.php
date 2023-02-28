<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Clients -> Add New
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 antialiased">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-2 py-2">
                <form action="/clients/add-new" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="Client Name">Client Name</label>
                        <input type="text" class="mt-1 block w-full rounded" name="name">
                    </div>
                    <br>
                    <div>
                        <label for="Client Logo">Client Logo</label>
                        <input type="file" class="mt-1 block w-full rounded" accept="image/jpeg, image/png, image/jpg" name="logo" id="logo">
                    </div>
                    <div class="mt-2 py-2 px-2" id="image-preview" style="text-align: center; display: none; align-items: none; justify-content: center;">
                        <br>
                        <br>
                        <div>
                            <label for="Wings Name" class="underline">Image Preview</label>
                            <br>
                            <img src="" id="preview">
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="mt-2 rounded px-2 py-2 text-white" style="background-color: rgb(105, 187, 105)">Submit</button>
                    <button type="button" onclick="window.location.href='/clients';" class="mt-2 rounded px-2 py-2 text-white" style="background-color: rgb(230, 77, 57)">Cancel</button>
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