<x-layout>
    <x-slot:title>
        {{$title}}
    </x-slot>
    page content city.show
        <p>My city is {{$city}}</p>
        <input value="{{ $var1 }}">
        <input value="{{ $var2 }}">
        <input value="{{ $var3 }}">
        <p>
            current timestamp: {{ time() }}
        </p>
        <p>
            current timestamp: {{ date("d.m.y") }}
        </p>

</x-layout>
