@props(['job'])

<li class="job-card-wide">
    <section class="job-card-wide__section">
        <x-job-board.employer-logo :width="150" :employer="$job->employer"></x-job-board.employer-logo>

        <div class="job-card-wide__job-details">
            <a class="job-card-wide__job-employer-name">{{$job->employer->name}}</a>
            <a href="{{$job->url}}" target="_blank">
                {{ $job->title }}
            </a>
            <p class="job-card-wide__salary">{{$job->salary}}</p>
            <p class="job-card-wide__location">{{$job->location}}</p>
        </div>

        <div class="job-card-wide__tags">
            <ul class="job-card-wide__tag-list">
                @foreach($job->tags as $tag)
                    <x-job-board.tag :$tag/>
                @endforeach
            </ul>
        </div>
    </section>
</li>
