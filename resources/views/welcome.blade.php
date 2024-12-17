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
                <x-job-card class="welcome__job-card"></x-job-card>
                <x-job-card class="welcome__job-card"></x-job-card>
                <x-job-card class="welcome__job-card"></x-job-card>
            </ul>
        </section>

        <section class="welcome__section-container">
            <div class="welcome__section-heading">
                <x-section-heading>Tags</x-section-heading>
            </div>

            <ul class="welcome__tag-list">
                <x-tag size='large'>Backend</x-tag>
                <x-tag size='large'>Frontend</x-tag>
                <x-tag size='large'>Fullstack</x-tag>
            </ul>
        </section>

        <section class="welcome__section-container">
            <div class="welcome__section-heading">
                <x-section-heading>Recent Jobs</x-section-heading>
            </div>

            <ul class="welcome__job-cards-wide">
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
            </ul>
        </section>
    </section>
</x-layout>
