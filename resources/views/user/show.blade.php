<x-layout>
    <x-slot:title>
        {{$arr['title']}}
    </x-slot>
    page content user.show
        <p>My name is {{$arr['name']}}</p>
        <p>My surname is {{$arr['surname']}}</p>
        <p>My age is {{$arr['age']}}</p>
        <div class="{{$arr['var']}}">Main</div>
        <p>Count in array: {{count($arr)}}</p>
        <div>current timestamp: {{ time() }}</div>
        <div>current data: {{ date("d/m/Y") }}</div>



</x-layout>
