@extends('layouts.app')

@section('main_section')
	<header class = "relative">
		<div class = "mb-6">
			<img class="rounded-lg object-cover h-48 w-full" src="/images/cover.jpg">
		</div>

		<div class = "flex justify-between items-center mb-4">
			<div>
				<h1 class="font-bold text-xl">{{$user->name}}</h1>
				<p>joined {{$user->created_at->diffForHumans()}}</p>
			</div>

			<div class="flex">
				@can('edit' , $user)

					<form method="POST" action = "{{$user->path('edit')}}">
						@csrf
						<button
			                type="submit" 
			                class="rounded-full border border-gray-400 py-2 px-6 text-black text-xs"
			            >
		   					 Edit Profile
		           		 </button>
					</form>
						 
	           	@endcan
		         @if(current_user()->isNot($user))
		             <form method="POST" action="/profiles/{{$user->name}}/follow">
		             	@csrf
		             	<button
			                type="submit" 
			                class="bg-blue-400 rounded-full shadow py-2 px-6 text-white text-xs"
			            >
			                {{auth()->user()->isFollowing($user) ? "Unfollow Me" : "Follow Me"}}
		            	</button>
		             </form>
		         @endif
			             
			</div>

		</div>

		<img 
            class='absolute rounded-full mr-2'
            src="{{$user->getAvatar(150)}}"
        	style = "width:150px ; left:calc(50% - 75px) ; top:50%"
        >

	</header>
	<hr>
	@include('_timeline' , ['tweets'=> $user->tweets])
@endsection
