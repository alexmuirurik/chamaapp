@if ($message = session()->has('success'))
    <div id="alert">
        <div class="px-4 pt-4">

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <p class="text-white mb-0">{{ session()->get('succes') }}</p>
            </div>

        </div>
    </div>
@endif
@if ($message = session()->has('error'))
    <div id="alert">
        <div class="px-4 pt-4">
            <div class="alert alert-danger" role="alert">
                <p class="text-white mb-0">{{ session()->get('error') }}</p>
            </div>
        </div>
    </div>
@endif
