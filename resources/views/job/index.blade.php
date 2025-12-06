<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li>
                {{-- <a  rel="noopener noreferrer" class="hover:underline">
                    <strong>{{ $job['title'] }}</strong>, hired by {{ $job['company'] }}
                </a> --}}
                <div class="mb-6 w-full bg-neutral-primary border border-default rounded-xl shadow-xs  hover:border-indigo-600 hover:border-2">

                    <div class=" p-4 rounded-b-base md:p-8" id="about" role="tabpanel" aria-labelledby="about-tab">
                        <h2 class="mb-2 text-2xl font-semibold tracking-tight text-heading">{{ $job['title'] }}</h2>
                        {{-- <p class="mb-4 text-body">Empower Developers, IT Ops, and business teams to collaborate at high
                        velocity. Respond to changes and deliver great customer and employee service experiences fast.
                    </p> --}}
                        <p class="mb-4 text-body">
                            {{ $job->employer->name }}
                        </p>
                        <a href="jobs/{{ $job['id'] }}"
                            class="inline-flex items-center font-medium text-fg-brand hover:underline">
                            Learn more
                            <svg class="w-5 h-5 ms-1 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                            </svg>
                        </a>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{ $jobs->links() }}
</x-layout>
