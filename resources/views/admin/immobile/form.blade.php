
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong>
            {!! Form::text('title', null, array('placeholder' => 'Breve descricao do imovel','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Cep:</strong>
            {!! Form::text('cep', null, array('placeholder' => '85065060','class' => 'form-control')) !!}
        </div>
    </div>
  <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Estado:</strong>
            {!! Form::text('state', null, array('placeholder' => 'Parana','class' => 'form-control')) !!}
        </div>
    </div>
   <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Cidade:</strong>
            {!! Form::text('city', null, array('placeholder' => 'Guarapuava','class' => 'form-control')) !!}
        </div>
    </div>
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Bairro:</strong>
            {!! Form::text('neighborhood', null, array('placeholder' => 'Centro','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Numero do Imovel:</strong>
            {!! Form::text('number', null, array('placeholder' => '243','class' => 'form-control')) !!}
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tipo:</strong>
            {!! Form::text('type', null, array('placeholder' => 'Casa','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Numero de Dormitorios:</strong>
            {!! Form::text('bedroom', null, array('placeholder' => '4','class' => 'form-control')) !!}
        </div>
    </div>
   

      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tamanho total:</strong>
            {!! Form::text('area', null, array('placeholder' => '150','class' => 'form-control')) !!}
        </div>

    </div>
   
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Valor do Imovel :</strong>
            {!! Form::text('value', null, array('placeholder' => '500,00','class' => 'form-control')) !!}
        </div>

    </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Descricao do Imovel :</strong>
            {!! Form::textarea('description', null, array('placeholder' => 'Imovel em bom estado, possui garagem para dois carros...','class' => 'form-control')) !!}
        </div> 

    </div> 
      <div class="form-group">
                {{ Form::label('operation_id', 'Operation') }}
                {{ Form::select('operation_id', $operations, null, ['class' => 'form-control','placeholder'=>'Selecione Uma operação']) }}

            </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>  