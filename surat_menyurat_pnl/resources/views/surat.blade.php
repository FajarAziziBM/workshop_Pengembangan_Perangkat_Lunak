@extends('layouts.user_type.auth')

@section('content')

<div class="nav-item d-flex align-self-end">
    <a href="#" target="_blank" class="btn btn-primary active mb-0 text-white" role="button" aria-pressed="true">
        <div class="col-auto">
            <i class="fa-solid fa-folder-plus"></i>
            Tambah
        </div>

    </a>
</div>

<br>
<div class="card">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All Users</h5>
                        </div>
                        <a href="#" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New User</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Photo
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Name
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Email
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        role
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Creation Date
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">1</p>
                                    </td>
                                    <td>
                                        <div>
                                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Admin</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">admin@softui.com</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Admin</p>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold">16/06/18</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                                            <i class="fas fa-user-edit text-secondary"></i>
                                        </a>
                                        <span>
                                            <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">2</p>
                                    </td>
                                    <td>
                                        <div>
                                            <img src="/assets/img/team-1.jpg" class="avatar avatar-sm me-3">
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Creator</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">creator@softui.com</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Creator</p>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold">05/05/20</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                                            <i class="fas fa-user-edit text-secondary"></i>
                                        </a>
                                        <span>
                                            <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">3</p>
                                    </td>
                                    <td>
                                        <div>
                                            <img src="/assets/img/team-3.jpg" class="avatar avatar-sm me-3">
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Member</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">member@softui.com</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Member</p>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold">23/06/20</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                                            <i class="fas fa-user-edit text-secondary"></i>
                                        </a>
                                        <span>
                                            <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">4</p>
                                    </td>
                                    <td>
                                        <div>
                                            <img src="/assets/img/team-4.jpg" class="avatar avatar-sm me-3">
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Peterson</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">peterson@softui.com</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Member</p>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold">26/10/17</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                                            <i class="fas fa-user-edit text-secondary"></i>
                                        </a>
                                        <span>
                                            <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">5</p>
                                    </td>
                                    <td>
                                        <div>
                                            <img src="/assets/img/marie.jpg" class="avatar avatar-sm me-3">
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Marie</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">marie@softui.com</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Creator</p>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold">23/01/21</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                                            <i class="fas fa-user-edit text-secondary"></i>
                                        </a>
                                        <span>
                                            <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>

<div class="card container-fluid">

    <main class="ct-docs-content-col" role="main">
        <div class="card-header pb-0 px-3">
            <h3>Datatable Basic example</h3>
        </div>

        <div class="table-responsive">
            <div class="dataTable-wrapper dataTable-loading no-footer sortable fixed-height fixed-columns">
                <div class="dataTable-top">
                    <div class="dataTable-dropdown"><label><select class="dataTable-selector">
                                <option value="5">5</option>
                                <option value="10" selected="">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="25">25</option>
                            </select> entries per page</label></div>
                </div>
                <div class="dataTable-container" style="height: 500.641px;">
                    <table class="table table-flush dataTable-table" id="datatable-basic">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" data-sortable="" style="width: 22.6549%;"><a href="#" class="dataTable-sorter">Name</a></th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" data-sortable="" style="width: 31.3577%;"><a href="#" class="dataTable-sorter">Position</a></th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" data-sortable="" style="width: 18.9251%;"><a href="#" class="dataTable-sorter">Office</a></th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" data-sortable="" style="width: 9.25534%;"><a href="#" class="dataTable-sorter">Age</a></th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" data-sortable="" style="width: 16.853%;"><a href="#" class="dataTable-sorter">Start date</a></th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" data-sortable="" style="width: 14.9191%;"><a href="#" class="dataTable-sorter">Salary</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-sm font-weight-normal">Tiger Nixon</td>
                                <td class="text-sm font-weight-normal">System Architect</td>
                                <td class="text-sm font-weight-normal">Edinburgh</td>
                                <td class="text-sm font-weight-normal">61</td>
                                <td class="text-sm font-weight-normal">2011/04/25</td>
                                <td class="text-sm font-weight-normal">$320,800</td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Garrett Winters</td>
                                <td class="text-sm font-weight-normal">Accountant</td>
                                <td class="text-sm font-weight-normal">Tokyo</td>
                                <td class="text-sm font-weight-normal">63</td>
                                <td class="text-sm font-weight-normal">2011/07/25</td>
                                <td class="text-sm font-weight-normal">$170,750</td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Ashton Cox</td>
                                <td class="text-sm font-weight-normal">Junior Technical Author</td>
                                <td class="text-sm font-weight-normal">San Francisco</td>
                                <td class="text-sm font-weight-normal">66</td>
                                <td class="text-sm font-weight-normal">2009/01/12</td>
                                <td class="text-sm font-weight-normal">$86,000</td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Cedric Kelly</td>
                                <td class="text-sm font-weight-normal">Senior Javascript Developer</td>
                                <td class="text-sm font-weight-normal">Edinburgh</td>
                                <td class="text-sm font-weight-normal">22</td>
                                <td class="text-sm font-weight-normal">2012/03/29</td>
                                <td class="text-sm font-weight-normal">$433,060</td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Airi Satou</td>
                                <td class="text-sm font-weight-normal">Accountant</td>
                                <td class="text-sm font-weight-normal">Tokyo</td>
                                <td class="text-sm font-weight-normal">33</td>
                                <td class="text-sm font-weight-normal">2008/11/28</td>
                                <td class="text-sm font-weight-normal">$162,700</td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Brielle Williamson</td>
                                <td class="text-sm font-weight-normal">Integration Specialist</td>
                                <td class="text-sm font-weight-normal">New York</td>
                                <td class="text-sm font-weight-normal">61</td>
                                <td class="text-sm font-weight-normal">2012/12/02</td>
                                <td class="text-sm font-weight-normal">$372,000</td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Herrod Chandler</td>
                                <td class="text-sm font-weight-normal">Sales Assistant</td>
                                <td class="text-sm font-weight-normal">San Francisco</td>
                                <td class="text-sm font-weight-normal">59</td>
                                <td class="text-sm font-weight-normal">2012/08/06</td>
                                <td class="text-sm font-weight-normal">$137,500</td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Rhona Davidson</td>
                                <td class="text-sm font-weight-normal">Integration Specialist</td>
                                <td class="text-sm font-weight-normal">Tokyo</td>
                                <td class="text-sm font-weight-normal">55</td>
                                <td class="text-sm font-weight-normal">2010/10/14</td>
                                <td class="text-sm font-weight-normal">$327,900</td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Colleen Hurst</td>
                                <td class="text-sm font-weight-normal">Javascript Developer</td>
                                <td class="text-sm font-weight-normal">San Francisco</td>
                                <td class="text-sm font-weight-normal">39</td>
                                <td class="text-sm font-weight-normal">2009/09/15</td>
                                <td class="text-sm font-weight-normal">$205,500</td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Sonya Frost</td>
                                <td class="text-sm font-weight-normal">Software Engineer</td>
                                <td class="text-sm font-weight-normal">Edinburgh</td>
                                <td class="text-sm font-weight-normal">23</td>
                                <td class="text-sm font-weight-normal">2008/12/13</td>
                                <td class="text-sm font-weight-normal">$103,600</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="dataTable-bottom">
                    <div class="dataTable-info">Showing 1 to 10 of 57 entries</div>
                    <nav class="dataTable-pagination">
                        <ul class="dataTable-pagination-list">
                            <li class="pager"><a href="#" data-page="1">‹</a></li>
                            <li class="active"><a href="#" data-page="1">1</a></li>
                            <li class=""><a href="#" data-page="2">2</a></li>
                            <li class=""><a href="#" data-page="3">3</a></li>
                            <li class=""><a href="#" data-page="4">4</a></li>
                            <li class=""><a href="#" data-page="5">5</a></li>
                            <li class=""><a href="#" data-page="6">6</a></li>
                            <li class="pager"><a href="#" data-page="2">›</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </main>
</div>


@endsection