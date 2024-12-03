@props(['job'])

<x-panel class="flex flex-col">
    <div class="self-start text-sm">{{ $job->employer->name }}</div>

    <div class=" py-8 ">
        <h3 class=" text-xl font-bold group-hover:text-blue-800 transition-all duration-300">{{ $job->title }}</h3>
        <p class="text-sm mt-4 ">{{ $job->salary }}</p>
    </div>

    <div class=" flex justify-between items-center mt-auto">
        <div>

            @foreach ($job->tags as $tag)
                <x-tag size="small" :$tag />
            @endforeach
        </div>

        <x-employer-logo size="42" />
    </div>

</x-panel>
