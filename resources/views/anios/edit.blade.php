@extends('layouts.general')

@section('titulo', 'CEAA | Editar Año Escolar')

@section('encabezado', 'Editar Año Escolar')

@section('subencabezado', 'Edición')

@section('breadcrumb')
<li>
  <i class="fa fa-users"></i> Configuración
</li>
<li>
  <a href="{{ route('anios.index') }}">Año Escolar</a>
</li>
<li class="active">
  Registrar Año Escolar
</li>
@endsection

@section('contenido')
<!-- Box Primary -->
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Registrar Año Escolar</h3>
  </div>
  <!-- Formulario -->
  {!! Form::open(['route' => ['anios.update', $anio], 'autocomplete' => 'off', 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
    <div class="box-body">

      <!-- Año -->
      <div class="form-group{{ $errors->has('numero') ? ' has-error' : '' }}">
        {!! Form::label('numero', 'Año', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
          {!! Form::text('numero', $anio->numero, ['class' => 'form-control', 'placeholder' => 'Año Escolar', 'required']) !!}
            @if ($errors->has('numero'))
            <span class="help-block">{{ $errors->first('numero') }}</span>
            @endif
        </div>
      </div>

    <!-- Año -->
      <div class="form-group{{ $errors->has('activo') ? ' has-error' : '' }}">
        {!! Form::label('activo', 'Activo', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
          <select class="form-control" name="activo">
           <option>--- Elige una Opcion ---</option>
            <option>Activo</option>
            <option>Desactivado</option>
          </select>
            @if ($errors->has('activo'))
            <span class="help-block">{{ $errors->first('activo') }}</span>
            @endif
        </div>
      </div>

    <!-- Año -->
      <div class="form-group{{ $errors->has('editable') ? ' has-error' : '' }}">
        {!! Form::label('editable', 'Editable', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
         <select class="form-control" name="editable">
         <option>--- Elige una Opcion ---</option>
            <option>Editable</option>
            <option>No Editable</option>
          </select>
            @if ($errors->has('editable'))
            <span class="help-block">{{ $errors->first('editable') }}</span>
            @endif
        </div>
      </div>
    </div>


    <!-- /.box-body -->
    <div class="box-footer">
      <div class="col-sm-9">
        <div class="pull-right">
          <a href="{{ route('anios.index') }}" class="btn btn-default btn-flat">Cancelar</a>
          {!! Form::submit('Guardar', ['class' => 'btn btn-primary btn-flat']) !!}
        </div>
      </div>
    </div>
  {!! Form::close() !!}
  <!-- /.box-footer-->
</div>
<!-- /.box -->
@endsection