@props(['src', 'alt', 'title', 'gallery'])

<div class="portfolio-item">
  <div class="portfolio-wrap">
    <img src="{{ $src }}" class="img-fluid" loading="lazy" alt="{{ $alt }}">
    <div class="portfolio-links">
      <a href="{{ $src }}" data-gallery="{{ $gallery }}" class="portfolio-lightbox" title="{{ $title }}"><x-icon.plus class="h-6 w-6" /></a>
    </div>
  </div>
</div>
