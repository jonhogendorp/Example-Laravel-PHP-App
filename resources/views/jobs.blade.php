<x-Layout>
    <x-slot:heading>About Page</x-slot>

    <h1>hello from the about page</h1>
    <ul>
        @foreach ($jobs as $job  )
            <a href="/jobs/{{$job['id']}}">
                <li class="my-5 text-blue-500 hover:underline underline-offset-2">
                    <strong>{{$job['title']}}:</strong> Pays {{$job['salary']}} per year
                </li>
            </a>
        @endforeach
    </ul>
</x-Layout>
