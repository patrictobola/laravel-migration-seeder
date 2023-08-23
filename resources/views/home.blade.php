<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <div class="container">
            <div class="row mt-5 g-3">
                {{-- Train info --}}
                @foreach ($trains as $train)
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Train Number: {{ $train->train_number }}</h5>
                                <span class="card-text">Orario di partenza: {{ $train->getDepartureTime() }}</span>
                                <p class="card-text">Da: {{ $train->from_station }}</p>
                                <span class="card-text">Orario di arrivo: {{ $train->getArrivalTime() }}</span>
                                <p class="card-text">A: {{ $train->to_station }}</p>

                                @if ($train->cancelled)
                                    <p>&cross; Treno soppresso. Auguri</p>
                                @elseif ($train->delay)
                                    <p>&check; Come al solito il treno è in ritardo!</p>
                                @else
                                    <p>Treno in orario! </p>
                                @endif
                                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-primary">Go
                                    somewhere, you should try me! :)</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </main>

</body>

</html>
