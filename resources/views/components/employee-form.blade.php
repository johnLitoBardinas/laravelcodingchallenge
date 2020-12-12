@props([
    'type' => 'add', // update - PUT | store,
    'companies' => [],
    'employee' => [],
])

<div class="mt-3 lg:mt-14">
    <h1 class="text-center text-3xl uppercase"> {{ sprintf('%s Employee Form', $type) }}</h1>
    <form @if($employee) action="{{route('employees.edit', $employee)}}" @else action="{{route('employees.store')}}"  @endif method="POST">
        @csrf
        @if ($type === 'update')
            @method('PUT')
        @endif
        <div class="mb-4 flex flex-col">
            <label for="company_id">Company</label>
            <select name="company_id" class="bg-gray-100 border-2 lg:w-2/4 p-2 rounded-lg">
                @foreach ($companies as $company)
                    <option value="{{$company->id}}">{{$company->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4  flex flex-col">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" class="bg-gray-100 border-2 lg:w-2/4 p-2 rounded-lg @error('first_name') border-red-500 @enderror"
                placeholder="Enter First Name" value="{{ $employee->first_name ?? old('first_name') }}">
        </div>

        <div class="mb-4 flex flex-col">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" class="bg-gray-100 border-2 lg:w-2/4 p-2 rounded-lg @error('last_name') border-red-500 @enderror"
                placeholder="Enter Last Name" value="{{ old('last_name') }}">
        </div>

        <div class="mb-4 flex flex-col">
            <label for="age">Age</label>
            <input type="number" name="age" class="bg-gray-100 border-2 lg:w-1/4 p-2 rounded-lg @error('age') border-red-500 @enderror"
                placeholder="Enter Age" value="{{ old('age') }}">
        </div>

        <div class="mb-4 flex flex-col">
            <label for="contact_number">Contact Number</label>
            <input type="text" name="contact_number" class="bg-gray-100 border-2 lg:w-1/4 p-2 rounded-lg @error('contact_number') border-red-500 @enderror"
                placeholder="Enter Contact Number" value="{{ old('contact_number') }}">
        </div>

        <div class="mb-4 flex flex-col">
            <label for="address">Address</label>
            <input type="text" name="address" class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('address') border-red-500 @enderror"
                placeholder="Enter Contact Number" value="{{ old('address') }}">
        </div>

        <div class="mb-4 flex justify-center">
            <button type="submit" class="bg-green-600 bold tracking-wide p-3 rounded text-white"> {{ $type === 'update' ? 'UPDATE' : 'SAVE' }} </button>
        </div>

    </form>
</div>
