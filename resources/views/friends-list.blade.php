    <div class="bg-gray-200 border border-gray-300 rounded-2xl py-4 px-6">
        <h3 class="font-bold text-xl mb-4">Following</h3>
        <ul bg-blue-100 rounded-lg p-4>
        @forelse(auth()->user()->follows as $user)
        <li class="{{$loop->last?'':'mb-4'}}">
            <div >
                <a class="flex items-center text-sm" href="{{route('profile',$user)}}" >
                    <img
                        src="{{$user->avatar}}"
                        alt="avatar"
                        class="rounded-full mr-2"
                        width="40px"
                        height="40px"
                    >
                    {{$user->name}}
                </a>

            </div>
        </li>
            @empty
                <li>No friends yet</li>
        @endforelse
        </ul>
    </div>
