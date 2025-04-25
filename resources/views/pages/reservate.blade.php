@extends('layouts.layout')

@section('reservate')



<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <p><span class="text-primary me-2">#</span>Our Services</p>
                <h1 class="display-5 mb-0">
                    Special Services For
                    <span class="text-primary">Zoofari</span> Visitors
                </h1>
            </div>
            <div class="col-lg-6">
                <div class="bg-primary h-100 d-flex align-items-center py-4 px-4 px-sm-5">
                    <i class="fa fa-3x fa-mobile-alt text-white"></i>
                    <div class="ms-4">
                        <p class="text-white mb-0">Call for more info</p>
                        <h2 class="text-white mb-0">+012 345 6789</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gy-5 gx-4">
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <img class="img-fluid mb-3" src="img/icon/icon-3.png" alt="Icon" />
                <h5 class="mb-3">Animal Photos</h5>
                <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                    sed diam stet diam sed stet.</span>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <img class="img-fluid mb-3" src="img/icon/icon-4.png" alt="Icon" />
                <h5 class="mb-3">Guide Services</h5>
                <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                    sed diam stet diam sed stet.</span>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <img class="img-fluid mb-3" src="img/icon/icon-5.png" alt="Icon" />
                <h5 class="mb-3">Food & Beverages</h5>
                <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                    sed diam stet diam sed stet.</span>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <img class="img-fluid mb-3" src="img/icon/icon-9.png" alt="Icon" />
                <h5 class="mb-3">Rest House</h5>
                <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                    sed diam stet diam sed stet.</span>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<div class="container-xxl my-5">
    <div class="row g-4">
        <div class="col-md-4 col-12">
            <div class="input-group input-group-lg">
                <span class="input-group-text">
                    <i class="bi bi-calendar-event"></i>
                </span>
                <input type="text" class="form-control web-datepicker booking-dtp" name="scheduled_date" id="datepicker" placeholder="dd/mm/aaaa" autocomplete="off">

            </div>
        </div>
        <div class="col-md-4 col-12">
            <div class="input-group input-group-lg">
                <span class="input-group-text">
                    <i class="bi bi-clock"></i>
                </span>
                <select class="form-control" name="scheduled_time" id="time-select" disabled>
                    <option value="" disabled selected>Seleccionar horario</option>
                </select>
            </div>
        </div>
        <div class="col-md-4 col-12">
            <div class="input-group input-group-lg">
                <span class="input-group-text">
                    <i class="bi bi-people"></i>
                </span>
                <select class="form-control" name="scheduled_capacity" id="capacitypicker" disabled></select>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-4 offset-md-4 col-12">
            <button class="btn btn-primary btn-block btn-lg text-uppercase w-100" id="nn-booking-button" disabled>
                Reservar
            </button>
        </div>
    </div>
</div>
<!-- Vanilla Datepicker JS -->
<script src="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.3.4/dist/js/datepicker-full.min.js"></script>

<script>
    Datepicker.locales.es = {
        days: ["domingo", "lunes", "martes", "miércoles", "jueves", "viernes", "sábado"]
        , daysShort: ["dom", "lun", "mar", "mié", "jue", "vie", "sáb"]
        , daysMin: ["do", "lu", "ma", "mi", "ju", "vi", "sá"]
        , months: ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"]
        , monthsShort: ["ene", "feb", "mar", "abr", "may", "jun", "jul", "ago", "sep", "oct", "nov", "dic"]
        , today: "Hoy"
        , clear: "Limpiar"
        , titleFormat: "MM yyyy"
        , format: "dd/mm/yyyy"
        , weekStart: 1
    };

</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const input = document.getElementById('datepicker');
        const timeSelect = document.getElementById('time-select');
        const today = new Date();
        const nextMonth = new Date(today);
        nextMonth.setMonth(today.getMonth() + 1);
        const datepicker = new Datepicker(input, {
            autohide: true
            , format: 'dd/mm/yyyy'
            , language: 'es'
            , minDate: today
            , maxDate: nextMonth
        , });

        // Escuchar cuando se selecciona una fecha
        input.addEventListener('changeDate', function() {
            if (input.value !== '') {
                timeSelect.disabled = false;
            } else {
                timeSelect.disabled = true;
            }
        });
        timeSelect.disabled = true;
    });

</script>


@endsection
