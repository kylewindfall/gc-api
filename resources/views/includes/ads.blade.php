<div class="row ad-listing">

  <div class="two columns">
    <a href="/ads/{{ $ad->id }}"><p>{{ $ad->business }}</p></a>
  </div>

  <div class="four columns">
    <a href="/ads/{{ $ad->id }}"><p>{{ $ad->headline }}</p></a>
  </div>

  <div class="one columns">
    @if($ad->homepage == 1)
      <a href="/ads/{{ $ad->id }}/hide-homepage"><p class="center-text"><i class="icon-check icons yes"></i></p></a>
    @else
      <a href="/ads/{{ $ad->id }}/show-homepage"><p class="center-text"><i class="icon-close icons no"></i></p></a>
    @endif
  </div>

  <div class="one column">
    @if($ad->inside == 1)
      <a href="/ads/{{ $ad->id }}/hide-inside"><p class="center-text"><i class="icon-check icons yes"></i></p></a>
    @else
      <a href="/ads/{{ $ad->id }}/show-inside"><p class="center-text"><i class="icon-close icons no"></i></p></a>
    @endif
  </div>

  <div class="one column">
    @if($ad->active == 1)
      <a href="/ads/{{ $ad->id }}/deactivate"><p class="center-text"><i class="icon-check icons yes"></i></p></a>
    @else
      <a href="/ads/{{ $ad->id }}/activate"><p class="center-text"><i class="icon-close icons no"></i></p></a>
    @endif
  </div>

  <div class="one column">
    {{ ifcheck($ad->scheduled) }}
  </div>

  <div class="one column">
    <p class="center-text">{{ $ad->clicks }}</p>
  </div>

  <div class="one column">
    @if($ad->approved == 0)
      <a href="ads/{{ $ad->id }}/approve" class="yes">Approve</a>
    @else
      <a href="ads/{{ $ad->id }}/unapprove" class="no">Unapprove</a>
    @endif
  </div>

</div>
