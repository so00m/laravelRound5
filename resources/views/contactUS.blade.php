<!doctype html>
<html lang="en">
  	<head>
		<title>Contact Form 07</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" href="{{ asset('assets/contactFormAssets/css/style.css') }}">

	</head>
	<body>
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6 text-center mb-5">
						<h2 class="heading-section">Contact Form</h2>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-10">
						<div class="wrapper">
							<div class="row no-gutters">
								<div class="col-md-6 d-flex align-items-stretch">
									<div class="contact-wrap w-100 p-md-5 p-4 py-5">
										<h3 class="mb-4">Write us</h3>
										<form action="{{ route('sendmail') }}" method="post" enctype="multipart/form-data">
											@csrf 
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<p style="color:red">
															@error('name')
															{{ $message }}
															@enderror
														</p>
														<input type="text" class="form-control" name="name" id="name" placeholder="Name">
													</div>
												</div>
												<div class="col-md-12"> 
													<div class="form-group">
														<p style="color:red">
															@error('email')
															{{ $message }}
															@enderror
														</p>
														<input type="email" class="form-control" name="email" id="email" placeholder="Email">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<p style="color:red">
															@error('subject')
															{{ $message }}
															@enderror
														</p>
														<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<p style="color:red">
															@error('contentMessage')
															{{ $message }}
															@enderror
														</p>
														<input type="text" class="form-control" name="contentMessage" id="contentMessage" placeholder="contentMessage">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<input type="submit" value="Send Message" class="btn btn-primary">
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>



	</body>
</html>