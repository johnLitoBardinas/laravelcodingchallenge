@props([
    'type' => 'new', // update - PUT | new/ add - Store,
    'companies' => [],
    'employee' => [],
])

<div class="mt-3 lg:mt-5">
    <h1 class="text-center text-3xl uppercase"> {{ $type }} Employee Form</h1>

    @include('alert-message')

    <form @if($employee) action="{{route('employees.update', $employee)}}"  @else action="{{route('employees.store')}}" @endif method="POST">
        @csrf

        @if ($type === 'update')
            @method('PUT')
        @endif

        <div class="mb-4 flex flex-col">
            <label for="company_id">Company</label>
            <select name="company_id" class="bg-gray-100 border-2 lg:w-2/4 p-2 rounded-lg" value="{{ $employee->company_id ?? old('company_id') }}">

                @if ($employee)
                    @foreach ($companies as $company)
                        <option value="{{$company->id}}" {{ $employee->company_id === $company->id|| old('company_id') === $company->id ? 'selected' : '' }} >{{$company->name}}</option>
                    @endforeach
                @else
                    @foreach ($companies as $company)
                        <option value="{{$company->id}}" {{ old('company_id') === $company->id ? 'selected' : '' }} >{{$company->name}}</option>
                    @endforeach
                @endif


            </select>
        </div>

        <div class="mb-4  flex flex-col">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" class="bg-gray-100 border-2 lg:w-2/4 p-2 rounded-lg @error('first_name') border-red-500 @enderror"
                placeholder="Enter First Name" value="{{ $employee->first_name ?? old('first_name') }}">
            @error('first_name')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-4 flex flex-col">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" class="bg-gray-100 border-2 lg:w-2/4 p-2 rounded-lg @error('last_name') border-red-500 @enderror"
                placeholder="Enter Last Name" value="{{ $employee->last_name ?? old('last_name') }}">
            @error('last_name')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-4 flex flex-col">
            <label for="age">Age</label>
            <input type="number" name="age" min="1" max="127" class="bg-gray-100 border-2 lg:w-1/4 p-2 rounded-lg @error('age') border-red-500 @enderror"
                placeholder="Enter Age" value="{{ $employee->age ?? old('age') }}">
            @error('age')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-4 flex flex-col">
            <label for="contact_number">Contact Number</label>
            <input type="text" name="contact_number" maxlength="11" class="bg-gray-100 border-2 lg:w-1/4 p-2 rounded-lg @error('contact_number') border-red-500 @enderror"
                placeholder="Enter Contact Number" value="{{ $employee->contact_number ?? old('contact_number') }}">
            @error('contact_number')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-4 flex flex-col">
            <label for="address">Address</label>
            <input type="text" name="address" class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('address') border-red-500 @enderror"
                placeholder="Enter your Address" value="{{ $employee->address ?? old('address') }}">
            @error('address')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-4 flex justify-center">
            <button type="submit" class="bg-green-600 bold tracking-wide p-3 rounded text-white"> @if ($type === 'update') UPDATE @else SAVE @endif </button>
        </div>

    </form>
</div>
