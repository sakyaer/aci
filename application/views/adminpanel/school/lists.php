<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<div class='panel panel-default grid'>
    <div class='panel-heading'>
        <i class='fa fa-table'></i> 园所信息管理列表
        <div class='panel-tools'>
            <div class='btn-group'>
                 <a class="btn " href="<?php echo base_url('adminpanel/school/add')?>"><span class="glyphicon glyphicon-plus"></span> 添加 </a>             </div>
            <div class='badge'><?php echo count($data_list)?></div>
        </div>
    </div>
        <div class='panel-filter '>
      <div class='row'>
        <div class='col-md-12'>
        <form class="form-inline" role="form" method="get">
          
<div class="form-group">
<label for="keyword" class="control-label form-control-static">关键词</label>
<input class="form-control" type="text" name="keyword"  value="<?php echo isset($data_info['keyword'])? $data_info['keyword']:"";?>" id="keyword" placeholder="请输入关键词"/></div>

	<div class="form-group">
				<label for="DistrinctId" class="col-sm-5 control-label form-control-static">区县ID</label>
				<div class="col-sm-7 ">
					<select class="form-control "  name="DistrinctId"  id="DistrinctId">
				<option value="">==不限==</option>
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
<label for="keywords" class="form-control-static">园所编码:</label>
<input class="form-control" size="3" type="number"  name="SchoolCode_1"  id="SchoolCodeSchoolCode1" placeholder="园所编码大于等于范围"/> - <input class="form-control" size="3" type="number"  name="SchoolCode_2"  id="SchoolCodeSchoolCode2" placeholder="园所编码小于等于范围"/></div>
<button type="submit" name="dosubmit" value="搜索" class="btn btn-success"><i class='glyphicon glyphicon-search'></i></button>        </form>
        </div>
      </div> 
    </div>
          <form method="post" id="form_list"  action="<?php echo base_url('adminpanel/school/delete_all')?>"  > 
    <div class='panel-body '>
    <?php if($data_list):?>
        <table class="table table-hover dataTable" id="checkAll">
          <thead>
            <tr>
              <th>#</th>
              <th   nowrap="nowrap">园所名称</th>
                            <?php $css=""; $next_url = base_url('adminpanel/school?order=SchoolCode&dir=desc'); ?>
              <?php if(($order=='SchoolCode'&&$dir=='desc')) { ?>
              <?php $css="sorting_desc";$next_url = base_url('adminpanel/school?order=SchoolCode&dir=asc'); ?>
              <?php } elseif (($order=='SchoolCode'&&$dir=='asc')) { ?>
              <?php $css="sorting_asc";?>
              <?php } ?><th class="sorting <?php echo $css;?>"   onclick="window.location.href='<?php echo $next_url;?>'"   nowrap="nowrap">园所编码</th>
                            <?php $css=""; $next_url = base_url('adminpanel/school?order=DistrinctId&dir=desc'); ?>
              <?php if(($order=='DistrinctId'&&$dir=='desc')) { ?>
              <?php $css="sorting_desc";$next_url = base_url('adminpanel/school?order=DistrinctId&dir=asc'); ?>
              <?php } elseif (($order=='DistrinctId'&&$dir=='asc')) { ?>
              <?php $css="sorting_asc";?>
              <?php } ?><th class="sorting <?php echo $css;?>"   onclick="window.location.href='<?php echo $next_url;?>'"   nowrap="nowrap">区县ID</th>
                            <?php $css=""; $next_url = base_url('adminpanel/school?order=SchoolLevelId&dir=desc'); ?>
              <?php if(($order=='SchoolLevelId'&&$dir=='desc')) { ?>
              <?php $css="sorting_desc";$next_url = base_url('adminpanel/school?order=SchoolLevelId&dir=asc'); ?>
              <?php } elseif (($order=='SchoolLevelId'&&$dir=='asc')) { ?>
              <?php $css="sorting_asc";?>
              <?php } ?><th class="sorting <?php echo $css;?>"   onclick="window.location.href='<?php echo $next_url;?>'"   nowrap="nowrap">园所类型ID</th>
                            <?php $css=""; $next_url = base_url('adminpanel/school?order=OwnershipId&dir=desc'); ?>
              <?php if(($order=='OwnershipId'&&$dir=='desc')) { ?>
              <?php $css="sorting_desc";$next_url = base_url('adminpanel/school?order=OwnershipId&dir=asc'); ?>
              <?php } elseif (($order=='OwnershipId'&&$dir=='asc')) { ?>
              <?php $css="sorting_asc";?>
              <?php } ?><th class="sorting <?php echo $css;?>"   onclick="window.location.href='<?php echo $next_url;?>'"   nowrap="nowrap">所有制ID</th>
                            <?php $css=""; $next_url = base_url('adminpanel/school?order=TypeId&dir=desc'); ?>
              <?php if(($order=='TypeId'&&$dir=='desc')) { ?>
              <?php $css="sorting_desc";$next_url = base_url('adminpanel/school?order=TypeId&dir=asc'); ?>
              <?php } elseif (($order=='TypeId'&&$dir=='asc')) { ?>
              <?php $css="sorting_asc";?>
              <?php } ?><th class="sorting <?php echo $css;?>"   onclick="window.location.href='<?php echo $next_url;?>'"   nowrap="nowrap">制别ID</th>
                            <?php $css=""; $next_url = base_url('adminpanel/school?order=KidNumber&dir=desc'); ?>
              <?php if(($order=='KidNumber'&&$dir=='desc')) { ?>
              <?php $css="sorting_desc";$next_url = base_url('adminpanel/school?order=KidNumber&dir=asc'); ?>
              <?php } elseif (($order=='KidNumber'&&$dir=='asc')) { ?>
              <?php $css="sorting_asc";?>
              <?php } ?><th class="sorting <?php echo $css;?>"   onclick="window.location.href='<?php echo $next_url;?>'"   nowrap="nowrap">儿童数量</th>
              <th   nowrap="nowrap">园所电话</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($data_list as $k=>$v):?>
            <tr>
              <td><input type="checkbox" name="pid[]" value="<?php echo $v['school_id']?>" /></td>
                             <td><?php echo $v['SchoolName']?></td>
                            <td><?php echo $v['SchoolCode']?></td>
                            <td><?php echo $v['DistrinctId']?></td>
                            <td><?php echo $v['SchoolLevelId']?></td>
                            <td><?php echo $v['OwnershipId']?></td>
                            <td><?php echo $v['TypeId']?></td>
                            <td><?php echo $v['KidNumber']?></td>
                            <td><?php echo $v['TelPhone']?></td>
              <td>
                            	<a href="<?php echo base_url('adminpanel/school/readonly/'.$v['school_id'])?>"  class="btn btn-default btn-xs"><span class="glyphicon glyphicon-share-alt"></span> 查看</a>
                                            <a href="<?php echo base_url('adminpanel/school/edit/'.$v['school_id'])?>"  class="btn btn-default btn-xs"><span class="glyphicon glyphicon-edit"></span> 修改</a>
                                            <button type="button" class="btn btn-default btn-xs delete-btn" value="<?php echo $v['school_id'];?>"><span class="glyphicon glyphicon-remove"></span> 删除</button>
                
              </td>
            </tr>
            <?php endforeach;?>
            
          </tbody>
        </table> 
    	</div>
      <div class="panel-footer">
        <div class="pull-left">
          <div class="btn-group">
                  <button type="button" class="btn btn-default" id="reverseBtn"><span class="glyphicon glyphicon-ok"></span> 反选</button>
            <!--<button type="button" id="deleteBtn"  class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> 删除勾选</button>-->
            <button type="button" id="deleteBtn"  class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> 导出勾选</button>
                 </div>
      </div>
        <div class="pull-right">
        <?php echo $pages;?>
        </div>
      </div> 
      </form>  
  </div>
<?php else:?>
    <div class="no-result">-- 暂无数据 -- </div>
<?php endif;?>

	    <script language="javascript" type="text/javascript">
    require(['<?php echo SITE_URL?>scripts/common.js'], function (common) {
        require(['<?php echo SITE_URL?>scripts/adminpanel/school/lists.js']);
    });
</script>
    