<?php

// +----------------------------------------------------------------------
// | date: 2015-06-06
// +----------------------------------------------------------------------
// | response: 响应语言包
// +----------------------------------------------------------------------
// | Author: yangyifan <yangyifanphp@gmail.com>
// +----------------------------------------------------------------------


return[
    'success' => '操作成功',
    'unauthorized'=>'没有授权',
    'admin_not_exists' => '用户不存在或者密码错误！',
    'admin_disable'=>'当前用户已被禁用，请联系管理员yangyifan@louxia100.com！',
    'update_error'=>'更新失败',
    'update_success'=>'更新成功',
    'add_success'=> '增加成功',
    'add_error'=>'增加失败',
    'delete_success'    => '删除成功',
    'delete_error'  => '删除失败',
    'on'=>'开启',
    'off'=>'关闭',
    'active'=>'申请',
    'upload_file_error' => '上传文件错误',
    'file_unkown'=>'未知文件',
    'sex_1' => '男',
    'sex_2' => '女',
    'sex_3' => '未知',
    'top_classification' => '顶级分类',
    'is_default'=>'默认',
    'not_is_default' => '非默认',
    'search_error'=>'当前页面不存在',
    'register_success' => '注册成功',
    'register_error'    => '注册失败',
    'save_user_info_to_redis_error'=>'保存用户到redis失败',
    'connet_web_socket_error'=>'连接失败，请重试！',
    'save_user_socket_to_redis_error' => '连接失败，请重试！',
    'update_profile_success'    => '修改个人资料成功',
    'update_user_profile_error' => '保存用户详细信息失败',
    'update_user_password_error'  => '更新用户密码失败',
    'old_password_error'  => '旧密码错误',
    'update_user_password_success'  => '更新用户密码成功',
    'page_error'    => '页面错误',
    'forum_comment_reuqire' => '评论内容不能为空',
    'comment_forum_error'   => '发表帖子评论失败',
    'comment_forum_success'   => '发表帖子评论成功',
    'update_forum_error'    => '编辑器帖子失败',
    'update_forum_success'    => '编辑器帖子成功',
    'no_login'  => '请先登陆',
    'search_empty'  => '搜索内容为空',
    'del_forum_success' => '删除帖子成功',
    'send_add_user_message_success' => '发送添加好友请求成功',
    'can_not_add_their_own_friends' => '不能添加自己为好友',
    'confirm_add_friend_success'    => '确认添加好友成功',
    'not_use'   => '未使用',
    'use'   => '已使用',
    'empty' => '无',
    'week_1' => '周一',
    'week_2' => '周二',
    'week_3' => '周三',
    'week_4' => '周四',
    'week_5' => '周五',
    'week_6' => '周六',
    'week_7' => '周日',
    'update_order_state_success' => '更新订单状态成功',
    'update_order_state_error' => '更新订单状态失败',
    'cancel_order_success' => '取消订单成功',
    'cancel_order_error' => '取消订单失败',
    'return_order_remark' => '返还订单状态为：:state',
    'return_order_state_require' => '需要返还的订单状态不能为空',
    'return_order_state_error' => '返还订单状态失败',
    'return_order_state_success' => '返还订单状态成功',

    'update_user_access_success' => '更新角色权限成功',
    'update_user_access_error' => '更新角色权限失败',
    'delete_image_error_1' => '当前图片是默认图片，不允许删除',

    'hotel_email_title_1' => '[在首尔旅游网] :date :hotel_name 预订已成功',
    'hotel_email_title_2' => '[짜이서울] :date :hotel_name 예약 확인 내역',

    'goods_email_title_1' => '[在首尔旅游网] 2015-12-22 梦之家 (Dream House) 预订已取消',
    'goods_email_title_2' => '[짜이서울] 2015-12-22 梦之家 (Dream House) 예약 취소 내용 전송드립니다.',

    'goods_email_title_3' => '[在首尔旅游网] 2015-12-24 梦之家(Dream House) 预订已成功',
    'goods_email_title_4' => '[짜이서울] 2015-12-24 梦之家(Dream House) 예약 확인 내역',

    'access_error'  => '没有权限',

    'logout_success'    => '退出登陆成功',
    'logout_error'    => '退出登陆失败',

    //用户信息
    'user_sex_1'    =>  '男',
    'user_sex_2'    =>  '女',
    'user_sex_3'    =>  '未知',

    'user_email_yes'  =>  '通过',
    'user_email_no'   =>  '未通过',

    //是否已回访
    'state_name_1'        => '已回访',
    'state_name_2'        => '未回访',


    'user_mobile_yes'   =>  '通过',
    'user_mobile_no'    =>  '未通过',

    //用户地址是否是用户急速配送地址
    'is_high_speed_1'   => '急速',
    'is_high_speed_2'   => '非急速',

    //用户地址是否默认
    'is_state_1'        =>  '默认',
    'is_state_2'        =>  '不默认',


    //推送
    'push_success'  => '推送成功',
    'push_error'    => '推送失败',

    //投诉理由
    'reason_1'       =>   "配送迟到（大于60分钟小于120分钟）",
    'reason_2'       =>   "配送迟到（大于120分钟小于180分钟）",
    'reason_3'       =>   "配送迟到（大于180分钟）",
    'reason_4'       =>   "配送早送",
    'reason_5'       =>   "产品破损、融化",
    'reason_6'       =>   "品相错（款式、磅数、尺寸）",
    'reason_7'       =>   "配件错（少配件，配件与要求不符等)",
    'reason_8'       =>   "赠品错",
    'reason_9'       =>   "门店关门",
    'reason_10'      =>   "商品缺货",
    'reason_11'      =>   "产品缺陷",
    'reason_12'      =>   "客服态度",
    'reason_13'      =>   "其他",

    //投诉来源
    'source_1'       =>    '400电话',
    'source_2'       =>    '微博',
    'source_3'       =>    'QQ群',
    'source_4'       =>    '微信',
    'source_5'       =>    '配送员',
    'source_6'       =>    '客服自查',
    'source_7'       =>    '品牌方',
    'source_8'       =>    '用户反馈',
    'source_9'       =>    '后台评论',
    'source_10'      =>    '其他媒体',
    'source_11'      =>    '回访',

    //责任方
    'responsibleParty_1' =>     '物流',
    'responsibleParty_2' =>     '运营',
    'responsibleParty_3' =>     '产品',
    'responsibleParty_4' =>     '销售',
    'responsibleParty_5' =>     '用户',
    'responsibleParty_6' =>     '客服',
    'responsibleParty_7' =>     '财务',


    //广告
    'brand'                         => '品牌',
    'goods'                         => '商品',
    'collection'                    => '商品集合',
    'url'                           => 'url链接网址',


    //站点
    'is_master' => '总站',
    'is_slave'  => '分站',

    //站点配置
    'update_setting_success'    => '更新商店站点配置成功',
    'update_setting_error'    => '更新商店站点配置失败',
    'update_global_setting_success'    => '更新商店站点配置成功',
    'update_global_setting_error'    => '更新商店站点配置失败',

    //广告
    'brand'                         => '品牌',
    'goods'                         => '商品',
    'collection'                    => '商品集合',
    'url'                           => 'url链接网址',

    //配送员职位类型
    'delivery_type_1'   => '全职',
    'delivery_type_2'   => '兼职',

    //配送员职位状态
    'delivery_state_1'   => '启用',
    'delivery_state_2'   => '关闭',


    //配送员收支
    'delivery_account_log_state_1'   => '收入',
    'delivery_account_log_state_2'   => '支出',


    //日志类型
    'log_type_1' =>     '商品',
    'log_type_2' =>     '订单',
    'log_type_3' =>     '优惠券',
    'log_type_4' =>     '充值卡',
    'log_type_5' =>     '系统设置',
    'log_type_6' =>     '品牌',
    'log_type_7' =>     '下午茶门店',
    'log_type_8' =>     '下午茶商品',

    //配送员收支
    'delivery_attendance_state_1'   => '开启',
    'delivery_attendance_state_2'   => '关闭',

    //站内信类型,
    'message_type_1'  => '文本' ,
    'message_type_2'  => '订单' ,
    'message_type_3'  => '商品集合' ,
    'message_type_4'  => '商品' ,
    'message_type_5'  => '优惠券' ,
    'message_type_6'  => 'URL' ,
    //确认回访
    'confirm_visitor_yes'  =>'确认回访成功',
    'confirm_visitor_no'  =>'确认回访失败',
    'confirm_id_no'  =>'ID不能为空',


    //订单来源
    'pay_source_1' => '免费',
    'pay_source_2' => '支付宝',
    'pay_source_3' => 'eximbay',

    //订单状态
    'PAY_STATUS_-1'                 => '请选择',
    'PAY_STATUS_0'                  => '未付款',
    'PAY_STATUS_1'                  => '已付款',
    'PAY_STATUS_2'                  => '已确认',
    'PAY_STATUS_8'                  => '已完成',
    'PAY_STATUS_9'                  => '已取消',

    //订单详情
    'get_order_info_error'  => '获取订单基本信息失败',
    'get_order_goods_error' => '获取订单商品信息失败',
    'get_order_record_error' => '获取订单操作日志信息失败',
    'get_order_bbs_error'   => '获取订单留言备足信息失败',
    'get_order_coupon_error'   => '获取订单留优惠券信息失败',
    'get_order_comment_error'   => '获取订单留评论信息失败',

    //订单列表时间查询类型
    'order_list_date_type1' => '入住日期',
    'order_list_date_type2' => '退房日期',
    'order_list_date_type3' => '预定日期',

    //邀请码
    'query_invite_data_success' => '获得邀请码信息成功',
    'query_invite_data_error' => '获得邀请码信息失败',

    //是否以验证用户邮箱
    'is_check_user_email_1' => '已验证',
    'is_check_user_email_2' => '未验证',

    //是否以验证用户手机
    'is_check_user_mobile_1' => '已验证',
    'is_check_user_mobile_2' => '未验证',

    //图片
    'image_used'    => '已使用',
    'image_not_use' => '未使用',

    //后台菜单
    'get_menu_error'    => '获得菜单失败',
    'get_menu_success'    => '获得菜单成功',

    //后台用户

    //商户
    'cooperative_business'  => '合作商户',
    'tp_order'              => '第三方物流',
    'get_shop_info_error'   => '获取门店信息失败',
    'add_shop_error1'       => '新增门店账户信息失败',
    'add_shop_error2'       => '新增账户用户信息失败',
    'add_shop_error3'       => '新增门店配送信息失败',
    'add_shop_error4'       => '新增门店联系信息失败',
    'add_shop_error5'       => '新增门店联系信息失败',

    'save_shop_error1'       => '更新门店账户信息失败',
    'save_shop_error2'       => '更新账户用户信息失败',
    'save_shop_error3'       => '更新门店配送信息失败',
    'save_shop_error4'       => '更新门店联系信息失败',

    //商品品牌信息
    'goods_brand_state_1'   => '开启',
    'goods_brand_state_2'   => '关闭',

    //订单模块
    'order_id_require'  =>'订单不能为空',
    'delivery_admin_not_exists'  =>'配送员不存在',
    //station模块
    'station_require'  =>'配送站点不能为空',

    //区域
    'get_all_region_list_error' => '获得全部地址信息失败',
    'get_all_area_list_error'   => '获得当前区域信息失败',

    //商品订单
    'product_order_list_date_type1' => '付款时间',
    'product_order_list_date_type2' => '商家确认时间',
    'product_order_list_date_type3' => '完成时间',
    'product_order_list_date_type4' => '创建时间',
    'send_email_success' => '发送邮件成功',
    'send_email_error' => '发送邮件失败',

];

