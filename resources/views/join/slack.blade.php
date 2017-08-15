@extends('layouts.app')

@section('content')
<br/>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Join Slack</div>

                <div class="panel-body">
                     <div>
                           @if(isset($invitedMessage))
                              <div class="bg-success">
                                    <br/>
                                     <p class="bg-success" style="padding-left:10px">{{ $invitedMessage }}</p>
                                    <br/>
                              </div>
                           @else
                            <form class="form" method="post" >
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="firstname">First Name</label>
                                    <input type="text" class="form-control" name="firstName" id="firsntname" placeholder="Jane Doe">
                                </div>
                                <div class="form-group">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" class="form-control" name="lastName" id="lastname" placeholder="Jane Doe">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail22">Email</label>
                                    <input type="email" class="form-control" name="emaild" id="exampleInputEmail2"
                                           placeholder="jane.doe@example.com">
                                </div>
                                <div class="form-group">

                                </div>
                                <button type="submit" class="btn btn-primary">Send me an invite</button>
                            </form>
                            <br/>
                            @include('errors.validation')
                            @endif
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
