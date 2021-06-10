<div class="login-form w3_form">
        <!--  Title-->
        <div class="login-title w3_title">
            <h1>AMAZING</h1>
        </div>
        <div class="login w3_login">
            <h2 class="login-header w3_header">Đăng nhập</h2>
            <div class="w3l_grid">
                <form class="login-container" action="./Ajax/checkuse" method="POST">
                     <p id="htkq"></p>
                    <input type="text" class="form-control" placeholder="Xin hãy nhập tên tài khoản" name="useName" id="useName" required="">
                    <input type="password" placeholder="Xin hãy nhập tên mật khẩu" name="usePassword" id="usePassword" required="">
                    <input type="submit" value="Đăng nhập" id="btnLogin"  name="btnLogin" >
                <div class="second-section w3_section">
                    <div class="bottom-header w3_bottom">
                        <h3>Hay</h3>
                    </div>
                    <div class="social-links w3_social">
                        <ul>
                            <!-- facebook -->
                            <li> <a class="facebook" href="https://www.facebook.com/" target="blank"><i class="fa fa-facebook"></i></a></li>

                            <!-- twitter -->
                            <li> <a class="twitter" href="https://twitter.com/" target="blank"><i class="fa fa-twitter"></i></a></li>

                            <!-- google plus -->
                            <li> <a class="googleplus" href="https://accounts.google.com/ServiceLogin/signinchooser?hl=vi&passive=true&continue=https%3A%2F%2Fwww.google.com%2F&ec=GAZAAQ&flowName=GlifWebSignIn&flowEntry=ServiceLogin" target="blank"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="bottom-text w3_bottom_text">
                    <p>Bạn chưa có tài khoản ?<input name="signup" class="btn btn-success" type="submit" style="color:#ffffff;" value="Đăng ký"/></p>
                    <h4> <a href="../html/quenmatkhau.php">Quên mật khẩu?</a></h4>
                </div>
                </form>
            </div>
        </div>
    </div>
