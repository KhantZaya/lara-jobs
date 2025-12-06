<x-layout>
    <x-slot:heading>
        Edit Job
    </x-slot:heading>
    <form method="POST" action="/jobs/{{ $job->id }}" class="mx-auto p-6 bg-white rounded-lg">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-200 pb-8">

                <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <!-- Job Title -->
                    <div class="sm:col-span-4">
                        <label for="job-title" class="block text-sm font-medium text-gray-700">Job Title</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-gray-100 pl-3 focus-within:ring-2 focus-within:ring-indigo-500">
                                <input value="{{ $job->title }}" id="job-title" name="job_title" type="text"
                                    placeholder="Product Designer"
                                    class="block w-full bg-transparent py-2 pr-3 pl-1 text-base text-gray-900 placeholder-gray-400 focus:outline-none" />
                            </div>
                        </div>
                        @error('job_title')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Job Salary -->
                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm font-medium text-gray-700">Salary</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-gray-100 pl-3 focus-within:ring-2 focus-within:ring-indigo-500">
                                <input value="{{ $job->salary }}" id="salary" name="salary" type="text"
                                    placeholder="180,000 Per Year"
                                    class="block w-full bg-transparent py-2 pr-3 pl-1 text-base text-gray-900 placeholder-gray-400 focus:outline-none" />
                            </div>
                        </div>
                        @error('salary')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div class="col-span-full">
                        <label for="job_description" class="block text-sm font-medium text-gray-700">Description</label>
                        <div class="mt-2">
                            <textarea id="job_description" name="job_description" rows="3"
                                class="h-48 block w-full rounded-md bg-gray-100 px-3 py-2 text-base text-gray-900 placeholder-gray-400 focus:ring-2 focus:ring-indigo-500 focus:outline-none sm:text-sm"
                                placeholder="Job Description">{{ $job->job_description }}</textarea>
                        </div>
                        @error('job_description')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-between gap-x-4">
                <div>
                    <button type="submit" form="delete-form" href="/jobs/{{ $job->id }}" type="button"
                        class="text-sm font-semibold text-red-500 hover:text-gray-900">
                        Delete
                    </button>
                </div>
                <div class="flex items-center gap-x-6">
                    <a href="/jobs/{{ $job->id }}" type="button"
                        class="text-sm font-semibold text-gray-700 hover:text-gray-900">
                        Cancel
                    </a>
                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </form>

    <form id="delete-form" method="POST" action="/jobs/{{ $job->id }}" class="hidden">
        @csrf
        @method('DELETE')
    </form>

</x-layout>
