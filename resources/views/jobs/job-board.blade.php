<x-layout>
    <section class="job-board-container">

        <section class="job-board__section-container">
            <x-search-form></x-search-form>
        </section>

        <section class="job-board__section-container">
            <div class="job-board__section-heading">
                <x-section-heading>Top Jobs</x-section-heading>
            </div>

            <ul class="job-board__job-cards">
                @foreach($featuredJobs as $job)
                    <x-job-card :job="$job" class="job-board__job-card"></x-job-card>
                @endforeach
            </ul>
        </section>

        <section class="job-board__section-container">
            <div class="job-board__section-heading">
                <x-section-heading>Tags</x-section-heading>
            </div>

            <ul class="job-board__tag-list">
                @foreach($tags as $tag)
                    <x-tag :tag="$tag"/>
                @endforeach
            </ul>
        </section>

        <section class="job-board__section-container">
            <div class="job-board__section-heading">
                <x-section-heading>Recent Jobs</x-section-heading>
            </div>

            <ul class="job-board__job-cards-wide">
                @foreach($jobs as $job)
                    <x-job-card-wide :job="$job"></x-job-card-wide>
                @endforeach
            </ul>
        </section>
    </section>
</x-layout>
