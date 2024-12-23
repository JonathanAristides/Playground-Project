<x-layout>
    <section class="results__section-container">
        <x-job-board.page-heading>Results</x-job-board.page-heading>

        <ul class="results__job-cards-wide">
            @foreach($jobs as $job)
                <x-job-board.job-card-wide :job="$job"></x-job-board.job-card-wide>
            @endforeach
        </ul>

    </section>
</x-layout>
