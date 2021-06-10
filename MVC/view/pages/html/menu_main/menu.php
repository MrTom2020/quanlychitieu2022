<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Thoát</button>
      </div>
    </div>
  </div>
</div>
<form class="login-container" action="./../menu_main/chuyentrang" method="POST">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <input class="dropdown-item" name="gt1" type="submit" value="Trang chủ"/>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tài khoản
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><input class="dropdown-item" name="gt" type="submit" value="Giới thiệu"/></li>
            <li><input class="dropdown-item" name="gt1" type="submit" value="Trang chủ"/></li>
            <li><input class="dropdown-item" name="gt7" type="submit" value="Sự kiện"/></li>
            <li><input class="dropdown-item" name="gt8" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" value="Thông báo"/></li>
            <li><input class="dropdown-item" name="gt9" type="submit" value="Tin tức"/></li>
            <li><input class="dropdown-item" name="gt3" type="submit" value="Nhập thêm khoản chu chi"/></li>
            <li><input class="dropdown-item" name="gt2"  type="submit" value="Thêm tài khoản quản lý"/></li>
            <li><input class="dropdown-item" name="gt4"  type="submit" value="Nâng cấp tài khoản"/></li>
            <li><hr class="dropdown-divider"></li>
            <li><input class="dropdown-item" name="gt5" type="submit" value="Báo cáo khoản thu chi"/></li>
            <li><input class="dropdown-item" name="gt6" type="submit" value="Quản lý tài khoản"/></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" name="timkiem" type="submit">Tìm kiếm</button>
      </form>
    </div>
  </div>
</nav>
</form>