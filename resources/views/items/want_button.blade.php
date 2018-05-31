@if (Auth::user()->is_wanting($item->code))
    {!! Form::open(['route' => 'item_user.dont_want', 'method' => 'delete', 'style' => 'display: inline;']) !!}
        {!! Form::hidden('itemCode', $item->code) !!}
        {!! Form::submit('Want', ['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => 'item_user.want', 'style' => 'display: inline;']) !!}
        {!! Form::hidden('itemCode', $item->code) !!}
        {!! Form::submit('Want it', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endif
