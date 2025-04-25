@extends('layouts.layout')

@section('reservate')


<!-- Visiting Hours Start -->
<div class="container-xxl bg-primary visiting-hours py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                <h1 class="display-6 text-white mb-5">Visiting Hours</h1>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <span>Monday</span>
                        <span>9:00AM - 6:00PM</span>
                    </li>
                    <li class="list-group-item">
                        <span>Tuesday</span>
                        <span>9:00AM - 6:00PM</span>
                    </li>
                    <li class="list-group-item">
                        <span>Wednesday</span>
                        <span>9:00AM - 6:00PM</span>
                    </li>
                    <li class="list-group-item">
                        <span>Thursday</span>
                        <span>9:00AM - 6:00PM</span>
                    </li>
                    <li class="list-group-item">
                        <span>Friday</span>
                        <span>9:00AM - 6:00PM</span>
                    </li>
                    <li class="list-group-item">
                        <span>Saturday</span>
                        <span>9:00AM - 6:00PM</span>
                    </li>
                    <li class="list-group-item">
                        <span>Sunday</span>
                        <span>Closed</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 text-light wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-6 text-white mb-5">Contact Info</h1>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Office</td>
                            <td>123 Street, New York, USA</td>
                        </tr>
                        <tr>
                            <td>Zoo</td>
                            <td>123 Street, New York, USA</td>
                        </tr>
                        <tr>
                            <td>Ticket</td>
                            <td>
                                <p class="mb-2">+012 345 6789</p>
                                <p class="mb-0">ticket@example.com</p>
                            </td>
                        </tr>
                        <tr>
                            <td>Support</td>
                            <td>
                                <p class="mb-2">+012 345 6789</p>
                                <p class="mb-0">support@example.com</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Visiting Hours End -->
<!-- Membership Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <p><span class="text-primary me-2">#</span>Membership</p>
                <h1 class="display-5 mb-0">
                    You Can Be A Proud Member Of
                    <span class="text-primary">Zoofari</span>
                </h1>
            </div>
            <div class="col-lg-6 text-lg-end">
                <a class="btn btn-primary py-3 px-5" href="">Special Pricing</a>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="membership-item position-relative">
                    <img class="img-fluid" src="img/animal-lg-1.jpg" alt="" />
                    <h1 class="display-1">01</h1>
                    <h4 class="text-white mb-3">Popular</h4>
                    <h3 class="text-primary mb-4">$99.00</h3>
                    <p><i class="fa fa-check text-primary me-3"></i>10% discount</p>
                    <p>
                        <i class="fa fa-check text-primary me-3"></i>2 adult and 2 child
                    </p>
                    <p>
                        <i class="fa fa-check text-primary me-3"></i>Free animal
                        exhibition
                    </p>
                    <a class="btn btn-outline-light px-4 mt-3" href="">Get Started</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="membership-item position-relative">
                    <img class="img-fluid" src="img/animal-lg-2.jpg" alt="" />
                    <h1 class="display-1">02</h1>
                    <h4 class="text-white mb-3">Standard</h4>
                    <h3 class="text-primary mb-4">$149.00</h3>
                    <p><i class="fa fa-check text-primary me-3"></i>15% discount</p>
                    <p>
                        <i class="fa fa-check text-primary me-3"></i>4 adult and 4 child
                    </p>
                    <p>
                        <i class="fa fa-check text-primary me-3"></i>Free animal
                        exhibition
                    </p>
                    <a class="btn btn-outline-light px-4 mt-3" href="">Get Started</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="membership-item position-relative">
                    <img class="img-fluid" src="img/animal-lg-3.jpg" alt="" />
                    <h1 class="display-1">03</h1>
                    <h4 class="text-white mb-3">Premium</h4>
                    <h3 class="text-primary mb-4">$199.00</h3>
                    <p><i class="fa fa-check text-primary me-3"></i>20% discount</p>
                    <p>
                        <i class="fa fa-check text-primary me-3"></i>6 adult and 6 child
                    </p>
                    <p>
                        <i class="fa fa-check text-primary me-3"></i>Free animal
                        exhibition
                    </p>
                    <a class="btn btn-outline-light px-4 mt-3" href="">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Membership End -->

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
