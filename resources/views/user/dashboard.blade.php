<x-layoutt>
    @auth
        <div class="container my-3">
            <h2>{{ auth()->user()->name }} is logged in</h2>
            <div class="my-3">

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Log out</button>
                </form>
            </div>
        </div>
    @endauth
</x-layoutt>
