<?php

// +----------------------------------------------------------------------
// | date: 2015-07-08
// +----------------------------------------------------------------------
// | validate.php: 验证语言包
// +----------------------------------------------------------------------
// | Author: yangyifan <yangyifanphp@gmail.com>
// +----------------------------------------------------------------------


return [
    //公共
    'email_require' => 'email不能为空',
    'email_error'   => '邮箱格式不正确',
    'email_unique'  => '邮箱不能重复',
    'admin_name_require'    => '用户名不能为空',
    'admin_name_unique'    => '用户名不能重复',
    'password_require'  => '密码不能为空',
    'password_size_error'   => '密码格式不正确',
    'rpassword_confirm_error' => '两次密码不一致',
    'role_name_require' => '角色名称不能为空',
    'status_require'    => '状态不能为空',
    'status_error'  => '状态格式不正确',
    'mobile_require'    => '手机号码不能为空',
    'mobile_error'  => '手机号码格式不正确',
    'mobile_unique' => '手机号码不能重复',
    'pid_require'   => '父级不能为空',
    'url_require'   => '链接不能为空',
    'url_error' => '超链接格式不正确',
    'url_unique' => '链接不能重复',
    'sort_require' => '排序不能为空',
    'sort_error' => '排序格式不正确',
    'cat_name_require'  => '分类不能为空',
    'cat_name_error'    => '分类格式不正确',
    'cat_unique'    => '分类不能重复',
    'cat_not_exists'    => '分类不存在',
    'name_reuqire' => '名称不能为空',
    'name_unique' => '名称不能重复',
    'captcha_error' => '验证码不正确',
    'start_require' => '开始时间不能为空',
    'start_error' => '开始时间格式不正确',
    'end_require' => '结束时间不能为空',
    'end_error' => '结束时间格式不正确',
    'end_error1' => '结束时间格式不能小于开始时间',
    'image_reuqire' => '图片不能为空',
    'image_not_exists' => '图片不存在',
    'id_require' => 'id不能为空',


    //后台会员
    'role_id_require'   => '角色不能为空',
    'role_id_error' => '角色格式不正确',
    'role_name_unique' => '角色名称不能为空',
    'role_not_exists' => '角色不存在',
    'admin_require' => '角色不能空',
    'admin_error'   => '角色格式不正确',


    //后台菜单
    'menu_name_require' => '菜单名称不能为空',

    //后台文章分类


    //文章
    'article_title_require' => '文章标题不能为空',
    'article_title_unique'  => '文章标题不能重复',
    'article_category_id_empty'   => '文章分类不能为空',
    'article_category_not_exixts'   => '文章分类不存在',
    'article_category_error'   => '文章分类格式不正确',
    'region_id_empty'   => '地区不能为空',
    'region_name_require'   => '地区名称不能为空',
    'region_name_unqiue'   => '地区名称不能重复',
    'region_not_exixts'   => '地区不存在',
    'region_error'   => '地区格式不正确',

    //网址
    'site_name_require' => '网址名称不能为空',
    'site_name_unique'  => '网址名称不能重复',


    //会员
    'user_name_require' => '用户名不能为空',
    'sex_require' => '性别不能为空',
    'sex_error'  => '性别格式不正确',
    'check_email_require'   => '验证邮箱不能为空',
    'check_email_error'   => '验证邮箱格式错误',
    'check_mobile_require'    => '验证手机号不能为空',
    'check_mobile_error'    => '验证手机号格式错误',
    'birthday_require'  => '生日不能空',
    'birthday_error'    => '生日格式不正确',
    'balance_require'    => '余额不能为空',
    'balance_numeric'    => '余额必须为数字',

    //查询工具

    //邮箱

    //会员消息
    'send_message_reuqire' => '消息不能为空',

    //论坛
    'forum_title_reuquire'=>'标题不能为空',
    'forum_contents_reuqire'=>'内容不能为空',
    'comment_contents_reuqire'  => '回复内容不能为空',
    'forum_require' => '帖子不能为空',
    'forum_error'   => '格式不正确',

    //会员
    'account_number_require'    => '会员账户不能为空',
    'account_number_error'  => '会员账户格式不正确',

    //贺卡管理
    'card_name_require'    =>  '贺卡名不能为空',
    'card_money_require'   =>  '贺卡金额不能为空',
    'card_money_numeric'   =>  '贺卡金额必须为数字',
    'description_require'  =>  '贺卡描述不能为空',

    //充值卡管理
    'r_name_require'         =>  '充值卡名不能为空',
    'r_money_require'        =>  '充值卡金额不能为空',
    'r_money_numeric'        =>  '充值卡金额必须为数字空',
    'r_valid_start_require'  =>  '充值卡开始日期不能为空',
    'r_valid_end_require'    =>  '充值卡结束日期不能为空',
    'valid_end_error'       => '结束时间格式不正确',
    'valid_start_error'     => '开始时间格式不正确',

    //用户地址管理
    'user_receiver_name_required' => '收货人姓名不能为空',
    'user_receiver_mobile_required' => '收货人手机号不能为空',
    'user_receiver_mobile_digits' => '请输入11位的手机号',
    'user_receiver_address_required' => '收货人地址不能为空',
    'user_address_is_speed_required' => '是否极速不能为空',
    'user_address_is_speed_in' =>'请输入正确的极速状态',
    'user_address_state_required' =>'地址是否默认不能为空',
    'user_address_state_in' =>'请输入正确的默认状态',

    //后台广告
    'name_required'      =>'广告名称不能为空',
    'image_pc_required'  =>'pc广告图片不能为空',
    'image_pc_image'     =>'pc广告图片必须为图片类型',
    'image_mobile_required'  =>'移动端广告图片不能为空',
    'image_mobile_image'     =>'移动端广告图片必须为图片类型',
    'image_mobile_big_required'  =>'移动端大图不能为空',
    'image_mobile_big_image'     =>'移动端大图必须为图片类型',
    'type_in'  =>'类型格式不正确',
    'ad_key_required'  =>'URl不能为空',
    'ad_key_active_url'  =>'URl格式不正确',
    'city_id_required'  =>'city_id不能为空',
    'city_id_error'  =>'city_id格式不正确',
    //友情链接
    'link_name_require' =>'友情链接名称不能为空',
    'link_name_unqiue' =>'友情链接名称不能重复',
    'link_url_require'  =>'友情链接URl不能为空',
    'link_url_error'    =>'友情链接URl格式不正确',
    'link_url_unique'   => '友情链接不能重复',
    'link_logo_require' =>'友情链接logo不能为空',
    'link_logo_error'   =>'友情链接logo格式不正确',

    //配送员信息验证
    'delivery_station_id_require'       =>'配送站点不能为空',
    'delivery_password_size'            =>'密码必须为6位',
    'delivery_password_require'         =>'密码不能为空',
    'delivery_mobile_require'           =>'配送员手机号不能为空',
    'delivery_mobile_digits'            =>'请输入11位的手机号',
    'delivery_mobile_numeric'           =>'手机号必须是数字',
    'delivery_name_require'             =>'配送员姓名不能为空',
    'delivery_type_require'             =>'配送员类型不能为空',
    'delivery_state_require'            =>'配送员状态不能为空',
    'delivery_alipay_account_required'  =>'配送员支付宝账号不能为空',

    //优惠券验证信息
    'coupon_name_require'    => '优惠券名称不能为空',
    'coupon_price_require'   =>'优惠券金额不能为空',
    'coupon_price_error'     =>'优惠券金额格式不正确',
    'end_from_require'     =>'自发送优惠券几天有效不能为空',
    'end_from_error'       =>'自发送优惠券几天有效格式不正确',
    'full_money_require'   =>'满额使用不能为空',
    'full_money_error'     =>'满额使用格式不正确',

    //酒店
    'interest_error'    => '折扣格式不正确',

    //商家
    'shop_name_reuqire' => '商户名称不能为空',
    'shop_name_unique' => '商户名称不能重复',
    'shop_not_exists' => '商家不存在',
    'shop_not_require' => '商家不能为空',
    'shop_coupon_title_empty' => '商家优惠券中文标题不能为空',
    'shop_coupon_title_unique' => '商家优惠券中文标题不能重复',
    'shop_coupon_kr_title_empty' => '商家优惠券韩文标题不能为空',
    'shop_coupon_kr_title_unique' => '商家优惠券韩文标题不能重复',




    'shop_image_not_exists' => '商家图片不存在',
    'shop_image_not_require' => '商家图片不能为空',

    //商品
    'goods_name_require' => '商品名称不能为空',
    'goods_name_unique' => '商品名称不能重复',
    'producnt_not_exists' => '商品名称不存在',
    'producnt_require' => '商品名称不能为空',
    'sales_error' => '价格式不正确',
    'sales_require' => '价格式不能为空',
    'email_filed_name_require' => '名称不能为空',
    'email_filed_name_unique' => '名称不能重复',

    'tab_name_require' => 'tab 名称不能为空',
    'tab_name_unique' => 'tab 名称不能重复',

    'size_name_reuqire' => '尺寸名称不能为空',
    'size_reuqire' => '尺寸不能为空',
    'size_not_exists' => '尺寸不存在',
    'stock_reuqire' => '库存不能为空',
    'stock_error' => '库存格式不正确',
    'stock_error1' => '库存不能小于1',

    'order_require' => '订单不能为空',
    'order_not_exists' => '订单不存在',
    'is_host_reuqire' => 'is_host 不能为空',
    'is_host_error' => 'is_host 错误',
    'is_cancel_reuqire' => 'is_cancel 不能为空',
    'is_cancel_error' => 'is_cancel 错误',

    //banner
    'banner_name_require' => 'banner名称不能为空',
    'banner_name_unique' => 'banner名称不能重复',
    'banner_type_require' => 'banner_type 不能为空',
    'banner_type_error' => 'banner_type 格式不正确',
    'banner_key_require' => 'banner_key 不能为空',
    'banner_key_error' => 'banner_key 格式不正确',

    'page_id_reuqire' => 'page id 不能为空',
    'page_id_error' => 'page id 格式不正确',
    'tag_require' => '标签不能空',
    'tag_unique' => '标签不能重复',
    'category_require' => '分类不能为空',
    'category_error' => '分类格式不正确',

    'hotel_group_title_reuqire' => '标题不能为空',
    'hotel_group_title_unique' => '标题不能重复',
    'hotel_group_type_require'  => '类型不能为空',
    'hotel_group_type_error'  => '类型不能重复',
    'hotel_group_not_exists'    => '分组不存在',
    'hotel_group_error'    => '分组格式不正确',
    'hotel_group_require'    => '分组不能为空',

];
