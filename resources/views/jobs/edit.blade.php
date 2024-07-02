<x-layout>
    <x-slot:heading>
        Edit Job: {{ $job->title }}
    </x-slot:heading>
    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <h2 class="text-base font-semibold leading-7 text-gray-900">Edit Current Job</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">We just need a handful details from you</p>

                    <x-form-field>
                        <x-form-title for="title">Title</x-form-title>
                        <div class="mt-2">
                            <x-form-input name="title" id="title" placeholder="Jolibee Crew"
                                value="{{ $job->title }}" required />
                            <x-form-error name="title" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-title for="salary">Salary</x-form-title>
                        <div class="mt-2">
                            <x-form-input name="salary" id="salary" placeholder="$50,000"
                                value="{{ $job->salary }}" required />
                            <x-form-error name="salary" />
                        </div>
                    </x-form-field>

                </div>
            </div>
        </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <div class="w-full flex items-center">
                    <button form="delete-form" class="text-red-500 font-medium">Delete</button>
                </div>
                <x-form-cancel href="/jobs/{{ $job->id }}" type="button">Cancel</x-form-cancel>
                <x-form-button type="submit">Update</x-form-button>
            </div>
    </form>

    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>

</x-layout>
