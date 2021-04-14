<footer>
    <div class="row">
        <div class="col">
            <div class="d-flex justify-content-center">
                <p>&copy; Copyright {{ date('y') }}
                    <!-- si la methode is est fausse on affiche pas le lien about 
                    si non on affiche le lien about -->
                    @if (! Route::is ('about'))
                    &middot; <a href=" {{ route('about') }}">About Us</a></p>
                @endif

            </div>
        </div>
    </div>
</footer>