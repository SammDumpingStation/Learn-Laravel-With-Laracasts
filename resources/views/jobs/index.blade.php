<x-layout>
    <x-slot:heading>
        All Available Jobs
    </x-slot:heading>
    <div class="flex justify-between gap-y-8 flex-wrap">
        @foreach ($jobs as $job)
            <a class="border border-gray-400 rounded-2xl gap-2 flex-1 basis-full h-40  justify-center  max-w-[350px] flex flex-col items-center hover:bg-gray-400 hover:text-white"
                href="/jobs/{{ $job['id'] }}">
                <p class="text-xl text-blue-700 font-bold">{{ $job->employer->name }}</p>
                <span class="font-bold -mb-2">{{ $job['title'] }}:</span>Pays {{ $job['salary'] }} a year
            </a>
        @endforeach
    </div>

    <div class="mt-8">
        {{ $jobs->links() }}
    </div>
</x-layout>
