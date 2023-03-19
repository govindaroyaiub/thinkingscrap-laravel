<link rel="stylesheet"
        href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Our Wings
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 antialiased">
            @include('alert')

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="/wings/add-new" style="float: right; padding: 10px 10px 10px 10px; margin-right: 10px; text-decoration: underline;">Add New</a>                
                <div class="p-6 text-gray-900">
                    <table id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            @foreach ($data as $row)
                            <tr>
                                <td data-label="Name">{{ $i++ }}</td>
                                <td data-label="Name">{{ $row->name }}</td>
                                <td data-label="Description">{{ $row->description }}</td>
                                <td data-label="Action">
                                    <div class="flex">
                                        <a href="/wings/edit/{{ $row->id }}" style="padding: 10px 10px 10px 10px; margin-right: 10px; text-decoration: underline;">Edit</a>     
                                        <a href="/wings/delete/{{ $row->id }}" onclick="return confirm('Are you sure you want to delete?')" style="padding: 10px 10px 10px 10px; margin-right: 10px; text-decoration: underline;">Delete</a>     
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script src="{{ URL::asset('assets/vendors/jquery/jquery-3.4.1.js') }}"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>