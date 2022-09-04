@extends('vendor.installer.layouts.master')

@section('template_title')
    {{ trans('installer_messages.license.templateTitle') }}
@endsection

@section('title')
    <i class="fa fa-key fa-fw" aria-hidden="true"></i>
    License Verification
@endsection

@section('container')
 
<a href="{{ route('LaravelInstaller::licenseCheck') }}"> next</a>
    
@endsection

