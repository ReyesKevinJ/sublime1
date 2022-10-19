<x-app-layout>
    <div class="container py-8">

        <div class="grid grid-cols-3 gap-6">

            @foreach ($posts as $post)

                <article class="w-full h-80 bg-center @if($loop->first) col span-2 @endif " style="background-image:url{{$post->image->url}})">
                </article>
            @endforeach
        </div>

    </div>
</x-app-layout>
