<x-layout>
    <div>
        <a class="text-red-700" href="/jobs/create">Create job</a>
    </div>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}">
                    Employer: {{ $job->employer->name }}
                    Title: {{ $job['title'] }} - Pays: {{ $job['salary'] }}
                </a>
            </li>
        @endforeach
        <div>
            {{ $jobs->links() }}
        </div>
    </ul>
</x-layout>