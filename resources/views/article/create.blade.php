@extends('layout')
@section ('content')
	<div id="wrapper">
		<div id="page" class="container">
			<h1>New Article</h1>
			<form method="POST" action="/articles">
				@csrf
				<div class="field">
					<label class="label" for="title">Title</label>
					<div class="control">
						<input type="text" name="title" class="input" id="title">
					</div> 	
				</div>
				<div class="field">
					<label class="label" for="excerpt">Excerpt</label>
					<div class="control">
						<textarea name="excerpt" class="textarea" id="excerpt"></textarea>						
					</div> 	
				</div>
				<div class="field">
					<label class="label" for="body">Body</label>
					<div class="control">
						<textarea name="body" class="textarea" id="body"> </textarea>
					</div> 	
				</div>
				<div class="field is-grouped">
					<div class="control">
						<button class="button is-link" type="submit">Submit</button>
					</div>
					<div class="control">
						<button class="button is-text">Cancel</button>
					</div>
				</div>
			</form>	
		</div>
	</div>
	
@endsection()
