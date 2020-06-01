<h3 class='font-bold text-xl mb-3'>friends</h3>

<ul>
	@foreach(auth()->user()->follows as $user)
		<li>	
			<div >
				<a href="{{route('profile',$user->name)}}" class='flex items-center text-sm mb-2'>
					
					<img 
						class='rounded-full mr-2'
						src="{{$user->getAvatar(40)}}"
					>
					{{$user->name}}

				</a>
			</div>
			
		</li>
	@endforeach
</ul>