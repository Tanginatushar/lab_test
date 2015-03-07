

<div id="tab_1_6" class="tab-pane ">
    <div class="form-group">
        {!! Form::label('author', 'Author:') !!}
            {!! Form::text('author') !!}
        {{--{!! Form::submit('search') !!}--}}

    </div>
<div class="form-group">
    {!! Form::submit('search', ['class'=>'btn primary']) !!}
</div>

</div>

