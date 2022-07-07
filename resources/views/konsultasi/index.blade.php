@extends('layouts.main')

@section('content')

<div class="page-content">

    <section class="row">
        <div class="col-md-4">
            <div class="card border" style="height: 30rem">
                <div class="card-header">
                    <h5>Chat</h5>
                </div>
                <div class="card-body">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control rounded-pill" placeholder="Search">
                    </div>
                    <div class="list-group list-group-flush ">
                        <a href="#" class="list-group-item list-group-item-action">
                            <img src="{{ asset('img/buday.jpg') }}" alt="buday.jpg" class="rounded-circle img-fluid mx-2" width="50">
                            Budi Setiawan
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <img src="{{ asset('img/buday.jpg') }}" alt="buday.jpg" class="rounded-circle img-fluid mx-2" width="50">
                            Budi Setiawan
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <img src="{{ asset('img/buday.jpg') }}" alt="buday.jpg" class="rounded-circle img-fluid mx-2" width="50">
                            Budi Setiawan
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <img src="{{ asset('img/buday.jpg') }}" alt="buday.jpg" class="rounded-circle img-fluid mx-2" width="50">
                            Budi Setiawan
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <img src="{{ asset('img/buday.jpg') }}" alt="buday.jpg" class="rounded-circle img-fluid mx-2" width="50">
                            Budi Setiawan
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card border" style="height: 30rem">
                <div class="card-header fw-bold">
                    <a href="#" class="text-success">
                        <i class="bi bi-chevron-left"></i>
                    </a>
                    <img src="{{ asset('img/buday.jpg') }}" alt="buday.jpg" class="rounded-circle img-fluid mx-2" width="50">
                    Budi Setiawan
                        {{-- <i class="bi bi-search"></i>
                        <i class="bi bi-three-dots-vertical"></i>       --}}
                </div>
                <div class="card-body">

                </div>
                <div class="card-footer">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-success" type="button" id="button-addon2">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection