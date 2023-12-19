@extends('dashboard.master')

@section('header')
@endsection

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Tv Programs</h4>
                  
               </div>
               @if(Session::has('success'))
               <div class='alert alert-success'>{{ Session::get('success') }}</div>
               @endif

            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            
            <div class="col-xl-12">
              

                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title mb-4">Live Tv Programs
                            <a style='float:right' href='/video'>Create Video</a>
                        </h4>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>


                                    <th scope="col">ID</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Video</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($videos as $key => $customer)
                                    <tr>
                                        <th scope="row">{{++$key}}</th>
                                        <td>{{$customer->title}}</td>
                                        <td> <video width="150" height="100" controls>
                                                <source src="https://ogoosupaconcept.com/ogo_files/public/videos/{{$customer->video}}"
                                                    type="video/mp4">
                                                <source src="https://ogoosupaconcept.com/ogo_files/public/videos/{{$customer->video}}"
                                                    type="video/ogg">
                                                Your browser does not support the video tag.
                                            </video>
                                        </td>
                                        <td>
                                            <button onclick='return confirm("Are you sure you want to delete this video?")' class='fa fa-trash btn btn-success'><a
                                                    style='color:white'
                                                    href='{{route("deletevideo",[$customer->id])}}'>Delete</a>
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <h6>{{$videos->links('pagination::bootstrap-4')}}</h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

      
        <!-- end row -->

      
        <!-- end row -->
    </div>
    <!-- container-fluid -->
</div>
@endsection


@section('script')

@endsection