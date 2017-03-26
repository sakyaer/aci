	define(function (require) {
	    var $ = require('jquery');
	    var aci = require('aci');
	    require('bootstrap');
	    require('bootstrapValidator');

		$(function () {
			$("#reverseBtn").click(function(){
				aci.ReverseChecked('pid[]')
			});

			$("#deleteBtn").click(function(){
				var _arr = aci.GetCheckboxValue("pid[]");
				if(_arr.length==0)
				{
					alert("请先勾选明细");
					return false;
				}
				if(confirm('确定要删除吗?'))
				{
					$("#form_list").submit();
				}
			});
        
			 $(".delete-btn").click(function(){
				var v = $(this).val();
				if(confirm('确定要删除吗?'))
				{
					window.location.href= SITE_URL+ "adminpanel/school/delete_one/"+v;
				}
			});
            
            $('#validateform').bootstrapValidator({
				message: '输入框不能为空',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					 SchoolName: {
						 validators: {
							notEmpty: {
								message: '园所名称 输入格式不正确'
							}
						 }
					 },
					 SchoolCode: {
						 validators: {
							notEmpty: {
								message: '园所编码 输入格式不正确'
							}
						 }
					 },
					 DistrinctId: {
						 validators: {
							notEmpty: {
								message: '区县ID 输入格式不正确'
							}
						 }
					 },
					 SchoolLevelId: {
						 validators: {
							notEmpty: {
								message: '园所类型ID 输入格式不正确'
							}
						 }
					 },
					 OwnershipId: {
						 validators: {
							notEmpty: {
								message: '所有制ID 输入格式不正确'
							}
						 }
					 },
					 TypeId: {
						 validators: {
							notEmpty: {
								message: '制别ID 输入格式不正确'
							}
						 }
					 },
					 KidNumber: {
						 validators: {
							notEmpty: {
								message: '儿童数量 输入格式不正确'
							}
						 }
					 },
					 TelPhone: {
						 validators: {
							notEmpty: {
								message: '园所电话 输入格式不正确'
							}
						 }
					 },
					 Address: {
						 validators: {
							notEmpty: {
								message: '园所地址 输入格式不正确'
							}
						 }
					 },
					 QQ: {
						 validators: {
							notEmpty: {
								message: '联系人QQ 输入格式不正确'
							}
						 }
					 },
					 ContactName: {
						 validators: {
							notEmpty: {
								message: '联系人姓名 输入格式不正确'
							}
						 }
					 },
					 ContactPhone: {
						 validators: {
							notEmpty: {
								message: '联系人电话 输入格式不正确'
							}
						 }
					 },
					 DirectorName: {
						 validators: {
							notEmpty: {
								message: '园所负责人 输入格式不正确'
							}
						 }
					 },
					 DirectorPhone: {
						 validators: {
							notEmpty: {
								message: '园所负责人手机 输入格式不正确'
							}
						 }
					 },
					 DesignBedNumber: {
						 validators: {
							notEmpty: {
								message: '设计床位数 输入格式不正确'
							}
						 }
					 },
					 ActualBedNumber: {
						 validators: {
							notEmpty: {
								message: '实际床位数 输入格式不正确'
							}
						 }
					 },
					 BigClassNumber: {
						 validators: {
							notEmpty: {
								message: '大班数 输入格式不正确'
							}
						 }
					 },
					 MidClassNumber: {
						 validators: {
							notEmpty: {
								message: '中班数 输入格式不正确'
							}
						 }
					 },
					 SmallClassNumber: {
						 validators: {
							notEmpty: {
								message: '小班数 输入格式不正确'
							}
						 }
					 },
					 CareClassNumber: {
						 validators: {
							notEmpty: {
								message: '托班数 输入格式不正确'
							}
						 }
					 },
					 SchoolArea: {
						 validators: {
							notEmpty: {
								message: '占地面积 输入格式不正确'
							}
						 }
					 },
					 GreenArea: {
						 validators: {
							notEmpty: {
								message: '绿化面积 输入格式不正确'
							}
						 }
					 },
					 IndoorArea: {
						 validators: {
							notEmpty: {
								message: '室内面积 输入格式不正确'
							}
						 }
					 },
					 OutdoorArea: {
						 validators: {
							notEmpty: {
								message: '室外面积 输入格式不正确'
							}
						 }
					 },
					 ActivityArea: {
						 validators: {
							notEmpty: {
								message: '活动室面积 输入格式不正确'
							}
						 }
					 },
					 BedroomArea: {
						 validators: {
							notEmpty: {
								message: '寝室面积 输入格式不正确'
							}
						 }
					 },
					 KitchenArea: {
						 validators: {
							notEmpty: {
								message: '厨房面积 输入格式不正确'
							}
						 }
					 },
					 NurseOfficeArea: {
						 validators: {
							notEmpty: {
								message: '保健室面积 输入格式不正确'
							}
						 }
					 },
					 IsolationRoomArea: {
						 validators: {
							notEmpty: {
								message: '隔离室面积 输入格式不正确'
							}
						 }
					 },
					 MultiFunctionHallArea: {
						 validators: {
							notEmpty: {
								message: '多功能厅面积 输入格式不正确'
							}
						 }
					 },
					 LanguageLabArea: {
						 validators: {
							notEmpty: {
								message: '语音室面积 输入格式不正确'
							}
						 }
					 },
					 ComputerRoomArea: {
						 validators: {
							notEmpty: {
								message: '微机室面积 输入格式不正确'
							}
						 }
					 },
					 SchoolEnvironment: {
						 validators: {
							notEmpty: {
								message: '园区环境 输入格式不正确'
							}
						 }
					 },
				}
			}).on('success.form.bv', function(e) {
				
				e.preventDefault();
				$("#dosubmit").attr("disabled","disabled");
				
				$.scojs_message("正在保存，请稍等...", $.scojs_message.TYPE_ERROR);
				$.ajax({
					type: "POST",
					url: edit?SITE_URL+"adminpanel/school/edit/"+id:SITE_URL+"adminpanel/school/add/",
					data:  $("#validateform").serialize(),
					success:function(response){
						var dataObj=jQuery.parseJSON(response);
						if(dataObj.status)
						{
							$.scojs_message('操作成功,3秒后将返回列表页...', $.scojs_message.TYPE_OK);
							aci.GoUrl(SITE_URL+'adminpanel/school/',1);
						}else
						{
							$.scojs_message(dataObj.tips, $.scojs_message.TYPE_ERROR);
							$("#dosubmit").removeAttr("disabled");
						}
					},
					error: function (request, status, error) {
						$.scojs_message(request.responseText, $.scojs_message.TYPE_ERROR);
						$("#dosubmit").removeAttr("disabled");
					}                  
				});
			
			}).on('error.form.bv',function(e){ $.scojs_message('带*号不能为空', $.scojs_message.TYPE_ERROR);$("#dosubmit").removeAttr("disabled");});
            
        });
});
