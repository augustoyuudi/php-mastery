<x-layout>
    <div>
        {{ $job->id }}
    
        {{ $job->title }}
    
        {{ $job->salary }}
    </div>

    <div>
        <a href="/jobs/{{ $job->id }}/edit">Edit job</a>
    </div>
</x-layout>