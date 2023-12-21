@extends('admin.includes.app')
@section('title', 'Dashboard')
@section('content')


<div class="content">
    <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
      <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
        data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse"
        aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
            class="toggle-line"></span></span></button>
      <a class="navbar-brand me-1 me-sm-3" href="index.html">
        <div class="d-flex align-items-center"><img class="me-2"
            src="{{ asset('admin-assets/img/icons/spot-illustrations/falcon.png') }}" alt="" width="40"><span
            class="font-sans-serif">falcon</span></div>
      </a>
      <ul class="navbar-nav align-items-center d-none d-lg-block">
        <li class="nav-item">
          <div class="search-box" data-list='{"valueNames":["title"]}'>
            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                class="form-control search-input fuzzy-search" type="search" placeholder="Search..."
                aria-label="Search">
              <span class="fas fa-search search-box-icon"></span>
            </form>
            <div class="btn-close-falcon-container position-absolute end-0 top-50 translate-middle shadow-none"
              data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0"
                aria-label="Close"></button></div>
            <div class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100">
              <div class="scrollbar list py-3" style="max-height: 24rem;">
                <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs--2 pt-0 pb-2">Recently Browsed</h6><a
                  class="dropdown-item fs--1 px-x1 py-1 hover-primary" href="app/events/event-detail.html">
                  <div class="d-flex align-items-center">
                    <span class="fas fa-circle me-2 text-300 fs--2"></span>
                    <div class="fw-normal title">Pages <span class="fas fa-chevron-right mx-1 text-500 fs--2"
                        data-fa-transform="shrink-2"></span> Events</div>
                  </div>
                </a>
                <a class="dropdown-item fs--1 px-x1 py-1 hover-primary" href="app/e-commerce/customers.html">
                  <div class="d-flex align-items-center">
                    <span class="fas fa-circle me-2 text-300 fs--2"></span>
                    <div class="fw-normal title">E-commerce <span class="fas fa-chevron-right mx-1 text-500 fs--2"
                        data-fa-transform="shrink-2"></span> Customers</div>
                  </div>
                </a>
                <hr class="text-200 dark__text-900">
                <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs--2 pt-0 pb-2">Suggested Filter</h6><a
                  class="dropdown-item px-x1 py-1 fs-0" href="app/e-commerce/customers.html">
                  <div class="d-flex align-items-center"><span
                      class="badge fw-medium text-decoration-none me-2 badge-soft-warning">customers:</span>
                    <div class="flex-1 fs--1 title">All customers list</div>
                  </div>
                </a>
                <a class="dropdown-item px-x1 py-1 fs-0" href="app/events/event-detail.html">
                  <div class="d-flex align-items-center"><span
                      class="badge fw-medium text-decoration-none me-2 badge-soft-success">events:</span>
                    <div class="flex-1 fs--1 title">Latest events in current month</div>
                  </div>
                </a>
                <a class="dropdown-item px-x1 py-1 fs-0" href="app/e-commerce/product/product-grid.html">
                  <div class="d-flex align-items-center"><span
                      class="badge fw-medium text-decoration-none me-2 badge-soft-info">products:</span>
                    <div class="flex-1 fs--1 title">Most popular products</div>
                  </div>
                </a>
                <hr class="text-200 dark__text-900">
                <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs--2 pt-0 pb-2">Files</h6><a
                  class="dropdown-item px-x1 py-2" href="#!">
                  <div class="d-flex align-items-center">
                    <div class="file-thumbnail me-2"><img class="border h-100 w-100 fit-cover rounded-3"
                        src="assets/img/products/3-thumb.png" alt=""></div>
                    <div class="flex-1">
                      <h6 class="mb-0 title">iPhone</h6>
                      <p class="fs--2 mb-0 d-flex"><span class="fw-semi-bold">Antony</span><span
                          class="fw-medium text-600 ms-2">27 Sep at 10:30 AM</span></p>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item px-x1 py-2" href="#!">
                  <div class="d-flex align-items-center">
                    <div class="file-thumbnail me-2"><img class="img-fluid" src="assets/img/icons/zip.png"
                        alt=""></div>
                    <div class="flex-1">
                      <h6 class="mb-0 title">Falcon v1.8.2</h6>
                      <p class="fs--2 mb-0 d-flex"><span class="fw-semi-bold">John</span><span
                          class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span></p>
                    </div>
                  </div>
                </a>
                <hr class="text-200 dark__text-900">
                <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs--2 pt-0 pb-2">Members</h6><a
                  class="dropdown-item px-x1 py-2" href="pages/user/profile.html">
                  <div class="d-flex align-items-center">
                    <div class="avatar avatar-l status-online me-2">
                      <img class="rounded-circle" src="assets/img/team/1.jpg" alt="">
                    </div>
                    <div class="flex-1">
                      <h6 class="mb-0 title">Anna Karinina</h6>
                      <p class="fs--2 mb-0 d-flex">Technext Limited</p>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item px-x1 py-2" href="pages/user/profile.html">
                  <div class="d-flex align-items-center">
                    <div class="avatar avatar-l me-2">
                      <img class="rounded-circle" src="assets/img/team/2.jpg" alt="">
                    </div>
                    <div class="flex-1">
                      <h6 class="mb-0 title">Antony Hopkins</h6>
                      <p class="fs--2 mb-0 d-flex">Brain Trust</p>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item px-x1 py-2" href="pages/user/profile.html">
                  <div class="d-flex align-items-center">
                    <div class="avatar avatar-l me-2">
                      <img class="rounded-circle" src="assets/img/team/3.jpg" alt="">
                    </div>
                    <div class="flex-1">
                      <h6 class="mb-0 title">Emma Watson</h6>
                      <p class="fs--2 mb-0 d-flex">Google</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="text-center mt-n3">
                <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
              </div>
            </div>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
        <li class="nav-item">
          <div class="theme-control-toggle fa-icon-wait px-2"><input
              class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox"
              data-theme-control="theme" value="dark"><label
              class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
              data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to light theme"><span
                class="fas fa-sun fs-0"></span></label><label
              class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
              data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to dark theme"><span
                class="fas fa-moon fs-0"></span></label></div>
        </li>
        <li class="nav-item d-none d-sm-block">
          <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait"
            href="app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart"
              data-fa-transform="shrink-7" style="font-size: 33px;"></span><span
              class="notification-indicator-number">1</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
            id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell"
              data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
          <div
            class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg"
            aria-labelledby="navbarDropdownNotification">
            <div class="card card-notification shadow-none">
              <div class="card-header">
                <div class="row justify-content-between align-items-center">
                  <div class="col-auto">
                    <h6 class="card-header-title mb-0">Notifications</h6>
                  </div>
                  <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as read</a>
                  </div>
                </div>
              </div>
              <div class="scrollbar-overlay" style="max-height:19rem">
                <div class="list-group list-group-flush fw-normal fs--1">
                  <div class="list-group-title border-bottom">NEW</div>
                  <div class="list-group-item">
                    <a class="notification notification-flush notification-unread" href="#!">
                      <div class="notification-avatar">
                        <div class="avatar avatar-2xl me-3">
                          <img class="rounded-circle" src="assets/img/team/1-thumb.png" alt="">
                        </div>
                      </div>
                      <div class="notification-body">
                        <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                        <span class="notification-time"><span class="me-2" role="img"
                            aria-label="Emoji">💬</span>Just now</span>
                      </div>
                    </a>
                  </div>
                  <div class="list-group-item">
                    <a class="notification notification-flush notification-unread" href="#!">
                      <div class="notification-avatar">
                        <div class="avatar avatar-2xl me-3">
                          <div class="avatar-name rounded-circle"><span>AB</span></div>
                        </div>
                      </div>
                      <div class="notification-body">
                        <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong>
                          status</p>
                        <span class="notification-time"><span
                            class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                      </div>
                    </a>
                  </div>
                  <div class="list-group-title border-bottom">EARLIER</div>
                  <div class="list-group-item">
                    <a class="notification notification-flush" href="#!">
                      <div class="notification-avatar">
                        <div class="avatar avatar-2xl me-3">
                          <img class="rounded-circle" src="assets/img/icons/weather-sm.jpg" alt="">
                        </div>
                      </div>
                      <div class="notification-body">
                        <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's
                          weather.</p>
                        <span class="notification-time"><span class="me-2" role="img"
                            aria-label="Emoji">🌤️</span>1d</span>
                      </div>
                    </a>
                  </div>
                  <div class="list-group-item">
                    <a class="border-bottom-0 notification-unread  notification notification-flush" href="#!">
                      <div class="notification-avatar">
                        <div class="avatar avatar-xl me-3">
                          <img class="rounded-circle" src="assets/img/logos/oxford.png" alt="">
                        </div>
                      </div>
                      <div class="notification-body">
                        <p class="mb-1"><strong>University of Oxford</strong> created an event : "Causal Inference
                          Hilary 2019"</p>
                        <span class="notification-time"><span class="me-2" role="img"
                            aria-label="Emoji">✌️</span>1w</span>
                      </div>
                    </a>
                  </div>
                  <div class="list-group-item">
                    <a class="border-bottom-0 notification notification-flush" href="#!">
                      <div class="notification-avatar">
                        <div class="avatar avatar-xl me-3">
                          <img class="rounded-circle" src="assets/img/team/10.jpg" alt="">
                        </div>
                      </div>
                      <div class="notification-body">
                        <p class="mb-1"><strong>James Cameron</strong> invited to join the group: United Nations
                          International Children's Fund</p>
                        <span class="notification-time"><span class="me-2" role="img"
                            aria-label="Emoji">🙋‍</span>2d</span>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-footer text-center border-top"><a class="card-link d-block"
                  href="app/social/notifications.html">View all</a></div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown px-1">
          <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button"
            data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="43" viewbox="0 0 16 16"
              fill="none">
              <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
              <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
              <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
              <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
              <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
              <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
              <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
              <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
              <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
            </svg></a>
          <div
            class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg"
            aria-labelledby="navbarDropdownMenu">
            <div class="card shadow-none">
              <div class="scrollbar-overlay nine-dots-dropdown">
                <div class="card-body px-3">
                  <div class="row text-center gx-0 gy-0">
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                        href="pages/user/profile.html" target="_blank">
                        <div class="avatar avatar-2xl"> <img class="rounded-circle" src="assets/img/team/3.jpg"
                            alt=""></div>
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2">Account</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                        href="https://themewagon.com/" target="_blank"><img class="rounded"
                          src="assets/img/nav-icons/themewagon.png" alt="" width="40" height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Themewagon</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                        href="https://mailbluster.com/" target="_blank"><img class="rounded"
                          src="assets/img/nav-icons/mailbluster.png" alt="" width="40" height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Mailbluster</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!"
                        target="_blank"><img class="rounded" src="assets/img/nav-icons/google.png" alt=""
                          width="40" height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Google</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!"
                        target="_blank"><img class="rounded" src="assets/img/nav-icons/spotify.png" alt=""
                          width="40" height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Spotify</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!"
                        target="_blank"><img class="rounded" src="assets/img/nav-icons/steam.png" alt=""
                          width="40" height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Steam</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!"
                        target="_blank"><img class="rounded" src="assets/img/nav-icons/github-light.png" alt=""
                          width="40" height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Github</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!"
                        target="_blank"><img class="rounded" src="assets/img/nav-icons/discord.png" alt=""
                          width="40" height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Discord</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!"
                        target="_blank"><img class="rounded" src="assets/img/nav-icons/xbox.png" alt=""
                          width="40" height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">xbox</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!"
                        target="_blank"><img class="rounded" src="assets/img/nav-icons/trello.png" alt=""
                          width="40" height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Kanban</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!"
                        target="_blank"><img class="rounded" src="assets/img/nav-icons/hp.png" alt="" width="40"
                          height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Hp</p>
                      </a></div>
                    <div class="col-12">
                      <hr class="my-3 mx-n3 bg-200">
                    </div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!"
                        target="_blank"><img class="rounded" src="assets/img/nav-icons/linkedin.png" alt=""
                          width="40" height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Linkedin</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!"
                        target="_blank"><img class="rounded" src="assets/img/nav-icons/twitter.png" alt=""
                          width="40" height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Twitter</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!"
                        target="_blank"><img class="rounded" src="assets/img/nav-icons/facebook.png" alt=""
                          width="40" height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Facebook</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!"
                        target="_blank"><img class="rounded" src="assets/img/nav-icons/instagram.png" alt=""
                          width="40" height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Instagram</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!"
                        target="_blank"><img class="rounded" src="assets/img/nav-icons/pinterest.png" alt=""
                          width="40" height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Pinterest</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!"
                        target="_blank"><img class="rounded" src="assets/img/nav-icons/slack.png" alt=""
                          width="40" height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Slack</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!"
                        target="_blank"><img class="rounded" src="assets/img/nav-icons/deviantart.png" alt=""
                          width="40" height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Deviantart</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                        href="app/events/event-detail.html" target="_blank">
                        <div class="avatar avatar-2xl">
                          <div class="avatar-name rounded-circle bg-soft-primary text-primary"><span
                              class="fs-2">E</span></div>
                        </div>
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2">Events</p>
                      </a></div>
                    <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4" href="#!">Show more</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="avatar avatar-xl">
              <img class="rounded-circle" src="assets/img/team/3-thumb.png" alt="">
            </div>
          </a>
          <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
            aria-labelledby="navbarDropdownUser">
            <div class="bg-white dark__bg-1000 rounded-2 py-2">
              <a class="dropdown-item fw-bold text-warning" href="#!"><span
                  class="fas fa-crown me-1"></span><span>Go Pro</span></a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#!">Set status</a>
              <a class="dropdown-item" href="pages/user/profile.html">Profile &amp; account</a>
              <a class="dropdown-item" href="#!">Feedback</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="pages/user/settings.html">Settings</a>
              <a class="dropdown-item" href="pages/authentication/card/logout.html">Logout</a>
            </div>
          </div>
        </li>
      </ul>
    </nav>
    <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;"
      data-move-target="#navbarVerticalNav" data-navbar-top="combo">
      <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
        data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse"
        aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
            class="toggle-line"></span></span></button>
      <a class="navbar-brand me-1 me-sm-3" href="index.html">
        <div class="d-flex align-items-center"><img class="me-2"
            src="assets/img/icons/spot-illustrations/falcon.png" alt="" width="40"><span
            class="font-sans-serif">falcon</span></div>
      </a>
      <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
        <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Dashboard</a>
            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="dashboards">
              <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium"
                  href="index.html">Default</a><a class="dropdown-item link-600 fw-medium"
                  href="analytics.html">Analytics</a><a class="dropdown-item link-600 fw-medium"
                  href="crm.html">CRM</a><a class="dropdown-item link-600 fw-medium" href="e-commerce.html">E
                  commerce</a><a class="dropdown-item link-600 fw-medium" href="lms.html">LMS<span
                    class="badge rounded-pill ms-2 badge-soft-success">New</span></a><a
                  class="dropdown-item link-600 fw-medium" href="project-management.html">Management</a><a
                  class="dropdown-item link-600 fw-medium" href="saas.html">SaaS</a><a
                  class="dropdown-item link-600 fw-medium" href="support-desk.html">Support desk<span
                    class="badge rounded-pill ms-2 badge-soft-success">New</span></a></div>
            </div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="apps">App</a>
            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="apps">
              <div class="card navbar-card-app shadow-none dark__bg-1000">
                <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown"
                    src="assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="">
                  <div class="row">
                    <div class="col-6 col-md-4">
                      <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium"
                          href="app/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium"
                          href="app/chat.html">Chat</a><a class="nav-link py-1 link-600 fw-medium"
                          href="app/kanban.html">Kanban</a>
                        <p class="nav-link text-700 mb-0 fw-bold">Social</p><a
                          class="nav-link py-1 link-600 fw-medium" href="app/social/feed.html">Feed</a><a
                          class="nav-link py-1 link-600 fw-medium" href="app/social/activity-log.html">Activity
                          log</a><a class="nav-link py-1 link-600 fw-medium"
                          href="app/social/notifications.html">Notifications</a><a
                          class="nav-link py-1 link-600 fw-medium" href="app/social/followers.html">Followers</a>
                        <p class="nav-link text-700 mb-0 fw-bold">Support Desk</p><a
                          class="nav-link py-1 link-600 fw-medium" href="app/support-desk/table-view.html">Table
                          view</a><a class="nav-link py-1 link-600 fw-medium"
                          href="app/support-desk/card-view.html">Card view</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="app/support-desk/contacts.html">Contacts</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="app/support-desk/contact-details.html">Contact details</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="app/support-desk/tickets-preview.html">Tickets preview</a><a
                          class="nav-link py-1 link-600 fw-medium" href="app/support-desk/quick-links.html">Quick
                          links</a><a class="nav-link py-1 link-600 fw-medium"
                          href="app/support-desk/reports.html">Reports</a>
                      </div>
                    </div>
                    <div class="col-6 col-md-4">
                      <div class="nav flex-column">
                        <p class="nav-link text-700 mb-0 fw-bold">E-Learning</p><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="app/e-learning/course/course-list.html">Course list</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="app/e-learning/course/course-grid.html">Course grid</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="app/e-learning/course/course-details.html">Course details</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="app/e-learning/course/create-a-course.html">Create a course</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="app/e-learning/student-overview.html">Student overview</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="app/e-learning/trainer-profile.html">Trainer profile</a>
                        <p class="nav-link text-700 mb-0 fw-bold">Events</p><a
                          class="nav-link py-1 link-600 fw-medium" href="app/events/create-an-event.html">Create
                          an event</a><a class="nav-link py-1 link-600 fw-medium"
                          href="app/events/event-detail.html">Event detail</a><a
                          class="nav-link py-1 link-600 fw-medium" href="app/events/event-list.html">Event
                          list</a>
                        <p class="nav-link text-700 mb-0 fw-bold">Email</p><a
                          class="nav-link py-1 link-600 fw-medium" href="app/email/inbox.html">Inbox</a><a
                          class="nav-link py-1 link-600 fw-medium" href="app/email/email-detail.html">Email
                          detail</a><a class="nav-link py-1 link-600 fw-medium"
                          href="app/email/compose.html">Compose</a>
                      </div>
                    </div>
                    <div class="col-6 col-md-4">
                      <div class="nav flex-column">
                        <p class="nav-link text-700 mb-0 fw-bold">E-Commerce</p><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="app/e-commerce/product/product-list.html">Product list</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="app/e-commerce/product/product-grid.html">Product grid</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="app/e-commerce/product/product-details.html">Product details</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="app/e-commerce/orders/order-list.html">Order list</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="app/e-commerce/orders/order-details.html">Order details</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="app/e-commerce/customers.html">Customers</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="app/e-commerce/customer-details.html">Customer details</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="app/e-commerce/shopping-cart.html">Shopping cart</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="app/e-commerce/checkout.html">Checkout</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="app/e-commerce/billing.html">Billing</a><a
                          class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/invoice.html">Invoice</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="pagess">Pages</a>
            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="pagess">
              <div class="card navbar-card-pages shadow-none dark__bg-1000">
                <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown"
                    src="assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="">
                  <div class="row">
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column">
                        <p class="nav-link text-700 mb-0 fw-bold">Simple Auth</p><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="pages/authentication/simple/login.html">Login</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="pages/authentication/simple/logout.html">Logout</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="pages/authentication/simple/register.html">Register</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="pages/authentication/simple/forgot-password.html">Forgot password</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="pages/authentication/simple/confirm-mail.html">Confirm mail</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="pages/authentication/simple/reset-password.html">Reset password</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="pages/authentication/simple/lock-screen.html">Lock screen</a>
                      </div>
                    </div>
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column">
                        <p class="nav-link text-700 mb-0 fw-bold">Card Auth</p><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="pages/authentication/card/login.html">Login</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="pages/authentication/card/logout.html">Logout</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="pages/authentication/card/register.html">Register</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="pages/authentication/card/forgot-password.html">Forgot password</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="pages/authentication/card/confirm-mail.html">Confirm mail</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="pages/authentication/card/reset-password.html">Reset password</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="pages/authentication/card/lock-screen.html">Lock screen</a>
                      </div>
                    </div>
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column">
                        <p class="nav-link text-700 mb-0 fw-bold">Split Auth</p><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="pages/authentication/split/login.html">Login</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="pages/authentication/split/logout.html">Logout</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="pages/authentication/split/register.html">Register</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="pages/authentication/split/forgot-password.html">Forgot password</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="pages/authentication/split/confirm-mail.html">Confirm mail</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="pages/authentication/split/reset-password.html">Reset password</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="pages/authentication/split/lock-screen.html">Lock screen</a>
                      </div>
                    </div>
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column">
                        <p class="nav-link text-700 mb-0 fw-bold">Layouts</p><a
                          class="nav-link py-1 link-600 fw-medium" href="demo/navbar-vertical.html">Navbar
                          vertical</a><a class="nav-link py-1 link-600 fw-medium" href="demo/navbar-top.html">Top
                          nav</a><a class="nav-link py-1 link-600 fw-medium"
                          href="demo/navbar-double-top.html">Double top<span
                            class="badge rounded-pill ms-2 badge-soft-success">New</span></a><a
                          class="nav-link py-1 link-600 fw-medium" href="demo/combo-nav.html">Combo nav</a>
                        <p class="nav-link text-700 mb-0 fw-bold">Others</p><a
                          class="nav-link py-1 link-600 fw-medium" href="pages/starter.html">Starter</a><a
                          class="nav-link py-1 link-600 fw-medium" href="pages/landing.html">Landing</a>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column">
                        <p class="nav-link text-700 mb-0 fw-bold">User</p><a
                          class="nav-link py-1 link-600 fw-medium" href="pages/user/profile.html">Profile</a><a
                          class="nav-link py-1 link-600 fw-medium" href="pages/user/settings.html">Settings</a>
                      </div>
                    </div>
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column">
                        <p class="nav-link text-700 mb-0 fw-bold">Pricing</p><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="pages/pricing/pricing-default.html">Pricing default</a><a
                          class="nav-link py-1 link-600 fw-medium" href="pages/pricing/pricing-alt.html">Pricing
                          alt</a>
                      </div>
                    </div>
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column">
                        <p class="nav-link text-700 mb-0 fw-bold">Errors</p><a
                          class="nav-link py-1 link-600 fw-medium" href="pages/errors/404.html">404</a><a
                          class="nav-link py-1 link-600 fw-medium" href="pages/errors/500.html">500</a>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column">
                        <p class="nav-link text-700 mb-0 fw-bold">Miscellaneous</p><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="pages/miscellaneous/associations.html">Associations</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="pages/miscellaneous/invite-people.html">Invite people</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="pages/miscellaneous/privacy-policy.html">Privacy policy</a>
                      </div>
                    </div>
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column">
                        <p class="nav-link text-700 mb-0 fw-bold">FAQ</p><a class="nav-link py-1 link-600 fw-medium"
                          href="pages/faq/faq-basic.html">Faq basic</a><a
                          class="nav-link py-1 link-600 fw-medium" href="pages/faq/faq-alt.html">Faq alt</a><a
                          class="nav-link py-1 link-600 fw-medium" href="pages/faq/faq-accordion.html">Faq
                          accordion</a>
                      </div>
                    </div>
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column">
                        <p class="nav-link text-700 mb-0 fw-bold">Other Auth</p><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="pages/authentication/wizard.html">Wizard</a><a
                          class="nav-link py-1 link-600 fw-medium" href="index.htm#authentication-modal"
                          data-bs-toggle="modal">Modal</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="moduless">Modules</a>
            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="moduless">
              <div class="card navbar-card-components shadow-none dark__bg-1000">
                <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown"
                    src="assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="">
                  <div class="row">
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column">
                        <p class="nav-link text-700 mb-0 fw-bold">Components</p><a
                          class="nav-link py-1 link-600 fw-medium" href="modules/maps/google-map.html">Google
                          map</a><a class="nav-link py-1 link-600 fw-medium"
                          href="modules/maps/leaflet-map.html">Leaflet map</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/accordion.html">Accordion</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/alerts.html">Alerts</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/anchor.html">Anchor</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/animated-icons.html">Animated icons</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/background.html">Background</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/badges.html">Badges</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/bottom-bar.html">Bottom bar<span
                            class="badge rounded-pill ms-2 badge-soft-success">New</span></a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/breadcrumbs.html">Breadcrumbs</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/buttons.html">Buttons</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/calendar.html">Calendar</a>
                      </div>
                    </div>
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column mt-md-4 pt-md-1"><a class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/cards.html">Cards</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/carousel/bootstrap.html">Bootstrap carousel</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/carousel/swiper.html">Swiper</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/collapse.html">Collapse</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/cookie-notice.html">Cookie notice</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/countup.html">Countup</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/draggable.html">Draggable</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/dropdowns.html">Dropdowns</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/jquery-components.html">Jquery<span
                            class="badge rounded-pill ms-2 badge-soft-success">New</span></a><a
                          class="nav-link py-1 link-600 fw-medium" href="modules/components/list-group.html">List
                          group</a><a class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/modals.html">Modals</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/navs-and-tabs/navs.html">Navs</a></div>
                    </div>
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/navs-and-tabs/navbar.html">Navbar</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/navs-and-tabs/vertical-navbar.html">Navbar vertical</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/navs-and-tabs/top-navbar.html">Top nav</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/navs-and-tabs/double-top-navbar.html">Double top<span
                            class="badge rounded-pill ms-2 badge-soft-success">New</span></a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/navs-and-tabs/combo-navbar.html">Combo nav</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/navs-and-tabs/tabs.html">Tabs</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/offcanvas.html">Offcanvas</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/pictures/avatar.html">Avatar</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/pictures/images.html">Images</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/pictures/figures.html">Figures</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/pictures/hoverbox.html">Hoverbox</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/pictures/lightbox.html">Lightbox</a></div>
                    </div>
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/progress-bar.html">Progress bar</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/placeholder.html">Placeholder</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/pagination.html">Pagination</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/popovers.html">Popovers</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/scrollspy.html">Scrollspy</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/search.html">Search</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/spinners.html">Spinners</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/timeline.html">Timeline</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/toasts.html">Toasts</a></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column">
                        <p class="nav-link text-700 mb-0 fw-bold">Forms</p><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/forms/basic/form-control.html">Form control</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/forms/basic/input-group.html">Input group</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/forms/basic/select.html">Select</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/forms/basic/checks.html">Checks</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/forms/basic/range.html">Range</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/forms/basic/layout.html">Layout</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/forms/advance/advance-select.html">Advance select</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/forms/advance/date-picker.html">Date picker</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/forms/advance/editor.html">Editor</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/forms/advance/emoji-button.html">Emoji button</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/forms/advance/file-uploader.html">File uploader</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/forms/advance/rating.html">Rating</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/forms/floating-labels.html">Floating labels</a><a
                          class="nav-link py-1 link-600 fw-medium" href="modules/forms/wizard.html">Wizard</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/forms/validation.html">Validation</a>
                      </div>
                    </div>
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column">
                        <p class="nav-link text-700 mb-0 fw-bold">Tables</p><a
                          class="nav-link py-1 link-600 fw-medium" href="modules/tables/basic-tables.html">Basic
                          tables</a><a class="nav-link py-1 link-600 fw-medium"
                          href="modules/tables/advance-tables.html">Advance tables</a><a
                          class="nav-link py-1 link-600 fw-medium" href="modules/tables/bulk-select.html">Bulk
                          select</a>
                        <p class="nav-link text-700 mb-0 fw-bold">Charts</p><a
                          class="nav-link py-1 link-600 fw-medium" href="modules/charts/chartjs.html">Chartjs</a>
                        <p class="nav-link text-700 mb-0 fw-bold">ECharts</p><a
                          class="nav-link py-1 link-600 fw-medium" href="modules/charts/d3js.html">D3js<span
                            class="badge rounded-pill ms-2 badge-soft-success">New</span></a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/charts/echarts/line-charts.html">Line charts</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/charts/echarts/bar-charts.html">Bar charts</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/charts/echarts/candlestick-charts.html">Candlestick charts</a><a
                          class="nav-link py-1 link-600 fw-medium" href="modules/charts/echarts/geo-map.html">Geo
                          map</a><a class="nav-link py-1 link-600 fw-medium"
                          href="modules/charts/echarts/scatter-charts.html">Scatter charts</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/charts/echarts/pie-charts.html">Pie charts</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/charts/echarts/gauge-charts.html">Gauge charts</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/charts/echarts/radar-charts.html">Radar charts</a>
                      </div>
                    </div>
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column">
                        <p class="nav-link text-700 mb-0 fw-bold">Utilities</p><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/tooltips.html">Tooltips</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/treeview.html">Treeview</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/typed-text.html">Typed text</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/videos/embed.html">Embed</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/components/videos/plyr.html">Plyr</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/utilities/borders.html">Borders</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/utilities/clearfix.html">Clearfix</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/utilities/colors.html">Colors</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/utilities/colored-links.html">Colored links</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/utilities/display.html">Display</a><a
                          class="nav-link py-1 link-600 fw-medium" href="modules/utilities/flex.html">Flex</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/utilities/float.html">Float</a><a
                          class="nav-link py-1 link-600 fw-medium" href="modules/utilities/grid.html">Grid</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/utilities/overlayscrollbar.html">Overlay scrollbar<span
                            class="badge rounded-pill ms-2 badge-soft-success">New</span></a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/utilities/position.html">Position</a>
                      </div>
                    </div>
                    <div class="col-6 col-xxl-3">
                      <div class="nav flex-column pt-xxl-1">
                        <p class="nav-link text-700 mb-0 fw-bold">Icons</p><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/charts/echarts/heatmap-charts.html">Heatmap charts</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/charts/echarts/how-to-use.html">How to use</a><a
                          class="nav-link py-1 link-600 fw-medium" href="modules/icons/font-awesome.html">Font
                          awesome</a><a class="nav-link py-1 link-600 fw-medium"
                          href="modules/icons/bootstrap-icons.html">Bootstrap icons</a>
                        <p class="nav-link text-700 mb-0 fw-bold">Maps</p><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/icons/feather.html">Feather</a><a
                          class="nav-link py-1 link-600 fw-medium"
                          href="modules/icons/material-icons.html">Material icons</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
              id="documentations">Documentation</a>
            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
              aria-labelledby="documentations">
              <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium"
                  href="documentation/getting-started.html">Getting started</a><a
                  class="dropdown-item link-600 fw-medium"
                  href="documentation/customization/configuration.html">Configuration</a><a
                  class="dropdown-item link-600 fw-medium"
                  href="documentation/customization/styling.html">Styling<span
                    class="badge rounded-pill ms-2 badge-soft-success">Updated</span></a><a
                  class="dropdown-item link-600 fw-medium" href="documentation/customization/dark-mode.html">Dark
                  mode</a><a class="dropdown-item link-600 fw-medium"
                  href="documentation/customization/plugin.html">Plugin</a><a
                  class="dropdown-item link-600 fw-medium" href="documentation/faq.html">Faq</a><a
                  class="dropdown-item link-600 fw-medium" href="documentation/gulp.html">Gulp</a><a
                  class="dropdown-item link-600 fw-medium" href="documentation/design-file.html">Design
                  file</a><a class="dropdown-item link-600 fw-medium" href="changelog.html">Changelog</a></div>
            </div>
          </li>
        </ul>
      </div>
      <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
        <li class="nav-item">
          <div class="theme-control-toggle fa-icon-wait px-2"><input
              class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox"
              data-theme-control="theme" value="dark"><label
              class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
              data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to light theme"><span
                class="fas fa-sun fs-0"></span></label><label
              class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
              data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to dark theme"><span
                class="fas fa-moon fs-0"></span></label></div>
        </li>
        <li class="nav-item d-none d-sm-block">
          <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait"
            href="app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart"
              data-fa-transform="shrink-7" style="font-size: 33px;"></span><span
              class="notification-indicator-number">1</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
            id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell"
              data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
          <div
            class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg"
            aria-labelledby="navbarDropdownNotification">
            <div class="card card-notification shadow-none">
              <div class="card-header">
                <div class="row justify-content-between align-items-center">
                  <div class="col-auto">
                    <h6 class="card-header-title mb-0">Notifications</h6>
                  </div>
                  <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as read</a>
                  </div>
                </div>
              </div>
              <div class="scrollbar-overlay" style="max-height:19rem">
                <div class="list-group list-group-flush fw-normal fs--1">
                  <div class="list-group-title border-bottom">NEW</div>
                  <div class="list-group-item">
                    <a class="notification notification-flush notification-unread" href="#!">
                      <div class="notification-avatar">
                        <div class="avatar avatar-2xl me-3">
                          <img class="rounded-circle" src="assets/img/team/1-thumb.png" alt="">
                        </div>
                      </div>
                      <div class="notification-body">
                        <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                        <span class="notification-time"><span class="me-2" role="img"
                            aria-label="Emoji">💬</span>Just now</span>
                      </div>
                    </a>
                  </div>
                  <div class="list-group-item">
                    <a class="notification notification-flush notification-unread" href="#!">
                      <div class="notification-avatar">
                        <div class="avatar avatar-2xl me-3">
                          <div class="avatar-name rounded-circle"><span>AB</span></div>
                        </div>
                      </div>
                      <div class="notification-body">
                        <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong>
                          status</p>
                        <span class="notification-time"><span
                            class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                      </div>
                    </a>
                  </div>
                  <div class="list-group-title border-bottom">EARLIER</div>
                  <div class="list-group-item">
                    <a class="notification notification-flush" href="#!">
                      <div class="notification-avatar">
                        <div class="avatar avatar-2xl me-3">
                          <img class="rounded-circle" src="assets/img/icons/weather-sm.jpg" alt="">
                        </div>
                      </div>
                      <div class="notification-body">
                        <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's
                          weather.</p>
                        <span class="notification-time"><span class="me-2" role="img"
                            aria-label="Emoji">🌤️</span>1d</span>
                      </div>
                    </a>
                  </div>
                  <div class="list-group-item">
                    <a class="border-bottom-0 notification-unread  notification notification-flush" href="#!">
                      <div class="notification-avatar">
                        <div class="avatar avatar-xl me-3">
                          <img class="rounded-circle" src="assets/img/logos/oxford.png" alt="">
                        </div>
                      </div>
                      <div class="notification-body">
                        <p class="mb-1"><strong>University of Oxford</strong> created an event : "Causal Inference
                          Hilary 2019"</p>
                        <span class="notification-time"><span class="me-2" role="img"
                            aria-label="Emoji">✌️</span>1w</span>
                      </div>
                    </a>
                  </div>
                  <div class="list-group-item">
                    <a class="border-bottom-0 notification notification-flush" href="#!">
                      <div class="notification-avatar">
                        <div class="avatar avatar-xl me-3">
                          <img class="rounded-circle" src="assets/img/team/10.jpg" alt="">
                        </div>
                      </div>
                      <div class="notification-body">
                        <p class="mb-1"><strong>James Cameron</strong> invited to join the group: United Nations
                          International Children's Fund</p>
                        <span class="notification-time"><span class="me-2" role="img"
                            aria-label="Emoji">🙋‍</span>2d</span>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-footer text-center border-top"><a class="card-link d-block"
                  href="app/social/notifications.html">View all</a></div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown px-1">
          <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button"
            data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="43" viewbox="0 0 16 16"
              fill="none">
              <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
              <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
              <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
              <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
              <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
              <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
              <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
              <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
              <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
            </svg></a>
          <div
            class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg"
            aria-labelledby="navbarDropdownMenu">
            <div class="card shadow-none">
              <div class="scrollbar-overlay nine-dots-dropdown">
                <div class="card-body px-3">
                  <div class="row text-center gx-0 gy-0">
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                        href="pages/user/profile.html" target="_blank">
                        <div class="avatar avatar-2xl"> <img class="rounded-circle" src="assets/img/team/3.jpg"
                            alt=""></div>
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2">Account</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                        href="https://themewagon.com/" target="_blank"><img class="rounded"
                          src="assets/img/nav-icons/themewagon.png" alt="" width="40" height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Themewagon</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                        href="https://mailbluster.com/" target="_blank"><img class="rounded"
                          src="assets/img/nav-icons/mailbluster.png" alt="" width="40" height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Mailbluster</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!"
                        target="_blank"><img class="rounded" src="assets/img/nav-icons/google.png" alt=""
                          width="40" height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Google</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!"
                        target="_blank"><img class="rounded" src="assets/img/nav-icons/spotify.png" alt=""
                          width="40" height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Spotify</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!"
                        target="_blank"><img class="rounded" src="assets/img/nav-icons/steam.png" alt=""
                          width="40" height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Steam</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!"
                        target="_blank"><img class="rounded" src="assets/img/nav-icons/github-light.png" alt=""
                          width="40" height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Github</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!"
                        target="_blank"><img class="rounded" src="assets/img/nav-icons/discord.png" alt=""
                          width="40" height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Discord</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!"
                        target="_blank"><img class="rounded" src="assets/img/nav-icons/xbox.png" alt=""
                          width="40" height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">xbox</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!"
                        target="_blank"><img class="rounded" src="assets/img/nav-icons/trello.png" alt=""
                          width="40" height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Kanban</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!"
                        target="_blank"><img class="rounded" src="assets/img/nav-icons/hp.png" alt="" width="40"
                          height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Hp</p>
                      </a></div>
                    <div class="col-12">
                      <hr class="my-3 mx-n3 bg-200">
                    </div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!"
                        target="_blank"><img class="rounded" src="assets/img/nav-icons/linkedin.png" alt=""
                          width="40" height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Linkedin</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!"
                        target="_blank"><img class="rounded" src="assets/img/nav-icons/twitter.png" alt=""
                          width="40" height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Twitter</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!"
                        target="_blank"><img class="rounded" src="assets/img/nav-icons/facebook.png" alt=""
                          width="40" height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Facebook</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!"
                        target="_blank"><img class="rounded" src="assets/img/nav-icons/instagram.png" alt=""
                          width="40" height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Instagram</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!"
                        target="_blank"><img class="rounded" src="assets/img/nav-icons/pinterest.png" alt=""
                          width="40" height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Pinterest</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!"
                        target="_blank"><img class="rounded" src="assets/img/nav-icons/slack.png" alt=""
                          width="40" height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Slack</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!"
                        target="_blank"><img class="rounded" src="assets/img/nav-icons/deviantart.png" alt=""
                          width="40" height="40">
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Deviantart</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                        href="app/events/event-detail.html" target="_blank">
                        <div class="avatar avatar-2xl">
                          <div class="avatar-name rounded-circle bg-soft-primary text-primary"><span
                              class="fs-2">E</span></div>
                        </div>
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2">Events</p>
                      </a></div>
                    <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4" href="#!">Show more</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="avatar avatar-xl">
              <img class="rounded-circle" src="assets/img/team/3-thumb.png" alt="">
            </div>
          </a>
          <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
            aria-labelledby="navbarDropdownUser">
            <div class="bg-white dark__bg-1000 rounded-2 py-2">
              <a class="dropdown-item fw-bold text-warning" href="#!"><span
                  class="fas fa-crown me-1"></span><span>Go Pro</span></a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#!">Set status</a>
              <a class="dropdown-item" href="pages/user/profile.html">Profile &amp; account</a>
              <a class="dropdown-item" href="#!">Feedback</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="pages/user/settings.html">Settings</a>
              <a class="dropdown-item" href="pages/authentication/card/logout.html">Logout</a>
            </div>
          </div>
        </li>
      </ul>
    </nav>
    <script>
      var navbarPosition = localStorage.getItem('navbarPosition');
      var navbarVertical = document.querySelector('.navbar-vertical');
      var navbarTopVertical = document.querySelector('.content .navbar-top');
      var navbarTop = document.querySelector('[data-layout] .navbar-top:not([data-double-top-nav');
      var navbarDoubleTop = document.querySelector('[data-double-top-nav]');
      var navbarTopCombo = document.querySelector('.content [data-navbar-top="combo"]');

      if (localStorage.getItem('navbarPosition') === 'double-top') {
        document.documentElement.classList.toggle('double-top-nav-layout');
      }

      if (navbarPosition === 'top') {
        navbarTop.removeAttribute('style');
        navbarTopVertical.remove(navbarTopVertical);
        navbarVertical.remove(navbarVertical);
        navbarTopCombo.remove(navbarTopCombo);
        navbarDoubleTop.remove(navbarDoubleTop);
      } else if (navbarPosition === 'combo') {
        navbarVertical.removeAttribute('style');
        navbarTopCombo.removeAttribute('style');
        navbarTop.remove(navbarTop);
        navbarTopVertical.remove(navbarTopVertical);
        navbarDoubleTop.remove(navbarDoubleTop);
      } else if (navbarPosition === 'double-top') {
        navbarDoubleTop.removeAttribute('style');
        navbarTopVertical.remove(navbarTopVertical);
        navbarVertical.remove(navbarVertical);
        navbarTop.remove(navbarTop);
        navbarTopCombo.remove(navbarTopCombo);
      } else {
        navbarVertical.removeAttribute('style');
        navbarTopVertical.removeAttribute('style');
        navbarTop.remove(navbarTop);
        navbarDoubleTop.remove(navbarDoubleTop);
        navbarTopCombo.remove(navbarTopCombo);
      }
    </script>
    <div class="row mb-3">
      <div class="col">
        <div class="card bg-100 shadow-none border">
          <div class="row gx-0 flex-between-center">
            <div class="col-sm-auto d-flex align-items-center"><img class="ms-n2"
                src="assets/img/illustrations/crm-bar-chart.png" alt="" width="90">
              <div>
                <h6 class="text-primary fs--1 mb-0">Welcome to </h6>
                <h4 class="text-primary fw-bold mb-0">Falcon <span class="text-info fw-medium">CRM</span></h4>
              </div><img class="ms-n4 d-md-none d-lg-block" src="assets/img/illustrations/crm-line-chart.png"
                alt="" width="150">
            </div>
            <div class="col-md-auto p-3">
              <form class="row align-items-center g-3">
                <div class="col-auto">
                  <h6 class="text-700 mb-0">Showing Data For: </h6>
                </div>
                <div class="col-md-auto position-relative"><input
                    class="form-control form-control-sm datetimepicker ps-4" id="CRMDateRange" type="text"
                    data-options="{&quot;mode&quot;:&quot;range&quot;,&quot;dateFormat&quot;:&quot;M d&quot;,&quot;disableMobile&quot;:true , &quot;defaultDate&quot;: [&quot;Nov 10&quot;, &quot;Nov 17&quot;] }"><span
                    class="fas fa-calendar-alt text-primary position-absolute top-50 translate-middle-y ms-2">
                  </span></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-3 g-3">
      <div class="col-lg-12 col-xxl-9">
        <div class="card mb-3">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-4 border-lg-end border-bottom border-lg-0 pb-3 pb-lg-0">
                <div class="d-flex flex-between-center mb-3">
                  <div class="d-flex align-items-center">
                    <div class="icon-item icon-item-sm bg-soft-primary shadow-none me-2 bg-soft-primary"><span
                        class="fs--2 fas fa-phone text-primary"></span></div>
                    <h6 class="mb-0">New Contact</h6>
                  </div>
                  <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                      class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal"
                      type="button" id="dropdown-new-contact" data-bs-toggle="dropdown" data-boundary="viewport"
                      aria-haspopup="true" aria-expanded="false"><span
                        class="fas fa-ellipsis-h fs--2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-new-contact">
                      <a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
                <div class="d-flex">
                  <div class="d-flex">
                    <p class="font-sans-serif lh-1 mb-1 fs-4 pe-2">15%</p>
                    <div class="d-flex flex-column"> <span
                        class="me-1 text-success fas fa-caret-up text-primary"></span>
                      <p class="fs--2 mb-0 text-nowrap">2500 vs 2683 </p>
                    </div>
                  </div>
                  <div class="echart-crm-statistics w-100 ms-2" data-echart-responsive="true"
                    data-echarts='{"series":[{"type":"line","data":[220,230,150,175,200,170,70,160],"color":"#2c7be5","areaStyle":{"color":{"colorStops":[{"offset":0,"color":"#2c7be53A"},{"offset":1,"color":"#2c7be50A"}]}}}],"grid":{"bottom":"-10px"}}'>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 border-lg-end border-bottom border-lg-0 py-3 py-lg-0">
                <div class="d-flex flex-between-center mb-3">
                  <div class="d-flex align-items-center">
                    <div class="icon-item icon-item-sm bg-soft-primary shadow-none me-2 bg-soft-info"><span
                        class="fs--2 fas fa-user text-info"></span></div>
                    <h6 class="mb-0">New Users</h6>
                  </div>
                  <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                      class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal"
                      type="button" id="dropdown-new-users" data-bs-toggle="dropdown" data-boundary="viewport"
                      aria-haspopup="true" aria-expanded="false"><span
                        class="fas fa-ellipsis-h fs--2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-new-users"><a
                        class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
                <div class="d-flex">
                  <div class="d-flex">
                    <p class="font-sans-serif lh-1 mb-1 fs-4 pe-2">13%</p>
                    <div class="d-flex flex-column"> <span
                        class="me-1 text-success fas fa-caret-up text-success"></span>
                      <p class="fs--2 mb-0 text-nowrap">1635 vs 863 </p>
                    </div>
                  </div>
                  <div class="echart-crm-statistics w-100 ms-2" data-echart-responsive="true"
                    data-echarts='{"series":[{"type":"line","data":[90,160,150,120,230,155,220,240],"color":"#27bcfd","areaStyle":{"color":{"colorStops":[{"offset":0,"color":"#27bcfd3A"},{"offset":1,"color":"#27bcfd0A"}]}}}],"grid":{"bottom":"-10px"}}'>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 pt-3 pt-lg-0">
                <div class="d-flex flex-between-center mb-3">
                  <div class="d-flex align-items-center">
                    <div class="icon-item icon-item-sm bg-soft-primary shadow-none me-2 bg-soft-success"><span
                        class="fs--2 fas fa-bolt text-success"></span></div>
                    <h6 class="mb-0">New Leads</h6>
                  </div>
                  <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                      class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal"
                      type="button" id="dropdown-new-leads" data-bs-toggle="dropdown" data-boundary="viewport"
                      aria-haspopup="true" aria-expanded="false"><span
                        class="fas fa-ellipsis-h fs--2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-new-leads"><a
                        class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
                <div class="d-flex">
                  <div class="d-flex">
                    <p class="font-sans-serif lh-1 mb-1 fs-4 pe-2">16%</p>
                    <div class="d-flex flex-column"> <span
                        class="me-1 text-success fas fa-caret-down text-danger"></span>
                      <p class="fs--2 mb-0 text-nowrap">1423 vs 256 </p>
                    </div>
                  </div>
                  <div class="echart-crm-statistics w-100 ms-2" data-echart-responsive="true"
                    data-echarts='{"series":[{"type":"line","data":[200,150,175,130,150,115,130,100],"color":"#00d27a","areaStyle":{"color":{"colorStops":[{"offset":0,"color":"#00d27a3A"},{"offset":1,"color":"#00d27a0A"}]}}}],"grid":{"bottom":"-10px"}}'>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header d-flex flex-between-center ps-0 py-0 border-bottom">
            <ul class="nav nav-tabs border-0 flex-nowrap tab-active-caret" id="crm-revenue-chart-tab" role="tablist"
              data-tab-has-echarts="data-tab-has-echarts">
              <li class="nav-item" role="presentation"><a class="nav-link py-3 mb-0 active" id="crm-revenue-tab"
                  data-bs-toggle="tab" href="#crm-revenue" role="tab" aria-controls="crm-revenue"
                  aria-selected="true">Revenue</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link py-3 mb-0" id="crm-users-tab"
                  data-bs-toggle="tab" href="#crm-users" role="tab" aria-controls="crm-users"
                  aria-selected="false">Users</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link py-3 mb-0" id="crm-deals-tab"
                  data-bs-toggle="tab" href="#crm-deals" role="tab" aria-controls="crm-deals"
                  aria-selected="false">Deals</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link py-3 mb-0" id="crm-profit-tab"
                  data-bs-toggle="tab" href="#crm-profit" role="tab" aria-controls="crm-profit"
                  aria-selected="false">Profit</a></li>
            </ul>
            <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button"
                id="dropdown-session-by-country" data-bs-toggle="dropdown" data-boundary="viewport"
                aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
              <div class="dropdown-menu dropdown-menu-end border py-2"
                aria-labelledby="dropdown-session-by-country"><a class="dropdown-item" href="#!">View</a><a
                  class="dropdown-item" href="#!">Export</a>
                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row g-1">
              <div class="col-xxl-3">
                <div class="row g-0 my-2">
                  <div class="col-md-6 col-xxl-12">
                    <div class="border-xxl-bottom border-xxl-200 mb-2">
                      <h2 class="text-primary">$37,950</h2>
                      <p class="fs--2 text-500 fw-semi-bold mb-0"><span
                          class="fas fa-circle text-primary me-2"></span>Closed Amount</p>
                      <p class="fs--2 text-500 fw-semi-bold"><span
                          class="fas fa-circle text-warning me-2"></span>Revenue Goal</p>
                    </div>
                    <div class="form-check form-check-inline me-2"><input class="form-check-input" id="crmInbound"
                        type="radio" name="bound" value="inbound" checked="Checked"><label class="form-check-label"
                        for="crmInbound">Inbound</label></div>
                    <div class="form-check form-check-inline"><input class="form-check-input" id="outbound"
                        type="radio" name="bound" value="outbound"><label class="form-check-label"
                        for="outbound">Outbound</label></div>
                  </div>
                  <div class="col-md-6 col-xxl-12 py-2">
                    <div class="row mx-0">
                      <div class="col-6 border-end border-bottom py-3">
                        <h5 class="fw-normal text-600">$4.2k</h5>
                        <h6 class="text-500 mb-0">Email</h6>
                      </div>
                      <div class="col-6 border-bottom py-3">
                        <h5 class="fw-normal text-600">$5.6k</h5>
                        <h6 class="text-500 mb-0">Social</h6>
                      </div>
                      <div class="col-6 border-end py-3">
                        <h5 class="fw-normal text-600">$6.7k</h5>
                        <h6 class="text-500 mb-0">Call</h6>
                      </div>
                      <div class="col-6 py-3">
                        <h5 class="fw-normal text-600">$2.3k</h5>
                        <h6 class="text-500 mb-0">Other</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-9">
                <div class="tab-content">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/crm-revenue.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                  <div class="tab-pane active" id="crm-revenue" role="tabpanel" aria-labelledby="crm-revenue-tab">
                    <div class="echart-crm-revenue" data-echart-responsive="true" data-echart-tab="data-echart-tab"
                      style="height:320px;"></div>
                  </div>
                  <div class="tab-pane" id="crm-users" role="tabpanel" aria-labelledby="crm-users-tab">
                    <div class="echart-crm-users" data-echart-responsive="true" data-echart-tab="data-echart-tab"
                      style="height:320px;"></div>
                  </div>
                  <div class="tab-pane" id="crm-deals" role="tabpanel" aria-labelledby="crm-deals-tab">
                    <div class="echart-crm-deals" data-echart-responsive="true" data-echart-tab="data-echart-tab"
                      style="height:320px;"></div>
                  </div>
                  <div class="tab-pane" id="crm-profit" role="tabpanel" aria-labelledby="crm-profit-tab">
                    <div class="echart-crm-profit" data-echart-responsive="true" data-echart-tab="data-echart-tab"
                      style="height:320px;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-3">
        <div class="card">
          <div class="card-header d-flex flex-between-center py-2 border-bottom">
            <h6 class="mb-0">Most Leads</h6>
            <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button"
                id="dropdown-most-leads" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true"
                aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-most-leads"><a
                  class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
              </div>
            </div>
          </div>
          <div class="card-body d-flex flex-column justify-content-between">
            <div class="row align-items-center">
              <div class="col-md-5 col-xxl-12 mb-xxl-1">
                <div class="position-relative">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/most-leads.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                  <div class="echart-most-leads my-2" data-echart-responsive="true"></div>
                  <div class="position-absolute top-50 start-50 translate-middle text-center">
                    <p class="fs--1 mb-0 text-400 font-sans-serif fw-medium">Total</p>
                    <p class="fs-3 mb-0 font-sans-serif fw-medium mt-n2">15.6k</p>
                  </div>
                </div>
              </div>
              <div class="col-xxl-12 col-md-7">
                <hr class="mx-ncard mb-0 d-md-none d-xxl-block">
                <div class="d-flex flex-between-center border-bottom py-3 pt-md-0 pt-xxl-3">
                  <div class="d-flex"><img class="me-2" src="assets/img/crm/email.svg" width="16" height="16"
                      alt="...">
                    <h6 class="text-700 mb-0">Email </h6>
                  </div>
                  <p class="fs--1 text-500 mb-0 fw-semi-bold">5200 vs 1052</p>
                  <h6 class="text-700 mb-0">54%</h6>
                </div>
                <div class="d-flex flex-between-center border-bottom py-3">
                  <div class="d-flex"><img class="me-2" src="assets/img/crm/social.svg" width="16" height="16"
                      alt="...">
                    <h6 class="text-700 mb-0">Social </h6>
                  </div>
                  <p class="fs--1 text-500 mb-0 fw-semi-bold">5623 vs 4929</p>
                  <h6 class="text-700 mb-0">27%</h6>
                </div>
                <div class="d-flex flex-between-center border-bottom py-3">
                  <div class="d-flex"><img class="me-2" src="assets/img/crm/call.svg" width="16" height="16"
                      alt="...">
                    <h6 class="text-700 mb-0">Call </h6>
                  </div>
                  <p class="fs--1 text-500 mb-0 fw-semi-bold">2535 vs 1486</p>
                  <h6 class="text-700 mb-0">4%</h6>
                </div>
                <div class="d-flex flex-between-center border-bottom py-3 border-bottom-0 pb-0">
                  <div class="d-flex"><img class="me-2" src="assets/img/crm/other.svg" width="16" height="16"
                      alt="...">
                    <h6 class="text-700 mb-0">Other </h6>
                  </div>
                  <p class="fs--1 text-500 mb-0 fw-semi-bold">256 vs 189</p>
                  <h6 class="text-700 mb-0">13%</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer bg-light p-0"><a class="btn btn-sm btn-link d-block py-2" href="#!">View all<span
                class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
        </div>
      </div>
      <div class="col-md-12 col-xxl-8">
        <div class="card h-100">
          <div class="card-header d-flex flex-between-center border-bottom border-200 py-2">
            <h6 class="mb-0">Deal Forecast</h6>
            <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button"
                id="crm-deal-forecast-bar" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true"
                aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="crm-deal-forecast-bar"><a
                  class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
              </div>
            </div>
          </div>
          <div class="card-body d-flex align-items-center">
            <div class="w-100">
              <h3 class="text-700 mb-6">$90,439</h3>
              <div class="progress overflow-visible rounded-3 font-sans-serif fw-medium fs--1 mt-xxl-auto"
                style="height: 20px;">
                <div
                  class="progress-bar overflow-visible bg-progress-gradient border-end border-white border-2 rounded-end rounded-pill text-start"
                  role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                  <span class="text-700 mt-n6">$47.8k</span>
                </div>
                <div
                  class="progress-bar overflow-visible bg-soft-primary border-end border-white border-2 text-start"
                  role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                  <span class="text-700 mt-n6">$20.2k</span>
                </div>
                <div class="progress-bar overflow-visible bg-soft-info border-end border-white border-2 text-start"
                  role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                  <span class="text-700 mt-n6">$18k</span>
                </div>
                <div class="progress-bar overflow-visible bg-info rounded-start rounded-pill text-start"
                  role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="15" aria-valuemax="100">
                  <span class="text-700 mt-n6">$16k</span>
                </div>
              </div>
              <div class="row fs--1 fw-semi-bold text-500 mt-3 g-0 mt-3 mt-xxl-4">
                <div class="col-auto d-flex align-items-center pe-3"><span
                    class="dot bg-primary"></span><span>Closed won</span><span
                    class="d-none d-md-inline-block d-lg-none d-xxl-inline-block">(100%)</span></div>
                <div class="col-auto d-flex align-items-center pe-3"><span
                    class="dot bg-soft-primary"></span><span>Contact sent</span><span
                    class="d-none d-md-inline-block d-lg-none d-xxl-inline-block">(5%)</span></div>
                <div class="col-auto d-flex align-items-center pe-3"><span
                    class="dot bg-soft-info"></span><span>Pending</span><span
                    class="d-none d-md-inline-block d-lg-none d-xxl-inline-block">(5%)</span></div>
                <div class="col-auto d-flex align-items-center"><span
                    class="dot bg-info"></span><span>Qualified</span><span
                    class="d-none d-md-inline-block d-lg-none d-xxl-inline-block">(20%)</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-4">
        <div class="card h-100">
          <div class="card-header d-flex flex-between-center border-bottom py-2">
            <h6 class="mb-0">Deal Storage Funnel</h6><a class="btn btn-link btn-sm px-0 shadow-none" href="#!">View
              Details<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
          </div>
          <div class="card-body">
            <div class="row rtl-row-reverse g-1">
              <div class="col">
                <div class="d-flex flex-between-center rtl-row-reverse">
                  <h6 class="fs--2 text-500">Deal Stage</h6>
                  <h6 class="fs--2 text-500">Count of Deals</h6>
                </div>
              </div>
              <div class="col-auto">
                <h6 class="fs--2 text-500">Conversion </h6>
              </div>
            </div><!-- Find the JS file for the following chart at: src/js/charts/echarts/deal-storage-funnel.js-->
            <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
            <div class="echart-deal-storage-funnel" data-echart-responsive="true"
              data-options='{"data":[7,10,13,19,19],"dataAxis1":["Processing","Contact won","Contact Sent","Qualified to Buy","Created"],"dataAxis2":["50%","70%","76%","68%","99%"]}'>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-6">
        <div class="card h-100">
          <div class="card-header d-flex flex-between-center py-2">
            <h6 class="mb-0">Deal Closed vs Goal</h6>
            <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button"
                id="crm-closed-vs-goal" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true"
                aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="crm-closed-vs-goal"><a
                  class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <!-- Find the JS file for the following chart at: src/js/charts/echarts/closed-vs-goal.js-->
            <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
            <div class="echart-closed-vs-goal" data-echart-responsive="true"></div>
          </div>
        </div>
      </div>
      <div class="col-xxl-6">
        <div class="card overflow-hidden">
          <div class="card-header">
            <h6 class="mb-0">Deal Forecast by Owner</h6>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive scrollbar">
              <table class="table mb-0 fs--1 border-200 table-borderless">
                <thead class="bg-light">
                  <tr class="text-800 bg-200">
                    <th class="text-nowrap">Owner</th>
                    <th class="text-center text-nowrap">Qualified to buy</th>
                    <th class="text-center text-nowrap">Appointment </th>
                    <th class="text-end text-nowrap">Contact sent</th>
                    <th class="pe-x1 text-end text-nowrap">Closed won</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="border-bottom border-200">
                    <td class="align-middle font-sans-serif fw-medium text-nowrap"><a
                        href="app/e-commerce/customer-details.html">John oliver</a></td>
                    <td class="align-middle text-center">1000</td>
                    <td class="align-middle text-center">$2600</td>
                    <td class="align-middle text-center">$3523</td>
                    <td class="align-middle text-end">$1311</td>
                  </tr>
                  <tr class="border-bottom border-200">
                    <td class="align-middle font-sans-serif fw-medium text-nowrap"><a
                        href="app/e-commerce/customer-details.html">Sean Paul</a></td>
                    <td class="align-middle text-center">1500</td>
                    <td class="align-middle text-center">$1600</td>
                    <td class="align-middle text-center">$3523</td>
                    <td class="align-middle text-end">$2311</td>
                  </tr>
                  <tr class="border-bottom border-200">
                    <td class="align-middle font-sans-serif fw-medium text-nowrap"><a
                        href="app/e-commerce/customer-details.html">Brad Shaw</a></td>
                    <td class="align-middle text-center">1400</td>
                    <td class="align-middle text-center">$2200</td>
                    <td class="align-middle text-center">$3523</td>
                    <td class="align-middle text-end">$3311</td>
                  </tr>
                  <tr>
                    <td class="align-middle font-sans-serif fw-medium text-nowrap"><a
                        href="app/e-commerce/customer-details.html">Max Payne</a></td>
                    <td class="align-middle text-center">6600</td>
                    <td class="align-middle text-center">$2220</td>
                    <td class="align-middle text-center">$3523</td>
                    <td class="align-middle text-end">$1511</td>
                  </tr>
                </tbody>
                <tfoot class="bg-light">
                  <tr class="text-700 fw-bold">
                    <td>Total</td>
                    <td class="text-center">$6359</td>
                    <td class="text-center"> $8151</td>
                    <td class="text-center"> $9174</td>
                    <td class="pe-x1 text-end"> $12587</td>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-3 g-3">
      <div class="col-lg-7">
        <div class="card" id="CrmLocationBySessionTable"
          data-list='{"valueNames":["country","sessions","users"],"page":3,"pagination":true}'>
          <div class="card-header d-flex flex-between-center bg-light py-2">
            <h6 class="mb-0">Location By Session</h6>
            <div class="d-flex">
              <div class="btn-reveal-trigger"><button
                  class="btn btn-link btn-reveal btn-sm location-by-session-map-reset" type="button"><span
                    class="fas fa-sync-alt fs--1"></span></button></div>
              <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                  class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button"
                  id="crm-location-by-session" data-bs-toggle="dropdown" data-boundary="viewport"
                  aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="crm-location-by-session">
                  <a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body pb-0 position-relative">
            <!-- Find the JS file for the following chart at: src/js/charts/echarts/location-by-session-crm.js-->
            <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
            <div class="echart-location-by-session-map" data-echart-responsive="true" style="height:302px;"></div>
            <div class="position-absolute top-0 border mt-3 border-200 rounded-3 bg-light"><button
                class="btn btn-link btn-sm bg-100 rounded-bottom-0 px-2 location-by-session-map-zoom text-700"
                type="button"><span class="fas fa-plus fs--1"></span></button>
              <hr class="text-200 m-0"><button
                class="btn btn-link btn-sm bg-100 rounded-top-0 px-2 location-by-session-map-zoomOut text-700"
                type="button"><span class="fas fa-minus fs--1"></span></button>
            </div>
            <div class="table-responsive scrollbar mx-ncard mt-3">
              <table class="table fs--1 mb-0">
                <thead class="bg-200 text-800">
                  <tr>
                    <th class="sort" data-sort="country">Country</th>
                    <th class="sort" data-sort="sessions">Sessions</th>
                    <th class="sort" data-sort="users">Users</th>
                    <th class="sort text-end" style="width: 9.625rem;">Percentage</th>
                  </tr>
                </thead>
                <tbody class="list" id="table-crm-location-session">
                  <tr>
                    <td class="align-middle py-3"><a href="#!">
                        <div class="d-flex align-items-center"><img src="assets/img/crm/india.png" alt="">
                          <p class="mb-0 ps-3 country text-700">India</p>
                        </div>
                      </a></td>
                    <td class="align-middle fw-semi-bold sessions">268,663</td>
                    <td class="users align-middle">325,633</td>
                    <td class="align-middle pe-x1">
                      <div class="d-flex align-items-center justify-content-end">
                        <p class="mb-0 me-2">89%</p>
                        <div class="progress rounded-3 bg-200" style="height: 0.3125rem;width:3.8rem">
                          <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 89%;"
                            aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="align-middle py-3"><a href="#!">
                        <div class="d-flex align-items-center"><img src="assets/img/crm/uae.png" alt="">
                          <p class="mb-0 ps-3 country text-700">UAE</p>
                        </div>
                      </a></td>
                    <td class="align-middle fw-semi-bold sessions">250,663</td>
                    <td class="users align-middle">525,633</td>
                    <td class="align-middle pe-x1">
                      <div class="d-flex align-items-center justify-content-end">
                        <p class="mb-0 me-2">62%</p>
                        <div class="progress rounded-3 bg-200" style="height: 0.3125rem;width:3.8rem">
                          <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 62%;"
                            aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="align-middle py-3"><a href="#!">
                        <div class="d-flex align-items-center"><img src="assets/img/crm/nepal.png" alt="">
                          <p class="mb-0 ps-3 country text-700">Nepal</p>
                        </div>
                      </a></td>
                    <td class="align-middle fw-semi-bold sessions">268,663</td>
                    <td class="users align-middle">325,633</td>
                    <td class="align-middle pe-x1">
                      <div class="d-flex align-items-center justify-content-end">
                        <p class="mb-0 me-2">50%</p>
                        <div class="progress rounded-3 bg-200" style="height: 0.3125rem;width:3.8rem">
                          <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 50%;"
                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer text-end p-0">
            <div class="pagination d-none"></div>
            <p class="mb-0 fs--1 px-x1"><span class="d-none d-sm-inline-block me-2" data-list-info="data-list-info">
              </span><span class="d-none d-sm-inline-block me-2">&mdash; </span><a
                class="btn btn-link btn-sm py-2 px-0" href="#!">View all<span
                  class="fas fa-angle-right ms-1"></span></a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="row g-3">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h6 class="mb-0">Average Call Duration<span class="ms-1 text-400" data-bs-toggle="tooltip"
                    data-bs-placement="top" title="Average call duration based of last 50 calls"><span
                      class="far fa-question-circle" data-fa-transform="shrink-1"></span></span></h6>
              </div>
              <div class="card-body">
                <div class="row g-3">
                  <div class="col">
                    <h4 class="text-primary fw-normal">10m:8s</h4>
                    <p class="fs--2 fw-semi-bold text-500 mb-0">Based on 50 calls</p>
                  </div>
                  <div class="col-auto pe-0 text-end">
                    <div class="echart-call-duration" data-echart-responsive="true"
                      data-echarts='{"series":[{"type":"line","data":[8,15,12,14,18,12,12,25,13,12,10,13,35],"color":"#f5803e","areaStyle":{"color":{"colorStops":[{"offset":0,"color":"#f5803e3A"},{"offset":1,"color":"#f5803e0A"}]}}}],"grid":{"bottom":"-10px","right":"0px"}}'>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="card h-100">
              <div class="card-header d-flex flex-between-center border-bottom border-200 py-2">
                <h6 class="mb-0">Lead Conversion</h6>
                <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                    class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal"
                    type="button" id="crm-lead-conversion" data-bs-toggle="dropdown" data-boundary="viewport"
                    aria-haspopup="true" aria-expanded="false"><span
                      class="fas fa-ellipsis-h fs--2"></span></button>
                  <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="crm-lead-conversion"><a
                      class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                  </div>
                </div>
              </div>
              <div class="card-body pt-0">
                <div class="d-flex bg-100 py-2 mb-3 justify-content-center mx-ncard fs--1 border-bottom border-200">
                  <p class="text-600 mb-0 border-end border-200 px-x1 d-flex align-items-center">Current Rete: <span
                      class="fs-sm-1 font-sans-serif ms-2 text-700"> 4.5%</span><span
                      class="fas fa-caret-up ms-2 ms-xxl-3 fs--1 text-success"></span></p>
                  <p class="text-600 mb-0 px-x1">Target Rete:<span class="fs-sm-1 font-sans-serif ms-2 text-700">
                      6%</span></p>
                </div><!-- Find the JS file for the following chart at: src/js/charts/echarts/lead-conversion.js-->
                <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                <div class="echart-lead-conversion" data-echart-responsive="true"></div>
              </div>
              <div class="card-footer bg-light p-0"><a class="btn btn-sm btn-link d-block py-2" href="#!">View
                  Details<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row g-3 mb-3">
      <div class="col-lg-5">
        <div class="card h-100">
          <div class="card-header border-bottom">
            <h6 class="mb-0">To Do List</h6>
          </div>
          <div class="card-body p-0 overflow-hidden">
            <div class="row gx-3 align-items-center my-3 px-x1">
              <div class="col-auto">
                <h6 class="text-primary mb-0">25%</h6>
              </div>
              <div class="col">
                <div class="progress rounded-pill" style="height: 0.5625rem;">
                  <div class="progress-bar bg-progress-gradient rounded-pill" role="progressbar" style="width: 75%"
                    aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-between hover-actions-trigger btn-reveal-trigger px-x1 hover-bg-100">
              <div class="form-check mb-0 d-flex align-items-center"><input
                  class="form-check-input rounded-3 form-check-line-through p-2 mt-0" type="checkbox"
                  id="crm-checkbox-todo-0"><label class="form-check-label mb-0 p-3" for="crm-checkbox-todo-0">Design
                  a ad</label></div>
              <div class="d-flex align-items-center">
                <div class="hover-actions"><button class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span
                      class="fas fa-clock"></span></button><button
                    class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-user-plus">
                    </span></button></div>
                <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                    class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none"
                    type="button" id="crm-to-do-list-0" data-bs-toggle="dropdown" data-boundary="viewport"
                    aria-haspopup="true" aria-expanded="false"><span
                      class="fas fa-ellipsis-h fs--2"></span></button>
                  <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="crm-to-do-list-0"><a
                      class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-between hover-actions-trigger btn-reveal-trigger px-x1 hover-bg-100">
              <div class="form-check mb-0 d-flex align-items-center"><input
                  class="form-check-input rounded-3 form-check-line-through p-2 mt-0" type="checkbox"
                  id="crm-checkbox-todo-1"><label class="form-check-label mb-0 p-3"
                  for="crm-checkbox-todo-1">Analyze Data</label></div>
              <div class="d-flex align-items-center">
                <div class="hover-actions"><button class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span
                      class="fas fa-clock"></span></button><button
                    class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-user-plus">
                    </span></button></div>
                <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                    class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none"
                    type="button" id="crm-to-do-list-1" data-bs-toggle="dropdown" data-boundary="viewport"
                    aria-haspopup="true" aria-expanded="false"><span
                      class="fas fa-ellipsis-h fs--2"></span></button>
                  <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="crm-to-do-list-1"><a
                      class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-between hover-actions-trigger btn-reveal-trigger px-x1 hover-bg-100">
              <div class="form-check mb-0 d-flex align-items-center"><input
                  class="form-check-input rounded-3 form-check-line-through p-2 mt-0" type="checkbox"
                  id="crm-checkbox-todo-2"><label class="form-check-label mb-0 p-3"
                  for="crm-checkbox-todo-2">Youtube campaign</label></div>
              <div class="d-flex align-items-center">
                <div class="hover-actions"><button class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span
                      class="fas fa-clock"></span></button><button
                    class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-user-plus">
                    </span></button></div>
                <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                    class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none"
                    type="button" id="crm-to-do-list-2" data-bs-toggle="dropdown" data-boundary="viewport"
                    aria-haspopup="true" aria-expanded="false"><span
                      class="fas fa-ellipsis-h fs--2"></span></button>
                  <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="crm-to-do-list-2"><a
                      class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-between hover-actions-trigger btn-reveal-trigger px-x1 hover-bg-100">
              <div class="form-check mb-0 d-flex align-items-center"><input
                  class="form-check-input rounded-3 form-check-line-through p-2 mt-0" type="checkbox"
                  id="crm-checkbox-todo-3"><label class="form-check-label mb-0 p-3"
                  for="crm-checkbox-todo-3">Assaign employee</label></div>
              <div class="d-flex align-items-center">
                <div class="hover-actions"><button class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span
                      class="fas fa-clock"></span></button><button
                    class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-user-plus">
                    </span></button></div>
                <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                    class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none"
                    type="button" id="crm-to-do-list-3" data-bs-toggle="dropdown" data-boundary="viewport"
                    aria-haspopup="true" aria-expanded="false"><span
                      class="fas fa-ellipsis-h fs--2"></span></button>
                  <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="crm-to-do-list-3"><a
                      class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-between hover-actions-trigger btn-reveal-trigger px-x1 hover-bg-100">
              <div class="form-check mb-0 d-flex align-items-center"><input
                  class="form-check-input rounded-3 form-check-line-through p-2 mt-0" type="checkbox"
                  id="crm-checkbox-todo-4"><label class="form-check-label mb-0 p-3" for="crm-checkbox-todo-4">Video
                  Conference</label></div>
              <div class="d-flex align-items-center">
                <div class="hover-actions"><button class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span
                      class="fas fa-clock"></span></button><button
                    class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-user-plus">
                    </span></button></div>
                <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                    class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none"
                    type="button" id="crm-to-do-list-4" data-bs-toggle="dropdown" data-boundary="viewport"
                    aria-haspopup="true" aria-expanded="false"><span
                      class="fas fa-ellipsis-h fs--2"></span></button>
                  <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="crm-to-do-list-4"><a
                      class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer bg-light p-0"><a class="btn btn-sm btn-link d-block py-2" href="#!"><span
                class="fas fa-plus me-1 fs--2"></span>Add New Task</a></div>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="card" id="TableCrmRecentLeads"
          data-list='{"valueNames":["name","email","status"],"page":8,"pagination":true}'>
          <div class="card-header d-flex flex-between-center py-2">
            <h6 class="mb-0">Recent Leads</h6>
            <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button"
                id="recent-leads-header-dropdown" data-bs-toggle="dropdown" data-boundary="viewport"
                aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
              <div class="dropdown-menu dropdown-menu-end border py-2"
                aria-labelledby="recent-leads-header-dropdown"><a class="dropdown-item" href="#!">View</a><a
                  class="dropdown-item" href="#!">Export</a>
                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
              </div>
            </div>
          </div>
          <div class="card-body px-0 py-0">
            <div class="table-responsive scrollbar">
              <table class="table fs--1 mb-0">
                <thead class="bg-200 text-800">
                  <tr>
                    <th class="py-3 white-space-nowrap" style="max-width: 30px;">
                      <div class="form-check mb-0 d-flex align-items-center"><input class="form-check-input"
                          id="checkbox-bulk-leads-select" type="checkbox"
                          data-bulk-select='{"body":"table-recent-leads-body","actions":"table-recent-leads-actions","replacedElement":"table-recent-leads-replace-element"}'>
                      </div>
                    </th>
                    <th class="sort align-middle" data-sort="name">Name</th>
                    <th class="sort align-middle" data-sort="email">Email and Phone</th>
                    <th class="sort align-middle" data-sort="status">Status</th>
                    <th class="sort align-middle text-end">Action</th>
                  </tr>
                </thead>
                <tbody class="list" id="table-recent-leads-body">
                  <tr class="hover-actions-trigger btn-reveal-trigger hover-bg-100">
                    <td class="align-middle" style="max-width: 30px;">
                      <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                          id="recent-leads-0" data-bulk-select-row="data-bulk-select-row"></div>
                    </td>
                    <td class="align-middle white-space-nowrap"><a class="text-800"
                        href="pages/user/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-xl">
                            <img class="rounded-circle" src="assets/img/team/1-thumb.png" alt="">
                          </div>
                          <h6 class="mb-0 ps-2 name">Kerry Ingram</h6>
                        </div>
                      </a></td>
                    <td class="align-middle white-space-nowrap text-primary email"><a
                        href="mailto:john@gmail.com">john@gmail.com</a></td>
                    <td class="align-middle white-space-nowrap"><small
                        class="badge fw-semi-bold rounded-pill status badge-soft-primary"> New Lead</small></td>
                    <td class="align-middle white-space-nowrap text-end position-relative">
                      <div class="hover-actions bg-100"><button
                          class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span
                            class="far fa-edit"></span></button><button
                          class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span
                            class="far fa-comment"></span></button></div>
                      <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                          class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none"
                          type="button" id="crm-recent-leads-0" data-bs-toggle="dropdown" data-boundary="viewport"
                          aria-haspopup="true" aria-expanded="false"><span
                            class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end border py-2"
                          aria-labelledby="crm-recent-leads-0"><a class="dropdown-item" href="#!">View</a><a
                            class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                            href="#!">Remove</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger hover-bg-100">
                    <td class="align-middle" style="max-width: 30px;">
                      <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                          id="recent-leads-1" data-bulk-select-row="data-bulk-select-row"></div>
                    </td>
                    <td class="align-middle white-space-nowrap"><a class="text-800"
                        href="pages/user/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-xl">
                            <img class="rounded-circle" src="assets/img/team/2-thumb.png" alt="">
                          </div>
                          <h6 class="mb-0 ps-2 name">Bradie Knowall</h6>
                        </div>
                      </a></td>
                    <td class="align-middle white-space-nowrap text-primary email"><a
                        href="mailto:bradie@mail.ru">bradie@mail.ru</a></td>
                    <td class="align-middle white-space-nowrap"><small
                        class="badge fw-semi-bold rounded-pill status badge-soft-primary"> New Lead</small></td>
                    <td class="align-middle white-space-nowrap text-end position-relative">
                      <div class="hover-actions bg-100"><button
                          class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span
                            class="far fa-edit"></span></button><button
                          class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span
                            class="far fa-comment"></span></button></div>
                      <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                          class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none"
                          type="button" id="crm-recent-leads-1" data-bs-toggle="dropdown" data-boundary="viewport"
                          aria-haspopup="true" aria-expanded="false"><span
                            class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end border py-2"
                          aria-labelledby="crm-recent-leads-1"><a class="dropdown-item" href="#!">View</a><a
                            class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                            href="#!">Remove</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger hover-bg-100">
                    <td class="align-middle" style="max-width: 30px;">
                      <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                          id="recent-leads-2" data-bulk-select-row="data-bulk-select-row"></div>
                    </td>
                    <td class="align-middle white-space-nowrap"><a class="text-800"
                        href="pages/user/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-xl">
                            <img class="rounded-circle" src="assets/img/team/3-thumb.png" alt="">
                          </div>
                          <h6 class="mb-0 ps-2 name">Jenny Horas</h6>
                        </div>
                      </a></td>
                    <td class="align-middle white-space-nowrap text-primary email"><a
                        href="mailto:jenny@mail.ru">jenny@mail.ru</a></td>
                    <td class="align-middle white-space-nowrap"><small
                        class="badge fw-semi-bold rounded-pill status badge-soft-warning"> Cold Lead</small></td>
                    <td class="align-middle white-space-nowrap text-end position-relative">
                      <div class="hover-actions bg-100"><button
                          class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span
                            class="far fa-edit"></span></button><button
                          class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span
                            class="far fa-comment"></span></button></div>
                      <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                          class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none"
                          type="button" id="crm-recent-leads-2" data-bs-toggle="dropdown" data-boundary="viewport"
                          aria-haspopup="true" aria-expanded="false"><span
                            class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end border py-2"
                          aria-labelledby="crm-recent-leads-2"><a class="dropdown-item" href="#!">View</a><a
                            class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                            href="#!">Remove</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger hover-bg-100">
                    <td class="align-middle" style="max-width: 30px;">
                      <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                          id="recent-leads-3" data-bulk-select-row="data-bulk-select-row"></div>
                    </td>
                    <td class="align-middle white-space-nowrap"><a class="text-800"
                        href="pages/user/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-xl">
                            <img class="rounded-circle" src="assets/img/team/4-thumb.png" alt="">
                          </div>
                          <h6 class="mb-0 ps-2 name">Chris Pratt</h6>
                        </div>
                      </a></td>
                    <td class="align-middle white-space-nowrap text-primary email"><a
                        href="mailto:pratt@mail.ru">pratt@mail.ru</a></td>
                    <td class="align-middle white-space-nowrap"><small
                        class="badge fw-semi-bold rounded-pill status badge-soft-warning"> Cold Lead</small></td>
                    <td class="align-middle white-space-nowrap text-end position-relative">
                      <div class="hover-actions bg-100"><button
                          class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span
                            class="far fa-edit"></span></button><button
                          class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span
                            class="far fa-comment"></span></button></div>
                      <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                          class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none"
                          type="button" id="crm-recent-leads-3" data-bs-toggle="dropdown" data-boundary="viewport"
                          aria-haspopup="true" aria-expanded="false"><span
                            class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end border py-2"
                          aria-labelledby="crm-recent-leads-3"><a class="dropdown-item" href="#!">View</a><a
                            class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                            href="#!">Remove</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger hover-bg-100">
                    <td class="align-middle" style="max-width: 30px;">
                      <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                          id="recent-leads-4" data-bulk-select-row="data-bulk-select-row"></div>
                    </td>
                    <td class="align-middle white-space-nowrap"><a class="text-800"
                        href="pages/user/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-xl">
                            <img class="rounded-circle" src="assets/img/team/5-thumb.png" alt="">
                          </div>
                          <h6 class="mb-0 ps-2 name">Andy Murray</h6>
                        </div>
                      </a></td>
                    <td class="align-middle white-space-nowrap text-primary email"><a
                        href="mailto:andy@gmail.com">andy@gmail.com</a></td>
                    <td class="align-middle white-space-nowrap"><small
                        class="badge fw-semi-bold rounded-pill status badge-soft-success"> Won Lead</small></td>
                    <td class="align-middle white-space-nowrap text-end position-relative">
                      <div class="hover-actions bg-100"><button
                          class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span
                            class="far fa-edit"></span></button><button
                          class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm"><span
                            class="far fa-comment"></span></button></div>
                      <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                          class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none"
                          type="button" id="crm-recent-leads-4" data-bs-toggle="dropdown" data-boundary="viewport"
                          aria-haspopup="true" aria-expanded="false"><span
                            class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end border py-2"
                          aria-labelledby="crm-recent-leads-4"><a class="dropdown-item" href="#!">View</a><a
                            class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                            href="#!">Remove</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer bg-light p-0">
            <div class="pagination d-none"></div><a class="btn btn-sm btn-link d-block py-2" href="#!">Show full
              list<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
        <div class="col-12 col-sm-auto text-center">
          <p class="mb-0 text-600">Thank you for creating with Falcon <span class="d-none d-sm-inline-block">|
            </span><br class="d-sm-none"> 2022 &copy; <a href="https://themewagon.com">Themewagon</a></p>
        </div>
        <div class="col-12 col-sm-auto text-center">
          <p class="mb-0 text-600">v3.14.0</p>
        </div>
      </div>
    </footer>
</div>



@endsection
