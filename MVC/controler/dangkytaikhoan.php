<?php
    class dangkytaikhoan extends Controller
    {
        public $a;
        public function __construct()
        {
            $this->a = $this->model("modelcon");
        }
    public function SayHi()
    {
        $this->view("login",[
            "Page"=>"formlogin",
        ]);
    }
    public function khachdangkytaikhoan()
    {
        if(isset($_POST["dangky"]))
        {
            $hoten = isset($_POST["hoten"]) ? $_POST["hoten"]:"";
            $ngaysinh = isset($_POST["ngaysinh"]) ? $_POST["ngaysinh"]:"";
            $mk = isset($_POST["mk"]) ? $_POST["mk"]:"";
            $xnmk = isset($_POST["xnmk"]) ? $_POST["xnmk"]:"";
            $dc = isset($_POST["dc"]) ? $_POST["dc"]:"";
            $email = isset($_POST["email"]) ? $_POST["email"]:"";
            $sdt = isset($_POST["sdt"]) ? $_POST["sdt"]:"";
            $cauhoibimat = isset($_POST["cauhoibimat"]) ? $_POST["cauhoibimat"]:"";
            $cautraloi = isset($_POST["cautraloi"]) ? $_POST["cautraloi"]:"";
           echo $hoten . "<br/>" . $ngaysinh ."<br/>" . $mk . "<br/>" . $xnmk . "<br/>" . $dc . "<br/>" . $email . "<br/>" .$sdt . "<br/>" . $cauhoibimat . "<br/>" . $cautraloi;
        }
    }
}
    
?>