<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * AutoCodeIgniter.com
 *
 * 基于CodeIgniter核心模块自动生成程序
 *
 * 源项目		AutoCodeIgniter
 * 作者：		AutoCodeIgniter.com Dev Team
 * 版权：		Copyright (c) 2015 , AutoCodeIgniter com.
 * 项目名称：园所信息管理 MODEL
 * 版本号：1 
 * 最后生成时间：2017-03-22 00:40:27 
 */
class School_model extends Base_Model {
	
    var $page_size = 10;
    function __construct()
	{
    	$this->db_tablepre = 't_aci_';
    	$this->table_name = 'school';
		parent::__construct();
	}
    
    /**
     * 初始化默认值
     * @return array
     */
    function default_info()
    {
    	return array(
		'school_id'=>0,
		'SchoolName'=>'',
		'SchoolCode'=>'',
		'DistrinctId'=>'',
		'SchoolLevelId'=>'',
		'OwnershipId'=>'',
		'TypeId'=>'',
		'KidNumber'=>'',
		'TelPhone'=>'',
		'Address'=>'',
		'QQ'=>'',
		'ContactName'=>'',
		'ContactPhone'=>'',
		'DirectorName'=>'',
		'DirectorPhone'=>'',
		'DesignBedNumber'=>'',
		'ActualBedNumber'=>'',
		'BigClassNumber'=>'',
		'MidClassNumber'=>'',
		'SmallClassNumber'=>'',
		'CareClassNumber'=>'',
		'SchoolArea'=>'',
		'GreenArea'=>'',
		'IndoorArea'=>'',
		'OutdoorArea'=>'',
		'ActivityArea'=>'',
		'BedroomArea'=>'',
		'KitchenArea'=>'',
		'NurseOfficeArea'=>'',
		'IsolationRoomArea'=>'',
		'MultiFunctionHallArea'=>'',
		'LanguageLabArea'=>'',
		'ComputerRoomArea'=>'',
		'SchoolEnvironment'=>'',
		);
    }
    
    /**
     * 安装SQL表
     * @return void
     */
    function init()
    {
    	$this->query("CREATE TABLE  IF NOT EXISTS `t_aci_school`
(
`SchoolName` varchar(250) DEFAULT NULL COMMENT '园所名称',
`SchoolCode` int(11) DEFAULT '0' COMMENT '园所编码',
`DistrinctId` varchar(250) DEFAULT NULL COMMENT '区县ID',
`SchoolLevelId` varchar(250) DEFAULT NULL COMMENT '园所类型ID',
`OwnershipId` varchar(250) DEFAULT NULL COMMENT '所有制ID',
`TypeId` varchar(250) DEFAULT NULL COMMENT '制别ID',
`KidNumber` int(11) DEFAULT '0' COMMENT '儿童数量',
`TelPhone` varchar(250) DEFAULT NULL COMMENT '园所电话',
`Address` varchar(250) DEFAULT NULL COMMENT '园所地址',
`QQ` int(11) DEFAULT '0' COMMENT '联系人QQ',
`school_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
`ContactName` varchar(250) DEFAULT NULL COMMENT '联系人姓名',
`ContactPhone` varchar(250) DEFAULT NULL COMMENT '联系人电话',
`DirectorName` varchar(250) DEFAULT NULL COMMENT '园所负责人',
`DirectorPhone` varchar(250) DEFAULT NULL COMMENT '园所负责人手机',
`DesignBedNumber` int(11) DEFAULT '0' COMMENT '设计床位数',
`ActualBedNumber` int(11) DEFAULT '0' COMMENT '实际床位数',
`BigClassNumber` int(11) DEFAULT '0' COMMENT '大班数',
`MidClassNumber` int(11) DEFAULT '0' COMMENT '中班数',
`SmallClassNumber` int(11) DEFAULT '0' COMMENT '小班数',
`CareClassNumber` int(11) DEFAULT '0' COMMENT '托班数',
`SchoolArea` decimal(10,2) DEFAULT '0.00' COMMENT '占地面积',
`GreenArea` decimal(10,2) DEFAULT '0.00' COMMENT '绿化面积',
`IndoorArea` decimal(10,2) DEFAULT '0.00' COMMENT '室内面积',
`OutdoorArea` decimal(10,2) DEFAULT '0.00' COMMENT '室外面积',
`ActivityArea` decimal(10,2) DEFAULT '0.00' COMMENT '活动室面积',
`BedroomArea` decimal(10,2) DEFAULT '0.00' COMMENT '寝室面积',
`KitchenArea` decimal(10,2) DEFAULT '0.00' COMMENT '厨房面积',
`NurseOfficeArea` decimal(10,2) DEFAULT '0.00' COMMENT '保健室面积',
`IsolationRoomArea` decimal(10,2) DEFAULT '0.00' COMMENT '隔离室面积',
`MultiFunctionHallArea` decimal(10,2) DEFAULT '0.00' COMMENT '多功能厅面积',
`LanguageLabArea` decimal(10,2) DEFAULT '0.00' COMMENT '语音室面积',
`ComputerRoomArea` decimal(10,2) DEFAULT '0.00' COMMENT '微机室面积',
`SchoolEnvironment` varchar(250) DEFAULT NULL COMMENT '园区环境',
PRIMARY KEY (`school_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
");
    }
    
        }

// END school_model class

/* End of file school_model.php */
/* Location: ./school_model.php */
?>