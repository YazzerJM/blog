<x-app-layout>

    <div class="container py-8">

        <h1 class="text-4xl font-bold text-gray-600">{{$post->name}}</h1>

        <div class="text-lg text-gray-500 mb-2">
            {!!$post->extract!!}
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            {{-- Contenido principal --}}
            <div class="lg:col-span-2">
                <figure>
                    @if ($post->image)
                        <img class="w-full h-80 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="">
                    @else
                        <img class="w-full h-80 object-cover object-center" src="https://cdn.pixabay.com/photo/2021/07/27/16/23/buildings-6497337_960_720.jpg" alt="">
                    @endif
                </figure>

                <div class="text-base text-gray-500 mt-4">
                    {!!$post->body!!}
                </div>
            </div>

            {{-- Contendio relacionado --}}
            <aside>
                <h1 class="text-2xl font-bold text-gray-600 mb-4">M&aacute;s en {{$post->category->name}}</h1>

                <ul>
                    @foreach ($similar as $similary)
                        <li class="mb-4">
                            <a class="flex" href="{{route('posts.show', $similary)}}">
                                @if ($similary->image)
                                    <img class="flex-initial w-36 h-20 object-cover object-center" src="{{Storage::url($similary->image->url)}}" alt="">
                                @else
                                    <img class="flex-initial w-36 h-20 object-cover object-center" src="https://cdn.pixabay.com/photo/2021/07/27/16/23/buildings-6497337_960_720.jpg" alt="">
                                @endif
                                <span class="flex-1 ml-2 text-gray-600">{{$similary->name}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>

</x-app-layout>
