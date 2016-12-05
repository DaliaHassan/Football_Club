<?php
/**
 * Created by PhpStorm.
 * User: dalia.hassan
 * Date: 12/5/2016
 * Time: 11:45 PM
 */
 ?>

<?php
/**
 * Created by PhpStorm.
 * User: dalia.hassan
 * Date: 12/5/2016
 * Time: 12:12 PM
 */
?>
@extends('layout.layout')
@section('pageContent')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Data Tables
                <small>List Matches</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#"></a></li>
                <li class="active">List Matches</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">List Matches</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Match ID</th>
                                    <th>Match Name</th>
                                    <th>season</th>
                                    <th>Logo</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($matches as $match)
                                    <tr>
                                        <td>{{ $match->id }}</td>
                                        <td>{{ $match->name }}</td>
                                        <td>{{ $match->season }}</td>
                                        <td>
                                            <img width="30px;" height="20px;" src="{{URL::asset('uploads/images/'.$match->logo)  }}">
                                        </td>
                                        <td>
                                            {!! Form::open(array('class' => 'form-inline col-lg-1','method' => 'GET', 'url' => array('editMatch', $match->id))) !!}
                                            <button class="btn btn-info btn-sm" type="submit" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                                <i class="fa fa-edit  "></i>
                                            </button>
                                            {!! Form::close() !!}
                                        </td>
                                        <td>
                                            {!! Form::open(array('class' => 'col-xs-1','method' => 'DELETE', 'url' => array('deleteMatch', $match->id))) !!}
                                            <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Delete" type="submit" onclick="return confirm('Are you sure you want to delete {{ $match->name }}')">
                                                <i class="fa fa-trash-o "></i>
                                            </button>
                                            {!! Form::close() !!}
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>

        </section>
    </div>
@endsection