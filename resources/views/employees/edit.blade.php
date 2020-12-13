@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="mt-2 w-8/12 bg-white p-6 rounded-lg">

        <a href="{{ route('home') }}"> <b>HOME</b> </a>

        <x-employee-form :companies="$companies" type="update" :employee="$employee" />

    </div>
</div>
@endsection

