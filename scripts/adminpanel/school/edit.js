
	define(function (require) {
	var $ = require('jquery');
	var aci = require('aci');
	require('bootstrap');
	require('bootstrapValidator');
	require('message');
	require('jquery-ui');
	require('jquery-ui-dialog-extend');
	require('datetimepicker');

		$(function () {


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

				}
			}).on('success.form.bv', function(e) {

				e.preventDefault();
				$("#dosubmit").attr("disabled","disabled");

				$.scojs_message("正在保存，请稍等...", $.scojs_message.TYPE_ERROR);
				$.ajax({
					type: "POST",
					url: is_edit?SITE_URL+"adminpanel/school/edit/"+id:SITE_URL+"adminpanel/school/add/",
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
