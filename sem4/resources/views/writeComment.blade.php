<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(function()
{
$('#write').on('submit',function(e){
	$.ajaxSetup({
	  headers: {
	    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	  }
	});

e.preventDefault(e);
$.ajax({
            type: 'post',
            url: '/write',
            data:$(this).serialize(),
            success: function(data){
                $('#comments').load(document.URL +  ' #comments');
            }
        })
});
});
</script>
<form class="login comment" id="write" action="" method="post">
	{{ csrf_field() }}
	<label>Write a comment:</label><br>
	    <textarea name="body" placeholder="Add comment..." cols="30" rows="3"></textarea><br>
	    <input type="hidden" name="recipe_id" value="{{$recipe}}">
	    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
	    <input name="submit" type="submit" value=" Enter ">
</form>