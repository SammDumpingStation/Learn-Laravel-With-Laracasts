<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <a href="/jobs" class="border border-gray-400 p-2 rounded-lg hover:bg-gray-400 hover:text-white">Go Back</a>
    <div>
        <h2 class="mt-10">{{ $job['title'] }}</h2>
        <p >This job pays {{ $job['salary'] }}</p>
    </div>
</x-layout>
