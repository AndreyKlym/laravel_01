<x-layout>
    <x-slot:title>
        {{$arr['title']}}
    </x-slot>
    page content city.show
        <p>My city is {{
            $arr['city']??'Moscow'
        }}</p>
        <input value="{{ $arr['var1'] }}">
        <input value="{{ $arr['var2'] }}">
        <input value="{{ $arr['var3'] }}">
        <p>{{ $location['country'] ?? 'Ukraine' }}</p>
        <p>{{ $location['city'] ?? 'Kyiv' }}</p>

        <p>
            Amount in array: {{count($arr)}}
        </p>
        <p>
            current timestamp: {{ time() }}
        </p>
        <p>
            current day: {{ date("D") }}
{{--            current timestamp: {{ date("d.m.y") }}--}}
        </p>

</x-layout>
