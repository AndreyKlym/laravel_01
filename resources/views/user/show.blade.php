<x-layout>
    <x-slot:title>
        {{$title}}
{{--        <title>my view</title>--}}
    </x-slot>
    page content user.show
        <p>My text is {!! $arrText?? 'Hello!'  !!}</p>
        <p>My name is {!! $arrName?? 'John'  !!}</p>
        <p>
            @if ($isAuth)
               вы авторизованы
{{--            @endif--}}
{{--            @if (!$isAuth)--}}
            @else
               вы не авторизованы
            @endif
        </p>
        <p>
            @if ($age<=18)
                вы младше 18 лет
            @elseif($age<=80)
                вы младше 80 лет
            @else
                вы старше 80 лет
            @endif
        </p>
        <hr>
        <p>
            @unless($age>=18)
                доступ только совершеннолетним
            @endunless
        </p>
        <hr>
        <p>
            @unless($isAuth)
                вы не авторизированы!
            @endunless
        </p>
        <hr>



        <div>current timestamp: {{ time() }}</div>
        <div>current data: {{ date("d/m/Y") }}</div>


</x-layout>
