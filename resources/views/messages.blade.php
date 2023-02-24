<style>
    table {
        border: 1px solid #ccc;
        border-collapse: collapse;
        margin: 0;
        padding: 0;
        width: 100%;
        table-layout: fixed;
    }

    table caption {
        font-size: 1.5em;
        margin: .5em 0 .75em;
    }

    table tr {
        background-color: #f8f8f8;
        border: 1px solid #ddd;
        padding: .35em;
    }

    table th,
    table td {
        padding: .625em;
        text-align: center;
    }

    table th {
        font-size: .85em;
        letter-spacing: .1em;
        text-transform: uppercase;
    }

    @media screen and (max-width: 600px) {
        table {
            border: 0;
        }

        table caption {
            font-size: 1.3em;
        }

        table thead {
            border: none;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
        }

        table tr {
            border-bottom: 3px solid #ddd;
            display: block;
            margin-bottom: .625em;
        }

        table td {
            border-bottom: 1px solid #ddd;
            display: block;
            font-size: .8em;
            text-align: right;
        }

        table td::before {
            /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
            content: attr(data-label);
            float: left;
            font-weight: bold;
            text-transform: uppercase;
        }

        table td:last-child {
            border-bottom: 0;
        }
    }

</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Messages
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 antialiased">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="Name">Visa - 3412</td>
                                <td data-label="Email">04/01/2016</td>
                                <td data-label="Subject">$1,190</td>
                                <td data-label="Message">03/01/2016 - 03/31/2016</td>
                            </tr>
                            <tr>
                                <td scope="row" data-label="Name">Visa - 3412</td>
                                <td data-label="Email">04/01/2016</td>
                                <td data-label="Subject">$1,190</td>
                                <td data-label="Message">03/01/2016 - 03/31/2016</td>
                            </tr>
                            <tr>
                                <td scope="row" data-label="Name">Visa - 3412</td>
                                <td data-label="Email">04/01/2016</td>
                                <td data-label="Subject">$1,190</td>
                                <td data-label="Message">03/01/2016 - 03/31/2016</td>
                            </tr>
                            <tr>
                                <td scope="row" data-label="Name">Visa - 3412</td>
                                <td data-label="Email">04/01/2016</td>
                                <td data-label="Subject">$1,190</td>
                                <td data-label="Message">03/01/2016 - 03/31/2016</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
