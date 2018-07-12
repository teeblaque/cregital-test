@extends('layouts.app')

@section('content')
    <div class="container">
        <br><br><br>
        <div class="col-md-8 col-md-offset-2">
            <div class="well">
                <form role="form" action="{{ route('company.store') }}" method="post">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                        {{--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
                    </div>
                    <div class="form-group">
                        <label for="exampleInputLogo">Logo</label>
                        <input type="file" name="logo" class="btn add-images-btn" id="add-gallery" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection