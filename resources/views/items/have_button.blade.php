@if (Auth::user()->is_having($item->code))
    {!! Form::open(['route' => 'item_user.dont_have', 'method' => 'delete', 'style' => 'display: inline;']) !!}
        {!! Form::hidden('itemCode', $item->code) !!}
        {!! Form::submit('Have', ['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => 'item_user.have', 'style' => 'display: inline;']) !!}
        {!! Form::hidden('itemCode', $item->code) !!}
        {!! Form::submit('Have it', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endif