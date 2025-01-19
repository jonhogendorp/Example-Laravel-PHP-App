<x-Layout>
    <x-slot:heading>Job</x-slot:heading>
    <h2 class="text-2xl">
        Job Title: {{$job['title']}}
    </h2>

    <p>
        Salary: {{$job['salary']}}
    </p>
    <p>
        Job Description: {{$job['description']}}
    </p>

</x-Layout>
