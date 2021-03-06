@if ($items)
 <div class="container">
    <div class="row">
        @foreach ($items as $key => $item)
            <div class="item">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <img src="{{ $item->image_url }}" alt="">
                        </div>
                        <div class="panel-body">
                            @if ($item->id)
                                <p class="item-title"><a href="{{ route('items.show', $item->id) }}">{{ $item->name }}</a></p>
                            @else
                                <p class="item-title">{{ $item->name }}</p>
                            @endif
                        </div>
                                @if (Auth::check())
                                <div class="buttons text-center">
                                    @include('items.want_button', ['item' => $item])
                                    @include('items.have_button', ['item' => $item])
                                </div>
                                @endif
                                
                        @if (isset($item->count))
                            <div class="panel-footer">
                                <p class="text-center">{{ $key+1 }}位: {{ $item->count}} {{$type}}</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endif