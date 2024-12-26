@props(['job'])

<li class="job-card">
    <section class="job-card__section">

        <div class="job-card__job-details">
            <div class="job-card__employer">
                <x-job-board.employer-logo :width="50" :employer="$job->employer"></x-job-board.employer-logo>
                <p class="job-card__employer-name">{{ $job->employer->name }}</p>
            </div>
            <p class="job-card__job-name">
                <a href="{{$job->url}}" target="_blank">
                    {{ $job->title }}
                </a>
            <p class="job-card__salary">{{ $job->salary }}</p>
            <p class="job-card__location">{{ $job->location }}</p>
        </div>

        <div class="job-card__tags">
            <ul class="job-card__tag-list">
                @foreach($job->tags as $tag)
                    <x-job-board.tag :tag="$tag"/>
                @endforeach
            </ul>
        </div>
    </section>
</li>
