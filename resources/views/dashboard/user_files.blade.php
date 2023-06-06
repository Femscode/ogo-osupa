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
                    <h4 class="mb-sm-0 font-size-18">User Files</h4>

               </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            
            <div class="col-xl-12">
              
                <!-- end row -->

                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title mb-4">Document files(Plan For Tommorrow)</h4>
                        <table class="table table-striped mb-0">
                            <tbody>
                                @foreach($downloadplanfortommorrow as $plan)
                                <tr>
                                    <td><i class="far fa-file-pdf text-primary h2"></i></td>
                                    <td>
                                        <h6 class="mt-0">{{$plan->name}}</h6>
                                        <p class="text-muted mb-0">{{$plan->email}}</p>
                                    </td>
                                    <td><a href="{{route('downloadplanfortommorrow',[$plan->id])}}"
                                            class="btn btn-primary btn-sm"><i
                                                class="fas fa-download"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                            <h6>{{$downloadplanfortommorrow->links()}}</h6>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title mb-4">Document files(Atonigba)</h4>
                        <table class="table table-striped mb-0">
                            <tbody>
                                @foreach($downloadatonigba as $plan)
                                <tr>
                                    <td><i class="far fa-file-pdf text-primary h2"></i></td>
                                    <td>
                                        <h6 class="mt-0">{{$plan->name}}</h6>
                                        <p class="text-muted mb-0">{{$plan->email}}</p>
                                    </td>
                                    <td><a href="{{route('downloadatonigba',[$plan->id])}}"
                                            class="btn btn-primary btn-sm"><i
                                                class="fas fa-download"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                            <h6>{{$downloadatonigba->links()}}</h6>
                        </table>
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