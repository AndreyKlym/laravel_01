<x-layout>
{{--    <x-slot:title>--}}
{{--        page title--}}
{{--    </x-slot>--}}
{{--        <title>{{ $title }}</title>--}}
    my page content "showuser"
    <p>{{$name}}</p>
    <p>{{$surname}}</p>
    <p>{{$age}}</p>
{{--    <p>{{$salary}}</p>--}}
    <p style="{{$color}}">{{$salary}}</p>
    <p class="{{$name}}" style="{{$color}}">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    </p>
    <p><a href="{{$href}}">{{$text}}</a></p>

    <input value="{{ $name }}">
    <input value="{{ $surname }}">
    <input value="{{ $age }}">
</x-layout>
