<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>
    <form method="POST" action="/jobs" class="mx-auto p-6 bg-white rounded-lg">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-200 pb-8">
                <h2 class="text-base font-semibold text-gray-900">Creat a new job</h2>
                <p class="mt-1 text-sm text-gray-500">
                    Describe the job, brag about the team, and say how to apply.
                </p>

                <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <!-- Job Title -->
                    <x-form-field>
                        <x-form-label for="job-title">Job Title</x-form-label>
                        <x-form-input id="job-title" name="job_title" type="text" placeholder="Product Designer" />

                        <x-form-error name="job_title" />
                    </x-form-field>

                    <!-- Job Salary -->
                    <x-form-field>
                        <x-form-label for="salary">Salary</x-form-label>
                        <x-form-input id="salary" name="salary" type="text" placeholder="180,000 Per Year" />

                        <x-form-error name="salary" />

                    </x-form-field>

                    <!-- Description -->
                    <x-form-field>
                        <x-form-label for="job-description">Description</x-form-label>
                        <textarea id="job-description" name="job_description" rows="3"
                            class="h-48 block w-full rounded-md bg-gray-100 px-3 py-2 text-base text-gray-900 placeholder-gray-400 focus:ring-2 focus:ring-indigo-500 focus:outline-none sm:text-sm"
                            placeholder="Job Description"></textarea>
                        <x-form-error name="job_description" />

                    </x-form-field>
                </div>
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-end gap-x-4">
                <button type="button" class="text-sm font-semibold text-gray-700 hover:text-gray-900">
                    Cancel
                </button>
                <x-form-button> Create </x-form-button>
            </div>
        </div>
    </form>

</x-layout>
