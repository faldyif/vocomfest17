@extends('layouts.main')
@section('title', 'Vocomfest - Gallery')

@section('body')
<section id="aside" class="col-md-2 col-sm-2 nopad">
	<div id="logo" class="pd-20">
		<div class="row force-center">
			<a href="{{ url('adminvocomfest17') }}">
				<img src="{{ url('assets/img/logoDb.png') }}" alt="Vocomfest">
			</a>
		</div>
	</div>
	<div id="bAside" class="pd-bt-20">
		<div id="user" class="text-center mg-b-20 pd-20">
			<div class="users-icon sep-title">
				<i class="fa fa-users"></i>
			</div>
			<h3>Administrator</h3>
			<hr class="line-db">
			<span>Hello, </span>
			<h4 class="nomag">{{ Auth::user()->name }}</h4>
		</div>
		<!-- nav -->
		<div id="navigation">
			<nav class="navbar navbar-default navbar-default-blue">
			  <div class="container-fluid nopad">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#asideNav">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>                        
			      </button>
			    </div>
			    <div class="collapse navbar-collapse nopad" id="asideNav">
			      <ul class="nav nav-db">
					<li><a href="{{ url('adminvocomfest17') }}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
					<li><a href="{{ url('adminvocomfest17/team') }}"><i class="fa fa-users"></i><span>Teams</span></a></li>
					<!-- <li><a href="#"><i class="fa fa-microphone"></i><span>Events</span></a></li> -->
					<li><a href="{{ url('adminvocomfest17/news') }}"><i class="fa fa-hourglass-half"></i><span>News</span></a></li>
					<li class="active"><a href="{{ url('adminvocomfest17/gallery') }}"><i class="fa fa-camera"></i><span>Gallery</span></a></li>
					<li><a href="{{ url('adminvocomfest17/payment') }}"><i class="fa fa-credit-card-alt"></i><span>Payments</span></a></li>
					<li><a href="{{ url('adminvocomfest17/submission') }}"><i class="fa fa-upload"></i><span>Uploads</span></a></li>
					<li><a href="{{ url('adminvocomfest17/semnas') }}"><i class="fa fa-users"></i><span>Semnas Attenders</span></a></li>
					<li><a href="{{ url('adminvocomfest17/semnas/create') }}"><i class="fa fa-check"></i><span>SemnasVerifier™</span></a></li>
				</ul>
			    </div>
			  </div>
			</nav>
		</div>
		<!-- /nav -->
	</div>
</section>
<section id="content" class="col-md-10 col-sm-10 nopad">
	<header class="header-db">
		<img src="../assets/img/event-cover.jpg" alt="Gallery Vocomfest" class="cover-img">
		<div class="overlay bk-gr-overlay"  style=""></div>
		<section class="header-text">
			<div class="top-header">
				<span>Hello, {{ Auth::user()->name }} | <a class="a-fa" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a>
	        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
	            {{ csrf_field() }}
	        </form>
				</span>
			</div>
			<h2 class="mont-bold">Gallery</h2>
			<hr class="bl-line-sep">
		</section>
	</header>
	<!-- NEWS CONTENT -->
	<div class="content-db">

@if (Session::has('message'))
<div class="row">
    <div class="alert alert-success">
        <div class="sb-msg"><i class="icon-thumbs-up"></i>{{ Session::get('message') }}</div>
    </div>
</div>
@endif
		<div class="row">
			<section class="col-md-12 pd-t-15 pd-lr-15">
				<div class="sec-content-db">
					<div class="div-content-db">
						<a href="#" data-toggle="modal" data-target="#addPhotoModal" class="btn btn-default btn-sm">Upload Image</a>
						<br>
					<form method="" action="">
						<p class="mg-bt-10"> All ({{ $gallery->count() }})</p>
						<!-- GALLERY LIST -->
						<div class="panel panel-default">
	                        <div class="panel-heading">
	                            List
	                        </div>
	                        <div class="panel-body">
	                            <div class="table-responsive">
		                            <div class="mg-bt-15">
		                            	<div class="row nomag">
		                            		@foreach($gallery as $key)
		                            		<!--Section1-->
		                                	<section class="col-md-3 pd-t-10">
												<div class="list-photo">
													<a href="{{ url('storage/gallery') }}/{{ $key->path }}" data-rel="lightcase">
														<img src="{{ url('storage/gallery') }}/{{ $key->path }}" alt="{{ $key->text }}" class="cover-img">
													</a>
													<div class="row nomag pd-t-10">
														<span class="col-md-2">
															<label><input type="checkbox" name="" value="1"></label>
														</span>
														<span class="col-md-10 text-right">
															@if($key->status == 0)
															<a href="{{ url('adminvocomfest17/gallery/publish/') }}/{{ $key->id }}"><i data-toggle="tooltip" data-placement="top" title="Publish" class="fa fa-globe"></i></a>
															@else
															<a href="{{ url('adminvocomfest17/gallery/unpublish/') }}/{{ $key->id }}"><i data-toggle="tooltip" data-placement="top" title="Unpublish" class="fa fa-minus-circle"></i></a>
															@endif 
															<a href="" data-toggle="modal" data-target="#delete{{ $key->id }}"><i data-toggle="tooltip" data-placement="top" title="Delete" class="fa fa-trash-o"></i></a> 
															<a href="" data-toggle="modal" data-target="#detailImage{{ $key->id }}"><i data-toggle="tooltip"  data-placement="top" title="Detail" class="fa fa-search-plus"></i></a> 
														</span>
													</div>
													<span></span>
												</div>	
											</section>
											<!--/section1-->
											@endforeach
		                                </div>
		                            </div>
	                                <div class="row nomag">
		                            	<div class="col-md-6 nopad">
			                            	<span>Showing 1 to {{ $gallery->count() }} from {{ $gallery->count() }} entries</span>
		                            	</div>
		                            </div>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- /GALLERY LIST -->
	                </form>
					</div>
				</div>
			</section>
		</div>
	</div>
<!-- /GALLERY CONTENT -->
<!-- ADD IMAGE -->
<div id="addPhotoModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title">Upload Image</h3>
			</div>
			<div class="modal-body">
				<div class="col-md-8">
					{!! Form::open(array('route' => 'gallery.store', 'enctype' => 'multipart/form-data')) !!}
						<div class="form-group">
							<label class="control-label">Title : </label>
							<input type="text" name="text" placeholder="Enter title here" class="form-control">
						</div>
						<div class="form-group">
							<label for="photoUpload" class="control-label">Image File :</label>
							<input type="file" id="photoUpload" name="photo" class="form-control" accept=".jpg, .jpeg, .png, .gif" />
						</div>
						<div class="form-group">
							<input type="submit" name="submit" class="btn btn-info" value="Upload" />
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /add image -->

@foreach($gallery as $key)
<!-- DETAIL IMAGE -->
<div id="detailImage{{ $key->id }}" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title">Detail Image</h3>
			</div>
			<div class="modal-body">
				<div class="col-md-6">
					<img src="{{ url('storage/gallery') }}/{{ $key->path }}" alt="Gallery" class="cover-img">
				</div>
				<div class="col-md-6">
					<h4>Details </h4>
					<span><i class="fa fa-calendar"></i> : {{ $key->created_at->format('F jS, Y') }}</span>
					<br>
					<span><i class="fa fa-photo"></i> : {{ $key->path }}</span>
					<hr>
					<span>Title : {{ $key->text }} </span>
					<br><br>
					<span class="col-md-12 nopad">
						@if($key->status == 0)
						<a href="{{ url('adminvocomfest17/gallery/publish/') }}/{{ $key->id }}"><i data-toggle="tooltip" data-placement="top" title="Publish" class="fa fa-globe"></i></a>
						@else
						<a href="{{ url('adminvocomfest17/gallery/unpublish/') }}/{{ $key->id }}"><i data-toggle="tooltip" data-placement="top" title="Publish" class="fa fa-minus-circle"></i></a>
						@endif
						<a href="" data-toggle="modal" data-target="#delete"><i data-toggle="tooltip" data-placement="top" title="Delete" class="fa fa-trash-o"></i></a> 
					</span>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /detail image -->
<!-- DELETE -->
<div id="delete{{ $key->id }}" class="modal fade">
	<div class="modal-dialog modal-delete">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h1 class="modal-title sep-title text-center"><i class="fa fa-trash-o"></i></h1>
			</div>
			<div class="modal-body">
				<div class="text-center">
					Are you sure you want to delete this picture?
				</div>
				<div class="text-center pd-t-20">
					<label>
		                <input type="submit" data-dismiss="modal" value="CANCEL" name="" class="btn btn-sm btn-info">
		            </label>
					<label>
		                <a class="btn btn-sm btn-danger" href="{{ url('adminvocomfest17/gallery/delete') }}/{{ $key->id }}">DELETE</a>
		            </label>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /DELETE -->
@endforeach
</section>
@endsection