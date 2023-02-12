<x-layout>
    <x-slot:title>
{{--        {{$arr['title']}}--}}
    </x-slot>
    page content user.employ
<ul>
@foreach($employees as $employe)
    @foreach($employe as $key=>$item)
{{--        {{print_r($employ)}}--}}
    <li>{{$key}} - {{$item}}</li>
    @endforeach
    <br>
@endforeach
</ul>

<table>
<tr>
    <td>Name</td>
    <td>Surname</td>
    <td>Salary</td>
</tr>
@foreach($employees as $employe)
    <tr>
        @foreach($employe as $key=>$item)
{{--            <th>{{$key}}</th>--}}
            <th>{{$item}}</th>
        @endforeach
    </tr>
@endforeach
</table>



</x-layout>
