<x-layout title="home">
    @if (session()->has('success'))
    <div>
        {{ session('success')}}
    </div>
    @endif


</x-layout>