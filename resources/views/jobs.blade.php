<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="jobs/{{ $job['id'] }}" rel="noopener noreferrer" class="hover:underline">
                    <strong>{{ $job['title'] }}</strong>, hired by {{ $job['company'] }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
