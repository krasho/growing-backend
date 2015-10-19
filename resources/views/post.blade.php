@extends("layouts/public")

@section("content")
<div class="title-post">
{{ $post->title }}
</div>

<div class="post-information">
    <div class="author">
        {{ $post->author }}
    </div>
    <div class="publish-date">
        {{ $post->publish_date }}
    </div>
    <div class="comments">
        {{ $post->commentsCount }} Comentarios
    </div>

</div>

<div class="post-body">
	{{ $post->description }}
</div>


<div class="comments-post">
Aqui van los comentarios
</div>

<!--<br><br><br>
<form>
	<textarea class="ckeditor"  name="editor1" id="editor1" rows="10" cols="80">
	    Este es el textarea que es modificado por la clase ckeditor
	</textarea>
</form>

<script src="{{ asset('/js/vendors/ckeditor/ckeditor.js') }}"></script>
-->
@stop