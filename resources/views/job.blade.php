<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>
 
    <h2 class="font-bold text-lg">{{$job['title']}}</h2>
    <p>
        This job pays {{ $job['salary'] }} per year in {{$job['location']}}.
    </p>
   
</x-layout>