@extends('admin.adminlayoute')

@section('contain')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Admin
                <small>ROD</small>
            </h1>
            <ol class="breadcrumb">
                <li class="Active"><i class="fa fa-dashboard"></i> Home</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="callout callout-info">
                <h4>Welcome To Resource On Demand, {{$username=Auth::user()->name}}</h4>

                <p> </p>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @endsection
