<div class="main-container">
    <x-app-layout>
        <div class="pd-ltr-20">
            <div class="card-box pd-20 mb-30">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <img src="/back/vendors/images/banner-img.png" alt="" />
                    </div>
                    <div class="col-md-8">
                        <h4 class="font-20 weight-500 mb-10 text-capitalize">
                            Welcome back
                            <div class="weight-600 font-30 text-blue">{{ Auth::user()->username }}!</div>
                        </h4>
                        <p class="font-16 max-width-600">
                            A dentist like you is the one who is behind so many smiles.
                            Thank you for giving others the confidence to smile with sparkles.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="xs-pd-20-10 pd-ltr-20">
            <div class="title pb-20">
                <h2 class="h3 mb-0">Overview</h2>
            </div>

            <div class="row pb-10">
                <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                    <div class="card-box height-100-p widget-style3">
                        <div class="d-flex flex-wrap">
                            <div class="widget-data">
                                <div class="weight-700 font-24 text-dark">75</div>
                                <div class="font-14 text-secondary weight-500">
                                    Appointment
                                </div>
                            </div>
                            <div class="widget-icon">
                                <div class="icon" data-color="#00eccf">
                                    <i class="icon-copy dw dw-calendar1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                    <div class="card-box height-100-p widget-style3">
                        <div class="d-flex flex-wrap">
                            <div class="widget-data">
                                <div class="weight-700 font-24 text-dark">124,551</div>
                                <div class="font-14 text-secondary weight-500">
                                    Total Patient
                                </div>
                            </div>
                            <div class="widget-icon">
                                <div class="icon" data-color="#ff5b5b">
                                    <span class="icon-copy ti-heart"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                    <div class="card-box height-100-p widget-style3">
                        <div class="d-flex flex-wrap">
                            <div class="widget-data">
                                <div class="weight-700 font-24 text-dark">400+</div>
                                <div class="font-14 text-secondary weight-500">
                                    Total Doctor
                                </div>
                            </div>
                            <div class="widget-icon">
                                <div class="icon">
                                    <i
                                        class="icon-copy fa fa-stethoscope"
                                        aria-hidden="true"
                                    ></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                    <div class="card-box height-100-p widget-style3">
                        <div class="d-flex flex-wrap">
                            <div class="widget-data">
                                <div class="weight-700 font-24 text-dark">$50,000</div>
                                <div class="font-14 text-secondary weight-500">Earning</div>
                            </div>
                            <div class="widget-icon">
                                <div class="icon" data-color="#09cc06">
                                    <i class="icon-copy fa fa-money" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-box pd-20-10 pd-ltr-20 recPatientDash" style="margin-left: 20px; margin-right: 20px;">
            <div class="h5 pd-20 mb-0">Recent Patient</div>
            <table class="data-table table nowrap">
                <thead>
                @foreach ($appointments as $appointments)
                    <tr>
                        <th>{{ $appointments -> full_Name}}</th>
                        <th>{{ $appointments -> gender}}</th>
                        <th>{{ $appointments -> assigned_doctor}}</th>
                        <th>{{ $appointments -> admit_date}}</th>
                        <th>{{ $appointments -> disease}}</th>
                        <th class="datatable-nosort">Actions</th>
                    </tr>
                @endforeach
                </thead>
                <!-- <tbody>
                    <tr>
                        <td class="table-plus">
                            <div class="name-avatar d-flex align-items-center">
                                <div class="avatar mr-2 flex-shrink-0">
                                    <img src="/back/vendors/images/photo4.jpg" class="border-radius-100 shadow" width="40" height="40" alt=""/>
                                </div>
                                <div class="txt">
                                    <div class="weight-600">Jennifer O. Oster</div>
                                </div>
                            </div>
                        </td>
                        <td>Female</td>
                        <td>Dr. Callie Reed</td>
                        <td>19 Oct 2020</td>
                        <td>
                            <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">Typhoid</span>
                        </td>
                        <td>
                            <div class="table-actions">
                                <a href="#" data-color="#265ed7"
                                    ><i class="icon-copy dw dw-edit2"></i
                                ></a>
                                <a href="#" data-color="#e95959"
                                    ><i class="icon-copy dw dw-delete-3"></i
                                ></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-plus">
                            <div class="name-avatar d-flex align-items-center">
                                <div class="avatar mr-2 flex-shrink-0">
                                    <img src="/back/vendors/images/photo5.jpg" class="border-radius-100 shadow" width="40" height="40" alt=""/>
                                </div>
                                <div class="txt">
                                    <div class="weight-600">Doris L. Larson</div>
                                </div>
                            </div>
                        </td>
                        <td>Male</td>
                        <td>Dr. Ren Delan</td>
                        <td>22 Jul 2020</td>
                        <td>
                            <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">Dengue</span>
                        </td>
                        <td>
                            <div class="table-actions">
                                <a href="#" data-color="#265ed7"
                                    ><i class="icon-copy dw dw-edit2"></i
                                ></a>
                                <a href="#" data-color="#e95959"
                                    ><i class="icon-copy dw dw-delete-3"></i
                                ></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div> -->

    </x-app-layout>
</div>


