
<div class="container">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
			<a class="navbar-brand">Bowling Tracker</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="/">Home</a></li>
				<li><a href="/bowler/dylan">Dylan</a></li>
				<li><a href="/bowler/justin">Justin</a></li> 
				<li><a href="/bowler/gary">Gary</a></li> 
			</ul>
		</div>
	</nav>

	<div class="panel panel-primary">
		<div class="panel-heading">
			<h2 class="panel-title">Enter Game</h2>
		</div>
		<div class="panel-body">
			<form method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<label>Name</label>
				<select name="name">
					<option>Dylan</option>
					<option>Justin</option>
					<option>Gary</option>
				</select>
				<label>Score</label>
				<input type="number" name="score" min='0' max='300' required>
				<button type="submit">Submit</button>
			</div>
		</form>
	</div>
</div>