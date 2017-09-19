
@extends('layouts.master')

    @section('content')

        <div class="col-sm-8 blog-main">
            <h1>Publish a Post</h1>
            <hr>
            <form method="post" action="/posts">

                {{ csrf_field() }} {{--CSRF Protection--}}

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>

                <div class="form-group">
                    <label for="body">Body:</label>
                    <textarea name="body" id="body" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>

            @include('layouts.errors') <!-- Display only in case of errors -->

            </form>
        </div>

    @endsection