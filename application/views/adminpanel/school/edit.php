<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<form class="form-horizontal" role="form" id="validateform" name="validateform" action="<?php echo base_url('adminpanel/school/edit')?>" >
	<div class='panel panel-default '>
		<div class='panel-heading'>
			<i class='fa fa-table'></i> 园所信息管理 修改信息
			<div class='panel-tools'>
				<div class='btn-group'>
					<a class="btn " href="<?php echo base_url('adminpanel/school')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
				</div>
			</div>
		</div>
		<div class='panel-body '>
								<fieldset>
						<legend>基本信息</legend>
													
	<div class="form-group">
				<label for="SchoolName" class="col-sm-2 control-label form-control-static">园所名称</label>
				<div class="col-sm-9 ">
					<input type="text" name="SchoolName"  id="SchoolName"  value='<?php echo isset($data_info['SchoolName'])?$data_info['SchoolName']:'' ?>'  class="form-control validate[required]"  placeholder="请输入园所名称" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="SchoolCode" class="col-sm-2 control-label form-control-static">园所编码</label>
				<div class="col-sm-9 ">
					<input type="number" name="SchoolCode"  id="SchoolCode"  value='<?php echo isset($data_info['SchoolCode'])?$data_info['SchoolCode']:'' ?>'   class="form-control  validate[required,custom[integer]]" placeholder="请输入园所编码" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="DistrinctId" class="col-sm-2 control-label form-control-static">区县ID</label>
				<div class="col-sm-9 ">
					<select class="form-control  validate[required]"  name="DistrinctId"  id="DistrinctId">
				<option value="">==请选择==</option>
								<option value='中山区' <?php if(isset($data_info['DistrinctId'])&&($data_info['DistrinctId']=='中山区')) { ?> selected="selected" <?php } ?>            >中山区</option>
				<option value='甘井子区' <?php if(isset($data_info['DistrinctId'])&&($data_info['DistrinctId']=='甘井子区')) { ?> selected="selected" <?php } ?>            >甘井子区</option>
				<option value='沙河口区' <?php if(isset($data_info['DistrinctId'])&&($data_info['DistrinctId']=='沙河口区')) { ?> selected="selected" <?php } ?>            >沙河口区</option>
				<option value='西岗区' <?php if(isset($data_info['DistrinctId'])&&($data_info['DistrinctId']=='西岗区')) { ?> selected="selected" <?php } ?>            >西岗区</option>
				<option value='金州区' <?php if(isset($data_info['DistrinctId'])&&($data_info['DistrinctId']=='金州区')) { ?> selected="selected" <?php } ?>            >金州区</option>
				<option value='普湾新区' <?php if(isset($data_info['DistrinctId'])&&($data_info['DistrinctId']=='普湾新区')) { ?> selected="selected" <?php } ?>            >普湾新区</option>
				<option value='庄河' <?php if(isset($data_info['DistrinctId'])&&($data_info['DistrinctId']=='庄河')) { ?> selected="selected" <?php } ?>            >庄河</option>
				<option value='长岛县' <?php if(isset($data_info['DistrinctId'])&&($data_info['DistrinctId']=='长岛县')) { ?> selected="selected" <?php } ?>            >长岛县</option>
</select>
				</div>
			</div>
													
	<div class="form-group">
				<label for="SchoolLevelId" class="col-sm-2 control-label form-control-static">园所类型ID</label>
				<div class="col-sm-9 ">
					<select class="form-control  validate[required]"  name="SchoolLevelId"  id="SchoolLevelId">
				<option value="">==请选择==</option>
								<option value='省级示范园' <?php if(isset($data_info['SchoolLevelId'])&&($data_info['SchoolLevelId']=='省级示范园')) { ?> selected="selected" <?php } ?>            >省级示范园</option>
				<option value='市级示范园' <?php if(isset($data_info['SchoolLevelId'])&&($data_info['SchoolLevelId']=='市级示范园')) { ?> selected="selected" <?php } ?>            >市级示范园</option>
				<option value='一类园' <?php if(isset($data_info['SchoolLevelId'])&&($data_info['SchoolLevelId']=='一类园')) { ?> selected="selected" <?php } ?>            >一类园</option>
				<option value='二类园' <?php if(isset($data_info['SchoolLevelId'])&&($data_info['SchoolLevelId']=='二类园')) { ?> selected="selected" <?php } ?>            >二类园</option>
				<option value='三类园' <?php if(isset($data_info['SchoolLevelId'])&&($data_info['SchoolLevelId']=='三类园')) { ?> selected="selected" <?php } ?>            >三类园</option>
</select>
				</div>
			</div>
													
	<div class="form-group">
				<label for="OwnershipId" class="col-sm-2 control-label form-control-static">所有制ID</label>
				<div class="col-sm-9 ">
					<select class="form-control  validate[required]"  name="OwnershipId"  id="OwnershipId">
				<option value="">==请选择==</option>
								<option value='公有' <?php if(isset($data_info['OwnershipId'])&&($data_info['OwnershipId']=='公有')) { ?> selected="selected" <?php } ?>            >公有</option>
				<option value='私有' <?php if(isset($data_info['OwnershipId'])&&($data_info['OwnershipId']=='私有')) { ?> selected="selected" <?php } ?>            >私有</option>
				<option value='合资' <?php if(isset($data_info['OwnershipId'])&&($data_info['OwnershipId']=='合资')) { ?> selected="selected" <?php } ?>            >合资</option>
				<option value='外资' <?php if(isset($data_info['OwnershipId'])&&($data_info['OwnershipId']=='外资')) { ?> selected="selected" <?php } ?>            >外资</option>
</select>
				</div>
			</div>
													
	<div class="form-group">
				<label for="TypeId" class="col-sm-2 control-label form-control-static">制别ID</label>
				<div class="col-sm-9 ">
					<select class="form-control  validate[required]"  name="TypeId"  id="TypeId">
				<option value="">==请选择==</option>
								<option value='全日制' <?php if(isset($data_info['TypeId'])&&($data_info['TypeId']=='全日制')) { ?> selected="selected" <?php } ?>            >全日制</option>
				<option value='半日制' <?php if(isset($data_info['TypeId'])&&($data_info['TypeId']=='半日制')) { ?> selected="selected" <?php } ?>            >半日制</option>
				<option value='钟点制' <?php if(isset($data_info['TypeId'])&&($data_info['TypeId']=='钟点制')) { ?> selected="selected" <?php } ?>            >钟点制</option>
</select>
				</div>
			</div>
													
	<div class="form-group">
				<label for="KidNumber" class="col-sm-2 control-label form-control-static">儿童数量</label>
				<div class="col-sm-9 ">
					<input type="number" name="KidNumber"  id="KidNumber"  value='<?php echo isset($data_info['KidNumber'])?$data_info['KidNumber']:'' ?>'   class="form-control  validate[required,custom[integer]]" placeholder="请输入儿童数量" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="TelPhone" class="col-sm-2 control-label form-control-static">园所电话</label>
				<div class="col-sm-9 ">
					<input type="text" name="TelPhone"  id="TelPhone"  value='<?php echo isset($data_info['TelPhone'])?$data_info['TelPhone']:'' ?>'  class="form-control validate[required]"  placeholder="请输入园所电话" >
				</div>
			</div>
											</fieldset>
									<fieldset>
						<legend>高级信息</legend>
													
	<div class="form-group">
				<label for="Address" class="col-sm-2 control-label form-control-static">园所地址</label>
				<div class="col-sm-9 ">
					<input type="text" name="Address"  id="Address"  value='<?php echo isset($data_info['Address'])?$data_info['Address']:'' ?>'  class="form-control validate[required]"  placeholder="请输入园所地址" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="QQ" class="col-sm-2 control-label form-control-static">联系人QQ</label>
				<div class="col-sm-9 ">
					<input type="number" name="QQ"  id="QQ"  value='<?php echo isset($data_info['QQ'])?$data_info['QQ']:'' ?>'   class="form-control validate[custom[integer]]" placeholder="请输入联系人QQ" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="ContactName" class="col-sm-2 control-label form-control-static">联系人姓名</label>
				<div class="col-sm-9 ">
					<input type="text" name="ContactName"  id="ContactName"  value='<?php echo isset($data_info['ContactName'])?$data_info['ContactName']:'' ?>'  class="form-control validate[required]"  placeholder="请输入联系人姓名" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="ContactPhone" class="col-sm-2 control-label form-control-static">联系人电话</label>
				<div class="col-sm-9 ">
					<input type="text" name="ContactPhone"  id="ContactPhone"  value='<?php echo isset($data_info['ContactPhone'])?$data_info['ContactPhone']:'' ?>'  class="form-control validate[required]"  placeholder="请输入联系人电话" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="DirectorName" class="col-sm-2 control-label form-control-static">园所负责人</label>
				<div class="col-sm-9 ">
					<input type="text" name="DirectorName"  id="DirectorName"  value='<?php echo isset($data_info['DirectorName'])?$data_info['DirectorName']:'' ?>'  class="form-control validate[required]"  placeholder="请输入园所负责人" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="DirectorPhone" class="col-sm-2 control-label form-control-static">园所负责人手机</label>
				<div class="col-sm-9 ">
					<input type="text" name="DirectorPhone"  id="DirectorPhone"  value='<?php echo isset($data_info['DirectorPhone'])?$data_info['DirectorPhone']:'' ?>'  class="form-control validate[required]"  placeholder="请输入园所负责人手机" >
				</div>
			</div>
											</fieldset>
									<fieldset>
						<legend>附加信息</legend>
													
	<div class="form-group">
				<label for="DesignBedNumber" class="col-sm-2 control-label form-control-static">设计床位数</label>
				<div class="col-sm-9 ">
					<input type="number" name="DesignBedNumber"  id="DesignBedNumber"  value='<?php echo isset($data_info['DesignBedNumber'])?$data_info['DesignBedNumber']:'' ?>'   class="form-control validate[custom[integer]]" placeholder="请输入设计床位数" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="ActualBedNumber" class="col-sm-2 control-label form-control-static">实际床位数</label>
				<div class="col-sm-9 ">
					<input type="number" name="ActualBedNumber"  id="ActualBedNumber"  value='<?php echo isset($data_info['ActualBedNumber'])?$data_info['ActualBedNumber']:'' ?>'   class="form-control validate[custom[integer]]" placeholder="请输入实际床位数" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="BigClassNumber" class="col-sm-2 control-label form-control-static">大班数</label>
				<div class="col-sm-9 ">
					<input type="number" name="BigClassNumber"  id="BigClassNumber"  value='<?php echo isset($data_info['BigClassNumber'])?$data_info['BigClassNumber']:'' ?>'   class="form-control validate[custom[integer]]" placeholder="请输入大班数" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="MidClassNumber" class="col-sm-2 control-label form-control-static">中班数</label>
				<div class="col-sm-9 ">
					<input type="number" name="MidClassNumber"  id="MidClassNumber"  value='<?php echo isset($data_info['MidClassNumber'])?$data_info['MidClassNumber']:'' ?>'   class="form-control validate[custom[integer]]" placeholder="请输入中班数" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="SmallClassNumber" class="col-sm-2 control-label form-control-static">小班数</label>
				<div class="col-sm-9 ">
					<input type="number" name="SmallClassNumber"  id="SmallClassNumber"  value='<?php echo isset($data_info['SmallClassNumber'])?$data_info['SmallClassNumber']:'' ?>'   class="form-control validate[custom[integer]]" placeholder="请输入小班数" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="CareClassNumber" class="col-sm-2 control-label form-control-static">托班数</label>
				<div class="col-sm-9 ">
					<input type="number" name="CareClassNumber"  id="CareClassNumber"  value='<?php echo isset($data_info['CareClassNumber'])?$data_info['CareClassNumber']:'' ?>'   class="form-control validate[custom[integer]]" placeholder="请输入托班数" >
				</div>
			</div>
											</fieldset>
									<fieldset>
						<legend>可选信息</legend>
													
	<div class="form-group">
				<label for="SchoolArea" class="col-sm-2 control-label form-control-static">占地面积</label>
				<div class="col-sm-9 ">
					<input type="number" name="SchoolArea"  id="SchoolArea"   value='<?php echo isset($data_info['SchoolArea'])?$data_info['SchoolArea']:'' ?>'   class="form-control validate[custom[price]]" placeholder="请输入占地面积" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="GreenArea" class="col-sm-2 control-label form-control-static">绿化面积</label>
				<div class="col-sm-9 ">
					<input type="number" name="GreenArea"  id="GreenArea"   value='<?php echo isset($data_info['GreenArea'])?$data_info['GreenArea']:'' ?>'   class="form-control validate[custom[price]]" placeholder="请输入绿化面积" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="IndoorArea" class="col-sm-2 control-label form-control-static">室内面积</label>
				<div class="col-sm-9 ">
					<input type="number" name="IndoorArea"  id="IndoorArea"   value='<?php echo isset($data_info['IndoorArea'])?$data_info['IndoorArea']:'' ?>'   class="form-control validate[custom[price]]" placeholder="请输入室内面积" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="OutdoorArea" class="col-sm-2 control-label form-control-static">室外面积</label>
				<div class="col-sm-9 ">
					<input type="number" name="OutdoorArea"  id="OutdoorArea"   value='<?php echo isset($data_info['OutdoorArea'])?$data_info['OutdoorArea']:'' ?>'   class="form-control validate[custom[price]]" placeholder="请输入室外面积" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="ActivityArea" class="col-sm-2 control-label form-control-static">活动室面积</label>
				<div class="col-sm-9 ">
					<input type="number" name="ActivityArea"  id="ActivityArea"   value='<?php echo isset($data_info['ActivityArea'])?$data_info['ActivityArea']:'' ?>'   class="form-control validate[custom[price]]" placeholder="请输入活动室面积" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="BedroomArea" class="col-sm-2 control-label form-control-static">寝室面积</label>
				<div class="col-sm-9 ">
					<input type="number" name="BedroomArea"  id="BedroomArea"   value='<?php echo isset($data_info['BedroomArea'])?$data_info['BedroomArea']:'' ?>'   class="form-control validate[custom[price]]" placeholder="请输入寝室面积" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="KitchenArea" class="col-sm-2 control-label form-control-static">厨房面积</label>
				<div class="col-sm-9 ">
					<input type="number" name="KitchenArea"  id="KitchenArea"   value='<?php echo isset($data_info['KitchenArea'])?$data_info['KitchenArea']:'' ?>'   class="form-control validate[custom[price]]" placeholder="请输入厨房面积" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="NurseOfficeArea" class="col-sm-2 control-label form-control-static">保健室面积</label>
				<div class="col-sm-9 ">
					<input type="number" name="NurseOfficeArea"  id="NurseOfficeArea"   value='<?php echo isset($data_info['NurseOfficeArea'])?$data_info['NurseOfficeArea']:'' ?>'   class="form-control validate[custom[price]]" placeholder="请输入保健室面积" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="IsolationRoomArea" class="col-sm-2 control-label form-control-static">隔离室面积</label>
				<div class="col-sm-9 ">
					<input type="number" name="IsolationRoomArea"  id="IsolationRoomArea"   value='<?php echo isset($data_info['IsolationRoomArea'])?$data_info['IsolationRoomArea']:'' ?>'   class="form-control validate[custom[price]]" placeholder="请输入隔离室面积" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="MultiFunctionHallArea" class="col-sm-2 control-label form-control-static">多功能厅面积</label>
				<div class="col-sm-9 ">
					<input type="number" name="MultiFunctionHallArea"  id="MultiFunctionHallArea"   value='<?php echo isset($data_info['MultiFunctionHallArea'])?$data_info['MultiFunctionHallArea']:'' ?>'   class="form-control validate[custom[price]]" placeholder="请输入多功能厅面积" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="LanguageLabArea" class="col-sm-2 control-label form-control-static">语音室面积</label>
				<div class="col-sm-9 ">
					<input type="number" name="LanguageLabArea"  id="LanguageLabArea"   value='<?php echo isset($data_info['LanguageLabArea'])?$data_info['LanguageLabArea']:'' ?>'   class="form-control validate[custom[price]]" placeholder="请输入语音室面积" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="ComputerRoomArea" class="col-sm-2 control-label form-control-static">微机室面积</label>
				<div class="col-sm-9 ">
					<input type="number" name="ComputerRoomArea"  id="ComputerRoomArea"   value='<?php echo isset($data_info['ComputerRoomArea'])?$data_info['ComputerRoomArea']:'' ?>'   class="form-control validate[custom[price]]" placeholder="请输入微机室面积" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="SchoolEnvironment" class="col-sm-2 control-label form-control-static">园区环境</label>
				<div class="col-sm-9 ">
					<input type="text" name="SchoolEnvironment"  id="SchoolEnvironment"  value='<?php echo isset($data_info['SchoolEnvironment'])?$data_info['SchoolEnvironment']:'' ?>'  class="form-control validate[required]"  placeholder="请输入园区环境" >
				</div>
			</div>
											</fieldset>
							<div class='form-actions'>
				<button class='btn btn-primary ' type='submit' id="dosubmit">保存</button>
			</div>
</form>
			<script language="javascript" type="text/javascript">
			var is_edit =<?php echo ($is_edit)?"true":"false" ?>;
			var id =<?php echo $id;?>;

			require(['<?php echo SITE_URL?>scripts/common.js'], function (common) {
		        require(['<?php echo SITE_URL?>scripts/adminpanel/school/edit.js']);
		    });
		</script>
	
	