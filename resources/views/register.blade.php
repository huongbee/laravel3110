<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
     {{--$book--}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <h2 class="text-center">Register Form</h2>

                {{--  @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        <li>{{$err}}</li>
                    @endforeach
                </div>
                @endif  --}}
                @if(Session::has('message'))
                <div class="alert alert-danger">
                    {{Session::get('message')}}
                </div>
                @endif


                <form method="POST">
                    {{csrf_field()}}
                    {{--  <input type="hidden" name="_token" value="{{csrf_token()}}">
                    @csrf  --}}
                    <div class="form-group">
                        <label for="name">Fullname</label>
                        <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter fullname" name="fullname" value="{{old('fullname')}}">

                        @if($errors->has('fullname'))
                        <div class="text-danger">
                            @foreach($errors->get('fullname') as $err)
                                <li>{{$err}}</li>
                            @endforeach
                        </div>
                        @endif
                        
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{old('email')}}">
                        @if($errors->has('email'))
                        <div class="text-danger">
                            @foreach($errors->get('email') as $err)
                                <li>{{$err}}</li>
                            @endforeach
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                        @if($errors->has('password'))
                        <div class="text-danger">
                            @foreach($errors->get('password') as $err)
                                <li>{{$err}}</li>
                            @endforeach
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">
                        @if($errors->has('confirm_password'))
                        <div class="text-danger">
                            @foreach($errors->get('confirm_password') as $err)
                                <li>{{$err}}</li>
                            @endforeach
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Address</label>
                        <input type="text" class="form-control" placeholder="Address" name="address">
                        @if($errors->has('address'))
                        <div class="text-danger">
                            @foreach($errors->get('address') as $err)
                                <li>{{$err}}</li>
                            @endforeach
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Phone</label>
                        <input type="text" class="form-control" placeholder="Phone" name="phone">
                        @if($errors->has('phone'))
                        <div class="text-danger">
                            @foreach($errors->get('phone') as $err)
                                <li>{{$err}}</li>
                            @endforeach
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Age</label>
                        <input type="text" class="form-control" placeholder="Age" name="age">
                        @if($errors->has('age'))
                        <div class="text-danger">
                            @foreach($errors->get('age') as $err)
                                <li>{{$err}}</li>
                            @endforeach
                        </div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>
</body>

</html>