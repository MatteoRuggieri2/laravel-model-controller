@foreach ($movies as $movie)

        <div class="movie-card">
            <h2>{{ $movie->title }}</h2>
            <ul>
                <li>Original Title: {{ $movie->original_title }}</li>
                <li>Nationality: {{ $movie->nationality }}</li>
                <li>Date: {{ $movie->date }}</li>
                <li>Vote: {{ $movie->vote }}</li>
            </ul>
        </div>

    @endforeach