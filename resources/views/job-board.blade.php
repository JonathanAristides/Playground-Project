<x-layout>
    <section class="job-board-container">

        <section class="job-board__section-container">
            <x-job-board.search-form></x-job-board.search-form>
        </section>

        <section class="job-board__section-container">
            <div class="job-board__section-heading">
                <x-job-board.section-heading>Top Jobs</x-job-board.section-heading>
            </div>

            <ul class="job-board__job-cards">
                @foreach($featuredJobs as $job)
                    <x-job-board.job-card :job="$job" class="job-board__job-card"></x-job-board.job-card>
                @endforeach
            </ul>
        </section>

        <section class="job-board__section-container">
            <div class="job-board__section-heading">
                <x-job-board.section-heading>Tags</x-job-board.section-heading>
            </div>

            <ul class="job-board__tag-list">
                @foreach($tags as $tag)
                    <x-job-board.tag :tag="$tag"/>
                @endforeach
            </ul>
        </section>

        <section class="job-board__section-container">
            <div class="job-board__section-heading">
                <x-job-board.section-heading>Recent Jobs</x-job-board.section-heading>
            </div>

            <ul class="job-board__job-cards-wide">
                @foreach($jobs as $job)
                    <x-job-board.job-card-wide :job="$job"></x-job-board.job-card-wide>
                @endforeach
            </ul>
        </section>
    </section>
</x-layout>
