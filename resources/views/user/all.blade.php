<x-layout>
    <x-slot:title>
{{--        {{$arr['title']}}--}}
    </x-slot>
    page content user.show
        <p>
{{--            @if (count($arr) > 1)--}}
{{--                array outputs: {{count($arr)}}--}}
{{--            @else--}}
{{--                array is empty--}}
{{--            @endif--}}
        </p>
        <ul>
{{--            @foreach($arr as $elem)--}}
{{--                <li>{{$elem}}</li>--}}
{{--            @endforeach--}}
        </ul>
{{--        @if(count($arrNum) > 8)--}}
            <ul>
{{--                @foreach($arrNum as $item)--}}
{{--    --}}{{--            @foreach($arrNum as $num=>$item)--}}
{{--                    @if ($item % 2 == 1)--}}
{{--                        <li>{{$item}}</li>--}}
{{--                    @endif--}}
{{--    --}}{{--                <li>{{$num +1 . ' = '. pow($item, 2)}}</li>--}}
{{--    --}}{{--                <li>{{$num . ' = '. sqrt($item * $item)}}</li>--}}
{{--                @endforeach--}}
            </ul>
{{--        @endif--}}
{{--@if (count($data)--}}
@if (is_array($data))
    {{var_dump($data)}}
    <ul>
        @foreach($data as $itemData)
            <li>
                <ul>
                    @foreach($itemData as $item)
                    <li>{{$item}}</li>
                    @endforeach
                    <hr>
                </ul>
            </li>
        @endforeach
    </ul>
@elseif(is_numeric($data))
    <p>{{$data}}</p>
@endif
<table>
    <tr>
        <td>One</td>
        <td>Two</td>
        <td>Three</td>
    </tr>
    @foreach($data as $itemData)
        <tr>
            @foreach($itemData as $item)
                <th>{{$item}}</th>
            @endforeach
        </tr>
    @endforeach

</table>




</x-layout>
