<x-app>
    <div>
        @foreach($users as $user)
            <a href="{{$user->path()}}">
                <div class="flex items-center mb-4">
                    <img src="{{$user->avatar}}"
                         alt="{{$user->name}}'s avatar"
                         width="60"
                         class="mr-2"

                    >
                    <div>
                        <h4 class="font-bold">{{'@'. $user->name}}</h4>
                    </div>
                </div>
            </a>
        @endforeach
        {{$users->links()}}
    </div>
</x-app>
