<x-layout>
    <x-slot:title>
{{--        {{$arr['title']}}--}}
    </x-slot>
    page content user.main
{{--        {{($users)}}--}}
@if (is_array($users))
    <ul>
        @foreach($users as $itemData)
{{--            {{print_r($itemData)}}--}}
            <li>
                <ul>
                    @foreach($itemData as $item)
                        <li>{{$item}}</li>
                    @endforeach
{{--                    @endif--}}
                </ul>
            </li>
        @endforeach
    </ul>
@endif



{{--@if (count($data)--}}
<table>
    <tr>
        <td>Name</td>
        <td>Age</td>
{{--        <td>Three</td>--}}
    </tr>
    @foreach($users as $user)
{{--        {{print_r($user)}}--}}
        <tr>
            <th>{{$user['name']}}</th>
            <th>{{$user['age']}}</th>
        </tr>
    @endforeach

</table>




</x-layout>
