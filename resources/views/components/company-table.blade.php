@props([
    'company' => [],
])

<div class="mt-5">
    <h2 class="text-2xl"> <span class="underline">{{ ucfirst($company->name) }}</span> <em class="text-sm">Employees</em> </h2>


    <div class="relative max-w-full m-auto overflow-hidden">
        <div class="w-full overflow-auto">
            <table class="mt-4 w-full border border-separate m-auto">
                <thead>
                    <tr>
                        <th>Employee ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>Contact Number</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($company->employees as $employee)
                        <tr>
                            <td class="text-center">
                                <a href="{{ route('employees.show', $employee) }}" class="text-blue-600 underline">
                                    {{Str::upper($employee->employee_id)}}
                                </a>
                            </td>
                            <td class="text-center">{{$employee->first_name}}</td>
                            <td class="text-center">{{$employee->last_name}}</td>
                            <td class="text-center">{{$employee->age}}</td>
                            <td class="text-center">{{$employee->contact_number}}</td>
                            <td class="mb-2 p-3 text-center flex justify-center align-baseline">
                                <a href="{{ route('employees.edit', $employee) }}" class="p-2 bg-indigo-400 text-white rounded mr-2">EDIT</a>

                                <form action="{{ route('employees.destroy', $employee) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 bg-red-600 text-white rounded inline">DELETE</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7"> No Employees </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>