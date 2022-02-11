@foreach ($movies as $movie)

        <div class="movie-card">
            <h2>{{ $movie->title }}</h2>
            <ul>
                <li><span class="under-bold-text">Original Title:</span> {{ $movie->original_title }}</li>
                <li><span class="under-bold-text">Nationality:</span> {{ $movie->nationality }}</li>
                <li><span class="under-bold-text">Date:</span> {{ $movie->date }}</li>
                <li><span class="under-bold-text">Vote:</span> {{ $movie->vote }}</li>
            </ul>
        </div>

    @endforeach