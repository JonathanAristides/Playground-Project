<li class="job-card">
    <section class="job-card__section">

        <div class="job-card__job-details">
            <div class="job-card__employer">
                <x-employer-logo :width="50"></x-employer-logo>
                <p class="job-card__employer-name">Employer Name</p>
            </div>
            <p class="job-card__job-name">Job Name</p>
            <p class="job-card__salary">Salary</p>
            <p class="job-card__location">Location</p>
        </div>

        <div class="job-card__tags">
            <ul class="job-card__tag-list">
                <x-tag size='small'>Backend</x-tag>
                <x-tag size='small'>Frontend</x-tag>
                <x-tag size='small'>Fullstack</x-tag>
            </ul>
        </div>
    </section>
</li>
