<x-layout title="fiori">
    <h1>Fiori</h1>
    <div class="container">
        <div class="row">
            @foreach ($fioriBelle as $fiori)
            <x-card :data="$fiori" route="fiori"/>
            @endforeach
        </div>
    </div>
</x-layout>
