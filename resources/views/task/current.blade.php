<x-layout>
    <x-slot:title>
        task
        </x-slot>
        page content task.current
        <hr>

{{--        http://mysite/public/current--}}

{{--        {{print_r($dayMod)}}--}}

    <ul>
        @for($i=0; $i<count($dayMod); $i++)
            @if ($i == 19-1)
                <li class="active" style="color: blue">
                current day: {{$dayMod[$i]}}
                </li>
            @else
                <li>
                current day: {{$dayMod[$i]}}
                </li>
            @endif
        @endfor
    </ul>

    <br>
    current week day: {{($currentDay)}}
    <br>
    current month: {{($currentMonth)}}












</x-layout>
