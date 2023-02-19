<x-layout>
    <x-slot:title>
{{--        {{$title}}--}}
    </x-slot>
    <p>page content post.employ</p>
{{--    @foreach ($dataMod as $elem)--}}
{{--        @if ($loop->odd)--}}
{{--        @if ($loop->first)--}}
{{--            odd iteration--}}
{{--            first iteration--}}
{{--        @endif--}}

{{--        @if ($loop->even)--}}
{{--        @if ($loop->last)--}}
{{--            even iteration--}}
{{--            last iteration--}}
{{--        @endif--}}
{{--        <p>{{ $elem }}</p>--}}
{{--    @endforeach--}}
        <hr>

    @foreach ($dataMod as $elem)
{{--        {{$loop->count}}--}}
        @if (($loop->remaining)>2)
            <b>{{$loop->remaining}} - {{$elem}}</b>
            <br>
        @else
            <i>{{$loop->remaining}} - {{$elem}}</i>
{{--        {{$loop->remaining}} - {{$elem}}--}}
{{--        {{$loop->iteration}} - {{$elem}}--}}
{{--        {{$loop->index}} - {{$elem}}--}}
            <br>
        @endif
    @endforeach
        <hr>


    @foreach ($dataMod as $elem)
        {{$elem}}
        @break($elem == 44)
        @if($elem == 33)
            @break
        @endif
    @endforeach
        <hr>


{{--    @foreach($dataMod as $elem)--}}
{{--    {{$elem}}--}}
{{--        @break($elem == 0)--}}
{{--    @endforeach--}}

{{--    <ul>--}}
{{--    @foreach($dataMod as $elem)--}}
{{--        @continue($elem == 0)--}}
{{--        @if($elem == 44)--}}
{{--        @continue--}}
{{--        @endif--}}
{{--        <li>{{$elem}}</li>--}}
{{--    @endforeach--}}
{{--    </ul>--}}

    @php
    echo 123;
    @endphp
        <hr>


    @for($i=0; $i<count($dataMod); $i++)
        counter value: {{$dataMod[$i]}}
            <br>
    @endfor

</x-layout>
