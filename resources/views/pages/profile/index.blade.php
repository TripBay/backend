@extends('layouts.master')

@section('content')
<div>
    <div class="page-hero page-container " id="page-hero">
        <div class="padding d-flex">
            <div class="page-title">
                <h2 class="text-md text-highlight">Profile</h2>
                <small class="text-muted">Your personal information</small>
            </div>
            <div class="flex"></div>
        </div>
    </div>
    <div class="page-content page-container" id="page-content">
        <div class="padding sr">
            <div class="card">
                <div class="card-header bg-dark bg-img p-0 no-border" data-stellar-background-ratio="0.1" style="background-image:url(/assets/img/b1.jpg);" data-plugin="stellar">
                    <div class="bg-dark-overlay r-2x no-r-b">
                        <div class="d-md-flex">
                            <div class="p-4">
                                <div class="d-flex">
                                    <a href="#">
                                        <span class="avatar w-64">
                                            <img src="/storage/{{ $user->profile->image }}" alt=".">
                                            <i class="on"></i>
                                        </span>
                                    </a>
                                    <div class="mx-3">
                                        <h5 class="mt-2">{{ $user->name }}</h5>
                                        <div class="text-fade text-sm"><span class="m-r">Senior Industrial Designer</span>
                                            <small>
                                                <i class="fa fa-map-marker mr-2"></i>London, UK
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="flex"></span>
                            <div class="align-items-center d-flex p-4">
                                <div class="toolbar">
                                    <a href="{{ route('profile.edit',$user->id) }}" class="btn btn-sm bg-dark-overlay btn-rounded text-white bg-success active">
                                        <span class="d-none">Settings</span>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-icon bg-dark-overlay btn-rounded">
                                        <i data-feather="phone" width="12" height="12" class="text-fade"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-icon bg-dark-overlay btn-rounded">
                                        <i data-feather="more-vertical" width="12" height="12" class="text-fade"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-3">
                    <div class="d-flex">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" href="#" data-toggle="tab" data-target="#tab_1">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#tab_2">Activity</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-12 col-md-12 col-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab_1">
                            <div class="card">
                                <div class="px-2">
                                    <div class="py-3">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link">
                                                    <span>Califorlia</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link">
                                                    <span>320-654-123</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link">
                                                    <span>July 10</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link">
                                                    <span>garret@gmail.com</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="px-4 py-4">
                                    <div class="row mb-2">
                                        <div class="col-6">
                                            <small class="text-muted">Cell Phone</small>
                                            <div class="my-2">1243 0303 0333</div>
                                        </div>
                                        <div class="col-6">
                                            <small class="text-muted">Family Phone</small>
                                            <div class="my-2">+32(0) 3003 234 543</div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-6">
                                            <small class="text-muted">Reporter</small>
                                            <div class="my-2">Coch Jose</div>
                                        </div>
                                        <div class="col-6">
                                            <small class="text-muted">Manager</small>
                                            <div class="my-2">James Richo</div>
                                        </div>
                                    </div>
                                    <div>
                                        <small class="text-muted">Bio</small>
                                        <div class="my-2">Nulla feugiat semper pretium, in amet scelerisque massa scelerisque netus hac enim diam arcu tempus enim aenean commodo tortor elit adipiscing odio faucibus pellentesque vel et a tincidunt metus, rhoncus diam auctor nulla proin turpis ut neque, laoreet euismod faucibus arcu lacus vitae ac at tellus commodo lectus ultrices tellus felis nisl non, turpis at eu eros, turpis id orci</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab_2">
                            <div class="card p-4">
                                <div class="timeline animates animates-fadeInUp">
                                    <div class="tl-item  active">
                                        <div class="tl-dot ">
                                        </div>
                                        <div class="tl-content">
                                            <div class="">Just saw this on the
                                                <a href='#'>@eBay</a> dashboard, dude is an absolute unit.</div>
                                            <div class="tl-date text-muted mt-1">1 Week ago</div>
                                        </div>
                                    </div>
                                    <div class="tl-item  ">
                                        <div class="tl-dot ">
                                        </div>
                                        <div class="tl-content">
                                            <div class="">From design to dashboard,
                                                <a href='#'>@Dash</a> builds custom hardware according to on-site requirements</div>
                                            <div class="tl-date text-muted mt-1">21 July</div>
                                        </div>
                                    </div>
                                    <div class="tl-item  ">
                                        <div class="tl-dot ">
                                        </div>
                                        <div class="tl-content">
                                            <div class="">
                                                <a href='#'>Support</a> team updated the status</div>
                                            <div class="tl-date text-muted mt-1">5 hours ago</div>
                                        </div>
                                    </div>
                                    <div class="tl-item  ">
                                        <div class="tl-dot ">
                                        </div>
                                        <div class="tl-content">
                                            <div class="">
                                                <a href='#'>@NextUI</a> submit a ticket request</div>
                                            <div class="tl-date text-muted mt-1">1 hour ago</div>
                                        </div>
                                    </div>
                                    <div class="tl-item  ">
                                        <div class="tl-dot ">
                                        </div>
                                        <div class="tl-content">
                                            <div class="">Prepare the documentation for the
                                                <a href='#'>Fitness app</a>
                                            </div>
                                            <div class="tl-date text-muted mt-1">20 minutes ago</div>
                                        </div>
                                    </div>
                                    <div class="tl-item  ">
                                        <div class="tl-dot ">
                                        </div>
                                        <div class="tl-content">
                                            <div class="">Can data lead us to making the best possible decisions?</div>
                                            <div class="tl-date text-muted mt-1">45 minutes ago</div>
                                        </div>
                                    </div>
                                    <div class="tl-item  ">
                                        <div class="tl-dot ">
                                        </div>
                                        <div class="tl-content">
                                            <div class="">What if AI Could Uber the Health Care Industry?</div>
                                            <div class="tl-date text-muted mt-1">03/12 18</div>
                                        </div>
                                    </div>
                                    <div class="tl-item  ">
                                        <div class="tl-dot ">
                                        </div>
                                        <div class="tl-content">
                                            <div class="">
                                                <a href='#'>@Netflix</a> hackathon</div>
                                            <div class="tl-date text-muted mt-1">25/12 18</div>
                                        </div>
                                    </div>
                                    <div class="tl-item  ">
                                        <div class="tl-dot ">
                                        </div>
                                        <div class="tl-content">
                                            <div class="">AI will deliver adaptive learning processes in assessments & digital textbooks to personalize learning</div>
                                            <div class="tl-date text-muted mt-1">13/12 18</div>
                                        </div>
                                    </div>
                                    <div class="tl-item  ">
                                        <div class="tl-dot ">
                                        </div>
                                        <div class="tl-content">
                                            <div class="">The biggest software developer conference</div>
                                            <div class="tl-date text-muted mt-1">02/11 18</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        <div class="page-hero page-container " id="page-hero">
            <div class="padding d-flex">
                <div class="page-title">
                    <h2 class="text-md text-highlight">Listed Hotes</h2>
                    <small class="text-muted">Hotels below are for demo purposes only</small>
                </div>
                <div class="flex"></div>
            </div>
        </div>
        <div class="page-content page-container" id="page-content">
            <div class="padding">
                <div class="block p-3">
                    <div id="carouselCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="media media-16x9 gd-primary">
                                    <div class="media-content" style="background-image:url('/storage/hotels/hotel1.jpeg')"></div>
                                </div>
                                <div class="carousel-caption text-align-auto">
                                    <span class="badge badge-outline">FEATURED</span>
                                    <h2 class="text-white display-5 font-weight-500 my-4">The world’s most popular framework </h2>
                                    <p class="text-fade d-none d-md-block">For building responsive, mobile-first sites, with BootstrapCDN and a template starter page.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="media media-16x9 gd-info">
                                    <div class="media-content" style="background-image:url('/storage/hotels/hotel2.jpeg')"></div>
                                </div>
                                <div class="carousel-caption text-align-auto">
                                    <span class="badge badge-outline">POPULAR</span>
                                    <h2 class="text-white display-5 font-weight-500 my-4">Popular front-end library.</h2>
                                    <p class="text-fade d-none d-md-block">Quickly prototype your ideas or build your entire app with prebuilt components.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="media media-16x9 gd-dark">
                                    <div class="media-content" style="background-image:url('/storage/hotels/hotel3.jpeg')"></div>
                                </div>
                                <div class="carousel-caption text-align-auto">
                                    <span class="badge badge-outline">JQUERY</span>
                                    <h2 class="text-white display-5 font-weight-500 my-4">Powerful plugins built on jQuery</h2>
                                    <p class="text-fade d-none d-md-block">Quickly prototype your ideas or build your entire app with prebuilt components.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
