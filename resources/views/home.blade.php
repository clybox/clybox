@extends('layouts.app')

@section('content')
<div class="container">

                <form>
                  <div class="form-group">
                      {!! Form::label('Description', null, 
                          array('class'=>'form-group col-md-2')) !!}
                      {!! Form::text('Description', null, 
                          array('required', 
                                'class'=>'form-group col-md-10 text-weight-bold', 
                                'placeholder'=>'Enter Description',
                                'id'=>'Description')) !!}
                  </div>
                  <div class="form-group">
                      {!! Form::label('UOM', null, 
                          array('class'=>'form-group col-md-2')) !!}
                      {!! Form::text('name', null, 
                          array('required', 
                                'class'=>'form-group col-md-2', 
                                'placeholder'=>'UOM')) !!}
                      {!! Form::label('', null, 
                          array('class'=>'form-group col-md-2')) !!}   
                      {!! Form::label('', null, 
                          array('class'=>'form-group col-md-2')) !!}         
                      {!! Form::label('Quantity', null, 
                          array('class'=>'form-group col-md-2')) !!}
                      {!! Form::text('name', null, 
                          array('required', 
                                'class'=>'form-group col-md-2', 
                                'placeholder'=>'Quantity')) !!}
                  </div>
                  <div class="form-group">
                      {!! Form::label('Property', null, 
                          array('class'=>'form-group col-md-2')) !!}
                      {!! Form::label('Product1', null, 
                          array('class'=>'form-group col-md-2')) !!}   
                      {!! Form::label('Product2', null, 
                          array('class'=>'form-group col-md-2')) !!}         
                      {!! Form::label('Product3', null, 
                          array('class'=>'form-group col-md-2')) !!}
                      {!! Form::label('Product4', null, 
                          array('class'=>'form-group col-md-2')) !!}         
                      {!! Form::label('Results', null, 
                          array('class'=>'form-group col-md-2')) !!}
                  </div>
                  <div class="form-group">
                      {!! Form::label('Percentage', null, 
                          array('class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product1Perc', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product2Perc', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product3Perc', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product4Perc', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('ResultsPerc', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                  </div>
                  <div class="form-group">
                      {!! Form::label('Quantity', null, 
                          array('class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product1Quant', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product2Quant', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product3Quant', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product4Quant', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('ResultQuant', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                  </div>
                  <div class="form-group">
                      {!! Form::label('Buy', null, 
                          array('class'=>'form-group col-md-12')) !!}
                  </div>
                  <div class="form-group">
                      {!! Form::label('Percentage', null, 
                          array('class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product1PercB', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product2PercB', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product3PercB', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product4PercB', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('ResultsPercB', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                  </div>
                  <div class="form-group">
                      {!! Form::label('Quantity', null, 
                          array('class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product1QuantB', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product2QuantB', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product3QuantB', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product4QuantB', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('ResultQuantB', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                  </div>
                  <div class="form-group">
                      {!! Form::label('Sell', null, 
                          array('class'=>'form-group col-md-12')) !!}
                  </div>
                  <div class="form-group">
                      {!! Form::label('Percentage', null, 
                          array('class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product1PercS', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product2PercS', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product3PercS', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product4PercS', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('ResultsPercS', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                  </div>
                  <div class="form-group">
                      {!! Form::label('Quantity', null, 
                          array('class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product1QuantS', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product2QuantS', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product3QuantS', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product4QuantS', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('ResultQuantS', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                  </div>                    
                  <div class="form-group">
                      {!! Form::label('Blend', null, 
                          array('class'=>'form-group col-md-12')) !!}
                  </div>
                  <div class="form-group">
                      {!! Form::label('Sulphur', null, 
                          array('class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product1Sulphur', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product2Sulphur', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product3Sulphur', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product4Sulphur', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('ResultSulphur', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                  </div>                    
                  <div class="form-group">
                      {!! Form::label('Volatiles', null, 
                          array('class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product1Volatiles', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product2Volatiles', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product3Volatiles', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product4Volatiles', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('ResultVolatiles', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                  </div>   
                  <div class="form-group">
                      {!! Form::label('Ash', null, 
                          array('class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product1Ash', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product2Ash', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product3Ash', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product4Ash', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('ResultAsh', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                  </div>  
                  <div class="form-group">
                      {!! Form::label('Moisture', null, 
                          array('class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product1Moisture', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product2Moisture', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product3Moisture', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product4Moisture', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('ResultMoisture', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                  </div>  
                  <div class="form-group">
                      {!! Form::label('Vanadium', null, 
                          array('class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product1Vanadium', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product2Vanadium', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product3Vanadium', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product4Vanadium', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('ResultVanadium', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                  </div>  
                  <div class="form-group">
                      {!! Form::label('Calcium', null, 
                          array('class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product1Calcium', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product2Calcium', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product3Calcium', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product4Calcium', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('ResultCalcium', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                  </div>  
                  <div class="form-group">
                      {!! Form::label('Iron', null, 
                          array('class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product1Iron', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product2Iron', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product3Iron', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product4Iron', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('ResultIron', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                  </div>  
                  <div class="form-group">
                      {!! Form::label('Zinc', null, 
                          array('class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product1Zinc', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product2Zinc', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product3Zinc', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product4Zinc', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('ResultZinc', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                  </div>  
                  <div class="form-group">
                      {!! Form::label('HGI', null, 
                          array('class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product1HGI', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product2HGI', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product3HGI', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('Product4HGI', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                      {!! Form::number('ResultHGI', null, 
                          array('required', 
                                'step'=>'.01',
                                'class'=>'form-group col-md-2')) !!}
                  </div> 
                </form>

</div>
@endsection
