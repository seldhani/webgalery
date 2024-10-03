@extends('admin.layout')
@section('content')

<div class="container">

<ul class="navbar-nav d-flex flex-row me-auto ms-3 ps-1" style="gap: 1rem;">
    <!-- Dropdown Data Petugas -->
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle pl-md-3 position-relative" href="#" id="bell"
            role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span><i data-feather="user" class="svg-icon"></i></span>
        </a>
        <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown" style="min-width: 300px;">
            <ul class="list-style-none">
                <li>
                    <div class="message-center notifications position-relative">
                        <!-- Message -->
                        <a href="/users" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                            <h3 class="mt-4">Data Petugas</h3>
                            <table class="table table-bordered table-striped" style="margin-bottom: 0;">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($petugas as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->username }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </li>

    <!-- Dropdown Data Kategori -->
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle pl-md-3 position-relative" href="#" id="categoryDropdown"
            role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span><i data-feather="list" class="svg-icon"></i></span>
        </a>
        <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown" style="min-width: 300px;">
            <ul class="list-style-none">
                <li>
                    <div class="message-center notifications position-relative">
                        <!-- Message -->
                        <a href="/kategori" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                            <h3 class="mt-4">Data Kategori</h3>
                            <table class="table table-bordered table-striped" style="margin-bottom: 0;">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Judul</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($kategori as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->judul }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </li>
</ul>








<!-- Section Data Unggahan -->
<h3 class="mt-5">Data Unggahan</h3>
<table class="table table-bordered table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Isi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $item)
            <tr>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->kategori_id }}</td>
                <td>{{ $item->isi }}</td>
            </tr>
        @endforeach
    </tbody>
</table>



@endsection