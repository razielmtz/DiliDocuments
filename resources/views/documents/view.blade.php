<x-template>

	<div class="container-fluid p-5">
		<div class=" view-container container-fluid d-flex justify-content-center">
			<div class="container-fluid d-flex justify-content-center">
				<h3 class="header-text">{{$data->name}}</h3>
			</div>
			<div class="container-fluid d-flex justify-content-center">
				<p class="header-text top-paragraph">{{$data->description}}</p>
			</div>
			<div class="container-fluid d-flex justify-content-center">
				<iframe height="400"  width="400" src="/assets/{{$data->file}}"></iframe>
			</div>
		</div>
	</div>

</x-template>