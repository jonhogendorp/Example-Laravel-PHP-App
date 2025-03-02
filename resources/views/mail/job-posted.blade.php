<div>
    <h2>
        {{ $job->title }}
    </h2>

    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
    <h1 class="text-2xl font-semibold text-gray-900">New Job Posted</h1>
    <p class="mt-1 text-sm text-gray-600">A new job has been posted on the job board.</p>
    <p>
        <a href="{{ url('/jobs/' . $job->id) }}">
            view job listing:
            <strong>{{ $job->title }}</strong>
        </a>
    </p>
</div>
