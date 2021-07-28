
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #203647">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('doctor.index') }}"
                    >Doctors <span class="sr-only">(current)</span></a
                    >
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('doctor.create') }}"
                    >Add Doctor <span class="sr-only">(current)</span></a
                    >
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('department.create') }}"
                    >Add Department <span class="sr-only">(current)</span></a
                    >
                </li>
            </ul>
        </div>
    </div>
</nav>
