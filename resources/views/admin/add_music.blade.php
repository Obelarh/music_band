<x-layout>

    <div class="hero-section" id="hero_section">
        <form action="{{ route('music.store') }}" method="POST" enctype="multipart/form-data">
            <div class="form-container shadow p-4 col-md-6 mx-auto offset-md-3"
                style="background-color: rgba(255, 255, 255, 0.8);">
                @csrf
                <div class="col-md-6">
                    <h2 class="text-center mt-2 mb-3 text-primary">ADD MUSIC</h2>
                </div>
                <div>
                    <label for="music_n" class="form-label">Name of Music:</label>
                    <input type="text" id="music_n" class="form-control" placeholder="Enter Music Name"
                        name="music_name">
                    @error('music_name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="artist_n" class="form-label">Artist Name:</label>
                    <input type="text" id="artist_n" class="form-control" placeholder="Enter Artist Name"
                        name="artist_name">
                    @error('artist_name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="music_date" class="form-label">Date Released:</label>
                    <input type="date" id="music_date" class="form-control" name="music_released_date">
                    @error('music_released_date')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="type_of_music" class="form-label">Music Type:</label>
                    <select id="type_of_music" name="type_of_music" class="form-control">
                        <option value="">Choose...</option>
                        <option value="free">Free</option>
                        <option value="paid">Paid</option>
                    </select>
                </div>


                <div>
                    <label for="mp3" class="form-label">Upload Music</label>
                    <input type="file" name="mp3" id="mp3" class="form-control">
                </div>
                
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Upload Music</button>
                </div>

            </div>
        </form>
    </div>

</x-layout>
