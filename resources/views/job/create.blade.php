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
                    <div class="sm:col-span-4">
                        <label for="job-title" class="block text-sm font-medium text-gray-700">Job Title</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-gray-50 pl-3 focus-within:ring-2 focus-within:ring-indigo-500">
                                <input id="job-title" name="job_title" type="text" placeholder="Product Designer"
                                    class="block w-full bg-transparent py-2 pr-3 pl-1 text-base text-gray-900 placeholder-gray-400 focus:outline-none" />
                            </div>
                        </div>
                    </div>

                    <!-- Job Salary -->
                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm font-medium text-gray-700">Salary</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-gray-50 pl-3 focus-within:ring-2 focus-within:ring-indigo-500">
                                <input id="salary" name="salary" type="text" placeholder="180,000 Per Year"
                                    class="block w-full bg-transparent py-2 pr-3 pl-1 text-base text-gray-900 placeholder-gray-400 focus:outline-none" />
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="col-span-full">
                        <label for="job_description" class="block text-sm font-medium text-gray-700">Description</label>
                        <div class="mt-2">
                            <textarea id="job_description" name="job_description" rows="3"
                                class="block w-full rounded-md bg-gray-50 px-3 py-2 text-base text-gray-900 placeholder-gray-400 focus:ring-2 focus:ring-indigo-500 focus:outline-none sm:text-sm"
                                placeholder="Job Description"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-end gap-x-4">
                <button type="button" class="text-sm font-semibold text-gray-700 hover:text-gray-900">
                    Cancel
                </button>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    Save
                </button>
            </div>
        </div>
    </form>

</x-layout>
