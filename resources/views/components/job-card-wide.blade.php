@props(['job'])

<li class="job-card-wide">
    <section class="job-card-wide__section">
        <x-employer-logo :width="150"></x-employer-logo>

        <div class="job-card-wide__job-details">
            <a class="job-card-wide__job-employer-name">Employer Name</a>
            <p class="job-card-wide__job-name">Job Name</p>
            <p class="job-card-wide__salary">Salary</p>
            <p class="job-card-wide__location">Location</p>
        </div>

        <div class="job-card-wide__tags">
            <ul class="job-card-wide__tag-list">
                @foreach($job->tags as $tag)
                    <x-tag :$tag/>
                @endforeach
            </ul>
        </div>
    </section>
</li>
