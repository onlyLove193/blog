<?php
	/**
	 * 自定义调试函数
	 * @param [type] $arr [description]
	 */
	function P($arr){
		header("content-type:text/html;charset=utf-8");
	    return dump($arr,true,'<pre>',false);
	}

	/**
	 * 将一个数组按照ID关系进行排序
	 * @param  [type] $row [description]
	 * @return [$array 返回一个一维数组
	 */
	function getRow($row,$pid = 0,$level = 2){
		$res = array();
		$lev = array($pid);
		if(!is_array($row)){
			return false;
		}
		while(!empty($lev)){
			$pid = array_shift($lev);
			--$level;
			foreach($row as $k=>$v){
				if($v['pid'] == $pid){
					$v['level'] = $level;
					$res[] = $v;	
					array_unshift($lev,$pid);
					++$level;
					$pid = $v['gid'];
					unset($row[$k]);
				}
			}

		}
		return $res;
		
	}
	/**
	 * 按照ID对数组进行排序(有错！！！)
	 * @param  [type] $arr [description]
	 * @return $array 返回一个多维数组
	 */
	/*
		[
			'gid',
			'cname',
			'pid'
		]
	 */
	function getRec($arr,$pid = 0){
		$res = array();
		if(!is_array($arr)) {
			return false;
		}
			foreach($arr as $k=>$v){
				if($v['pid'] === $pid){
					$res[] = $v;
					$v['child'] = [];
					$res = $v['child'];
					$pid = $v['gid'];
				}
			}
		
		return $res;
		
	}
	
	/**
	 * TODO 基础分页的相同代码封装，使前台的代码更少
	 * @param $count 要分页的总记录数
	 * @param int $pagesize 每页查询条数
	 * @return \Think\Page
	 */
	function getpage($count, $pagesize = 10) {
	    $p = new Think\Page($count, $pagesize);
	    $p->setConfig('header', '<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
	    // $p->setConfig('prev', '上一页');
	    // $p->setConfig('next', '下一页');
	    $p->setConfig('last', '末页');
	    $p->setConfig('first', '首页');
	    $p->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
	    $p->lastSuffix = false;//最后一页不显示为总页数
	    return $p;
	}
