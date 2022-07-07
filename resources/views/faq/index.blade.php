@extends('layouts.main')

@section('content')
<div class="page-heading">

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-success">FAQs & Tips</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Page</a></li>
                        <li class="breadcrumb-item active" aria-current="page">FAQ & Tips</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

</div>

<div class="page-content mb-3">
    <div class="row">
        <div class="col-lg-12">
            <div class="card border">
                <div class="card-body">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active fw-bold" id="pills-faq-tab" data-bs-toggle="pill" data-bs-target="#pills-faq" type="button" role="tab" aria-controls="pills-faq" aria-selected="true">FAQs</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link fw-bold" id="pills-tips-tab" data-bs-toggle="pill" data-bs-target="#pills-tips" type="button" role="tab" aria-controls="pills-tips" aria-selected="false">Tips</button>
                        </li>
                      </ul>
                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-faq" role="tabpanel" aria-labelledby="pills-faq-tab">
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Pertanyaan</th>
                                                <th>Jawaban</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-tips" role="tabpanel" aria-labelledby="pills-tips-tab">
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Pertanyaan</th>
                                                <th>Jawaban</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection