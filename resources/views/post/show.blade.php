<x-layout>
    <x-slot:title>
        {{$title}}
    </x-slot>
    page content post.show
{{--        http://mysite/public/post--}}
        <p>{{$text1}}</p>
        <p>{{$text2}}</p>
        <a href="{{$href}}">{{$text}}</a>
        <p style="color: {{ $var }}">{{$text2}}</p>


</x-layout>
