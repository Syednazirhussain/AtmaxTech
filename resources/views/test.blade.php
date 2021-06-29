@extends('layout')


@section('content')

	 <div class="wrapper">

        <section class="module divider-top" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

						<form id="test">
							@csrf
							<label>
								Name:
								<input type="text" name="name">
							</label>
							<input type="submit" value="Send">
						</form>

                    </div>
                </div>
            </div>
        </section>

	</div>

@endsection

@section('js')

	<script type="text/javascript">
		
		$(document).ready(function () {

			$("#test").on('submit', function (e) {

				var data = $(this).serializeArray()

				console.log(data)

				$.ajax({
					url: '{{ route('test') }}',
					type: 'POST',
					data: data
				}).done(response => function () {

					console.log(response)
				})

				e.preventDefault()
			});
		});


	</script>

@endsection