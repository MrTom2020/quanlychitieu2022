<?php
    class menu_main extends Controller
    {
        public $modelcon;
        public function __construct()
        {
            $this->modelcon = $this->model("modelcon");
        }
        public function SayHi()
         {
        $this->view("login",[
            "Page"=>"formlogin",
        ]);
      }
        public function chuyentrang()
        {
            if (isset($_POST['gt']))
            {
                $this->view("gioithieu",[
                    "Page"=>"gioithieu"
                ]);
            }
            if(isset($_POST['gt1']))
            {
                $this->view("main",[
                    "Page"=>"main"
                ]);
            }
            if(isset($_POST['gt2']))
            {
                $this->view("Themtaikhoanthuchi",[
                    "Page"=>"Themtaikhoanquanly"
                ]);
            }
            if(isset($_POST['gt3']))
            {
                $this->view("Nhapthemkhoanthuchi",[
                    "Page"=>"Nhapthemkhoanthuchi"
                ]);
            }
            if(isset($_POST['gt4']))
            {
                $this->view("Nangcaptaikhoan",[
                    "Page"=>"Nangcaptaikhoan"
                ]);
            }
            if(isset($_POST['gt5']))
            {
                $this->view("Baocaokhoanchi",[
                    "Page"=>"Baocaokhoanthuchi"
                ]);
            }
            if(isset($_POST['gt6']))
            {
                $this->view("Quanlytaikhoan",[
                    "Page"=>"Quanlytaikhoan"
                ]);
            }
            if(isset($_POST['gt7']))
            {
                $this->view("Sukien",[
                    "Page"=>"Sukien"
                ]);
            }
            if(isset($_POST['gt8']))
            {
                $this->view("main",[
                    "Page"=>"main"
                ]);
            }
            if(isset($_POST['gt9']))
            {
                $this->view("tintuc",[
                    "Page"=>"tintuc"
                ]);
            }
            if(isset($_POST['timkiem']))
            {
                $this->view("Timkiem",[
                    "Page"=>"timkiem"
                ]);
            }

        }
    }
?>