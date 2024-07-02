<x-layout>
    <x-slot:heading>
        Job Description
    </x-slot:heading>
    <div class="flex flex-col gap-3">
        <h2 class="mt-4 font-bold text-4xl">{{ $job->title }}</h2>
        <p>This job pays <span class="font-bold">{{ $job->salary }} USD</span></p>
    </div>

    <div class="flex gap-4 justify-end items-center  pt-10">
        <a href="/jobs">Cancel</a>
        <x-button href="/jobs/{{ $job->id }}/edit">Edit</x-button>
    </div>
</x-layout>
