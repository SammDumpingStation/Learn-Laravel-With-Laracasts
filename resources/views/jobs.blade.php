<x-layout>
    <x-slot:heading>
        Jobs Listings
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}">
                <li class=""><span class="font-bold">{{ $job['title'] }}</span>: Pays {{ $job['salary'] }} a year
                </li>
            </a>
        @endforeach
    </ul>
</x-layout>
