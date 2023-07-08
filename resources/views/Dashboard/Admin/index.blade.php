@extends('Dashboard.layout.main')

@section('isi')
<!--**********************************
          Content body start
***********************************-->

<div class="col-xl-9 col-xxl-12">
    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-xl-6 col-sm-6">
                            <div class="card bg-primary text-white">
                                <div class="card-header border-0 flex-wrap">
                                    <div class="revenue-date">
                                        <span>revenue</span>
                                        <h4 class="text-white">$310.435</h4>
                                    </div>
                                    <div class="avatar-list avatar-list-stacked me-2">
                                        <img src="images/contacts/pic555.jpg" class="avatar rounded-circle" alt="">
                                        <img src="images/contacts/pic666.jpg" class="avatar rounded-circle" alt="">
                                        <span class="avatar rounded-circle bg-white">25+</span>
                                    </div>

                                </div>
                                <div class="card-body pb-0 custome-tooltip d-flex align-items-center">
                                    <div id="chartBar" class="chartBar"></div>
                                    <div>
                                        <svg width="20" height="20" viewbox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="10" cy="10" r="10" fill="white"></circle>
                                            <g clip-path="url(#clip0_3_443)">
                                                <path opacity="0.3"
                                                    d="M13.0641 7.54535C13.3245 7.285 13.3245 6.86289 13.0641 6.60254C12.8038 6.34219 12.3817 6.34219 12.1213 6.60254L6.46445 12.2594C6.2041 12.5197 6.2041 12.9419 6.46445 13.2022C6.7248 13.4626 7.14691 13.4626 7.40726 13.2022L13.0641 7.54535Z"
                                                    fill="black"></path>
                                                <path
                                                    d="M7.40729 7.26921C7.0391 7.26921 6.74062 6.97073 6.74062 6.60254C6.74062 6.23435 7.0391 5.93587 7.40729 5.93587H13.0641C13.4211 5.93587 13.7147 6.21699 13.7302 6.57358L13.9659 11.9947C13.9819 12.3626 13.6966 12.6737 13.3288 12.6897C12.961 12.7057 12.6498 12.4205 12.6338 12.0526L12.4258 7.26921H7.40729Z"
                                                    fill="black"></path>
                                            </g>
                                            <defs>
                                                <clippath id="clip0_3_443">
                                                    <rect width="16" height="16" fill="white"
                                                        transform="matrix(-1 0 0 -1 18 18)"></rect>
                                                </clippath>
                                            </defs>
                                        </svg>
                                        <span class="d-block font-w600">45%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6">
                            <div class="card bg-secondary text-white">
                                <div class="card-header border-0">
                                    <div class="revenue-date">
                                        <span class="text-black">Expenses</span>
                                        <h4 class="text-black">$920.035</h4>
                                    </div>
                                    <div class="avatar-list avatar-list-stacked me-2">
                                        <span class="avatar rounded-circle bg-white">
                                            <a href="#">
                                                <svg width="14" height="15" viewbox="0 0 14 15" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M5.83333 6.27083V1.60417C5.83333 0.959834 6.35567 0.4375 7 0.4375C7.64433 0.4375 8.16667 0.959834 8.16667 1.60417V6.27083H12.8333C13.4777 6.27083 14 6.79317 14 7.4375C14 8.08183 13.4777 8.60417 12.8333 8.60417H8.16667V13.2708C8.16667 13.9152 7.64433 14.4375 7 14.4375C6.35567 14.4375 5.83333 13.9152 5.83333 13.2708V8.60417H1.16667C0.522334 8.60417 0 8.08183 0 7.4375C0 6.79317 0.522334 6.27083 1.16667 6.27083H5.83333Z"
                                                        fill="#222B40"></path>
                                                </svg>
                                            </a>
                                        </span>
                                    </div>

                                </div>
                                <div class="card-body pb-0 custome-tooltip d-flex align-items-center">
                                    <div id="expensesChart" class="chartBar"></div>
                                    <div>
                                        <svg width="20" height="20" viewbox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="10" cy="10" r="10" fill="#222B40"></circle>
                                            <g clip-path="url(#clip0_3_473)">
                                                <path opacity="0.3"
                                                    d="M13.0641 7.54535C13.3245 7.285 13.3245 6.86289 13.0641 6.60254C12.8038 6.34219 12.3817 6.34219 12.1213 6.60254L6.46446 12.2594C6.20411 12.5197 6.20411 12.9419 6.46446 13.2022C6.72481 13.4626 7.14692 13.4626 7.40727 13.2022L13.0641 7.54535Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M7.40728 7.26921C7.03909 7.26921 6.74061 6.97073 6.74061 6.60254C6.74061 6.23435 7.03909 5.93587 7.40728 5.93587H13.0641C13.4211 5.93587 13.7147 6.21699 13.7302 6.57358L13.9659 11.9947C13.9819 12.3626 13.6966 12.6737 13.3288 12.6897C12.9609 12.7057 12.6498 12.4205 12.6338 12.0526L12.4258 7.26921H7.40728Z"
                                                    fill="white"></path>
                                            </g>
                                            <defs>
                                                <clippath id="clip0_3_473">
                                                    <rect width="16" height="16" fill="white"
                                                        transform="matrix(-1 0 0 -1 18 18)"></rect>
                                                </clippath>
                                            </defs>
                                        </svg>
                                        <span class="d-block font-w600 text-black">45%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6">
                            <div class="card">
                                <div class="card-body depostit-card">
                                    <div class="depostit-card-media d-flex justify-content-between style-1">
                                        <div>
                                            <h6>Tasks Not Finisheds</h6>
                                            <h3>20</h3>
                                        </div>
                                        <div class="icon-box bg-secondary">
                                            <svg width="24" height="24" viewbox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_3_566)">
                                                    <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M8 3V3.5C8 4.32843 8.67157 5 9.5 5H14.5C15.3284 5 16 4.32843 16 3.5V3H18C19.1046 3 20 3.89543 20 5V21C20 22.1046 19.1046 23 18 23H6C4.89543 23 4 22.1046 4 21V5C4 3.89543 4.89543 3 6 3H8Z"
                                                        fill="#222B40"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M10.875 15.75C10.6354 15.75 10.3958 15.6542 10.2042 15.4625L8.2875 13.5458C7.90417 13.1625 7.90417 12.5875 8.2875 12.2042C8.67083 11.8208 9.29375 11.8208 9.62917 12.2042L10.875 13.45L14.0375 10.2875C14.4208 9.90417 14.9958 9.90417 15.3792 10.2875C15.7625 10.6708 15.7625 11.2458 15.3792 11.6292L11.5458 15.4625C11.3542 15.6542 11.1146 15.75 10.875 15.75Z"
                                                        fill="#222B40"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M11 2C11 1.44772 11.4477 1 12 1C12.5523 1 13 1.44772 13 2H14.5C14.7761 2 15 2.22386 15 2.5V3.5C15 3.77614 14.7761 4 14.5 4H9.5C9.22386 4 9 3.77614 9 3.5V2.5C9 2.22386 9.22386 2 9.5 2H11Z"
                                                        fill="#222B40"></path>
                                                </g>
                                                <defs>
                                                    <clippath id="clip0_3_566">
                                                        <rect width="24" height="24" fill="white"></rect>
                                                    </clippath>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="progress-box mt-0">
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-0">Complete Task</p>
                                            <p class="mb-0">20/28</p>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-secondary"
                                                style="width:50%; height:5px; border-radius:4px;" role="progressbar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6">
                            <div class="card same-card">
                                <div class="card-body depostit-card p-0">
                                    <div class="depostit-card-media d-flex justify-content-between pb-0">
                                        <div>
                                            <h6>Total Deposit</h6>
                                            <h3>$1200.00</h3>
                                        </div>
                                        <div class="icon-box bg-primary">
                                            <svg width="12" height="20" viewbox="0 0 12 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.4642 13.7074C11.4759 12.1252 10.8504 10.8738 9.60279 9.99009C8.6392 9.30968 7.46984 8.95476 6.33882 8.6137C3.98274 7.89943 3.29927 7.52321 3.29927 6.3965C3.29927 5.14147 4.93028 4.69493 6.32655 4.69493C7.34341 4.69493 8.51331 5.01109 9.23985 5.47964L10.6802 3.24887C9.73069 2.6333 8.43112 2.21342 7.14783 2.0831V0H4.49076V2.22918C2.12884 2.74876 0.640949 4.29246 0.640949 6.3965C0.640949 7.87005 1.25327 9.03865 2.45745 9.86289C3.37331 10.4921 4.49028 10.83 5.56927 11.1572C7.88027 11.8557 8.81873 12.2813 8.80805 13.691L8.80799 13.7014C8.80799 14.8845 7.24005 15.3051 5.89676 15.3051C4.62786 15.3051 3.248 14.749 2.46582 13.9222L0.535522 15.7481C1.52607 16.7957 2.96523 17.5364 4.4907 17.8267V20.0001H7.14783V17.8735C9.7724 17.4978 11.4616 15.9177 11.4642 13.7074Z"
                                                    fill="#fff"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="NewExperience"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-6 col-xxl-12">
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive active-projects">
                <div class="tbl-caption">
                    <h4 class="heading mb-0">Active Projects</h4>
                </div>
                <table id="projects-tbl" class="table">
                    <thead>
                        <tr>
                            <th>Project Name</th>
                            <th>Project Lead</th>
                            <th>Progress</th>
                            <th>Assignee</th>
                            <th>Status</th>
                            <th>Due Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Batman</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <p class="mb-0 ms-2">Liam Risher</p>
                                </div>
                            </td>
                            <td class="pe-0">
                                <div class="tbl-progress-box">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary"
                                            style="width:53%; height:5px; border-radius:4px;" role="progressbar"></div>
                                    </div>
                                    <span class="text-primary">53%</span>
                                </div>
                            </td>
                            <td class="pe-0">
                                <div class="avatar-list avatar-list-stacked">
                                    <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle"
                                        alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle"
                                        alt="">
                                </div>
                            </td>
                            <td class="pe-0">
                                <span class="badge badge-primary light border-0">Inprogress</span>
                            </td>
                            <td>
                                <span>06 Sep 2021</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Bender Project</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="images/contacts/pic2.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <p class="mb-0 ms-2">Oliver Noah</p>
                                </div>
                            </td>
                            <td class="pe-0">
                                <div class="tbl-progress-box">
                                    <div class="progress">
                                        <div class="progress-bar bg-danger"
                                            style="width:30%; height:5px; border-radius:4px;" role="progressbar"></div>
                                    </div>
                                    <span class="text-danger">30%</span>
                                </div>
                            </td>
                            <td class="pe-0">
                                <div class="avatar-list avatar-list-stacked">
                                    <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle"
                                        alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle"
                                        alt="">
                                </div>
                            </td>
                            <td class="pe-0">
                                <span class="badge badge-danger light border-0">Pending</span>
                            </td>
                            <td>
                                <span>06 Sep 2021</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Canary</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="images/contacts/pic888.jpg" class="avatar avatar-md rounded-circle"
                                        alt="">
                                    <p class="mb-0 ms-2">Elijah James</p>
                                </div>
                            </td>
                            <td class="pe-0">
                                <div class="tbl-progress-box">
                                    <div class="progress">
                                        <div class="progress-bar bg-success"
                                            style="width:40%; height:5px; border-radius:4px;" role="progressbar"></div>
                                    </div>
                                    <span class="text-success">40%</span>
                                </div>
                            </td>
                            <td class="pe-0">
                                <div class="avatar-list avatar-list-stacked">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md  rounded-circle"
                                        alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle"
                                        alt="">
                                    <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md  rounded-circle"
                                        alt="">
                                </div>
                            </td>
                            <td class="pe-0">
                                <span class="badge badge-success light border-0">Completed</span>
                            </td>
                            <td>
                                <span>06 Sep 2021</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Casanova</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <p class="mb-0 ms-2">William Risher</p>
                                </div>
                            </td>
                            <td class="pe-0">
                                <div class="tbl-progress-box">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary"
                                            style="width:53%; height:5px; border-radius:4px;" role="progressbar"></div>
                                    </div>
                                    <span class="text-primary">53%</span>
                                </div>
                            </td>
                            <td class="pe-0">
                                <div class="avatar-list avatar-list-stacked">
                                    <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle"
                                        alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle"
                                        alt="">
                                </div>
                            </td>
                            <td class="pe-0">
                                <span class="badge badge-primary light border-0">Inprogress</span>
                            </td>
                            <td>
                                <span>06 Sep 2021</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Bigfish</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="images/contacts/pic777.jpg" class="avatar avatar-md rounded-circle"
                                        alt="">
                                    <p class="mb-0 ms-2">Donald Benjamin</p>
                                </div>
                            </td>
                            <td class="pe-0">
                                <div class="tbl-progress-box">
                                    <div class="progress">
                                        <div class="progress-bar bg-danger"
                                            style="width:30%; height:5px; border-radius:4px;" role="progressbar"></div>
                                    </div>
                                    <span class="text-danger">30%</span>
                                </div>
                            </td>
                            <td class="pe-0">
                                <div class="avatar-list avatar-list-stacked">
                                    <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic777.jpg" class="avatar avatar-md rounded-circle"
                                        alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle"
                                        alt="">
                                </div>
                            </td>
                            <td class="pe-0">
                                <span class="badge badge-danger light border-0">Inprogress</span>
                            </td>
                            <td>
                                <span>06 Sep 2021</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Matadors</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="images/contacts/pic888.jpg" class="avatar avatar-md rounded-circle"
                                        alt="">
                                    <p class="mb-0 ms-2">Liam Risher</p>
                                </div>
                            </td>
                            <td class="pe-0">
                                <div class="tbl-progress-box">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary"
                                            style="width:53%; height:5px; border-radius:4px;" role="progressbar"></div>
                                    </div>
                                    <span class="text-primary">53%</span>
                                </div>
                            </td>
                            <td class="pe-0">
                                <div class="avatar-list avatar-list-stacked">
                                    <img src="images/contacts/pic777.jpg" class="avatar avatar-md rounded-circle"
                                        alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle"
                                        alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle"
                                        alt="">
                                </div>
                            </td>
                            <td class="pe-0">
                                <span class="badge badge-primary light border-0">Inprogress</span>
                            </td>
                            <td>
                                <span>06 Sep 2021</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Mercury</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="images/contacts/pic2.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <p class="mb-0 ms-2">Oliver Noah</p>
                                </div>
                            </td>
                            <td class="pe-0">
                                <div class="tbl-progress-box">
                                    <div class="progress">
                                        <div class="progress-bar bg-danger"
                                            style="width:30%; height:5px; border-radius:4px;" role="progressbar"></div>
                                    </div>
                                    <span class="text-danger">30%</span>
                                </div>
                            </td>
                            <td class="pe-0">
                                <div class="avatar-list avatar-list-stacked">
                                    <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic777.jpg" class="avatar avatar-md rounded-circle"
                                        alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle"
                                        alt="">
                                </div>
                            </td>
                            <td class="pe-0">
                                <span class="badge badge-danger light border-0">Pending</span>
                            </td>
                            <td>
                                <span>06 Sep 2021</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Whistler</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="images/contacts/pic999.jpg" class="avatar avatar-md rounded-circle"
                                        alt="">
                                    <p class="mb-0 ms-2">Elijah James</p>
                                </div>
                            </td>
                            <td class="pe-0">
                                <div class="tbl-progress-box">
                                    <div class="progress">
                                        <div class="progress-bar bg-success"
                                            style="width:40%; height:5px; border-radius:4px;" role="progressbar"></div>
                                    </div>
                                    <span class="text-success">40%</span>
                                </div>
                            </td>
                            <td class="pe-0">
                                <div class="avatar-list avatar-list-stacked">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle"
                                        alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle"
                                        alt="">
                                    <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle"
                                        alt="">
                                </div>
                            </td>
                            <td class="pe-0">
                                <span class="badge badge-success light border-0">Completed</span>
                            </td>
                            <td>
                                <span>06 Sep 2021</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Time Projects</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="images/contacts/pic2.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <p class="mb-0 ms-2">Lucas</p>
                                </div>
                            </td>
                            <td class="pe-0">
                                <div class="tbl-progress-box">
                                    <div class="progress">
                                        <div class="progress-bar bg-danger"
                                            style="width:33%; height:5px; border-radius:4px;" role="progressbar"></div>
                                    </div>
                                    <span class="text-primary">33%</span>
                                </div>
                            </td>
                            <td class="pe-0">
                                <div class="avatar-list avatar-list-stacked">
                                    <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle"
                                        alt="">
                                    <img src="images/contacts/pic999.jpg" class="avatar avatar-md rounded-circle"
                                        alt="">
                                </div>
                            </td>
                            <td class="pe-0">
                                <span class="badge badge-primary light border-0">Inprogress</span>
                            </td>
                            <td>
                                <span>06 Sep 2021</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Fast Ball</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <p class="mb-0 ms-2">William Risher</p>
                                </div>
                            </td>
                            <td class="pe-0">
                                <div class="tbl-progress-box">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary"
                                            style="width:53%; height:5px; border-radius:4px;" role="progressbar"></div>
                                    </div>
                                    <span class="text-primary">53%</span>
                                </div>
                            </td>
                            <td class="pe-0">
                                <div class="avatar-list avatar-list-stacked">
                                    <img src="images/contacts/pic1.jpg" class="avatar avatar-md  rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle"
                                        alt="">
                                    <img src="images/contacts/pic999.jpg" class="avatar avatar-md rounded-circle"
                                        alt="">
                                </div>
                            </td>
                            <td class="pe-0">
                                <span class="badge badge-primary light border-0">Inprogress</span>
                            </td>
                            <td>
                                <span>06 Sep 2021</span>
                            </td>
                        </tr>

                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
<!--**********************************
        Content body end
***********************************-->
@endsection