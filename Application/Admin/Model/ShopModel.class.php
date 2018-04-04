<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/2
 * Time: 12:49
 */

namespace Admin\Model;

use Think\Model;
use Think\Page;

class ShopModel extends Model{
    //查询订单列表
    public function OrderList($p){
        $order      = M('order');
        $order_data = $order->page($p . ',1')->select();
        $count      = $order->count();
        $Page       = new Page($count, 1);
        $show       = $Page->show();

        return array(
            'order_data' => $order_data,
            'show'       => $show
        );
    }

    //订单详情信息
    public function OrderDetail($order_id){
        $sql = "select * from `order` a left join order_detail b on (a.id=b.sid) inner join goods c on (a.link_goods_id=c.goods_id) where a.id=" . $order_id;
        return $this->query($sql);
    }

    //订单列表全部
    public function OrderAll(){
        $order = M('order');
        return $order->select();
    }

    //导出订单列表
    public function export(){
        //导出Excels
        include './ThinkPHP/Library/PHPExcel/Classes/PHPExcel.php';

        //创建对象
        $excel = new \PHPExcel();

        //Excel表格式,这里简略写了8列
        $letter = array('A', 'B', 'C', 'D', 'E', 'F', 'F', 'G','H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'Z');
        //表头数组
        $tableheader = array('A', 'B', 'C', 'D', 'E', 'F', 'F', 'G','H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'Z');
        //填充表头信息
        for($i = 0; $i < count($tableheader); $i++){
            $excel->getActiveSheet()->setCellValue("$letter[$i]1", "$tableheader[$i]");
        }
        //在这里调用你要导出的数据  订单表中的基本信息
        $MsgModel = D("shop"); // 实例化Msg对象
        $list     = $MsgModel->OrderAll();
        $data = $list;
        //填充表格信息
        for($i = 2; $i <= count($data) + 1; $i++){
            $j = 0;
            foreach($data[$i - 2] as $key => $value){
                $excel->getActiveSheet()->setCellValue("$letter[$j]$i", "$value");
                $j++;
            }
        }
        //创建Excel输入对象
        $write = new \PHPExcel_Writer_Excel5($excel);
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
        header("Content-Type:application/force-download");
        header("Content-Type:application/vnd.ms-execl");
        header("Content-Type:application/octet-stream");
        header("Content-Type:application/download");
        header('Content-Disposition:attachment;filename="testdata.xls"');
        header("Content-Transfer-Encoding:binary");
        $write->save('php://output');
    }
}