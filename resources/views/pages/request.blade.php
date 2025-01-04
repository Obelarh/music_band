<x-layoutt>
    <div class="contactbg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contacttitlepage">
                        <h2>Music Request</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="address">

                    <form method="POST" >
                        <div class="row">
                            @csrf
                            <div class="col-sm-12">
                                <input class="contactus" placeholder="Music name" type="text" name="music">
                            </div>
                            <div class="col-sm-12">
                                <input class="contactus" placeholder="Artist" type="text" name="artist">
                            </div>
                            <div class="col-sm-12">
                                <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                            </div>
                            <div class="col-sm-12">
                                <button class="send" type="submit">Request</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layoutt>
