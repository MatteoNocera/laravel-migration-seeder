@extends('layouts.app')

@section('page-title', 'Our Trains')

@section('content')

    <div class="container">
        <h1 class="py-5 fw-bold">Find the best solution for you!</h1>
        <div class="row g-5">
            @forelse ($trains as $train)
                <div class="col-12">
                    <div class="card p-4 shadow mt-3">
                        <div class="card-title d-flex align-items-center justify-content-between bg-light">
                            <h3 class="fw-bold">{{ $train->company }} / <span
                                    class="text-muted">{{ $train->train_code }}</span>
                            </h3>
                            <h5>
                                Coaches = {{ $train->number_of_coaches }}
                            </h5>
                        </div>
                        <div class="card-body d-flex justify-content-between">

                            <div>
                                <h2>
                                    {{ $train->arrival_time }}
                                </h2>
                                <h3>
                                    {{ $train->arrival_station }}
                                </h3>
                            </div>

                            <div>
                                <h2>
                                    {{ $train->departure_time }}
                                </h2>
                                <h3>
                                    {{ $train->departure_station }}
                                </h3>
                            </div>

                            <div>
                                <p>
                                    Date
                                </p>
                                <h3>
                                    {{ $train->date }}
                                </h3>
                            </div>



                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

@endsection
