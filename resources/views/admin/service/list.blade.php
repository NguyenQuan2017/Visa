 @extends('admin/layouts/master')
 @section('content')
 @include('admin/modal/add')
 <div class="container">
               <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Visa Cart</h4>
                                      <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        @include('admin/notification/errors')
                        @include('admin/notification/success')
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title"><b>Service</b></h4>
                                      
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th >STT</th>
                                            <th>NAME</th>
                                            <th>ID CARD</th>
                                            <th>SERVICE</th>
                                            <th>STATUS</th>
                                            <th style="width: 60px">ACTION</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        <?php $stt=1; ?>
                                        @foreach($services as $item)
                                        <tr>
                                            <td>{{$stt++}}</td>
                                            <td>{{$item->card['name']}}</td>
                                            <td>{{$item->card['id_card']}}</td>
                                            <td><input type="checkbox" @if( $item['name_service'] =='facebook') checked @endif ><span style="padding:4px">facebook</span>
                                            <input type="checkbox"@if($item['name_service'] == 'google') checked @endif   ><span style="padding:4px">google</span>
                                            <input type="checkbox" @if($item['name_service'] == 'amazon') checked @endif ><span style="padding:4px">amazon</span>
                                            <input type="checkbox" @if($item['name_service'] == 'microsoft'  ) checked @endif ><span style="padding:4px">microsoft</span></td>
                                            <td><a href="" class="@if($item['status'] == 'Active') btn btn-info @else 
                                            btn btn-danger @endif">{{$item['status']}}</a>
                                            </td>
                                            <td>@if($item['status'] == 'Die')
                                            <a href="{{route('delete-service',$item['id'])}}" class="btn btn-danger confirm" ><i class="fa fa-trash"></i>&nbsp;DELETE</a>
                                            @else
                                            <a href="{{route('service-edit',$item['id'])}}" class="btn btn-primary"  style="margin:5px"><i class="fa fa-pencil"> </i>&nbsp;EDIT</a>
                                             <a href="{{route('delete-service',$item['id'])}}" class="btn btn-danger confirm" ><i class="fa fa-trash"></i>&nbsp;DELETE</a>
                                             @endif</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- end row -->

</div>


@endsection