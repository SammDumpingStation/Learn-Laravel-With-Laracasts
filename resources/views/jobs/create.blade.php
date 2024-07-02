<x-layout>
    <x-slot:heading>
        Create a Job
    </x-slot:heading>
    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <h2 class="text-base font-semibold leading-7 text-gray-900">Create a New Job</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">We just need a handful details from you</p>

                    <x-form-field>
                        <x-form-title for="title">Title</x-form-title>
                        <div class="mt-2">
                            <x-form-input name="title" id="title" placeholder="Jolibee Crew" required />
                            <x-form-error name="title" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-title for="salary">Salary</x-form-title>
                        <div class="mt-2">
                            <x-form-input name="salary" id="salary" placeholder="$50,000" required />
                            <x-form-error name="salary" />
                        </div>
                    </x-form-field>

                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <x-form-cancel href="/jobs" type="button">Cancel</x-form-cancel>
            <x-form-button type="submit">Create</x-form-button>
        </div>
    </form>

</x-layout>
