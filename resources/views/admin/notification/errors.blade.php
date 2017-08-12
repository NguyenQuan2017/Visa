@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger fade in">
   <button data-dismiss="alert" class="close"></button>
   <i class="fa-fw fa fa-times"></i>
   <strong>Error!</strong>
   <span ng-bind-html="Message">{{$error}}</span>
</div>
@endforeach
@endif