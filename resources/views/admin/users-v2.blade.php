@extends('admin.master', ['title' => '用户管理v2'])
@section('content')
  <div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
      <div class="kt-portlet__head-label">
        <h3 class="kt-portlet__head-title">
          用户管理v2
        </h3>
      </div>
      <div class="kt-portlet__head-toolbar">
        <div class="kt-portlet__head-wrapper">
          <div class="dropdown dropdown-inline">
            <button type="button" class="btn btn-default btn-bold btn-upper btn-font-sm dropdown-toggle"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="la la-download"></i> Export
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <ul class="kt-nav">
                <li class="kt-nav__section kt-nav__section--first">
                  <span class="kt-nav__section-text">Export Tools</span>
                </li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon la la-print"></i>
                    <span class="kt-nav__link-text">Print</span>
                  </a>
                </li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon la la-copy"></i>
                    <span class="kt-nav__link-text">Copy</span>
                  </a>
                </li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon la la-file-excel-o"></i>
                    <span class="kt-nav__link-text">Excel</span>
                  </a>
                </li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon la la-file-text-o"></i>
                    <span class="kt-nav__link-text">CSV</span>
                  </a>
                </li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                    <span class="kt-nav__link-text">PDF</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          &nbsp;
          <a href="#" class="btn btn-brand btn-bold btn-upper btn-font-sm">
            <i class="la la-plus"></i>
            New Record
          </a>
        </div>
      </div>
    </div>
    <div class="kt-portlet__body">

      <!--begin: Search Form -->
      <div class="kt-form kt-fork--label-right kt-margin-t-20 kt-margin-b-10">
        <div class="row align-items-center">
          <div class="col-xl-8 order-2 order-xl-1">
            <div class="row align-items-center">
              <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                <div class="kt-input-icon kt-input-icon--left">
                  <input type="text" class="form-control" placeholder="Search..." id="generalSearch">
                  <span class="kt-input-icon__icon kt-input-icon__icon--left">
																<span><i class="la la-search"></i></span>
															</span>
                </div>
              </div>
              <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                <div class="kt-form__group kt-form__group--inline">
                  <div class="kt-form__label">
                    <label>Status:</label>
                  </div>
                  <div class="kt-form__control">
                    <select class="form-control bootstrap-select" id="kt_form_status">
                      <option value="">All</option>
                      <option value="1">Pending</option>
                      <option value="2">Delivered</option>
                      <option value="3">Canceled</option>
                      <option value="4">Success</option>
                      <option value="5">Info</option>
                      <option value="6">Danger</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                <div class="kt-form__group kt-form__group--inline">
                  <div class="kt-form__label">
                    <label>Type:</label>
                  </div>
                  <div class="kt-form__control">
                    <select class="form-control bootstrap-select" id="kt_form_type">
                      <option value="">All</option>
                      <option value="1">Online</option>
                      <option value="2">Retail</option>
                      <option value="3">Direct</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 order-1 order-xl-2 kt-align-right">
            <a href="#" class="btn btn-default kt-hidden">
              <i class="la la-cart-plus"></i> New Order
            </a>
            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
          </div>
        </div>
      </div>

      <!--end: Search Form -->
    </div>
    <div class="kt-portlet__body kt-portlet__body--fit">

      <!--begin: Datatable -->
      <div class="kt_datatable" id="json_data"></div>

      <!--end: Datatable -->
    </div>
  </div>
@endsection
@section('script')
  <script src="{{assets('js/admin/users-v2.js')}}" type="text/javascript"></script>
@endsection
