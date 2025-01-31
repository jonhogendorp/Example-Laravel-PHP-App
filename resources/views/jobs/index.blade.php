<x-Layout>
    <x-slot:heading>About Page</x-slot>

    <h1>hello from the about page</h1>
    <ul class="mt-5 space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}">
                <li class="border- my-5 block rounded-lg border border-gray-200 bg-slate-50 px-4 py-6 shadow">
                    <div class="text-blue-500">{{ $job->employer->name }}</div>
                    <strong>{{ $job['title'] }}:</strong>
                    Pays {{ $job['salary'] }} per year
                </li>
            </a>
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>
    </ul>
</x-Layout>
