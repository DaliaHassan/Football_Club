<?php
/**
 * Created by PhpStorm.
 * User: dalia.hassan
 * Date: 12/5/2016
 * Time: 11:43 PM
 */
 ?>

<?php
/**
 * Created by PhpStorm.
 * User: dalia.hassan
 * Date: 12/4/2016
 * Time: 8:15 PM
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
                <li class="active">ADD Club</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">ADD Match</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        {!! Form::open(array('method' => 'POST', 'url' => 'addMatches', 'role'=>'form','files' => true)) !!}
                        <div class="box-body">
                            <div class="form-group">
                                {!! Form::label('matchName','Match Name:') !!}
                                {!! Form::text('Match Name', '', array('class' => 'form-control', 'placeholder' => 'Match Name', 'name' => 'matchName')) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('season','Season:') !!}
                                {!! Form::text('Season', '', array('class' => 'form-control', 'placeholder' => 'Season', 'name' => 'season')) !!}
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
