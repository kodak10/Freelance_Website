@extends('entreprise.layouts.app')
@section('content')


<div class="dashboard_content_wrapper">

    <div class="dashboard dashboard_wrapper pr30 pr0-xl">

        @include('entreprise.layouts.sidebar')

        <div class="dashboard__main pl0-md">
            <div class="dashboard__content hover-bgc-color">
                <div class="row pb40">
                    <div class="col-lg-12">
                        @include('entreprise.layouts.sidebar-mobile')

                    </div>
                    <div class="col-lg-12">
                        <div class="dashboard_title_area">
                            <h2>Entreprise</h2>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center justify-content-between pb40">
                    <div class="col-xl-4">
                      <div class="dashboard_title_area">
                        <h2>Demandes non traitées</h2>
                      </div>
                    </div>
                    <div class="col-xl-4">
                      <div class="dashboard_search_meta">
                        <div class="search_area">
                          <input type="text" class="form-control bdrs4" placeholder="Rechercher une entreprise">
                          <label><span class="far fa-magnifying-glass"></span></label>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="ps-widget bgc-white bdrs4 p30 mb30 overflow-hidden position-relative">
                            <div class="packages_table table-responsive">
                                <table class="table-style3 table at-savesearch">
                                    <thead class="t-head">
                                        <tr>
                                            <th scope="col">N° Inscription</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="t-body">
                                        <tr>
                                            <th scope="row">
                                                <div>#99 <span class="ms-3">App Services</span></div>
                                            </th>
                                            <td class="vam">April 9, 2023</td>
                                            <td class="vam">$1.200</td>
                                            <td class="vam"><span class="pending-style style1">In Progress</span></td>
                                            <td class="vam">
                                                <a href="/entreprise/detail" class="table-action fz15 fw500 text-thm2" data-bs-toggle="tooltip" data-bs-placement="top" title="Plus de détail"><span class="flaticon-website me-2 vam"></span> Plus de détail</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div>#99 <span class="ms-3">App Services</span></div>
                                            </th>
                                            <td class="vam">April 9, 2023</td>
                                            <td class="vam">$1.200</td>
                                            <td class="vam"><span class="pending-style style2">Completed</span></td>
                                            <td class="vam">
                                                <a href="/entreprise/detail" class="table-action fz15 fw500 text-thm2" data-bs-toggle="tooltip" data-bs-placement="top" title="Plus de détail"><span class="flaticon-website me-2 vam"></span> Plus de détail</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="active">
                                                <div>#99 <span class="ms-3">App Services</span></div>
                                            </th>
                                            <td class="vam">April 9, 2023</td>
                                            <td class="vam">$1.200</td>
                                            <td class="vam"><span class="pending-style style2">Completed</span></td>
                                            <td class="vam">
                                                <a href="/entreprise/detail" class="table-action fz15 fw500 text-thm2" data-bs-toggle="tooltip" data-bs-placement="top" title="Plus de détail"><span class="flaticon-website me-2 vam"></span> Plus de détail</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div>#99 <span class="ms-3">App Services</span></div>
                                            </th>
                                            <td class="vam">April 9, 2023</td>
                                            <td class="vam">$1.200</td>
                                            <td class="vam"><span class="pending-style style3">Cancel</span></td>
                                            <td class="vam">
                                                <a href="/entreprise/detail" class="table-action fz15 fw500 text-thm2" data-bs-toggle="tooltip" data-bs-placement="top" title="Plus de détail"><span class="flaticon-website me-2 vam"></span> Plus de détail</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div>#99 <span class="ms-3">App Services</span></div>
                                            </th>
                                            <td class="vam">April 9, 2023</td>
                                            <td class="vam">$1.200</td>
                                            <td class="vam"><span class="pending-style style3">Cancel</span></td>
                                            <td class="vam">
                                                <a href="/entreprise/detail" class="table-action fz15 fw500 text-thm2" data-bs-toggle="tooltip" data-bs-placement="top" title="Plus de détail"><span class="flaticon-website me-2 vam"></span> Plus de détail</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="active">
                                                <div>#99 <span class="ms-3">App Services</span></div>
                                            </th>
                                            <td class="vam">April 9, 2023</td>
                                            <td class="vam">$1.200</td>
                                            <td class="vam"><span class="pending-style style2">Completed</span></td>
                                            <td class="vam">
                                                <a href="/entreprise/detail" class="table-action fz15 fw500 text-thm2" data-bs-toggle="tooltip" data-bs-placement="top" title="Plus de détail"><span class="flaticon-website me-2 vam"></span> Plus de détail</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div>#99 <span class="ms-3">App Services</span></div>
                                            </th>
                                            <td class="vam">April 9, 2023</td>
                                            <td class="vam">$1.200</td>
                                            <td class="vam"><span class="pending-style style2">Completed</span></td>
                                            <td class="vam">
                                                <a href="/entreprise/detail" class="table-action fz15 fw500 text-thm2" data-bs-toggle="tooltip" data-bs-placement="top" title="Plus de détail"><span class="flaticon-website me-2 vam"></span> Plus de détail</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div>#99 <span class="ms-3">App Services</span></div>
                                            </th>
                                            <td class="vam">April 9, 2023</td>
                                            <td class="vam">$1.200</td>
                                            <td class="vam"><span class="pending-style style1">In Progress</span></td>
                                            <td class="vam">
                                                <a href="/entreprise/detail" class="table-action fz15 fw500 text-thm2" data-bs-toggle="tooltip" data-bs-placement="top" title="Plus de détail"><span class="flaticon-website me-2 vam"></span> Plus de détail</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div>#99 <span class="ms-3">App Services</span></div>
                                            </th>
                                            <td class="vam">April 9, 2023</td>
                                            <td class="vam">$1.200</td>
                                            <td class="vam"><span class="pending-style style3">Cancel</span></td>
                                            <td class="vam">
                                                <a href="/entreprise/detail" class="table-action fz15 fw500 text-thm2" data-bs-toggle="tooltip" data-bs-placement="top" title="Plus de détail"><span class="flaticon-website me-2 vam"></span> Plus de détail</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="mbp_pagination text-center mt30">
                                    <ul class="page_navigation">
                                    <li class="page-item">
                                        <a class="page-link" href="#"> <span class="fas fa-angle-left"></span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">20</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><span class="fas fa-angle-right"></span></a>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('entreprise.layouts.footer')
            
        </div>
    </div>
</div>

@endsection