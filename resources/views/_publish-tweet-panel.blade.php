<div class="border border-blue-460 rounded-lg p-4 mb-8">
    <form method="POST"  action="/tweets">
        @csrf
        <textarea name='body' class='w-full p-8' placeholder="what's up">
            
        </textarea>

        <hr class="my-4">

        <footer class="flex justify-between ">
            <img 
                class='rounded-full mr-2'
                src="{{auth()->user()->getAvatar(40)}}"
            >
            <button
                type="submit" 
                class="bg-blue-400 rounded-lg shadow py-2 px-6 text-white"
            >
                tweet
            </button>
        </footer>
        
    </form>
    @error('body')
        <p class="text-red-500 text-sm mt-4">{{$message}}</p>
    @enderror
</div>