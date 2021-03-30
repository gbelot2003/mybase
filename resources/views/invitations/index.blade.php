@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="page-header" style="margin-top: 0">
            <h1>Invitation Requests</h1>
        </div>

        <div class="panel panel-default" style="margin-top: 20px">
            <div class="panel-heading">Pending Requests <span class="badge">{{ count($invitations) }}</span></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                <p>{{ session('error') }}</p>
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success">
                                <p>{{ session('success') }}</p>
                            </div>
                        @endif
                        @if (!empty($invitations))
                            <table class="table table-responsive table-striped">
                                <thead>
                                    <tr>
                                        <th>Email</th>
                                        <th>Created At</th>
                                        <th>Invitation Link</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($invitations as $invitation)
                                        <tr>
                                            <td><a href="mailto:{{ $invitation->email }}">{{ $invitation->email }}</a>
                                            </td>
                                            <td>{{ $invitation->created_at }}</td>
                                            <td>
                                                <kbd>{{ $invitation->getLink() }}</kbd>
                                            </td>
                                            <th>
                                                <button class="btn btn-primary">Send</button>
                                                <button class="btn btn-danger">Delete</button>
                                            </th>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>
            @else
                <p>No invitation requests!</p>
                @endif
            </div>
        </div>

        <div class="panel panel-default" style="margin-top: 20px">
            <div class="row">
                <div class="col-md-12">
                    <form class="form" method="POST" action="{{ route('storeInvitation') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">{{ __('Add new E-mail Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email"
                                    value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send An Invitation') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>


    @endsection
