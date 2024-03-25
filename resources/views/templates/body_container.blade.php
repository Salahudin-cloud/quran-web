<div class="container">
    <div class="tm-search-form-container align-middle">
        <form action="{{ url('/cari/surah/') }}" method="GET" class="form-inline tm-search-form">
            <div class="form-group tm-search-box">
                <input type="text" name="ke" class="form-control tm-search-input"
                    placeholder="Cari Nomor Surat ...">
                <input type="submit" value="cari" class="form-control tm-search-submit">
            </div>
        </form>
    </div>
    <div class="row mt-3">
        @foreach ($quran as $data)
            <div class="col-md-6 pt-4">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('surah') }}?no={{ $data['number'] }}" class="card-link">
                            <h4 class="card-title">{{ $data['name'] }}</h4>
                            <p class="card-text">Arti Surat : {{ $data['translation'] }}</p>
                            <p class="card-text">Nomor Surat: {{ $data['number'] }}</p>
                            <p class="card-text">Jenis Surat: {{ $data['revelation'] }}</p>
                            <p class="card-text">Jumlah Ayat: {{ $data['numberOfAyahs'] }}</p>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div> <!-- .container -->
