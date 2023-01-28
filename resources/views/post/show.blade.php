<x-layout>
{{--    <x-slot:title>--}}
{{--    {{$title}}--}}
{{--    </x-slot>--}}
    my page content "post.show"
        <br>
{{--            variable one: {{ $var1 }}--}}
{{--        variable two: {{ $var2 }}--}}
{{--    {{$text}}--}}
    <p>{{$var1}}</p>
    <p>{{$var2}}</p>
    <p>{{$var3}}</p>
    <p class="{{ $var1 }}"></p>
    <p style="{{ $var2 }}"></p>
    <input value="{{ $var3 }}">
</x-layout>
