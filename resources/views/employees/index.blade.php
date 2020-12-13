@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="mt-2 w-8/12 bg-white p-6 rounded-lg">

        <x-employee-form :companies="$companies" />

        <hr>
        <h1 class="text-center text-3xl">Company Employees</h1>
        <x-company-list :companies="$companies" :current="$company" />

        @if(! empty($company))
            <x-company-table :company="$company"/>
        @endif
    </div>
</div>
@endsection

