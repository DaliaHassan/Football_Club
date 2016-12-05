<?php
/**
 * Created by PhpStorm.
 * User: dalia.hassan
 * Date: 12/6/2016
 * Time: 12:07 AM
 */
?>

@extends('layout.layout')
@section('pageContent')
    <div class="content-wrapper" style="width: 150%;">
        <!-- Content Header (Page header) -->
        <section class="content-header" >

            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#"></a></li>
                <li class="active">Edit Match</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general formf elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Match</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        {!! Form::model($match, array('method' => 'PATCH', 'url' => 'editMatches', 'role'=>'form','files' => true, 'enctype' => 'multipart/form-data')) !!}
                        <div class="box-body">
                            <div class="form-group">

                                {!! Form::label('matchName','Match Name:') !!}
                                {!! Form::text('Match Name', null, array('class' => 'form-control', 'placeholder' => 'MAtch Name', 'name' => 'matchName')) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Upload Image','') !!}
                                {!! Form::file('image') !!}
                            </div>
                        </div>
                        <div class="box-footer">
                            {!! Form::submit('submit',['class' => 'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>

            </div>

@endsection
