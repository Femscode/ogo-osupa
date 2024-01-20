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
                    <h4 class="mb-sm-0 font-size-18">Vehicle Prices</h4>

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
                        <h4 class="mt-0 header-title mb-4">Category A</h4>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>


                                    <th scope="col">ID</th>
                                    <th scope="col">Plan</th>
                                    <th scope="col">Investment Amount</th>
                                    <th scope="col">Profit</th>
                                    <th scope="col">Duration</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($prices as $key => $price)
                                    <tr>
                                        <form method='post' action='{{route("createPrice",[$price->id])}}'>@csrf
                                            <th scope="row">{{++$key}}</th>
                                            <td><input type='text' name='plan' class='form-control'
                                                    value='{{$price->plan ?? ""}}'></td>
                                            <td><input type='number' name='investment_amount' class='form-control'
                                                    value='{{$price->investment_amount ?? ""}}'></td>
                                            <td><input type='number' name='profit' class='form-control'
                                                    value='{{$price->profit ?? ""}}'></td>
                                            <td><input type='text' name='duration' class='form-control'
                                                    value='{{$price->duration ?? ""}}'></td>

                                            <td>
                                                <button type='submit' class='fa fa-call btn btn-success'>Update</button>
                                                @if($price->status == 1)
                                                <a onclick='return confirm("Are you sure you want to disable this investment plan?")'
                                                    href='/disable/{{ $price->id }}'
                                                    class='fa fa-call btn btn-danger mt-2'>Disable</a>
                                                @else
                                                <a onclick='return confirm("Are you sure you want to enable this investment plan?")'
                                                    href='/disable/{{ $price->id }}'
                                                    class='fa fa-call btn btn-info mt-2'>Enable</a>
                                                @endif
                                            </td>
                                        </form>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <h6>{{$prices->links()}}</h6>
                    </div>
                </div>



                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title mb-4">Category B</h4>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>


                                    <th scope="col">ID</th>
                                    <th scope="col">Plan</th>
                                    <th scope="col">Investment Amount</th>
                                    <th scope="col">Profit</th>
                                    <th scope="col">Duration</th>

                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pricesB as $key => $prices)
                                    <tr>
                                        <form method='post' action='{{route("createPriceB",[$prices->id])}}'>@csrf
                                            <th scope="row">{{++$key}}</th>
                                            <td><input type='text' name='plan' class='form-control'
                                                    value='{{$prices->plan ?? ""}}'></td>
                                            <td><input type='number' name='investment_amount' class='form-control'
                                                    value='{{$prices->investment_amount ?? ""}}'></td>
                                            <td><input type='number' name='profit' class='form-control'
                                                    value='{{$prices->profit ?? ""}}'></td>
                                            <td><input type='text' name='duration' class='form-control'
                                                    value='{{$prices->duration ?? ""}}'></td>

                                            <td>
                                                <button type='submit' class='fa fa-call btn btn-success'>Update</button>
                                                @if($prices->status == 1)
                                                <a onclick='return confirm("Are you sure you want to disable this investment plan?")'
                                                    href='/disableB/{{ $prices->id }}'
                                                    class='fa fa-call btn btn-danger mt-2'>Disable</a>
                                                @else
                                                <a onclick='return confirm("Are you sure you want to enable this investment plan?")'
                                                    href='/disableB/{{ $prices->id }}'
                                                    class='fa fa-call btn btn-info mt-2'>Enable</a>
                                                @endif

                                            </td>
                                        </form>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <h6>{{$pricesB->links()}}</h6>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title mb-4">Category C</h4>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>


                                    <th scope="col">ID</th>
                                    <th scope="col">Plan</th>
                                    <th scope="col">Investment Amount</th>
                                    <th scope="col">Profit</th>
                                    <th scope="col">Duration</th>

                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pricesC as $key => $prices)
                                    <tr>
                                        <form method='post' action='{{route("createPriceC",[$prices->id])}}'>@csrf
                                            <th scope="row">{{++$key}}</th>
                                            <td><input type='text' name='plan' class='form-control'
                                                    value='{{$prices->plan ?? ""}}'></td>
                                            <td><input type='number' name='investment_amount' class='form-control'
                                                    value='{{$prices->investment_amount ?? ""}}'></td>
                                            <td><input type='number' name='profit' class='form-control'
                                                    value='{{$prices->profit ?? ""}}'></td>
                                            <td><input type='text' name='duration' class='form-control'
                                                    value='{{$prices->duration ?? ""}}'></td>

                                            <td>
                                                <button type='submit' class='fa fa-call btn btn-success'>Update</button>
                                                @if($prices->status == 1)
                                                <a onclick='return confirm("Are you sure you want to disable this investment plan?")'
                                                    href='/disableB/{{ $prices->id }}'
                                                    class='fa fa-call btn btn-danger mt-2'>Disable</a>
                                                @else
                                                <a onclick='return confirm("Are you sure you want to enable this investment plan?")'
                                                    href='/disableB/{{ $prices->id }}'
                                                    class='fa fa-call btn btn-info mt-2'>Enable</a>
                                                @endif

                                            </td>
                                        </form>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <h6>{{$pricesB->links()}}</h6>
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