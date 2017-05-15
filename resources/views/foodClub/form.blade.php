<div class="field">

    {!! Form::label('name', 'NAME *: ') !!}
    <select name="name" id="name" class="vl_empty selectpicker">
        <option>Work Address</option>
        <option>Home Address</option>
    </select>
    {{--<select name="name" id="name" size="10" data-live-search="true"--}}
            {{--data-live-search-style="startsWith" class="selectpicker">--}}
        {{--<option>n/a</option>--}}
        {{--@foreach ($names as $name)--}}
            {{--<option value="{{ $name->id }}">{{ $name->name }}</option>--}}
        {{--@endforeach--}}
    {{--</select>--}}

</div>
<div class="field">
    {!! Form::label('city', 'YOUR CITY *: ') !!}
    <select name="city" id="city" class="vl_empty selectpicker">
        <option class="plh"></option>
        <option>Brooklyn</option>
        <option>Keir</option>
        <option>Kharkov</option>
        <option>Nizhnie Pupki</option>
    </select>
</div>

<div class="field">
    {!! Form::label('area', 'YOUR AREA *: ') !!}
    <select name="area" id="area" class="vl_empty selectpicker">
        <option class="plh"></option>
        <option>Borshagivka</option>
        <option>Htz</option>
        <option>Holodka</option>
    </select>
</div>

<div class="field">
    {!! Form::label('street', 'STREET: ') !!}
    {!! Form::text('street', 'Lenina', ['class' => 'vl_empty',
    'form-control','placeholder'=>'Type Street']) !!}
</div>
<div class="field">
    {!! Form::label('house', 'HOUSE №: ') !!}
    {!! Form::text('house', '1', ['class' => 'vl_empty',
   'form-control','placeholder'=>'House Name / Number']) !!}
</div>
<div class="field">
    {!! Form::label('additional', 'ADDITIONAL INFORMATION: ') !!}
    {!! Form::text('additional', null, ['class' => 'vl_empty',
   'form-control','placeholder'=>'Additional information']) !!}
</div>

{!! Form::submit(isset($submitButtonText) ? $submitButtonText :
'add address', ['class' => 'green_btn']) !!}