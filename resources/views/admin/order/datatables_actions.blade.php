<div class='text-start'>
  @can('order.detail')
   <a href="{{ route('order.detail',$order_no) }}" class="btn btn-icon btn-success btn-sm"><i class="bi  bi-file fs-4"></i></a>
  @endcan
  @can('order.update')
   <a href="{{ route('order.update',$order_no) }}" class="btn btn-icon btn-info btn-sm"><i class="bi  bi-pencil fs-4"></i></a>
  @endcan
</div>
