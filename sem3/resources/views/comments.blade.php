
<br><br>
    <div class="comment">
	    <h3>Comments</h3>
		    <ul class="comment">
		    	@foreach ($comments as $comment)
		    		<li><!--
		    		-->{{$comment->body}}
		    			@if(Auth::check())
			    			@if($comment->user_id==Auth::user()->id)
				    			<form class="delete" method="post" action="{{ route('delete', ['id' => $comment->id]) }}">
				    				{{ csrf_field() }}
				    				<input name="delete" type="image" src="img/delete.png">
				    			</form>
			    			@endif
		    			@endif
		    			<hr><p>{{$comment->created_at}}
		    		 by <b>{{$name = DB::table('users')->where('id', $comment->user_id)->value('name')}}
		    		</b></p></li>
		    	@endforeach
		    </ul>

@if(Auth::check())
@include('writeComment')
@endif
	</div>