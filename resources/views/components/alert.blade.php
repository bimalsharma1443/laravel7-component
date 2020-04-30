<div {{ $attributes->merge(['class'=> 'inner']) }}>
  <div class="alert alert-{{ $type }}">
  	{{ $message }}
	</div>

	{{ $title }}
	<ul>
		@foreach($list('delhi') as $row)
			<li>{{ $row }}</li>
		@endforeach
	</ul>

	{{ $slot }}

</div>