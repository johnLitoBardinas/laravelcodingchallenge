@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="mt-2 w-8/12 bg-white p-6 rounded-lg">
            <h1 class="text-center text-3xl">Company Employees</h1>

            <div class="mt-4">
                <h2 class="bold text-2xl">Company Lists</h2>
                <ul class="pl-4 list-decimal" >
                    <li>
                        <a href="" class="text-blue-600 underline font-bold">
                            Company A
                        </a>
                    </li>
                    <li>
                        <a href="" class="text-blue-600 underline">
                            Company B
                        </a>
                    </li>
                    <li>
                        <a href="" class="text-blue-600 underline">
                            Company C
                        </a>
                    </li>
                    <li>
                        <a href="" class="text-blue-600 underline">
                            Company D
                        </a>
                    </li>
                    <li>
                        <a href="" class="text-blue-600 underline">
                            Company E
                        </a>
                    </li>
                </ul>
            </div>
            {{-- Company List --}}

            {{-- <hr> --}}
            <div class="mt-5">
                <div class="flex justify-between">
                    <h2 class="text-2xl"> <span class="underline">Company A</span> Employees </h2>
                    <button class="bg-green-400 p-1 bold text-white rounded">Add Employee</button>
                </div>

                <table class="mt-4 w-full border border-separate">
                    <thead>
                        <tr>
                            <th>Emp. ID</th>
                            <th>First Name</th>
                            <th>Surname</th>
                            <th>Age</th>
                            <th>Contact Number</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>57349697</td>
                            <td>John Lito</td>
                            <td>Bardinas</td>
                            <td>23</td>
                            <td>09100261672</td>
                            <td>1741 Dian Street Palanan Makati City</td>
                            <td class="mb-2 p-3">
                                <a href="#" class="p-2 bg-indigo-400 text-white rounded">EDIT</a>
                                <a href="#" class="p-2 bg-red-600 text-white rounded">DELETE</a>
                            </td>
                        </tr>
                        <tr>
                            <td>57349697</td>
                            <td>John Lito</td>
                            <td>Bardinas</td>
                            <td>23</td>
                            <td>09100261672</td>
                            <td>1741 Dian Street Palanan Makati City</td>
                            <td class="mb-2 p-3">
                                <a href="#" class="p-2 bg-indigo-400 text-white rounded">EDIT</a>
                                <a href="#" class="p-2 bg-red-600 text-white rounded">DELETE</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection