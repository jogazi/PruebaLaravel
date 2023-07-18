<div class="form-group">
	{{ Form::label('idTask', 'idTask') }}
	{{ Form::text('idTask', null, ['class' => 'form-control', 'id' => 'idTask', 'required' => 'required']) }}
</div>

<div class="form-group">
	{{ Form::label('priority', 'Priority') }}
	{{ Form::text('priority', null, ['class' => 'form-control', 'id' => 'priority', 'required' => 'required']) }}
</div>
<div class="form-group">
	{{ Form::label('expirationDate', 'Expiration Date') }}
	{{ Form::text('expirationDate', null, ['class' => 'form-control', 'id' => 'expirationDate', 'required' => 'required']) }}
</div>
<div class="form-group">
	{{ Form::label('idUser', 'idUser') }}
	{{ Form::text('idUser', null, ['class' => 'form-control', 'id' => 'idUser', 'required' => 'required']) }}
</div>
<br/>
<div class="form-group">
    <button type="submit" class="btn btn-primary">
        <i class="fas fa-save"></i>
        Save
    </button>
    <a class="btn btn-success" href="{{ route('tasks') }}"><i class="fas fa-arrow-alt-circle-left"></i> Go back</a>
</div>