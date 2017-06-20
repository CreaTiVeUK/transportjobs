<div class='form-group'>
 {!! Form::label('JobStatus', 'Job status:') !!}
 {!! Form::select('JobStatus', ['Pending' => 'Pending','Accepted' => 'Accepted','Active' => 'Active','Completed' => 'Completed'], ['class' => 'form-control']) !!}
</div>
<div class='form-group'>
 {!! Form::label('NoOfVehicles', 'Number of vehicles:') !!}
 {!! Form::number('NoOfVehicles', null, ['class' => 'form-control']) !!}
</div>
<div class='form-group'>
 {!! Form::label('DrivenPrice', 'Driven price:') !!}
 {!! Form::number('DrivenPrice', null, ['class' => 'form-control']) !!}
</div>
<div class='form-group'>
 {!! Form::label('TransportedPrice', 'Transport price:') !!}
 {!! Form::number('TransportedPrice', null, ['class' => 'form-control']) !!}
</div>
<div class='form-group'>
 {!! Form::label('CollectionDate', 'Collection date:') !!}
 {!! Form::date('CollectionDate', null, ['class' => 'form-control'], 'd/m/Y') !!}
</div>
<div class='form-group'>
 {!! Form::label('DeliveryDate', 'Delivery date:') !!}
 {!! Form::date('DeliveryDate', null, ['class' => 'form-control'], 'd/m/Y') !!}
</div>
<div class='form-group'>
 {!! Form::label('ServiceType', 'Service type:') !!}
 {!! Form::select('ServiceType', ['Driven' => 'Driven','Transported' => 'Transported'], ['class' => 'form-control']) !!}
</div>
<div class='form-group'>
 {!! Form::label('RequestDate', 'Request Date:') !!}
 {!! Form::date('RequestDate', null, ['class' => 'form-control'], 'd/m/Y') !!}
</div>
<div class='form-group'>
 {!! Form::submit($submitButtonText, ['class' => 'btn btn-lg btn-success form-control']) !!}
</div>