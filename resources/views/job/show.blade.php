<x-layout>
    <x-slot:heading>
        Jobs Detail
    </x-slot:heading>

    <h2 class="text-4xl font-bold mb-3">{{ $job->title }}</h2>
    <span class="bg-neutral-primary-soft border border-default text-heading text-xs font-medium px-1.5 py-0.5 rounded">{{ $job->employer->name }}</span>

    <p class="my-4 text-lg text-body">{{ $job->salary }}</p>
    <p class="mb-4 text-lg font-normal text-body"> {{ $job->job_description }}</p>

    @can('edit-job', $job)
        <x-button href="/jobs/{{ $job->id }}/edit" class="">Edit</x-button>
    @endcan
            <x-button href="/jobs/{{ $job->id }}/edit" class="">Edit</x-button>

</x-layout>
