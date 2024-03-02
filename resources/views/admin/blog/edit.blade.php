<x-layout.master>
    <x-slot name="header">
        <x-layout.header />
    </x-slot>
    <x-slot name="left_side_nav">
        <x-layout.left_side_nav />
    </x-slot>
    <x-slot name="content">
        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="p-5">
                    @if (Session::has('error'))
                    <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @endif
                    <div class="card mb-xl-8 mb-5" style="user-select: auto;">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5" style="user-select: auto;">
                            <h3 class="card-title align-items-start flex-column" style="user-select: auto;">
                                <span class="card-label fw-bold fs-3 mb-1" style="user-select: auto;">Edit Existing
                                    Blog</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-3" style="user-select: auto;">
                            <!--begin::Table container-->
                            <div class="modal-body">
                                <div class="row">
                                    <label class="col-lg-8 col-form-label required fw-bold fs-6">Image</label>
                                    @include('admin.media.dropdown',['file'=>$blog,'collection_name'=>'blog.image'])
                                    <x-cento-dash-input type="text" name="title" label="Title" placeholder="Title"
                                        value="{{$blog['title']}}" :message="$errors->first('title')" />
                                    <x-textarea type='text' name="description" label="Description" class="col-12"
                                        value="{{$blog['title']}}" placeholder="Enter Description"
                                        :message="$errors->first('description')" />
                                    <x-cento-dash-input type="text" name="second_title" label="Second Title"
                                        value="{{$blog['title']}}" placeholder="Second Title"
                                        :message="$errors->first('second_title')" />
                                    <x-textarea type='text' name="second_description" label="Second Description"
                                        value="{{$blog['second_description']}}" class="col-12"
                                        placeholder="Enter Description"
                                        :message="$errors->first('second_description')" />
                                    <x-cento-dash-input type="text" name="third_title" label="Third Title"
                                        value="{{$blog['third_title']}}" placeholder="Third Title"
                                        :message="$errors->first('third_title')" />
                                    <x-textarea type='text' name="third_description" label="Third Description"
                                        value="{{$blog['third_description']}}" class="col-12"
                                        placeholder="Enter Description"
                                        :message="$errors->first('third_description')" />
                                    <x-cento-dash-input type="text" name="forth_title" label="Forth Title"
                                        value="{{$blog['forth_title']}}" placeholder="Forth Title"
                                        :message="$errors->first('forth_title')" />
                                    <x-textarea type='text' name="forth_description" label="Forth Description"
                                        value="{{$blog['forth_description']}}" class="col-12"
                                        placeholder="Enter Description"
                                        :message="$errors->first('forth_description')" />
                                    <x-cento-dash-input type="text" name="fifth_title" label="Fifth Title"
                                        value="{{$blog['fifth_title']}}" placeholder="Fifth Title"
                                        :message="$errors->first('fifth_title')" />
                                    <x-textarea type='text' name="fifth_description" label="Fifth Description"
                                        value="{{$blog['fifth_description']}}" class="col-12"
                                        placeholder="Enter Description"
                                        :message="$errors->first('fifth_description')" />
                                </div>
                            </div>
                            <div class="modal-footer mt-5 gap-2">
                                <button type="submit" class="btn btn-success">
                                    Edit Blog
                                </button>
                                <a class="btn btn-light-danger" href={{ route('blog.index') }}> Cancel </a>
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Body-->
                    </div>
                </div>
            </form>
        </div>
        <!--end:::Main-->
    </x-slot>
    <x-slot name="footer">
        <x-layout.footer />
    </x-slot>
</x-layout.master>