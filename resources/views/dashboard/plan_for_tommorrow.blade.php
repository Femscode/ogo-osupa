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
                    <h4 class="mb-sm-0 font-size-18">PLAN FOR TOMMORROW</h4>

               </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            
            <div class="col-xl-12">
              
                <!-- end row -->

                <div class="card">
                    <div class="card-body">
                        {{-- <h4 class="card-title mb-4">PLAN FOR TOMMORROW</h4> --}}
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>


                                    <th scope="col">S/N</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Service</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($plan_for_tommorrow as $key => $customer)
                                    <tr>
                                        <th scope="row">{{++$key}}</th>
                                        <td>{{$customer->name}}</td>
                                        <td>{{$customer->email}}</td>
                                        <td>{{$customer->phone}}</td>
                                        <td>{{$customer->services}}</td>
                                        <td>{{$customer->message}}</td>
                                        <td>
                                            <button class='fa fa-call btn btn-success'><a
                                                    style='color:white'
                                                    href='tel:{{$customer->phone}}'>Call</a>
                                                <button class='fa fa-mail btn btn-primary'><a
                                                        style='color:white'
                                                        href='mailto:{{$customer->email}}'>Mail</a>
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <h6>{{$plan_for_tommorrow->links()}}</h6>
                        <!-- end table-responsive -->
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