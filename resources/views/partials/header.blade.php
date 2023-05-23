<header class="p-2 bg-light shadow-sm">
    <div class="container d-flex justify-content-between align-items-center">
        <div>
            <h1 class="fs-4 m-0 p-0">The Movie DB</h1>
            <small>il remake</small>
        </div>
        <div>
            <ul class="list-unstyled d-flex justify-content-between align-items-center gap-2">
                <li>
                    <a class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li>
                    <a class="{{ Route::currentRouteName() == 'about' ? 'active' : '' }}" href="/about">About</a>
                </li>
            </ul>
        </div>
    </div>
</header>
