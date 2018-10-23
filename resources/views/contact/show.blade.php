@extends('master_layout._layout')
@section('master_title')
    @parent
    - @lang('contact_us.title')
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    @lang('contact_us.title')
                </div>
                <div class="card-body">

                    <table id="contact-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>@lang('contact_us.form.name')</th>
                            <th>@lang('contact_us.form.email')</th>
                            <th>@lang('contact_us.form.subject')</th>
                            <th>@lang('contact_us.form.message')</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('script')
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/datatables.min.js"></script>
    <script src="{{asset('js/showScript.js')}}"></script>
@endsection