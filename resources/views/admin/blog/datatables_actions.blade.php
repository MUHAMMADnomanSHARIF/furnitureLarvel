<div class='text-start'>
    @can('blog.edit')
    <a href="{{ route('blog.edit',$id) }}" class="btn btn-icon btn-success btn-sm mr-2"><i
            class="bi bi-pencil fs-4"></i></a>
    @endcan

    @can('blog.delete')
    <a href="{{ route('blog.delete',$id) }}" class="btn btn-icon btn-danger btn-sm"><i class="bi bi-trash fs-4"></i></a>
    @endcan
</div>