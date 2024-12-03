@props(['size' => '100'])

<img src="http://picsum.photos/seed/{{ rand(0, 100) }}/{{ $size }}/{{ $size }}" alt=""
    class="rounded-xl" />
