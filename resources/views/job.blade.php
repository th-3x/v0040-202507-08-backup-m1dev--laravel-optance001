<x-layout>
    <x-slot:heading>
        Job
    </x-slot>

    <h1 class="font-bold text-lg">{{ $job['title'] }}</h1>
    <p class="text-gray-600 text-sm">{{ $job['salary'] }} per month</p>
    <p class="text-gray-600 text-sm">{{ $job['detail'] }}</p>

    <div class="mt-4">
        <a href="/jobs" class="text-blue-700 hover:underline">Back to Jobs</a>
    </div>
</x-layout>
