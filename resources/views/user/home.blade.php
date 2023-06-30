@extends('layout2.app')

@section('contents')
<div class="dashboard">
    <div class="dashboard-banner">
        <img src="admin_assets/img/14669667_5508800.jpg">
    </div>

    <h3 class="dashboard-title">Kategori</h3>
    <div class="dashboard-menu">
        <a href="#">Semua</a>
        <a href="#">Terdekat</a>
        <a href="#">Kucing</a>
        <a href="#">Anjing</a>
        <a href="#">Campuran</a>
    </div>

    <div class="dashboard-content">
        <ul>
            <div class="dashboard-card">
                <img src="admin_assets/img/cat-looking-you.jpg" class="card-image">
                <div class="card-detail">
                    <h4>Singaraja Shelter</h4>
                    <p class="card-location"><span class="fas fa-home"></span> Desa Nagasepaha</p>
                    <p class="card-time"><span class="fas fa-clock"></span> 09.00-20.00</p>
                    <p class="card-type"><span class="fas fa-dog"></span> Campuran</p>
                    <p class="card-capacity">Kapasitas:</p>
                </div>
                <a class="btn btn-primary btn-user btn-block" href="{{ route('detailShelter') }}">
                    Detail Shelter
                </a>
            </div>
        </ul>

        <ul>
            <div class="dashboard-card">
                <img src="admin_assets/img/cat-looking-you.jpg" class="card-image">
                <div class="card-detail">
                    <h4>Singaraja Shelter</h4>
                    <p class="card-location"><span class="fas fa-home"></span> Desa Nagasepaha</p>
                    <p class="card-time"><span class="fas fa-clock"></span> 09.00-20.00</p>
                    <p class="card-type"><span class="fas fa-dog"></span> Campuran</p>
                    <p class="card-capacity">Kapasitas:</p>
                </div>
                <a class="btn btn-primary btn-user btn-block" href="{{ route('detailShelter') }}">
                    Detail Shelter
                </a>
            </div>
        </ul>
        <ul>
            <div class="dashboard-card">
                <img src="admin_assets/img/cat-looking-you.jpg" class="card-image">
                <div class="card-detail">
                    <h4>Singaraja Shelter</h4>
                    <p class="card-location"><span class="fas fa-home"></span> Desa Nagasepaha</p>
                    <p class="card-time"><span class="fas fa-clock"></span> 09.00-20.00</p>
                    <p class="card-type"><span class="fas fa-dog"></span> Campuran</p>
                    <p class="card-capacity">Kapasitas:</p>
                </div>
                <a class="btn btn-primary btn-user btn-block" href="{{ route('detailShelter') }}">
                    Detail Shelter
                </a>
            </div>
        </ul>
        <ul>
            <div class="dashboard-card">
                <img src="admin_assets/img/cat-looking-you.jpg" class="card-image">
                <div class="card-detail">
                    <h4>Singaraja Shelter</h4>
                    <p class="card-location"><span class="fas fa-home"></span> Desa Nagasepaha</p>
                    <p class="card-time"><span class="fas fa-clock"></span> 09.00-20.00</p>
                    <p class="card-type"><span class="fas fa-dog"></span> Campuran</p>
                    <p class="card-capacity">Kapasitas:</p>
                </div>
                <a class="btn btn-primary btn-user btn-block" href="{{ route('detailShelter') }}">
                    Detail Shelter
                </a>
            </div>
        </ul>
        <ul>
            <div class="dashboard-card">
                <img src="admin_assets/img/cat-looking-you.jpg" class="card-image">
                <div class="card-detail">
                    <h4>Singaraja Shelter</h4>
                    <p class="card-location"><span class="fas fa-home"></span> Desa Nagasepaha</p>
                    <p class="card-time"><span class="fas fa-clock"></span> 09.00-20.00</p>
                    <p class="card-type"><span class="fas fa-dog"></span> Campuran</p>
                    <p class="card-capacity">Kapasitas:</p>
                </div>
                <button class="btn btn-primary btn-user btn-block">
                    Detail
                </button>
            </div>
        </ul>

        <ul>
            <div class="dashboard-card">
                <img src="admin_assets/img/cat-looking-you.jpg" class="card-image">
                <div class="card-detail">
                    <h4>Singaraja Shelter</h4>
                    <p class="card-location"><span class="fas fa-home"></span> Desa Nagasepaha</p>
                    <p class="card-time"><span class="fas fa-clock"></span> 09.00-20.00</p>
                    <p class="card-type"><span class="fas fa-dog"></span> Campuran</p>
                    <p class="card-capacity">Kapasitas:</p>
                </div>
                <a class="btn btn-primary btn-user btn-block" href="{{ route('detailShelter') }}">
                    Detail Shelter
                </a>
            </div>
        </ul>
        <ul>
            <div class="dashboard-card">
                <img src="admin_assets/img/cat-looking-you.jpg" class="card-image">
                <div class="card-detail">
                    <h4>Singaraja Shelter</h4>
                    <p class="card-location"><span class="fas fa-home"></span> Desa Nagasepaha</p>
                    <p class="card-time"><span class="fas fa-clock"></span> 09.00-20.00</p>
                    <p class="card-type"><span class="fas fa-dog"></span> Campuran</p>
                    <p class="card-capacity">Kapasitas:</p>
                </div>
                <a class="btn btn-primary btn-user btn-block" href="{{ route('detailShelter') }}">
                    Detail Shelter
                </a>
            </div>
        </ul>
        <ul>
            <div class="dashboard-card">
                <img src="admin_assets/img/cat-looking-you.jpg" class="card-image">
                <div class="card-detail">
                    <h4>Singaraja Shelter</h4>
                    <p class="card-location"><span class="fas fa-home"></span> Desa Nagasepaha</p>
                    <p class="card-time"><span class="fas fa-clock"></span> 09.00-20.00</p>
                    <p class="card-type"><span class="fas fa-dog"></span> Campuran</p>
                    <p class="card-capacity">Kapasitas:</p>
                </div>
                <a class="btn btn-primary btn-user btn-block" href="{{ route('detailShelter') }}">
                    Detail Shelter
                </a>
            </div>
        </ul>
        
    </div>
</div>
@endsection