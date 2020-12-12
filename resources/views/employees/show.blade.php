@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="mt-2 w-8/12 bg-white p-6 rounded-lg">
        <a href="{{ route('home') }}">HOME</a>
        <h1 class="text-center text-3xl">Employee Data</h1>
        <div class="border border-dark mt-5 p-3">
            <h3 class="border border-dark border-b-2 text-lg p-3"><strong>COMPANY: </strong> {{$employee->company->name}}</h3>
            <h3 class="border border-dark border-b-2 text-lg p-3"><strong>FIRST NAME: </strong> {{$employee->first_name}}</h3>
            <h3 class="border border-dark border-b-2 text-lg p-3"><strong>LAST NAME: </strong> {{$employee->last_name}}</h3>
            <h3 class="border border-dark border-b-2 text-lg p-3"><strong>AGE: </strong> {{$employee->age}}</h3>
            <h3 class="border border-dark border-b-2 text-lg p-3"><strong>CONTACT NUMBER: </strong> {{$employee->contact_number}}</h3>
            <h3 class="border border-dark border-b-2 text-lg p-3"><strong>ADDRESS: </strong> {{$employee->address}}</h3>
        </div>
    </div>
</div>
@endsection
