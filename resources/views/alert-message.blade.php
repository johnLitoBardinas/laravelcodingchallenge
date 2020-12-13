<div class="mt-5 p-3">

    @if( session()->has('success') )
        <div>
            <div class="block bg-green-600 p-4 rounded-lg lg:w-1/4 text-white bold">
                <b>SUCCESS!!</b>
                <br>
                {{ session('success') }}
            </div>
        </div>
    @endif

    @if( session()->has('error') )
        <div>
            <div class="block bg-red-600 p-4 rounded-lg lg:w-1/4 text-white bold">
                <b>ERROR!!</b>
                <br>
                {{ session('error') }}
            </div>
        </div>
    @endif


</div>
