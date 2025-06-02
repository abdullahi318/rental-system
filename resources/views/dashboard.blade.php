<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                 <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                    </li> -->
                    <!-- <li class="nav-item">
                    <a class="nav-link" href="{{ url('/index') }}">Index</a>
                    </li> -->
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('students.index') }}">Students</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('departments.index') }}">Departments</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('faculties.index') }}">Faculties</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('bicycles.index') }}">Bicycles</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('stations.index') }}">Stations</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('pricings.index') }}">Prices</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('rentals.index') }}">Rentals</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                    <a class="nav-link" href="{{ route('rentals.index') }}">Rentals</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
