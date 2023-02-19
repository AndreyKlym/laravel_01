<x-layout>
    <x-slot:title>
        task
        </x-slot>
        page content task.show
        <hr>
{{--        http://mysite/public/task--}}
        <ul>
    @foreach($links as $link)
{{--        @foreach($link as $item)--}}
{{--            {{$item}}--}}
{{--        {{print_r($link)}}--}}
{{--        {{$link['text']}} - {{$link['href']}}--}}
            <li><a href="http://{{$link['href']}}">{{$link['text']}}</a></li>
            <br>
{{--        @endforeach--}}
    @endforeach
        </ul>



</x-layout>
