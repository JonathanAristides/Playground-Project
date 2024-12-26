@props(['employer', 'width' => 100])
<img class="employer-logo__image" src="{{asset($employer->logo)}}" alt="company-logo"
     width="{{$width}}"/>
