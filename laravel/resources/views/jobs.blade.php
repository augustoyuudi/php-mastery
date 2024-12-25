<x-layout>
    <h1>Hello jobs page</h1>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}">
                    Title: {{ $job['title'] }} - Pays: {{ $job['salary'] }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>