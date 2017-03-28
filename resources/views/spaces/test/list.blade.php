

<div class="row">
	<div class="col-md-4">
		<h5>One</h5>
		<ul>
			<li><a href="{{ route('spaces-test-view', ['lat' => '34.133106', 'long' => '-118.266497']) }}">Location 1</a></li>
			<li><a href="{{ route('spaces-test-view', ['lat' => '34.133132', 'long' => '-118.265963']) }}">Location 2</a></li>
			<li><a href="{{ route('spaces-test-view', ['lat' => '34.133174', 'long' => '-118.265714']) }}">Location 3</a></li>
		</ul>
	</div>
	<div class="col-md-4">
		<h5>Multiple</h5>
		<ul>
			<li><a href="{{ route('spaces-test-view', ['lat' => '34.241249', 'long' => '-118.528308']) }}">Location 1</a></li>
		</ul>
	</div>
	<div class="col-md-4">
		<h5>Too Close</h5>
		<ul>
			<li><a href="{{ route('spaces-test-view', ['lat' => '34.145292', 'long' => '-118.256342']) }}">Location 1</a></li>
			<li><a href="{{ route('spaces-test-view', ['lat' => '34.145192', 'long' => '-118.256342']) }}">Location 1</a></li>
		</ul>
	</div>
</div>