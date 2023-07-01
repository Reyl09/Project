@if (session()->has('message'))
<div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" class="fixed-top bg-success text-white text-center translate-middle-x px-5 py-3" style="left: 50%; transform: translateX(-50%); max-width: 500px;" x-show="show">
    <p>
            {{ session('message') }}
        </p>
    </div>
@endif
