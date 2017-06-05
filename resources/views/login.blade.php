
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
    @endif

    <div class="content">
        @if ($users->count())
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Name</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->users_name }}</td>
                        {{--<td>{{ $user->password }}</td>--}}
                        <td>{{ $user->email }}</td>
                        {{--<td>{{ link_to_route('users.edit', 'Edit', array($user->id), array('class' => 'btn btn-info')) }}</td>--}}
                        <td>
                            {{--{{ Form::open(array('method'=> 'DELETE', 'route' => array('users.destroy', $user->id))) }}--}}
                            {{--{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}--}}
                            {{--{{ Form::close() }}--}}
                        </td>
                    </tr>
                @endforeach

                </tbody>

            </table>
        @else
            There are no users
        @endif

    </div>
</div>

