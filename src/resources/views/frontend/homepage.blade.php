@extends('layouts.frontend')

@section('content')
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
      <div class="text-center text-white">
        <h1 class="display-4 fw-bolder">Driver Service</h1>
        <p class="lead fw-normal text-white-50 mb-0">
          hanya dengan satu sentuhan
        </p>
      </div>
    </div>
  </header>
  <!-- Section-->
  <section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
      <h3 class="text-center mb-5">Profil Supir</h3>
      <div
        class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center"
      >
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->
            <div
              class="badge badge-custom bg-warning text-white position-absolute"
              style="top: 0; right: 0"
            >
              Tidak Tersedia
            </div>
            <!-- Product image-->
            <img
              class="card-img-top"
              src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
              alt="..."
            />
            <!-- Product details-->
            <div class="card-body card-body-custom pt-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Budi Sujowo</h5>
                <!-- Product price-->
                <div class="rent-price mb-3">
                  <span class="text-primary">Rp.500.000/</span>day
                </div>
                <ul class="list-unstyled list-style-group">
                  <li
                    class="border-bottom p-2 d-flex justify-content-between"
                  >
                    <span>Driver Lisensi</span>
                    <span style="font-weight: 600">SIM A</span>
                  </li>
                  <li
                    class="border-bottom p-2 d-flex justify-content-between"
                  >
                    <span>Usia</span>
                    <span style="font-weight: 600">35 Tahun</span>
                  </li>
                  <li
                    class="border-bottom p-2 d-flex justify-content-between"
                  >
                    <span>Kinerja</span>
                    <span style="font-weight: 600">Baik</span>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer border-top-0 bg-transparent">
              <div class="text-center">
                <a class="btn btn-primary mt-auto" href="#">Sewa</a>
                <a
                  class="btn btn-info mt-auto text-white"
                  href="{{ route('detail') }}"
                  >Detail</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->
            <div
              class="badge badge-custom bg-success text-white position-absolute"
              style="top: 0; right: 0"
            >
              Tersedia
            </div>
            <!-- Product image-->
            <img
              class="card-img-top"
              src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
              alt="..."
            />
            <!-- Product details-->
            <div class="card-body card-body-custom pt-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Nina Herlina</h5>
                <!-- Product price-->
                <div class="rent-price mb-3">
                  <span class="text-primary">Rp.650.000/</span>day
                </div>
                <ul class="list-unstyled list-style-group">
                  <li
                    class="border-bottom p-2 d-flex justify-content-between"
                  >
                    <span>Driver Lisensi</span>
                    <span style="font-weight: 600">SIM A</span>
                  </li>
                  <li
                    class="border-bottom p-2 d-flex justify-content-between"
                  >
                    <span>Usia</span>
                    <span style="font-weight: 600">27 Tahun</span>
                  </li>
                  <li
                    class="border-bottom p-2 d-flex justify-content-between"
                  >
                    <span>Kinerja</span>
                    <span style="font-weight: 600">Baik</span>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer border-top-0 bg-transparent">
              <div class="text-center">
                <a class="btn btn-primary mt-auto" href="#">Sewa</a>
                <a
                  class="btn btn-info mt-auto text-white"
                  href="{{ route('detail') }}"
                  >Detail</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->
            <div
              class="badge badge-custom bg-success text-white position-absolute"
              style="top: 0; right: 0"
            >
              Tersedia
            </div>
            <!-- Product image-->
            <img
              class="card-img-top"
              src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
              alt="..."
            />
            <!-- Product details-->
            <div class="card-body card-body-custom pt-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Dodi Sudodo</h5>
                <!-- Product price-->
                <div class="rent-price mb-3">
                  <span class="text-primary">Rp.700.000/</span>day
                </div>
                <ul class="list-unstyled list-style-group">
                  <li
                    class="border-bottom p-2 d-flex justify-content-between"
                  >
                    <span>Driver Lisensi</span>
                    <span style="font-weight: 600">SIM A</span>
                  </li>
                  <li
                    class="border-bottom p-2 d-flex justify-content-between"
                  >
                    <span>Usia</span>
                    <span style="font-weight: 600">40 Tahun</span>
                  </li>
                  <li
                    class="border-bottom p-2 d-flex justify-content-between"
                  >
                    <span>Kinerja</span>
                    <span style="font-weight: 600">Baik</span>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer border-top-0 bg-transparent">
              <div class="text-center">
                <a class="btn btn-primary mt-auto" href="#">Sewa</a>
                <a
                  class="btn btn-info mt-auto text-white"
                  href="{{ route('detail') }}"
                  >Detail</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>   
@endsection