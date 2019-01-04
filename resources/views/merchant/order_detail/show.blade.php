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
                                    <th class="d-none d-sm-table-cell">Menu</th>
                                    {{-- <th class="text-right">Sub Total</th>
                                    <th class="text-right">Delivery Fee</th> --}}
                                    <th class="text-center">Quantity</th>
                                    <th class="text-center">Unit Price</th>
                                    <th class="text-center">Sub Total</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($orders as $i => $order)
                                    <tr>
                                        <td>
                                            {{ $i+1}}
                                            {{-- <a class="font-w600" href="{{url('/merchant/orderdetail/'.$order->id)}}">{{$order->id}}</a> --}}
                                        </td>
                                        
                                        
                                        <td class="d-none d-sm-table-cell">
                                            {{$order->menu->name}}
                                        </td>
                                        {{-- <td class="text-right">
                                            <span class="text-black">{{$order->total - $order->delivery_cost}}</span>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">{{$order->delivery_cost}}</span>
                                        </td> --}}
                                        <td class="text-center">
                                                <span class="text-black">{{$order->qty}}</span>
                                        </td>
                                        <td class="text-center">
                                                <span class="text-black">{{$order->unit_price}}</span>
                                        </td>
                                        <td class="text-center">
                                                <span class="text-black">{{$order->sub_total}}</span>
                                        </td>
                                        
                                        
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