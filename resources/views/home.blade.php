
<x-layout>
    <x-slot:heading>
        Home
    </x-slot>
    <h1>hello from home</h1>

    @foreach ($datas as $data)
        <li>Title: {{ $data['title'] }}, Salary: {{ $data['salary'] }}, Detail: {{ $data['detail'] }}</li>
    @endforeach
    <p>Total Count: {{ count($datas) }}</p>

</x-layout>
