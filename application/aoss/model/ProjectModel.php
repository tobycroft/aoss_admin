<?php


namespace app\aoss\model;

use think\Model;

/**
 * 后台用户模型
 * @package app\admin\model
 */
class ProjectModel extends Model
{
    // 设置当前模型对应的完整数据表名称
    protected $table = 'ao_project';

    // 自动写入时间戳
    protected $autoWriteTimestamp = true;


}
