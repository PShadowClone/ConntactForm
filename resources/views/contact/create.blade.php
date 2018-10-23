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
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{route('contact.store')}}" method="POST" id="contact-form">
                                <div class="form-group">
                                    <label for="name">@lang('contact_us.form.name')</label>
                                    <input type="text" name="name" class="form-control"
                                           placeholder="@lang('contact_us.form.name')"
                                           value="{{old('name')}}">
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                </div>
                                <div class="form-group">
                                    <label for="name">@lang('contact_us.form.email')</label>
                                    <input type="text" name="email" class="form-control"
                                           placeholder="@lang('contact_us.form.placeholder.email')"
                                           value="{{old('email')}}"
                                    >
                                    <span class="text-danger">{{$errors->first('email')}}</span>
                                </div>
                                <div class="form-group">
                                    <label for="subject">@lang('contact_us.form.subject')</label>
                                    <input type="text" name="subject" class="form-control"
                                           placeholder="@lang('contact_us.form.subject')"
                                           value="{{old('subject')}}"
                                    >
                                    <span class="text-danger">{{$errors->first('subject')}}</span>

                                </div>
                                <div class="form-group">
                                    <label for="message">@lang('contact_us.form.message')</label>
                                    <textarea name="message" id="message" cols="30" rows="6"
                                              class="form-control"
                                              placeholder="@lang('contact_us.form.message')">{{old('message')}}</textarea>
                                    <span class="text-danger">{{$errors->first('message')}}</span>

                                </div>
                                <div class="form-action text-center">
                                    <input type="submit" name="send" value="@lang('contact_us.form.send')"
                                           class="btn btn-primary">
                                    <input type="reset" name="cancel" value="@lang('contact_us.form.cancel')"
                                           class="btn btn-default">
                                </div>
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection