<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/tweets">
        @csrf
                    <textarea
                        name="body"
                        class="w-full"
                        placeholder="what is in your mind?"
                        required
                    >
                    </textarea>
        <hr class="my-4">
        <footer class="flex justify-between items-center">
            <img
                src="{{auth()->user()->avatar}}"
                alt="avatar"
                class="rounded-full mr-2"
                width="40px"
                height="40px"
            >
            <button
                type="submit"
                class="bg-blue-500 hover:bg-blue-400 rounded-lg shadow  px-2 text-white">Tweet</button>
        </footer>


    </form>
    @error('body')
    <p class="text-sm text-red-500 mt-2" >{{$message}}</p>
    @enderror
</div>
<div>

</div>
