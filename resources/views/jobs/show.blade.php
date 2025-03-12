<x-Layout>
    <x-slot:heading>Job Details</x-slot>
    <h2 class="text-2xl">Job Title: {{ $job->title }}</h2>

    <p>Salary: {{ $job->salary }}</p>
    {{--
        <p>
        Job Description: {{$job['description']}}
        </p>
    --}}

    @can('edit', $job)
        <p class="mt-6">
            <x-button href="/jobs/{{ $job->id }}/edit">Edit</x-button>
        </p>
    @endcan
</x-Layout>
