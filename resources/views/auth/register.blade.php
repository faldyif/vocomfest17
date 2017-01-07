@extends('layouts.main')
@section('title', 'Login Vocomfest')

@section('body')
<div class="wrapLogin">
<!-- HEADER -->
<header id="sign-header">
	<a href="{{ url('/index.html') }}" class="navbar-brand">
					<img src="{{ url('/assets/img/icon-2.png') }}" alt="Vocomfest" class="img-brand">
					<span class="text-brand mont-bold">VOCOMFEST</span>
				</a>
</header>
<!-- REGISTER -->
	<div class="container col-md-12 col-xs-12">
		<h1 class="mg-b-15 text-center blue mont-bold he-1">Register to Vocomfest</h1>
		<!-- FORM REGISTER -->
		<div class="mg-b-10 col-md-12">
			<!-- Nav tabs -->
				  <ul class="nav nav-tabs" role="tablist" id="myTabs">
				    <li role="presentation" class="active">
				    	<a href="#competitions" aria-controls="home" role="tab" data-toggle="tab">
				    		<span class="mont-bold big">Competitions</span>
				    	</a>
				    </li>
				    <li role="presentation">
				    	<a href="#semnas" aria-controls="profile" role="tab" data-toggle="tab">
				    		<span class="mont-bold big">Seminar Nasional</span>
				    	</a>
				    </li>
				  </ul>
			<!-- Tab panes -->
				<div class="tab-content">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
				<!-- Tab1 -->
					<div role="tabpanel" class="tab-pane active" id="competitions">
						<!-- Main Form -->
						<div class="col-md-8 wrapReg">
							<form class="sign-form" role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}
                <input type="hidden" name="type" value="competition">
								<div class="row">
									<div class="col-md-6 col-sm-6 mg-b-20">
										<div class="col-md-5">
											Team Name
										</div>
										<div class="col-md-7">
											: <input type="text" placeholder="team name" name="name">
										</div>
									</div>
									<div class="col-md-6 col-sm-6 mg-b-20">
										<div class="col-md-5">
											Leader email
										</div>
										<div class="col-md-7">
											: <input type="email" placeholder="email" name="email">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 col-sm-6 mg-b-20">
										<div class="col-md-5">
											Password
										</div>
										<div class="col-md-7">
											: <input type="password" placeholder="password" name="password">
										</div>
									</div>
									<div class="col-md-6 col-sm-6 mg-b-20">
										<div class="col-md-5">
											Confirm Password
										</div>
										<div class="col-md-7">
											: <input type="password" placeholder="confirm password" name="password_confirmation">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 col-sm-6 mg-b-20">
										<div class="col-md-5">
											Instance Name
										</div>
										<div class="col-md-7">
											: <input type="text" placeholder="Instance Name" name="instance_name">
										</div>
									</div>
									<div class="col-md-6 col-sm-6 mg-b-20">
										<div class="col-md-5">
											Instance Address
										</div>
										<div class="col-md-7">
											: <input type="text" placeholder="Instance Address" name="instance_address">
										</div>
									</div>
								</div>

								<div class="row">
									<div  class="col-md-12">
										<label class="col-xs-12 col-md-4 col-sm-4 mg-b-20">
											<input type="radio" name="competition" value="2" id="wdc" class="event-category" checked> <span>Web Design Competition</span>
										</label>
										<label class="col-xs-12 col-md-4 col-sm-4 mg-b-20">
											<input type="radio" name="competition" value="3" id="madc" class="event-category"> <span>Mobile Apps Development Competition</span>
										</label>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 col-sm-6 mg-b-20">
										<div class="col-md-5">
											Leader Name
										</div>
										<div class="col-md-7">
											: <input type="text" placeholder="Leader Name" name="leader_name">
										</div>
									</div>
									<div class="col-md-6 col-sm-6 mg-b-20">
										<div class="col-md-5">
											Phone Number
										</div>
										<div class="inNum col-md-7">
											: +62 <input type="number" placeholder="phone number" name="leader_phone">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 col-sm-6 mg-b-20">
										<h4 class="mont">Member Team Data #1</h4>
										<div class="col-md-12 mg-b-20">
											<div class="row">
												<div class="col-md-5">
													Member Name
												</div>
												<div class="col-md-7">
													: <input type="text" placeholder="Member Name" name="member1_name">
												</div>
											</div>
										</div>
										<div class="col-md-12 mg-b-20">
											<div class="row">
												<div class="col-md-5">
													Member Email
												</div>
												<div class="col-md-7">
													: <input type="email" placeholder="member email" name="member1_email">
												</div>
											</div>
										</div>
										<div class="col-md-12 mg-b-20">
											<div class="row">
												<div class="col-md-5">
													Phone Number
												</div>
												<div class="inNum col-md-7">
													: +62 <input type="number" placeholder="phone number" name="member1_phone">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-sm-6 mg-b-20">
										<h4 class="mont">Member Team Data #2</h4>
										<div class="col-md-12 mg-b-20">
											<div class="row">
												<div class="col-md-5">
													Member Name
												</div>
												<div class="col-md-7">
													: <input type="text" placeholder="Member Name" name="member2_name">
												</div>
											</div>
										</div>
										<div class="col-md-12 mg-b-20">
											<div class="row">
												<div class="col-md-5">
													Member Email
												</div>
												<div class="col-md-7">
													: <input type="email" placeholder="member email" name="member2_email">
												</div>
											</div>
										</div>
										<div class="col-md-12 mg-b-20">
											<div class="row">
												<div class="col-md-5">
													Phone Number
												</div>
												<div class="inNum col-md-7">
													: +62 <input type="number" placeholder="phone number" name="member2_phone">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-sm-6 mg-b-20" id="newmember">
										<h4 class="mont">Member Team Data #3</h4>
										<div class="col-md-12 mg-b-20">
											<div class="row">
												<div class="col-md-5">
													Member Name
												</div>
												<div class="col-md-7">
													: <input type="text" placeholder="Member Name" name="member3_name">
												</div>
											</div>
										</div>
										<div class="col-md-12 mg-b-20">
											<div class="row">
												<div class="col-md-5">
													Member Email
												</div>
												<div class="col-md-7">
													: <input type="email" placeholder="member email" name="member3_email">
												</div>
											</div>
										</div>
										<div class="col-md-12 mg-b-20">
											<div class="row">
												<div class="col-md-5">
													Phone Number
												</div>
												<div class="inNum col-md-7">
													: +62 <input type="number" placeholder="phone number" name="member3_phone">
												</div>
											</div>
										</div>
									</div>
                </div>

								<div class="row">
								</div>

								<div class="row">
									<div class="col-md-3">
										<button class="no-m btn btn-more mg-bt-15" type="submit">
                      REGISTER
                    </button>
									</div>
								</div>

							</form>
						</div>
						<!-- End of Main Form-->
						<!-- Description -->
						<div class="col-md-4 wrapDesc">
							<section>
								<h3 class="mont">Web Design Competition</h3>
								<ul>
									<li>Eam delectus invenire moderatius ne.</li>
									<li>An perfecto singulis argumentum pri, animal virtute delectus at est.</li>
									<li>Natum facer tincidunt eu sea, hinc laboramus est te.</li>
								</ul>
							</section>
							<section>
								<h3 class="mont">Mobile Apps Development Competition</h3>
								<ul>
									<li>Eam delectus invenire moderatius ne.</li>
									<li>An perfecto singulis argumentum pri, animal virtute delectus at est.</li>
									<li>Natum facer tincidunt eu sea, hinc laboramus est te.</li>
								</ul>
							</section>
							<section>
								<h3 class="mont">Competitive Programming</h3>
								<ul>
									<li>Eam delectus invenire moderatius ne.</li>
									<li>An perfecto singulis argumentum pri, animal virtute delectus at est.</li>
									<li>Natum facer tincidunt eu sea, hinc laboramus est te.</li>
								</ul>
							</section>
						</div>
						<!-- End of Description-->
					</div>
				<!-- End of Tab1 -->
				<!-- Tab2 -->
					<div role="tabpanel" class="tab-pane" id="semnas">
					<!-- Main Form -->
					<div class="col-md-8 wrapReg">
						<form role="form" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}
            <input type="hidden" name="type" value="seminar">
								<div class="row">
									<div class="col-md-6 col-sm-6 mg-b-20">
										<div class="col-md-5">
											Full Name
										</div>
										<div class="col-md-7">
											: <input type="text" placeholder="Full Name" name="name">
										</div>
									</div>
									<div class="col-md-6 col-sm-6 mg-b-20">
										<div class="col-md-5">
											Email Address
										</div>
										<div class="col-md-7">
											: <input type="email" placeholder="email" name="email">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 col-sm-6 mg-b-20">
										<div class="col-md-5">
											Phone Number
										</div>
										<div class="inNum col-md-7">
											: +62 <input type="text" placeholder="phone number" name="phone">
										</div>
									</div>
									<div class="col-md-6 col-sm-6 mg-b-20">
										<div class="col-md-5">
											Category
										</div>
										<div class="col-md-7">
											: 	<select name="category" required>
													<option value="1">Mahasiswa/Pelajar</option>
													<option value="2">Umum</option>
												</select>
										</div>
									</div>
								</div>


								<div class="row">
									<div class="col-md-6 col-sm-6 mg-b-20">
										<div class="col-md-5">
											Password
										</div>
										<div class="col-md-7">
											: <input type="password" placeholder="password" name="password">
										</div>
									</div>
									<div class="col-md-6 col-sm-6 mg-b-20">
										<div class="col-md-5">
											Confirm Password
										</div>
										<div class="col-md-7">
											: <input type="password" placeholder="confirm password" name="password_confirmation">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-3">
										<input class="no-m btn btn-more mg-bt-15" type="submit" value="REGISTER" name="">
									</div>
								</div>

						</form>
					</div>
					<!-- End of Main Form-->
					<!-- Description -->
					<div class="col-md-4 wrapDesc">
							<section>
								<h3 class="mont">Seminar Nasional</h3>
								<ul>
									<li>Eam delectus invenire moderatius ne.</li>
									<li>An perfecto singulis argumentum pri, animal virtute delectus at est.</li>
									<li>Natum facer tincidunt eu sea, hinc laboramus est te.</li>
								</ul>
							</section>
							<section>
								<ul>
									<li>Eam delectus invenire moderatius ne.</li>
									<li>An perfecto singulis argumentum pri, animal virtute delectus at est.</li>
									<li>Natum facer tincidunt eu sea, hinc laboramus est te.</li>
								</ul>
							</section>
					</div>
					<!-- End of Description-->
					</div>
				<!-- End of Tab2 -->
				</div>
		</div>
		<!-- END OF FORM REGISTER -->

		<!-- Footer -->
		<p class="text-center ">Want to back <a href="{{ url('/') }}">home</a>? Or you already have accout? <a href="{{ url('/login') }}">Login here</a>.</p>
	</div>
</div>
@endsection
