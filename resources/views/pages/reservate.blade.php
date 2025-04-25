@extends('layouts.layout')

@section('reservate')

<div class="m-t-60 m-b-60">
    <div class="row">
        <div class="col-md-4">
            <div class="input-group input-group-lg date">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
                <input class="form-control web-datepicker booking-dtp" name="scheduled_date" id="datetimepicker1" data-min-date="25-04-2025" data-max-date="25-05-2025" autocomplete="off" placeholder="dd/mm/aaaa">
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group input-group-lg time">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
                <select class="form-control" name="scheduled_time" id="time-select" disabled='true'>
                    <option value="" disabled selected>Seleccionar horario</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group input-group-lg capacity">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-user"></span>
                </span>
                <select class="form-control" name="scheduled_capacity" id="capacitypicker" disabled='true'></select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <button class="btn btn-primary btn-block btn-gradient btn-lg text-uppercase m-t-40" id="nn-booking-button" disabled>
                Reservar
            </button>
        </div>
    </div>
</div>
@endsection
