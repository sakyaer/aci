<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<div class='panel panel-default '>
    <div class='panel-heading'>
        <i class='fa fa-table'></i> 园所信息管理 查看信息 
        <div class='panel-tools'>
            <div class='btn-group'>
            	<a class="btn " href="<?php echo base_url('adminpanel/school')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
            </div>
        </div>
    </div>
    <div class='panel-body '>
<div class="form-horizontal"  >
	<fieldset>
        <legend>基本信息</legend>
     
  	  	
	<div class="form-group">
				<label for="SchoolName" class="col-sm-2 control-label form-control-static">园所名称</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['SchoolName'])?$data_info['SchoolName']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="SchoolCode" class="col-sm-2 control-label form-control-static">园所编码</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['SchoolCode'])?$data_info['SchoolCode']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="DistrinctId" class="col-sm-2 control-label form-control-static">区县ID</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['DistrinctId'])?$data_info['DistrinctId']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="SchoolLevelId" class="col-sm-2 control-label form-control-static">园所类型ID</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['SchoolLevelId'])?$data_info['SchoolLevelId']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="OwnershipId" class="col-sm-2 control-label form-control-static">所有制ID</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['OwnershipId'])?$data_info['OwnershipId']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="TypeId" class="col-sm-2 control-label form-control-static">制别ID</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['TypeId'])?$data_info['TypeId']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="KidNumber" class="col-sm-2 control-label form-control-static">儿童数量</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['KidNumber'])?$data_info['KidNumber']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="TelPhone" class="col-sm-2 control-label form-control-static">园所电话</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['TelPhone'])?$data_info['TelPhone']:'' ?>
				</div>
			</div>
	    </fieldset>
	<fieldset>
        <legend>高级信息</legend>
     
  	  	
	<div class="form-group">
				<label for="Address" class="col-sm-2 control-label form-control-static">园所地址</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['Address'])?$data_info['Address']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="QQ" class="col-sm-2 control-label form-control-static">联系人QQ</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['QQ'])?$data_info['QQ']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="ContactName" class="col-sm-2 control-label form-control-static">联系人姓名</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['ContactName'])?$data_info['ContactName']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="ContactPhone" class="col-sm-2 control-label form-control-static">联系人电话</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['ContactPhone'])?$data_info['ContactPhone']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="DirectorName" class="col-sm-2 control-label form-control-static">园所负责人</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['DirectorName'])?$data_info['DirectorName']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="DirectorPhone" class="col-sm-2 control-label form-control-static">园所负责人手机</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['DirectorPhone'])?$data_info['DirectorPhone']:'' ?>
				</div>
			</div>
	    </fieldset>
	<fieldset>
        <legend>附加信息</legend>
     
  	  	
	<div class="form-group">
				<label for="DesignBedNumber" class="col-sm-2 control-label form-control-static">设计床位数</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['DesignBedNumber'])?$data_info['DesignBedNumber']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="ActualBedNumber" class="col-sm-2 control-label form-control-static">实际床位数</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['ActualBedNumber'])?$data_info['ActualBedNumber']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="BigClassNumber" class="col-sm-2 control-label form-control-static">大班数</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['BigClassNumber'])?$data_info['BigClassNumber']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="MidClassNumber" class="col-sm-2 control-label form-control-static">中班数</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['MidClassNumber'])?$data_info['MidClassNumber']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="SmallClassNumber" class="col-sm-2 control-label form-control-static">小班数</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['SmallClassNumber'])?$data_info['SmallClassNumber']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="CareClassNumber" class="col-sm-2 control-label form-control-static">托班数</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['CareClassNumber'])?$data_info['CareClassNumber']:'' ?>
				</div>
			</div>
	    </fieldset>
	<fieldset>
        <legend>可选信息</legend>
     
  	  	
	<div class="form-group">
				<label for="SchoolArea" class="col-sm-2 control-label form-control-static">占地面积</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['SchoolArea'])?$data_info['SchoolArea']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="GreenArea" class="col-sm-2 control-label form-control-static">绿化面积</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['GreenArea'])?$data_info['GreenArea']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="IndoorArea" class="col-sm-2 control-label form-control-static">室内面积</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['IndoorArea'])?$data_info['IndoorArea']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="OutdoorArea" class="col-sm-2 control-label form-control-static">室外面积</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['OutdoorArea'])?$data_info['OutdoorArea']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="ActivityArea" class="col-sm-2 control-label form-control-static">活动室面积</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['ActivityArea'])?$data_info['ActivityArea']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="BedroomArea" class="col-sm-2 control-label form-control-static">寝室面积</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['BedroomArea'])?$data_info['BedroomArea']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="KitchenArea" class="col-sm-2 control-label form-control-static">厨房面积</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['KitchenArea'])?$data_info['KitchenArea']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="NurseOfficeArea" class="col-sm-2 control-label form-control-static">保健室面积</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['NurseOfficeArea'])?$data_info['NurseOfficeArea']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="IsolationRoomArea" class="col-sm-2 control-label form-control-static">隔离室面积</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['IsolationRoomArea'])?$data_info['IsolationRoomArea']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="MultiFunctionHallArea" class="col-sm-2 control-label form-control-static">多功能厅面积</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['MultiFunctionHallArea'])?$data_info['MultiFunctionHallArea']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="LanguageLabArea" class="col-sm-2 control-label form-control-static">语音室面积</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['LanguageLabArea'])?$data_info['LanguageLabArea']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="ComputerRoomArea" class="col-sm-2 control-label form-control-static">微机室面积</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['ComputerRoomArea'])?$data_info['ComputerRoomArea']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="SchoolEnvironment" class="col-sm-2 control-label form-control-static">园区环境</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['SchoolEnvironment'])?$data_info['SchoolEnvironment']:'' ?>
				</div>
			</div>
	    </fieldset>
	</div>
</div>
</div>
