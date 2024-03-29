<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Employees -> Edit -> {{ $data['name'] }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 antialiased">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-2 py-2">
                <form action="/employees/edit/{{ $data['id'] }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="p-4 text-gray-900">
                        <label for="Employee Name">Employee Name</label>
                        <input type="text" class="mt-1 block w-full rounded" name="name" value="{{ $data['name'] }}">
                    </div>
                    <div class="p-4 text-gray-900">
                        <label for="Employee Designation">Employee Designation</label>
                        <input type="text" class="mt-1 block w-full rounded" name="designation" value="{{ $data['designation'] }}">
                    </div>
                    <div class="p-4 text-gray-900">
                        <label for="Employee Department">Employee Department</label>
                        <input type="text" class="mt-1 block w-full rounded" name="department" value="{{ $data['department'] }}">
                    </div>
                    <div class="p-4 text-gray-900">
                        <label for="Employee Statement">Employee Statement</label>
                        <textarea class="mt-1 block w-full rounded" name="statement" rows="2">{{ $data['statement'] }}</textarea>
                    </div>
                    <div class="p-4 text-gray-900">
                        <label for="Employee Photo">Employee Photo</label>
                        <input type="file" class="mt-1 block w-full rounded" accept="image/jpeg, image/png, image/jpg" name="photo" id="photo">
                    </div>
                    <div class="mt-2 py-2 px-2" id="image-preview" style="text-align: center; display: flex; align-items: none; justify-content: center;">
                        <div>
                            <label for="Employee Name" class="underline">Image Preview</label>
                            <br>
                            <img src="{{ asset('employee_images/'.$data['photo']) }}" id="preview" style="width: 300px; height: auto;">
                        </div>
                    </div>
                    <div class="px-4">
                        <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
                        <button type="button" onclick="window.location.href='/employees';" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    var fileTag = document.getElementById("photo"),
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