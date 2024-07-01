<x-layout>
    <x-slot:heading>
        Job Description
    </x-slot:heading>
    <x-button href="/jobs">Return</x-button>
    <div class="flex flex-col gap-3">
        <h2 class="mt-4 font-bold text-4xl">{{ $job['title'] }}</h2>
        <p>This job pays <span class="font-bold">{{ $job['salary'] }} USD</span></p>
    </div>
    
    <x-button href="" class="mt-4 ">Update</x-button>
    <x-button href="" class="mt-4 ">Delete</x-button>
</x-layout>
