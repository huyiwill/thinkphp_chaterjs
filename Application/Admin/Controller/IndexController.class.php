<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;

use Admin\Model\ShopModel;
use Think\Controller;

class IndexController extends Controller{
    private $m_shop;

    public function __construct(){
        parent::__construct();
        header("Content-type:text/html;charset=utf-8");
        $this->m_shop = new ShopModel();
    }

    public function index(){
        $this->display();
    }

    /**
     * 订单列表
     */
    public function order_list(){
        $order_dada = $this->m_shop->OrderList(isset($_GET['p']) ? $_GET['p'] : 1);
        $this->assign('order_data', $order_dada['order_data']);
        $this->assign('page', $order_dada['show']);
        $this->display('order_list');
    }

    /**
     * 订单详情
     */
    public function order_detail(){
        $order_id    = I('get.id');
        $detail_data = $this->m_shop->OrderDetail($order_id);
        if(!is_array($detail_data)){
            redirect(U('Admin/Index/order_list', '', ''), 2, '正在跳转，请稍候......');
        }
        $this->assign('detail_data', $detail_data[0]);
        $this->display('order_detail');
    }

    /**
     * 订单导出
     */
    public function export_order(){
        $this->m_shop->export();
    }
}