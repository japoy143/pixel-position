  @props(['tag', 'size' => 'base'])

  @php
      $classes = 'hover:bg-white/25 bg-white/10  rounded-xl  transition-colors duration-300';

      if ($size == 'base') {
          $classes .= ' px-5 py-1 text-sm';
      } else {
          $classes .= ' px-3 py-1 text-2xs';
      }

  @endphp

  <a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{ $tag->name }}</a>
