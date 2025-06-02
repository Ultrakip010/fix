<x-layout>
    <x-slot:heading>
        jobs page
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="hover:underline">
                    <strong>{{ $job['title'] }}:</strong> pays {{ $job['salary'] }} per year.
                </a>
            </li>
        @endforeach
    </ul>

</x-layout>
