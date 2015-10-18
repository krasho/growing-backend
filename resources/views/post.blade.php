@extends("layouts/public")

@section("content")
<br><br><br>
<form>
	<textarea class="ckeditor"  name="editor1" id="editor1" rows="10" cols="80">
	    Este es el textarea que es modificado por la clase ckeditor
	</textarea>
</form>

<script src="{{ asset('/js/vendors/ckeditor/ckeditor.js') }}"></script>
@stop