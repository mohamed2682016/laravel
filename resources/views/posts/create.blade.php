<form action="/posts" method="POST">
@csrf
<input type ="text" name="title" /><br><hr>
<textarea name="description" id="" cols="30" rows="10"></textarea><br><hr>
<input type="submit" name="submit" value="Add Post" />
</form>