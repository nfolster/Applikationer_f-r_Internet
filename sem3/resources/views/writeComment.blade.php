
<form class="login comment" action="/write" method="post">
	{{ csrf_field() }}
	<label>Write a comment:</label><br>
	    <textarea name="body" placeholder="Add comment..." cols="30" rows="3"></textarea><br>
	    <input type="hidden" name="recipe_id" value="{{$recipe}}">
	    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
	    <input name="submit" type="submit" value=" Enter ">
</form>