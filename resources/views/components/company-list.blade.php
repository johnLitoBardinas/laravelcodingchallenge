@props([
    'companies' => [],
    'current' => ''
])

<div class="mt-4">
    <h2 class="bold text-2xl">Company Lists <em class="text-xs">Click below</em></h2>
    <ul class="pl-4 list-decimal" >
        @forelse ($companies as $company)
        <li>
            <a href="{{ route('home', [
                'company' => $company->name
        ])}}" class="text-blue-600 underline @if($company->name === ($current->name ?? '')) bold text-2xl @endif">
                {{$company->name}}
            </a>
        </li>
        @empty
            <h3>Empty Companies</h3>
        @endforelse
    </ul>
</div>
{{-- Company List --}}