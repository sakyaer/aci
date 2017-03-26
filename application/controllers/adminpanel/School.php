<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * AutoCodeIgniter.com
 *
 * 基于CodeIgniter核心模块自动生成程序
 *
 * 源项目		AutoCodeIgniter
 * 作者：		AutoCodeIgniter.com Dev Team EMAIL:hubinjie@outlook.com QQ:5516448
 * 版权：		Copyright (c) 2015 , AutoCodeIgniter com.
 * 项目名称：园所信息管理 
 * 版本号：1 
 * 最后生成时间：2017-03-22 00:40:27 
 */
class School extends Admin_Controller {
	
    var $method_config;
    function __construct()
	{
		parent::__construct();
		$this->load->model(array('school_model'));
        $this->load->helper(array('auto_codeIgniter_helper','array'));
  
  
        //保证排序安全性
        $this->method_config['sort_field'] = array(
										'schoolcode'=>'SchoolCode',
										'distrinctid'=>'DistrinctId',
										'schoollevelid'=>'SchoolLevelId',
										'ownershipid'=>'OwnershipId',
										'typeid'=>'TypeId',
										'kidnumber'=>'KidNumber',
										);
	}
    
    /**
     * 默认首页列表
     * @param int $pageno 当前页码
     * @return void
     */
    function index($page_no=0,$sort_id=0)
    {
    	$page_no = max(intval($page_no),1);
        
        $orderby = "school_id desc";
        $dir = $order=  NULL;
		$order=isset($_GET['order'])?safe_replace(trim($_GET['order'])):'';
		$dir=isset($_GET['dir'])?safe_replace(trim($_GET['dir'])):'asc';
        
        if(trim($order)!="")
        {
        	//如果找到得
        	if(isset($this->method_config['sort_field'][strtolower($order)]))
            {
            	if(strtolower($dir)=="asc")
            		$orderby = $this->method_config['sort_field'][strtolower($order)]." asc," .$orderby;
                 else
            		$orderby = $this->method_config['sort_field'][strtolower($order)]." desc," .$orderby;
            }
        }
                
        $where ="";
        $_arr = NULL;//从URL GET
        if (isset($_GET['dosubmit'])) {
        	$where_arr = NULL;
			$_arr['keyword'] =isset($_GET['keyword'])?safe_replace(trim($_GET['keyword'])):'';
			if($_arr['keyword']!="") $where_arr[] = "concat(SchoolName,DirectorName) like '%{$_arr['keyword']}%'";
                
			$_arr['DistrinctId'] = isset($_GET["DistrinctId"])?trim(safe_replace($_GET["DistrinctId"])):'';
        	if($_arr['DistrinctId']!="") $where_arr[] = "DistrinctId = '".$_arr['DistrinctId']."'";

                
        
		        
        	
        	$_arr['SchoolCode_1'] =isset($_GET['SchoolCode_1'])?intval($_GET['SchoolCode_1']):'';
        	$_arr['SchoolCode_2'] =isset($_GET['SchoolCode_2'])?intval($_GET['SchoolCode_2']):'';
            if($_arr['SchoolCode_1']!="") $where_arr[] = "(SchoolCode >= ".$_arr['SchoolCode_1'].")";
        	if($_arr['SchoolCode_2']!="") $where_arr[] = "(SchoolCode <= ".$_arr['SchoolCode_2'].")";
        	if($where_arr)$where = implode(" and ",$where_arr);
        }

        	$data_list = $this->school_model->listinfo($where,'*',$orderby , $page_no, $this->school_model->page_size,'',$this->school_model->page_size,page_list_url('adminpanel/school/index',true));
        if($data_list)
        {
            	foreach($data_list as $k=>$v)
            	{
					$data_list[$k] = $this->_process_datacorce_value($v);
            	}
        }
    	$this->view('lists',array('require_js'=>true,'data_info'=>$_arr,'order'=>$order,'dir'=>$dir,'data_list'=>$data_list,'pages'=>$this->school_model->pages));
    }
    
    /**
     * 处理数据源结
     * @param array v 
     * @return array
     */
    function _process_datacorce_value($v,$is_edit_model=false)
    {
         return $v;
    }
     /**
     * 新增数据
     * @param AJAX POST 
     * @return void
     */
    function add()
    {
    	//如果是AJAX请求
    	if($this->input->is_ajax_request())
		{
        	//接收POST参数
			$_arr['SchoolName'] = isset($_POST["SchoolName"])?trim(safe_replace($_POST["SchoolName"])):exit(json_encode(array('status'=>false,'tips'=>'园所名称 不可以为空')));
			if($_arr['SchoolName']=='')exit(json_encode(array('status'=>false,'tips'=>'园所名称 不可以为空')));
			$_arr['SchoolCode'] = isset($_POST["SchoolCode"])?trim(safe_replace($_POST["SchoolCode"])):exit(json_encode(array('status'=>false,'tips'=>'园所编码 不可以为空')));
			if($_arr['SchoolCode']=='')exit(json_encode(array('status'=>false,'tips'=>'园所编码 不可以为空')));
			if($_arr['SchoolCode']!=''){
			if(!is_number($_arr['SchoolCode']))exit(json_encode(array('status'=>false,'tips'=>'园所编码 输入格式不正确')));
			}
			$_arr['DistrinctId'] = isset($_POST["DistrinctId"])?trim(safe_replace($_POST["DistrinctId"])):exit(json_encode(array('status'=>false,'tips'=>'区县ID 不可以为空')));
			if($_arr['DistrinctId']=='')exit(json_encode(array('status'=>false,'tips'=>'区县ID 不可以为空')));
			$_arr['SchoolLevelId'] = isset($_POST["SchoolLevelId"])?trim(safe_replace($_POST["SchoolLevelId"])):exit(json_encode(array('status'=>false,'tips'=>'园所类型ID 不可以为空')));
			if($_arr['SchoolLevelId']=='')exit(json_encode(array('status'=>false,'tips'=>'园所类型ID 不可以为空')));
			$_arr['OwnershipId'] = isset($_POST["OwnershipId"])?trim(safe_replace($_POST["OwnershipId"])):exit(json_encode(array('status'=>false,'tips'=>'所有制ID 不可以为空')));
			if($_arr['OwnershipId']=='')exit(json_encode(array('status'=>false,'tips'=>'所有制ID 不可以为空')));
			$_arr['TypeId'] = isset($_POST["TypeId"])?trim(safe_replace($_POST["TypeId"])):exit(json_encode(array('status'=>false,'tips'=>'制别ID 不可以为空')));
			if($_arr['TypeId']=='')exit(json_encode(array('status'=>false,'tips'=>'制别ID 不可以为空')));
			$_arr['KidNumber'] = isset($_POST["KidNumber"])?trim(safe_replace($_POST["KidNumber"])):exit(json_encode(array('status'=>false,'tips'=>'儿童数量 不可以为空')));
			if($_arr['KidNumber']=='')exit(json_encode(array('status'=>false,'tips'=>'儿童数量 不可以为空')));
			if($_arr['KidNumber']!=''){
			if(!is_number($_arr['KidNumber']))exit(json_encode(array('status'=>false,'tips'=>'儿童数量 输入格式不正确')));
			}
			$_arr['TelPhone'] = isset($_POST["TelPhone"])?trim(safe_replace($_POST["TelPhone"])):exit(json_encode(array('status'=>false,'tips'=>'园所电话 不可以为空')));
			if($_arr['TelPhone']=='')exit(json_encode(array('status'=>false,'tips'=>'园所电话 不可以为空')));
			$_arr['Address'] = isset($_POST["Address"])?trim(safe_replace($_POST["Address"])):'';
			$_arr['QQ'] = isset($_POST["QQ"])?trim(safe_replace($_POST["QQ"])):'';
			if($_arr['QQ']!=''){
			if(!is_number($_arr['QQ']))exit(json_encode(array('status'=>false,'tips'=>'联系人QQ 输入格式不正确')));
			}
			$_arr['ContactName'] = isset($_POST["ContactName"])?trim(safe_replace($_POST["ContactName"])):exit(json_encode(array('status'=>false,'tips'=>'联系人姓名 不可以为空')));
			if($_arr['ContactName']=='')exit(json_encode(array('status'=>false,'tips'=>'联系人姓名 不可以为空')));
			$_arr['ContactPhone'] = isset($_POST["ContactPhone"])?trim(safe_replace($_POST["ContactPhone"])):exit(json_encode(array('status'=>false,'tips'=>'联系人电话 不可以为空')));
			if($_arr['ContactPhone']=='')exit(json_encode(array('status'=>false,'tips'=>'联系人电话 不可以为空')));
			$_arr['DirectorName'] = isset($_POST["DirectorName"])?trim(safe_replace($_POST["DirectorName"])):exit(json_encode(array('status'=>false,'tips'=>'园所负责人 不可以为空')));
			if($_arr['DirectorName']=='')exit(json_encode(array('status'=>false,'tips'=>'园所负责人 不可以为空')));
			$_arr['DirectorPhone'] = isset($_POST["DirectorPhone"])?trim(safe_replace($_POST["DirectorPhone"])):exit(json_encode(array('status'=>false,'tips'=>'园所负责人手机 不可以为空')));
			if($_arr['DirectorPhone']=='')exit(json_encode(array('status'=>false,'tips'=>'园所负责人手机 不可以为空')));
			$_arr['DesignBedNumber'] = isset($_POST["DesignBedNumber"])?trim(safe_replace($_POST["DesignBedNumber"])):'';
			if($_arr['DesignBedNumber']!=''){
			if(!is_number($_arr['DesignBedNumber']))exit(json_encode(array('status'=>false,'tips'=>'设计床位数 输入格式不正确')));
			}
			$_arr['ActualBedNumber'] = isset($_POST["ActualBedNumber"])?trim(safe_replace($_POST["ActualBedNumber"])):'';
			if($_arr['ActualBedNumber']!=''){
			if(!is_number($_arr['ActualBedNumber']))exit(json_encode(array('status'=>false,'tips'=>'实际床位数 输入格式不正确')));
			}
			$_arr['BigClassNumber'] = isset($_POST["BigClassNumber"])?trim(safe_replace($_POST["BigClassNumber"])):'';
			if($_arr['BigClassNumber']!=''){
			if(!is_number($_arr['BigClassNumber']))exit(json_encode(array('status'=>false,'tips'=>'大班数 输入格式不正确')));
			}
			$_arr['MidClassNumber'] = isset($_POST["MidClassNumber"])?trim(safe_replace($_POST["MidClassNumber"])):'';
			if($_arr['MidClassNumber']!=''){
			if(!is_number($_arr['MidClassNumber']))exit(json_encode(array('status'=>false,'tips'=>'中班数 输入格式不正确')));
			}
			$_arr['SmallClassNumber'] = isset($_POST["SmallClassNumber"])?trim(safe_replace($_POST["SmallClassNumber"])):'';
			if($_arr['SmallClassNumber']!=''){
			if(!is_number($_arr['SmallClassNumber']))exit(json_encode(array('status'=>false,'tips'=>'小班数 输入格式不正确')));
			}
			$_arr['CareClassNumber'] = isset($_POST["CareClassNumber"])?trim(safe_replace($_POST["CareClassNumber"])):'';
			if($_arr['CareClassNumber']!=''){
			if(!is_number($_arr['CareClassNumber']))exit(json_encode(array('status'=>false,'tips'=>'托班数 输入格式不正确')));
			}
			$_arr['SchoolArea'] = isset($_POST["SchoolArea"])?trim(safe_replace($_POST["SchoolArea"])):'';
			if($_arr['SchoolArea']!=''){
			if(!is_price($_arr['SchoolArea']))exit(json_encode(array('status'=>false,'tips'=>'占地面积 输入格式不正确')));
			}
			$_arr['GreenArea'] = isset($_POST["GreenArea"])?trim(safe_replace($_POST["GreenArea"])):'';
			if($_arr['GreenArea']!=''){
			if(!is_price($_arr['GreenArea']))exit(json_encode(array('status'=>false,'tips'=>'绿化面积 输入格式不正确')));
			}
			$_arr['IndoorArea'] = isset($_POST["IndoorArea"])?trim(safe_replace($_POST["IndoorArea"])):'';
			if($_arr['IndoorArea']!=''){
			if(!is_price($_arr['IndoorArea']))exit(json_encode(array('status'=>false,'tips'=>'室内面积 输入格式不正确')));
			}
			$_arr['OutdoorArea'] = isset($_POST["OutdoorArea"])?trim(safe_replace($_POST["OutdoorArea"])):'';
			if($_arr['OutdoorArea']!=''){
			if(!is_price($_arr['OutdoorArea']))exit(json_encode(array('status'=>false,'tips'=>'室外面积 输入格式不正确')));
			}
			$_arr['ActivityArea'] = isset($_POST["ActivityArea"])?trim(safe_replace($_POST["ActivityArea"])):'';
			if($_arr['ActivityArea']!=''){
			if(!is_price($_arr['ActivityArea']))exit(json_encode(array('status'=>false,'tips'=>'活动室面积 输入格式不正确')));
			}
			$_arr['BedroomArea'] = isset($_POST["BedroomArea"])?trim(safe_replace($_POST["BedroomArea"])):'';
			if($_arr['BedroomArea']!=''){
			if(!is_price($_arr['BedroomArea']))exit(json_encode(array('status'=>false,'tips'=>'寝室面积 输入格式不正确')));
			}
			$_arr['KitchenArea'] = isset($_POST["KitchenArea"])?trim(safe_replace($_POST["KitchenArea"])):'';
			if($_arr['KitchenArea']!=''){
			if(!is_price($_arr['KitchenArea']))exit(json_encode(array('status'=>false,'tips'=>'厨房面积 输入格式不正确')));
			}
			$_arr['NurseOfficeArea'] = isset($_POST["NurseOfficeArea"])?trim(safe_replace($_POST["NurseOfficeArea"])):'';
			if($_arr['NurseOfficeArea']!=''){
			if(!is_price($_arr['NurseOfficeArea']))exit(json_encode(array('status'=>false,'tips'=>'保健室面积 输入格式不正确')));
			}
			$_arr['IsolationRoomArea'] = isset($_POST["IsolationRoomArea"])?trim(safe_replace($_POST["IsolationRoomArea"])):'';
			if($_arr['IsolationRoomArea']!=''){
			if(!is_price($_arr['IsolationRoomArea']))exit(json_encode(array('status'=>false,'tips'=>'隔离室面积 输入格式不正确')));
			}
			$_arr['MultiFunctionHallArea'] = isset($_POST["MultiFunctionHallArea"])?trim(safe_replace($_POST["MultiFunctionHallArea"])):'';
			if($_arr['MultiFunctionHallArea']!=''){
			if(!is_price($_arr['MultiFunctionHallArea']))exit(json_encode(array('status'=>false,'tips'=>'多功能厅面积 输入格式不正确')));
			}
			$_arr['LanguageLabArea'] = isset($_POST["LanguageLabArea"])?trim(safe_replace($_POST["LanguageLabArea"])):'';
			if($_arr['LanguageLabArea']!=''){
			if(!is_price($_arr['LanguageLabArea']))exit(json_encode(array('status'=>false,'tips'=>'语音室面积 输入格式不正确')));
			}
			$_arr['ComputerRoomArea'] = isset($_POST["ComputerRoomArea"])?trim(safe_replace($_POST["ComputerRoomArea"])):'';
			if($_arr['ComputerRoomArea']!=''){
			if(!is_price($_arr['ComputerRoomArea']))exit(json_encode(array('status'=>false,'tips'=>'微机室面积 输入格式不正确')));
			}
			$_arr['SchoolEnvironment'] = isset($_POST["SchoolEnvironment"])?trim(safe_replace($_POST["SchoolEnvironment"])):'';
			
            $new_id = $this->school_model->insert($_arr);
            if($new_id)
            {
				exit(json_encode(array('status'=>true,'tips'=>'信息新增成功','new_id'=>$new_id)));
            }else
            {
            	exit(json_encode(array('status'=>false,'tips'=>'信息新增失败','new_id'=>0)));
            }
        }else
        {
        	$this->view('edit',array('require_js'=>true,'is_edit'=>false,'id'=>0,'data_info'=>$this->school_model->default_info()));
        }
    }
     /**
     * 删除单个数据
     * @param int id 
     * @return void
     */
    function delete_one($id=0)
    {
    	$id = intval($id);
        $data_info =$this->school_model->get_one(array('school_id'=>$id));
        if(!$data_info)$this->showmessage('信息不存在');
        $status = $this->school_model->delete(array('school_id'=>$id));
        if($status)
        {
        	$this->showmessage('删除成功');
        }else
        	$this->showmessage('删除失败');
    }

    /**
     * 删除选中数据
     * @param post pid 
     * @return void
     */
    function delete_all()
    {
        if(isset($_POST))
		{
			$pidarr = isset($_POST['pid']) ? $_POST['pid'] : $this->showmessage('无效参数', HTTP_REFERER);
			$where = $this->school_model->to_sqls($pidarr, '', 'school_id');
			$status = $this->school_model->delete($where);
			if($status)
			{
				$this->showmessage('操作成功', HTTP_REFERER);
			}else 
			{
				$this->showmessage('操作失败');
			}
		}
    }
     /**
     * 修改数据
     * @param int id 
     * @return void
     */
    function edit($id=0)
    {
    	$id = intval($id);
        
        $data_info =$this->school_model->get_one(array('school_id'=>$id));
    	//如果是AJAX请求
    	if($this->input->is_ajax_request())
		{
        	if(!$data_info)exit(json_encode(array('status'=>false,'tips'=>'信息不存在')));
        	//接收POST参数
			$_arr['SchoolName'] = isset($_POST["SchoolName"])?trim(safe_replace($_POST["SchoolName"])):exit(json_encode(array('status'=>false,'tips'=>'园所名称 不可以为空')));
			if($_arr['SchoolName']=='')exit(json_encode(array('status'=>false,'tips'=>'园所名称 不可以为空')));
			$_arr['SchoolCode'] = isset($_POST["SchoolCode"])?trim(safe_replace($_POST["SchoolCode"])):exit(json_encode(array('status'=>false,'tips'=>'园所编码 不可以为空')));
			if($_arr['SchoolCode']=='')exit(json_encode(array('status'=>false,'tips'=>'园所编码 不可以为空')));
			if($_arr['SchoolCode']!=''){
			if(!is_number($_arr['SchoolCode']))exit(json_encode(array('status'=>false,'tips'=>'园所编码 输入格式不正确')));
			}
			$_arr['DistrinctId'] = isset($_POST["DistrinctId"])?trim(safe_replace($_POST["DistrinctId"])):exit(json_encode(array('status'=>false,'tips'=>'区县ID 不可以为空')));
			if($_arr['DistrinctId']=='')exit(json_encode(array('status'=>false,'tips'=>'区县ID 不可以为空')));
			$_arr['SchoolLevelId'] = isset($_POST["SchoolLevelId"])?trim(safe_replace($_POST["SchoolLevelId"])):exit(json_encode(array('status'=>false,'tips'=>'园所类型ID 不可以为空')));
			if($_arr['SchoolLevelId']=='')exit(json_encode(array('status'=>false,'tips'=>'园所类型ID 不可以为空')));
			$_arr['OwnershipId'] = isset($_POST["OwnershipId"])?trim(safe_replace($_POST["OwnershipId"])):exit(json_encode(array('status'=>false,'tips'=>'所有制ID 不可以为空')));
			if($_arr['OwnershipId']=='')exit(json_encode(array('status'=>false,'tips'=>'所有制ID 不可以为空')));
			$_arr['TypeId'] = isset($_POST["TypeId"])?trim(safe_replace($_POST["TypeId"])):exit(json_encode(array('status'=>false,'tips'=>'制别ID 不可以为空')));
			if($_arr['TypeId']=='')exit(json_encode(array('status'=>false,'tips'=>'制别ID 不可以为空')));
			$_arr['KidNumber'] = isset($_POST["KidNumber"])?trim(safe_replace($_POST["KidNumber"])):exit(json_encode(array('status'=>false,'tips'=>'儿童数量 不可以为空')));
			if($_arr['KidNumber']=='')exit(json_encode(array('status'=>false,'tips'=>'儿童数量 不可以为空')));
			if($_arr['KidNumber']!=''){
			if(!is_number($_arr['KidNumber']))exit(json_encode(array('status'=>false,'tips'=>'儿童数量 输入格式不正确')));
			}
			$_arr['TelPhone'] = isset($_POST["TelPhone"])?trim(safe_replace($_POST["TelPhone"])):exit(json_encode(array('status'=>false,'tips'=>'园所电话 不可以为空')));
			if($_arr['TelPhone']=='')exit(json_encode(array('status'=>false,'tips'=>'园所电话 不可以为空')));
			$_arr['Address'] = isset($_POST["Address"])?trim(safe_replace($_POST["Address"])):'';
			$_arr['QQ'] = isset($_POST["QQ"])?trim(safe_replace($_POST["QQ"])):'';
			if($_arr['QQ']!=''){
			if(!is_number($_arr['QQ']))exit(json_encode(array('status'=>false,'tips'=>'联系人QQ 输入格式不正确')));
			}
			$_arr['ContactName'] = isset($_POST["ContactName"])?trim(safe_replace($_POST["ContactName"])):exit(json_encode(array('status'=>false,'tips'=>'联系人姓名 不可以为空')));
			if($_arr['ContactName']=='')exit(json_encode(array('status'=>false,'tips'=>'联系人姓名 不可以为空')));
			$_arr['ContactPhone'] = isset($_POST["ContactPhone"])?trim(safe_replace($_POST["ContactPhone"])):exit(json_encode(array('status'=>false,'tips'=>'联系人电话 不可以为空')));
			if($_arr['ContactPhone']=='')exit(json_encode(array('status'=>false,'tips'=>'联系人电话 不可以为空')));
			$_arr['DirectorName'] = isset($_POST["DirectorName"])?trim(safe_replace($_POST["DirectorName"])):exit(json_encode(array('status'=>false,'tips'=>'园所负责人 不可以为空')));
			if($_arr['DirectorName']=='')exit(json_encode(array('status'=>false,'tips'=>'园所负责人 不可以为空')));
			$_arr['DirectorPhone'] = isset($_POST["DirectorPhone"])?trim(safe_replace($_POST["DirectorPhone"])):exit(json_encode(array('status'=>false,'tips'=>'园所负责人手机 不可以为空')));
			if($_arr['DirectorPhone']=='')exit(json_encode(array('status'=>false,'tips'=>'园所负责人手机 不可以为空')));
			$_arr['DesignBedNumber'] = isset($_POST["DesignBedNumber"])?trim(safe_replace($_POST["DesignBedNumber"])):'';
			if($_arr['DesignBedNumber']!=''){
			if(!is_number($_arr['DesignBedNumber']))exit(json_encode(array('status'=>false,'tips'=>'设计床位数 输入格式不正确')));
			}
			$_arr['ActualBedNumber'] = isset($_POST["ActualBedNumber"])?trim(safe_replace($_POST["ActualBedNumber"])):'';
			if($_arr['ActualBedNumber']!=''){
			if(!is_number($_arr['ActualBedNumber']))exit(json_encode(array('status'=>false,'tips'=>'实际床位数 输入格式不正确')));
			}
			$_arr['BigClassNumber'] = isset($_POST["BigClassNumber"])?trim(safe_replace($_POST["BigClassNumber"])):'';
			if($_arr['BigClassNumber']!=''){
			if(!is_number($_arr['BigClassNumber']))exit(json_encode(array('status'=>false,'tips'=>'大班数 输入格式不正确')));
			}
			$_arr['MidClassNumber'] = isset($_POST["MidClassNumber"])?trim(safe_replace($_POST["MidClassNumber"])):'';
			if($_arr['MidClassNumber']!=''){
			if(!is_number($_arr['MidClassNumber']))exit(json_encode(array('status'=>false,'tips'=>'中班数 输入格式不正确')));
			}
			$_arr['SmallClassNumber'] = isset($_POST["SmallClassNumber"])?trim(safe_replace($_POST["SmallClassNumber"])):'';
			if($_arr['SmallClassNumber']!=''){
			if(!is_number($_arr['SmallClassNumber']))exit(json_encode(array('status'=>false,'tips'=>'小班数 输入格式不正确')));
			}
			$_arr['CareClassNumber'] = isset($_POST["CareClassNumber"])?trim(safe_replace($_POST["CareClassNumber"])):'';
			if($_arr['CareClassNumber']!=''){
			if(!is_number($_arr['CareClassNumber']))exit(json_encode(array('status'=>false,'tips'=>'托班数 输入格式不正确')));
			}
			$_arr['SchoolArea'] = isset($_POST["SchoolArea"])?trim(safe_replace($_POST["SchoolArea"])):'';
			if($_arr['SchoolArea']!=''){
			if(!is_price($_arr['SchoolArea']))exit(json_encode(array('status'=>false,'tips'=>'占地面积 输入格式不正确')));
			}
			$_arr['GreenArea'] = isset($_POST["GreenArea"])?trim(safe_replace($_POST["GreenArea"])):'';
			if($_arr['GreenArea']!=''){
			if(!is_price($_arr['GreenArea']))exit(json_encode(array('status'=>false,'tips'=>'绿化面积 输入格式不正确')));
			}
			$_arr['IndoorArea'] = isset($_POST["IndoorArea"])?trim(safe_replace($_POST["IndoorArea"])):'';
			if($_arr['IndoorArea']!=''){
			if(!is_price($_arr['IndoorArea']))exit(json_encode(array('status'=>false,'tips'=>'室内面积 输入格式不正确')));
			}
			$_arr['OutdoorArea'] = isset($_POST["OutdoorArea"])?trim(safe_replace($_POST["OutdoorArea"])):'';
			if($_arr['OutdoorArea']!=''){
			if(!is_price($_arr['OutdoorArea']))exit(json_encode(array('status'=>false,'tips'=>'室外面积 输入格式不正确')));
			}
			$_arr['ActivityArea'] = isset($_POST["ActivityArea"])?trim(safe_replace($_POST["ActivityArea"])):'';
			if($_arr['ActivityArea']!=''){
			if(!is_price($_arr['ActivityArea']))exit(json_encode(array('status'=>false,'tips'=>'活动室面积 输入格式不正确')));
			}
			$_arr['BedroomArea'] = isset($_POST["BedroomArea"])?trim(safe_replace($_POST["BedroomArea"])):'';
			if($_arr['BedroomArea']!=''){
			if(!is_price($_arr['BedroomArea']))exit(json_encode(array('status'=>false,'tips'=>'寝室面积 输入格式不正确')));
			}
			$_arr['KitchenArea'] = isset($_POST["KitchenArea"])?trim(safe_replace($_POST["KitchenArea"])):'';
			if($_arr['KitchenArea']!=''){
			if(!is_price($_arr['KitchenArea']))exit(json_encode(array('status'=>false,'tips'=>'厨房面积 输入格式不正确')));
			}
			$_arr['NurseOfficeArea'] = isset($_POST["NurseOfficeArea"])?trim(safe_replace($_POST["NurseOfficeArea"])):'';
			if($_arr['NurseOfficeArea']!=''){
			if(!is_price($_arr['NurseOfficeArea']))exit(json_encode(array('status'=>false,'tips'=>'保健室面积 输入格式不正确')));
			}
			$_arr['IsolationRoomArea'] = isset($_POST["IsolationRoomArea"])?trim(safe_replace($_POST["IsolationRoomArea"])):'';
			if($_arr['IsolationRoomArea']!=''){
			if(!is_price($_arr['IsolationRoomArea']))exit(json_encode(array('status'=>false,'tips'=>'隔离室面积 输入格式不正确')));
			}
			$_arr['MultiFunctionHallArea'] = isset($_POST["MultiFunctionHallArea"])?trim(safe_replace($_POST["MultiFunctionHallArea"])):'';
			if($_arr['MultiFunctionHallArea']!=''){
			if(!is_price($_arr['MultiFunctionHallArea']))exit(json_encode(array('status'=>false,'tips'=>'多功能厅面积 输入格式不正确')));
			}
			$_arr['LanguageLabArea'] = isset($_POST["LanguageLabArea"])?trim(safe_replace($_POST["LanguageLabArea"])):'';
			if($_arr['LanguageLabArea']!=''){
			if(!is_price($_arr['LanguageLabArea']))exit(json_encode(array('status'=>false,'tips'=>'语音室面积 输入格式不正确')));
			}
			$_arr['ComputerRoomArea'] = isset($_POST["ComputerRoomArea"])?trim(safe_replace($_POST["ComputerRoomArea"])):'';
			if($_arr['ComputerRoomArea']!=''){
			if(!is_price($_arr['ComputerRoomArea']))exit(json_encode(array('status'=>false,'tips'=>'微机室面积 输入格式不正确')));
			}
			$_arr['SchoolEnvironment'] = isset($_POST["SchoolEnvironment"])?trim(safe_replace($_POST["SchoolEnvironment"])):'';
			
            $status = $this->school_model->update($_arr,array('school_id'=>$id));
            if($status)
            {
				exit(json_encode(array('status'=>true,'tips'=>'信息修改成功')));
            }else
            {
            	exit(json_encode(array('status'=>false,'tips'=>'信息修改失败')));
            }
        }else
        {
        	if(!$data_info)$this->showmessage('信息不存在');
            $data_info = $this->_process_datacorce_value($data_info,true);
        	$this->view('edit',array('require_js'=>true,'data_info'=>$data_info,'is_edit'=>true,'id'=>$id));
        }
    }
 
  
     /**
     * 只读查看数据
     * @param int id 
     * @return void
     */
    function readonly($id=0)
    {
    	$id = intval($id);
        $data_info =$this->school_model->get_one(array('school_id'=>$id));
        if(!$data_info)$this->showmessage('信息不存在');
		$data_info = $this->_process_datacorce_value($data_info);
        
        $this->view('readonly',array('require_js'=>true,'data_info'=>$data_info));
    }

}

// END school class

/* End of file school.php */
/* Location: ./school.php */
?>