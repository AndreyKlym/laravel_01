<x-layout>
    <x-slot:title>
        task
        </x-slot>
        page content task.access
        <hr>

        {{--   http://mysite/public/access--}}

        <table>
            <tr>
               <th>Name</th>
               <th>Surname</th>
               <th>Salary</th>
            </tr>
{{--            @foreach($users as $user)--}}
{{--                <tr>--}}
{{--                    <td>{{$user['name']}}</td>--}}
{{--                    <td>{{$user['surname']}}</td>--}}
{{--                    <td>{{$user['banned']}}</td>--}}

{{--                        @if($user['banned'] == true)--}}
{{--                            <td style="color: red"><b>banned</b></td>--}}
{{--                        @else--}}
{{--                            <td style="color: green"><b>active</b></td>--}}
{{--                        @endif--}}
{{--                </tr>--}}
{{--            @endforeach--}}
        </table>

select your name<br>
<select name="user_profile" id="user_id">
    <option value="">Choose one</option>
    @foreach($users as $user)
            <option value="{{$user['name']}}">{{$user['name']}}</option>
    <br>
    @endforeach
    <input type="submit" value="Send" name="submit">
</select>
<br>


select your surname<br>
<select name="user_profile2" id="user_id2">
    <option value="">Choose one</option>
        @foreach($users as $user)
                <option value="{{$user['surname']}}">{{$user['surname']}}</option>
        <br>
        @endforeach
    <input type="submit" value="Send" name="submit">
</select>

        {{print_r($dayMod)}}
{{--    @for($i=0; $i<count($dayMod); $i++)--}}
{{--        counter value: {{$dayMod[$i]}}--}}
{{--        <br>--}}
{{--    @endfor--}}










</x-layout>
