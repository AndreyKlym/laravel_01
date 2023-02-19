<x-layout>
    <x-slot:title>
        task
        </x-slot>
        page content task.find
        <hr>
{{--        http://mysite/public/task--}}
        <table>
            <tr>
{{--               <th>N</th>--}}
               <th>Name</th>
               <th>Surname</th>
               <th>Salary</th>
            </tr>
            @foreach($employees as $employee)
                @if($employee['salary'] >= 2000 )
                <tr>
                    <td>{{$loop->iteration}} {{$employee['name']}}</td>
                    <td>{{$employee['surname']}}</td>
                    <td>{{$employee['salary']}}</td>
                </tr>
                @endif
            @endforeach
        </table>






</x-layout>
