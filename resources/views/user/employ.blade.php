<x-layout>
    <x-slot:title>
{{--        {{$arr['title']}}--}}
    </x-slot>
    page content user.employ
<ul>
@foreach($employees as $employe)
    @foreach($employe as $key=>$item)

{{--        {{print_r($employe)}}--}}
        @if ($loop->first)
{{--            <li class="first">{{$key}} - {{$item}}</li>--}}
            <li class="first" style="color: red">{{$key}} - {{$item}}</li>
        @elseif ($loop->last)
{{--            <li class="last" >{{$key}} - {{$item}}</li>--}}
            <li class="last" style="color: blue">{{$key}} - {{$item}}</li>
        @else
            <li>{{$key}} - {{$item}}</li>
        @endif
{{--    <li>{{$loop->iteration}}: {{$key}} - {{$item}}</li>--}}
    @endforeach
    <br>
@endforeach
</ul>

{{--<table>--}}
{{--<tr>--}}
{{--    <td>Name</td>--}}
{{--    <td>Surname</td>--}}
{{--    <td>Salary</td>--}}
{{--</tr>--}}
{{--@foreach($employees as $employe)--}}
{{--@foreach($employees as $employe)--}}
{{--    <tr>--}}
{{--        @forelse($employe as $key=>$item)--}}
{{--            <th>{{$key}}</th>--}}
{{--            <th>{{$item}}</th>--}}
{{--        @empty--}}
{{--            <th> no elemets </th>--}}
{{--        @endforelse--}}
{{--    </tr>--}}
{{--@endforeach--}}
{{--</table>--}}

{{--@forelse ($dataMod as $employe)--}}
{{--    <p>{{ $employe }}</p>--}}
{{--@empty--}}
{{--    <p>there is no elemets in array</p>--}}
{{--@endforelse--}}



</x-layout>
