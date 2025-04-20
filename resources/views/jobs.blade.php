<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot>
    <ul class="max-w-xl mx-auto mt-6 space-y-4">
        @foreach ($datas as $job)
            <li class="bg-white rounded shadow p-4 hover:bg-blue-50 transition">
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-700 hover:underline flex flex-col">
                    <span class="font-semibold text-lg">{{ $job['title'] }}</span>
                    <span class="text-gray-600 text-sm">{{ $job['salary'] }} per month</span>
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
