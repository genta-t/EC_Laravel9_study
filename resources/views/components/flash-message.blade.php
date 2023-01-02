@props(['status' => 'info'])

@php
if($status === 'info'){ $bgColor = 'bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg';}
if($status === 'error'){ $bgColor = 'bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg';}
@endphp

@if (session('message'))
    <div class="{{ $bgColor }} w-1/2 mx-auto p-2 text-white">
        {{ session('message') }}
    </div>
@endif
