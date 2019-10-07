{{ Form::model($item, [
    'url' => route('items.update', ['item' => $item]),
    'method' => 'PATCH'
]) }}
    @include('item.form')
    {{ Form::submit('Обновить') }}
{{ Form::close() }}
