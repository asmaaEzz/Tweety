<x-app>
    <header class="mb-4 relative">
        <div class="relative">
            <img
                src="/images/default-profile-banner.jpg"
                class="mb-2"
            >
            <img
                src="{{$user->avatar}}"
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                style="left: 50%"
                width="150"
                alt="avatar">
        </div>
        <div class="flex justify-between items-center mb-6">
            <div style="max-width: 270px">
                <h2 class="font-bold text-xl">{{$user->name}}</h2>
                <p class="text-sm"> joined {{$user->created_at->diffforHumans()}}</p>
            </div>
            <div class="flex">
                @can('edit',$user)
                <a
                    href="{{$user->path('edit')}}"
                    class="rounded-full border border-gray-300 mr-3 py-2 px-4 text-black text-xs">
                    Edit profile
                </a>
                @endcan
                <x-follow-button :user="$user">

                </x-follow-button>


            </div>
        </div>
        <p class="text-sm">
            A paragraph is a series of related sentences developing a central idea, called the topic.
            Try to think about paragraphs in terms of thematic unity: a paragraph is a sentence or a group of sentences that
            supports one central, unified idea. Paragraphs add one idea at a time to your broader argument.
        </p>

    </header>
    @include('timeline',[
    'tweets'=>$tweets
])

</x-app>

