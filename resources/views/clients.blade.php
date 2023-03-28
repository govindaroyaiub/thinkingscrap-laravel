<link rel="stylesheet"
        href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Clients
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 antialiased">
            @include('alert')
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="/clients/add-new" style="float: right; padding: 10px 10px 10px 10px; margin-right: 10px; text-decoration: underline;">Add New</a>   
                <div class="p-6 text-gray-900">
                    <table id="myTable" class="table-auto">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col" style="text-align: center;">Logo</th>
                                <th scope="col" style="text-align: center;">Visibility</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                            <tr>
                                <td data-label="Name">{{ $row->name }}</td>
                                <td data-label="Logo">
                                    <div class="flex justify-center">
                                        <img src="{{ asset('client_images/'.$row->path) }}" alt="{{ $row->name }}" style="width: 130px; height: auto;">
                                    </div>
                                </td>
                                <td data-label="Visibility" style="text-align: center;">
                                    @if($row->is_show == 1) 
                                        Visible 
                                    @else 
                                        Hidden
                                    @endif
                                </td>
                                <td data-label="Action">
                                    <div class="flex">
                                        <a href="/clients/edit/{{ $row->id }}">
                                            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</button>
                                        </a>     
                                        <a href="/clients/delete/{{ $row->id }}" onclick="return confirm('Are you sure you want to delete?')">
                                            <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                                        </a>     
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