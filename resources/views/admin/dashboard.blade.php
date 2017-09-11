@extends('welcome')

@section('title','Dashboard')
@section('koplak','Dashboard')

@section('content')
<div class="row">
  <div class="col">
    <div class="card text-white bg-success o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fa fa-fw fa-shopping-cart"></i>
        </div>
        <div class="mr-5">
          
        </div>
      </div>
      <a href="#" class="card-footer text-white clearfix small z-1">
        <span class="float-left">View Details</span>
        <span class="float-right">
          <i class="fa fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
  <div class="col">
    <div class="card text-white bg-danger o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fa fa-fw fa-support"></i>
        </div>
        <div class="mr-5">
          13 New Tickets!
        </div>
      </div>
      <a href="#" class="card-footer text-white clearfix small z-1">
        <span class="float-left">View Details</span>
        <span class="float-right">
          <i class="fa fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
</div>
<br>
<div class="row">
<div class="container">
  <!-- Example Notifications Card -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-bell-o"></i>
      Feed Example
    </div>
    <div class="list-group list-group-flush small">
      <a href="#" class="list-group-item list-group-item-action">
        <div class="media">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
          <div class="media-body">
            <strong>David Miller</strong>
            posted a new article to
            <strong>David Miller Website</strong>.
            <div class="text-muted smaller">Today at 5:43 PM - 5m ago</div>
          </div>
        </div>
      </a>
      <a href="#" class="list-group-item list-group-item-action">
        <div class="media">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
          <div class="media-body">
            <strong>Samantha King</strong>
            sent you a new message!
            <div class="text-muted smaller">Today at 4:37 PM - 1hr ago</div>
          </div>
        </div>
      </a>
      <a href="#" class="list-group-item list-group-item-action">
        <div class="media">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
          <div class="media-body">
            <strong>Jeffery Wellings</strong>
            added a new photo to the album
            <strong>Beach</strong>.
            <div class="text-muted smaller">Today at 4:31 PM - 1hr ago</div>
          </div>
        </div>
      </a>
      <a href="#" class="list-group-item list-group-item-action">
        <div class="media">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
          <div class="media-body">
            <i class="fa fa-code-fork"></i>
            <strong>Monica Dennis</strong>
            forked the
            <strong>startbootstrap-sb-admin</strong>
            repository on
            <strong>GitHub</strong>.
            <div class="text-muted smaller">Today at 3:54 PM - 2hrs ago</div>
          </div>
        </div>
      </a>
      <a href="#" class="list-group-item list-group-item-action">
        View all activity...
      </a>
    </div>
    <div class="card-footer small text-muted">
      Updated yesterday at 11:59 PM
    </div>
  </div>
  <div class="mb-0 mt-4">
      <i class="fa fa-newspaper-o"></i>
      News Feed</div>
  <hr class="mt-2">
  <div class="card-columns">

    <!-- Example Social Card -->
    <div class="card mb-3">
      <a href="#">
        <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=610" alt="">
      </a>
      <div class="card-body">
        <h6 class="card-title mb-1">
          <a href="#">David Miller</a>
        </h6>
        <p class="card-text small">These waves are looking pretty good today!
          <a href="#">#surfsup</a>
        </p>
      </div>
      <div class="card-footer small text-muted">
        Posted 32 mins ago
      </div>
    </div>
  </div>
</div>

@endsection