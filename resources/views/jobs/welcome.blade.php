<x-layout>
    <section class="welcome-container">

        <section class="welcome__section-container">
            <x-search-form></x-search-form>
        </section>

        <section class="welcome__section-container">
            <div class="welcome__section-heading">
                <x-section-heading>Top Jobs</x-section-heading>
            </div>

            <ul class="welcome__job-cards">
                @foreach($jobs as $job)
                    <x-job-card :job="$job" class="welcome__job-card"></x-job-card>
                @endforeach
            </ul>
        </section>

        <section class="welcome__section-container">
            <div class="welcome__section-heading">
                <x-section-heading>Tags</x-section-heading>
            </div>

            <ul class="welcome__tag-list">
                @foreach($tags as $tag)
                    <x-tag :tag="$tag"/>
                @endforeach
            </ul>
        </section>

        <section class="welcome__section-container">
            <div class="welcome__section-heading">
                <x-section-heading>Recent Jobs</x-section-heading>
            </div>

            <ul class="welcome__job-cards-wide">
                @foreach($jobs as $job)
                    <x-job-card-wide :job="$job"></x-job-card-wide>
                @endforeach
            </ul>
        </section>
    </section>
</x-layout>
