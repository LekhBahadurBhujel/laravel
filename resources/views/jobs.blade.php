<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>
  
    <ul>
    @foreach ($jobs as $job)
<li>
    <a href="/jobs/{{ $job['id'] }}">
        <strong>{{ $job['title'] }}</strong> pays {{ $job['salary'] }} per year in {{ $job['location'] }}
    </a>
</li>
    @endforeach
    </ul>
</x-layout>