@extends('layouts.frontend')

@section('content')
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
      <div class="text-center text-white">
        <h1 class="display-4 fw-bolder">Detail Supir</h1>
      </div>
    </div>
  </header>
  <!-- Section-->
  <section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
      <div class="row justify-content-center">
        <div class="col-lg-8 mb-5">
          <div class="card h-100">
            <!-- Product image-->
            <img
              class="card-img-top"
              src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
              alt="..."
            />
            <!-- Product details-->
            <div class="card-body card-body-custom pt-4">
              <div>
                <!-- Product name-->
                <h3 class="fw-bolder text-primary">Deskripsi</h3>
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Ipsa dolor corrupti porro, sit ex nemo itaque, est
                  voluptatum illum dignissimos facilis alias facere rem
                  consequatur?
                </p>
                <div class="mobil-info-list border-top pt-4">
                  <ul class="list-unstyled">
                    <li>
                      <i class="ri-checkbox-circle-line"></i>
                      <span>Sehat</span>
                    </li>
                    <li>
                      <i class="ri-close-circle-line text-secondary"></i>
                      <span>Profesional</span>
                    </li>
                    <li>
                      <i class="ri-close-circle-line text-secondary"></i>
                      <span>Driver Lisensi Lengkap</span>
                    </li>
                    <li>
                      <i class="ri-checkbox-circle-line"></i>
                      <span>Berpengalaman</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-5">
          <div class="card">
            <!-- Product details-->
            <div class="card-body card-body-custom pt-4">
              <div class="text-center">
                <!-- Product name-->
                <div
                  class="d-flex justify-content-between align-items-center"
                >
                  <h5 class="fw-bolder">Budi Sujowo</h5>
                  <div class="rent-price mb-3">
                    <span style="font-size: 1rem" class="text-primary"
                      >Rp.500.000/</span
                    >day
                  </div>
                </div>
                <ul class="list-unstyled list-style-group">
                  <li
                    class="border-bottom p-2 d-flex justify-content-between"
                  >
                    <span>Driver Lisesnsi</span>
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
                <a
                  class="btn d-flex align-items-center justify-content-center btn-primary mt-auto"
                  href="#"
                  style="column-gap: 0.4rem"
                  >Sewa Supir <i class="ri-whatsapp-line"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection