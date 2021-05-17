@extends('layouts.public')

@section('header')
<div class="row">
    <div class="col-md-12 text-center">
        <div class="text-pageheader">
            <div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.0s">
                Creazione Evento
            </div>
        </div>
    </div>
</div>
@endsection




@section('content')
<div class="static">
    <h3>Crea Evento</h3>

    <div class="container-contact"> 
        <div class="wrap-contact">
            
            {{ Form::open(array('route' => 'create_event', 'id' => 'addproduct', 'files' => true, 'class' => 'contact-form')) }}
            
            <div  class="wrap-input  rs1-wrap-input">
                {{ Form::label('name', 'Nome Prodotto', ['class' => 'label-input']) }}
                {{ Form::text('name', '', ['class' => 'input', 'id' => 'name']) }}
            </div>

            <div  class="wrap-input  rs1-wrap-input">
                {{ Form::label('image', 'Immagine', ['class' => 'label-input']) }}
                {{ Form::file('image', ['class' => 'input', 'id' => 'image']) }}
            </div>

            <div  class="wrap-input  rs1-wrap-input">
                {{ Form::label('descShort', 'Descrizione Breve', ['class' => 'label-input']) }}
                {{ Form::text('descShort', '', ['class' => 'input', 'id' => 'descShort']) }}
            </div>

            <div  class="wrap-input  rs1-wrap-input">
                {{ Form::label('price', 'Prezzo', ['class' => 'label-input']) }}
                {{ Form::text('price', '', ['class' => 'input', 'id' => 'price']) }}
            </div>

            <div  class="wrap-input  rs1-wrap-input">
                {{ Form::label('discountPerc', 'Sconto (%)', ['class' => 'label-input']) }}
                {{ Form::text('discountPerc', '', ['class' => 'input', 'id' => 'discountPerc']) }}
            </div>

            <div  class="wrap-input  rs1-wrap-input">
                {{ Form::label('discounted', 'In Sconto', ['class' => 'label-input']) }}
                {{ Form::select('discounted', ['1' => 'Si', '0' => 'No'], 1, ['class' => 'input','id' => 'discounted']) }}
            </div>

            <div  class="wrap-input  rs1-wrap-input">
                {{ Form::label('descLong', 'Descrizione Estesa', ['class' => 'label-input']) }}
                {{ Form::textarea('descLong', '', ['class' => 'input', 'id' => 'descLong', 'rows' => 2]) }}
            </div>

            <div class="container-form-btn">
                {{ Form::submit('Aggiungi Prodotto', ['class' => 'form-btn1', 'id' => 'sub-btn']) }}
            </div>

            {{ Form::close() }}
        </div>
    </div>

</div>
@endsection








@section('scripts')

@parent
<script src="{{ asset('js/functions.js') }}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(function () {
    var actionUrl = "{{ route('login') }}";
    var formId = 'addproduct';
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#addproduct").on('submit', function (event) {
        event.preventDefault();
        doFormValidation(actionUrl, formId);
    });
});
</script>

@endsection


