@extends('merchant.template')

@section('content')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <div class="row gutters-tiny">
                <!-- Latest Orders -->
                <div class="col-xl-12">
                    @include('flash::message')
                    <h2 class="content-heading">Orders</h2>
                    <div class="block block-rounded">
                        <div class="block-content">
                            <table class="table table-borderless table-striped">
                                <thead>
                                <tr>
                                    <th style="width: 100px;">ID</th>
                                    <th>Status</th>
                                    <th>Restaurant</th>
                                    <th class="d-none d-sm-table-cell">Customer</th>
                                    <th class="text-right">Value</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="{{url('/merchant/orderdetail/'.$order->id)}}">{{$order->id}}</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-success">Completed</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="{{url('/merchant/restaurant/'.$order->restaurant_id)}}">{{$order->restaurant->name}}</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="{{url('/merchant/customer/'.$order->customer_id)}}">{{$order->customer->name}}</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">{{$order->total}}</span>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END Latest Orders -->
            </div>
            <!-- END Full Table -->

@endsection