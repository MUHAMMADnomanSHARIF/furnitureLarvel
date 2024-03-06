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
            <form action="{{route('order.update',$orders->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="p-5">
                @if (Session::has('error'))
                    <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @endif

                    <div class="card mb-xl-8 mb-5" style="user-select: auto;">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5" style="user-select: auto;">
                            <h3 class="card-title align-items-start flex-column" style="user-select: auto;">
                                <span class="card-label fw-bold fs-3 mb-1" style="user-select: auto;">Update order</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-3" style="user-select: auto;">
                            <!--begin::Table container-->
                            <div class="modal-body">
                                <!--begin::Label-->
                                  <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">Order NUmber</label>
                                        <input type="text" placeholder="{{$orders->order_no}}"
                                           readonly  class="form-control form-control-lg form-control-solid mb-lg-0 mb-3">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>

                                    </div>
                                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">User Name</label>
                                        <input type="text" readonly placeholder="{{$orders->userName}}"
                                             class="form-control form-control-lg form-control-solid mb-lg-0 mb-3">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>

                                    </div>
                                      <label class="col-lg-8 col-form-label required fw-bold fs-6">product Detail</label>
                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">

                                        <textarea type="text"  placeholder="{{ $orders->product_detail}}"
                                            readonly  class="form-control form-control-lg form-control-solid mb-lg-0 mb-3">{{$orders->product_detail}}</textarea>
                                    </div>
                                        <!--end::Col-->




                                 <label class="col-lg-8 col-form-label required fw-bold fs-6">Address</label>
                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">

                                        <textarea type="text" name="StreetAddress" value="{{$orders->StreetAddress}}"  placeholder="{{ $orders->StreetAddress }}"
                                            class="form-control form-control-lg form-control-solid mb-lg-0 mb-3">{{$orders->StreetAddress}}</textarea>

                                    <!--end::Col-->
                                     <!--begin::Col-->
                                     <input type="text" value="{{$orders->id}}" hidden name="id">
                                     <div class="col-lg-4 fv-row fv-plugins-icon-container">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">City, State</label>
                                        <input type="text" name="state" placeholder="{{$orders->state}}" value="{{$orders->state}}"
                                            class="form-control form-control-lg form-control-solid mb-lg-0 mb-3">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>

                                    </div>
                                    <div class="col-lg-4 fv-row fv-plugins-icon-container">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">Zipcode</label>
                                        <input type="text"  name="zipcode" value="{{$orders->zipcode}}" placeholder="{{$orders->zipcode}}"
                                             class="form-control form-control-lg form-control-solid mb-lg-0 mb-3">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>

                                    </div>
                                    <div class="col-lg-4 fv-row fv-plugins-icon-container">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">Phone Number</label>
                                        <input type="text" name="phoneNo" placeholder="{{$orders->phoneNo}}"
                                           value="{{$orders->phoneNo}}"   class="form-control form-control-lg form-control-solid mb-lg-0 mb-3">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>

                                    </div>
                                     <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                      <label class="col-lg-8 col-form-label required fw-bold fs-6">Delivery Status
                                            </label>
                                        <select class="form-select form-select-solid " name="delivery_status"
                                            data-control="select2" placeholder="{{$orders->delivery_status}}"
                                            data-allow-clear="true">

                                            <option selected  value="{{ $orders->delivery_status}}">{{ $orders->delivery_status}}
                                            </option>
                                            <option value="Success">Success</option>

                                        </select>
                                    </div>
                                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">Total Price</label>
                                        <input type="text" readonly   placeholder="{{$orders->totalprice}}"
                                            class="form-control form-control-lg form-control-solid mb-lg-0 mb-3">

                                    </div>
                                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">User Email</label>
                                        <input type="text" readonly placeholder="{{$mail}}"
                                            class="form-control form-control-lg form-control-solid mb-lg-0 mb-3">
                                    </div>
                                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">Payment Method</label>
                                        <input type="text" readonly  placeholder="{{$orders->payment_method}}"
                                            class="form-control form-control-lg form-control-solid mb-lg-0 mb-3">
                                    </div>
                                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">Payment Method</label>
                                        <input type="text" readonly  placeholder="{{$orders->payment_status}}"
                                            class="form-control form-control-lg form-control-solid mb-lg-0 mb-3">
                                    </div>



                                </div>

                            </div>



                            <!--end::Table container-->

                        </div>
                        <!--end::Body-->
                    </div>

                    <div class="modal-footer mt-5 gap-2">
                                <button type="submit" class="btn btn-success">
                                    Update Order
                                </button>
                                <a class="btn btn-light-danger" href={{ route('order.detail') }}> Cancel </a>
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
