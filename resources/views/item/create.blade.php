{{ Form::model($item, ['url' => route('items.store')]) }}
    @include('item.form')
    {{ Form::submit('Сохранить') }}
{{ Form::close() }}