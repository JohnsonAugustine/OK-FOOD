@extends('merchant.template')

@section('content')
<section class="content">
        <div class="row">
          <div class="col-xs-12">
              <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Orders</h3>
                    </div>
                    <div class="block block-rounded">
                        <div class="box-body">
                            <table id="data" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th style="width: 20px;">No</th>
                                    <th>Status</th>
                                    <th class="d-none d-sm-table-cell">Customer</th>
                                    {{-- <th class="text-right">Sub Total</th>
                                    <th class="text-right">Delivery Fee</th> --}}
                                    <th class="text-center">Deliver To</th>
                                    <th class="text-center">Delivery Notes</th>
                                    <th class="text-right">Total</th>
                                    <th class="text-right">Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($orders as $i => $order)
                                    <tr>
                                        <td>
                                            {{ $i+1}}
                                            {{-- <a class="font-w600" href="{{url('/merchant/orderdetail/'.$order->id)}}">{{$order->id}}</a> --}}
                                        </td>
                                        <td>
                                            @if($order->status==0)
                                            <small class="label bg-red">Waiting</small>
                                            @elseif($order->status==1)
                                            <small class="label bg-yellow">Proccess</small>
                                            @else
                                            <small class="label bg-green">Complete</small>
                                            @endif
                                        </td>
                                        
                                        <td class="d-none d-sm-table-cell">
                                            {{$order->customer->name}}
                                        </td>
                                        {{-- <td class="text-right">
                                            <span class="text-black">{{$order->total - $order->delivery_cost}}</span>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">{{$order->delivery_cost}}</span>
                                        </td> --}}
                                        <td class="text-center">
                                                <span class="text-black">{{$order->delivery_address}}</span>
                                        </td>
                                        <td class="text-center">
                                                <span class="text-black">{{$order->delivery_notes}}</span>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">{{$order->total}}</span>
                                        </td>
                                        <td class="text-right">
                                                <div class="btn-group">
                                                        <button type="button" class="btn btn-success">Action</button>
                                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                                          <span class="caret"></span>
                                                          <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                        {!! Form::open(['route' => ['merchant.order.update', $order->id], 'method' => 'PUT']) !!}
                                                           <input hidden name="status" id="status" value="0"/> 
                                                           <li><button type="submit" class="btn btn-block btn-danger btn-flat" data-toggle="tooltip" title="Delete">
                                                                Waiting
                                                        </button></li>
                                                          {!! Form::close() !!}
                                                          {!! Form::open(['route' => ['merchant.order.update', $order->id], 'method' => 'PUT']) !!}
                                                          <input hidden name="status" id="status" value="1"/> 
                                                          <li><button type="submit" class="btn btn-block btn-warning btn-flat" data-toggle="tooltip" title="Delete">
                                                                Proccess
                                                        </button></li>
                                                          {!! Form::close() !!}
                                                          {!! Form::open(['route' => ['merchant.order.update', $order->id], 'method' => 'PUT']) !!}
                                                          <input hidden name="status" id="status" value="2"/> 
                                                          <li><button type="submit" class="btn btn-block btn-success btn-flat" data-toggle="tooltip" title="Delete">
                                                                Complete
                                                        </button>
                                                         </li>
                                                          {!! Form::close() !!}
                                                          {!! Form::open(['route' => ['merchant.order_detail.show', $order->id], 'method' => 'GET']) !!}
                                                          <li><button type="submit" class="btn btn-block btn-info btn-flat" data-toggle="tooltip" title="Delete">
                                                                Detail
                                                        </button>
                                                         </li>
                                                          {!! Form::close() !!}
                                                        </ul>
                                                </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
              </div>
          </div>
        </div>
</section>

@endsection