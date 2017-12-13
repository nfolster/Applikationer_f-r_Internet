<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
function deleteComment(id)
{
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

$.ajax({
            type: 'post',
            url: '/delete',
            data: {id : id},
            success: function(){
                $('#comments').load(document.URL +  ' #comments');
            }
        })
}
</script>

<br><br>
    <div class="comment">
	    <h3>Comments</h3>
		    <ul id="comments" class="comment">
		    	@foreach ($comments as $comment)
		    		<li id={{$comment->id}}><!--
		    		-->{{$comment->body}}
		    			@if(Auth::check())
			    			@if($comment->user_id==Auth::user()->id)
				    			<form class="delete" id="delete" method="post" action="">
				    				{{ csrf_field() }}
				    				{{--<input name="delete" type="image" src="img/delete.png">--}}
				    				<input id="commentId" type="hidden" name="recipe_id" value="{{$comment->id}}">
				    				<img  id="deleteButton" src="img/delete.png" onclick="deleteComment({{$comment->id}})">
				    			</form>
			    			@endif
		    			@endif
		    			<hr><p>{{$comment->created_at}}
		    		 by <b>{{$name = DB::table('users')->where('id', $comment->user_id)->value('name')}}
		    		</b></p></li>
		    	@endforeach
		    	<div id="writeComment"></div>
		    </ul>

@if(Auth::check())
@include('writeComment')
@endif
	</div>