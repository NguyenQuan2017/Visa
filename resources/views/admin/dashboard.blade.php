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
                                    <h4 class="m-t-0 header-title"><b>Danh Sách</b></h4>
                                        <button class="btn btn-primary" id="myBtn" style="margin:10px"><i class="fa fa-plus"></i>&nbsp;ADD</button>
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th >STT</th>
                                            <th >NAME</th>
                                            <th>ID CARD</th>
                                            <th style="width: 30px" >VALID DATE</th>
                                            <th >CODE</th>
                                            <th>SERVICE</th>
                                            <th>STATUS</th>
                                            <th style="width: 60px">ACTION</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        <?php $stt=1; ?>
                                        @foreach($visacards as $item)
                                        <tr>
                                            <td>{{$stt++}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->id_card}}</td>
                                            <td>{{$item->valid_date}}</td>
                                            <td>{{$item->code}}</td>
                                            <td><input type="checkbox" @if( $item->name_service =='facebook') checked @endif ><span style="padding:4px">facebook</span>
                                            <input type="checkbox"@if($item->name_service == 'google') checked @endif   ><span style="padding:4px">google</span>
                                            <input type="checkbox" @if($item->name_service == 'amazon') checked @endif ><span style="padding:4px">amazon</span>
                                            <input type="checkbox" @if($item->name_service == 'microsoft'  ) checked @endif ><span style="padding:4px">microsoft</span></td>
                                            <td><a href="" class="@if($item->status == 'Active') btn btn-info @else 
                                            btn btn-danger @endif">{{$item->status}}</a>
                                            </td>
                                            <td>@if($item->status == 'Die')
                                            <a href="{{route('delete',$item->card_id)}}" class="btn btn-danger confirm" ><i class="fa fa-trash"></i>&nbsp;DELETE</a>
                                            @else
                                            <a href="{{route('edit',$item->card_id)}}" class="btn btn-primary"  style="margin:5px"><i class="fa fa-pencil"> </i>&nbsp;EDIT</a>
                                             <a href="{{route('delete',$item->card_id)}}" class="btn btn-danger confirm" ><i class="fa fa-trash"></i>&nbsp;DELETE</a>
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