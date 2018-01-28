<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\WjModel;
class RegulationController extends Controller {
    public function index(){
        $this->display();
    }

    // 规章制度的显示界面，类型默认为1
    public function regulation()
    {
        # code...
        $mode = new WjModel();
        $this -> assign("data", $mode -> findAllWj(1));
        $this -> display();
    }

    public function regulationshow($value='')
    {
        # code...
        $where = trim($_GET['id']);
        if (empty($where)) alertMessage("查询错误");
       
        $mode = new Wjmodel();


        $theRecord = $mode->findOneWj($where);

        $pdfWay = $theRecord['rsway'];
        $pdfWay1=explode('.',$pdfWay);//om 负数从结尾开始取
        $theRealWay = $pdfWay1[1].'.pdf';

        tranOffice($pdfWay);
        $this->assign("theRecord", $theRecord);
        $this->assign("theRealWay", $theRealWay);
        $this->assign("typehahaha", $type);
        $this->display();
    }

    public function service()
    {
        # code...
        $mode = new WjModel();
        $this -> assign("data", $mode -> findAllWj(2));
        $this -> display();
    }
     public function download()
    {
        # code...
        $mode = new WjModel();
        $this -> assign("data", $mode -> findAllWj(3));
        $this -> display();
    }
   	private function getData($type) {
        $theData = M('Resource'); // 实例化User对象
        $count = $theData->where("rsType = $type")->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $theData->where("rsType = $type and rsAble = 1")->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display($this->the_t[$type]);
    }
    //添加一个regulation
    public function addOneRegulation() {
        $mode = new WjModel();
        $post = getPost();
        $mode -> rsName = $post['gallery_title'];
        $mode -> rsType = $post['type'];
        $mode -> rsWay  = $this -> doUpload($_FILES['gallery_file']);
        $mode -> rsDate = date("Y-m-d");
        if ($mode -> add()) {
            alertMessage("添加成功！");
        } else {
            alertMessage("请检查网路后重试！");
        }
        

    }
    public function regulationDelete($id)
    {
        $mode = new WjModel();
        if ($mode -> where("id = $id") ->delete()) {
            alertMessage("删除成功！");
        } else {
            alertMessage("请检查网路后重试！");
        }
    }
    //添加一个service
    public function addOneService() {
        $mode = new WjModel();
        $post = getPost();


        $mode -> rsName = $post['gallery_title'];
        $mode -> rsType = $post['type'];
        $mode -> rsWay  = $post['gallery_file'];
        $mode -> rsDate = date("Y-m-d");
        if ($mode -> add()) {
            alertMessage("添加成功！");
        } else {
            alertMessage("请检查网路后重试！");
        }
        

    }
    public function ServiceDelete($id)
    {
        $mode = new WjModel();
        if ($mode -> where("id = $id") ->delete()) {
            alertMessage("删除成功！");
        } else {
            alertMessage("请检查网路后重试！");
        }
    }
    public function addOneDown() {
        $mode = new WjModel();
        $post = getPost();

        $mode -> rsName = $post['gallery_title'];
        $mode -> rsType = $post['type'];
        $mode -> rsWay  = $post['gallery_file'];
        $mode -> rsDate = date("Y-m-d");
        if ($mode -> add()) {
            alertMessage("添加成功！");
        } else {
            alertMessage("请检查网路后重试！");
        }
        

    }
    public function DownDelete($id)
    {
        $mode = new WjModel();
        if ($mode -> where("id = $id") ->delete()) {
            alertMessage("删除成功！");
        } else {
            alertMessage("请检查网路后重试！");
        }
    }


    /**
     * 上传文件的执行方法
     * @param $type 文件的类型（图片、文件、视频、其他）
     * @param $root 文件在服务器上保存的根目录
     * @param $source 文件上传时的操作
     * @return 返回文件在服务器上的存储相对路径
     */
    private function doUpload($source) {
        $upload = new \Think\Upload();
        $upload->maxSize = 20000000;
        $upload->exts = array("txt", "doc", "docx", "ppt", "pptx", "xls", "xlsx", "wps", "pdf");
        $upload->rootPath = "./Uploads/Regulation";
        $upload->savePath = '/';
        $info = $upload->uploadOne($source);
        if (!$info) {
            $this->error($upload->getError());
        } else {
            return ($upload->rootPath).$info['savepath'].$info['savename'];
        }
    }
}