<?php

/**
 * 设置config文件
 * @param $config 配属信息
 */
function set_config($config) {
	$configfile = YZMPHP_PATH.'common'.DIRECTORY_SEPARATOR.'config/config.php';
	if(!is_writable($configfile)) showmsg('Please chmod '.$configfile.' to 0777 !', 'stop');
	$pattern = $replacement = array();
	foreach($config as $k=>$v) {
		$pattern[$k] = "/'".$k."'\s*=>\s*([']?)[^']*([']?)(\s*),/is";
		$replacement[$k] = "'".$k."' => \${1}".$v."\${2}\${3},";					
	}
	$str = file_get_contents($configfile);
	$str = preg_replace($pattern, $replacement, $str);
	return file_put_contents($configfile, $str, LOCK_EX);		
}


/**
 * 显示后台菜单
 */
function show_menu() {
	if(!$menu_string = getcache('menu_string_'.$_SESSION['roleid'])){
		$menu = D('menu');
		$admin_role_priv = D('admin_role_priv');
		$top_menu = $menu->field('`id`,`name`,`m`,`c`,`a`,`data`')->where(array('parentid'=>'0','display'=>'1'))->order('listorder ASC')->limit('10')->select();
		$menu_string = '';
		foreach($top_menu as $key => $val){
			$son_menu = $menu->field('`id`,`name`,`m`,`c`,`a`,`data`')->where(array('parentid'=>$val['id'],'display'=>'1'))->order('listorder ASC')->select();
			$s = $key ==0 ? ' style="display:block;"' : '';
			$menu_string .= '<div class="menu_dropdown">
			<dl id="'.$val['id'].'-menu">
				<dt class="selected"><i class="Hui-iconfont">'.$val['data'].'</i> '.$val['name'].'<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
				<dd '.$s.'>
					<ul>';
						foreach($son_menu as $v){
							if($_SESSION['roleid'] != 1){
								$data = $admin_role_priv->where(array('roleid'=>$_SESSION['roleid'], 'm'=>$v['m'], 'c'=>$v['c'], 'a'=>$v['a']))->find();
								if(!$data) continue;
							}
							
							$menu_string .= '<li><a href="javascript:void(0)" _href="'.url($v['m'].'/'.$v['c'].'/'.$v['a'], $v['data']).'" data-title="'.$v['name'].'">'.$v['name'].'</a></li>';
						}					
					$menu_string .= '</ul>
				</dd>
			</dl>
		</div>';
		}
		setcache('menu_string_'.$_SESSION['roleid'], $menu_string);
	}	
	return $menu_string;
}



function url($url='', $vars='') {	
	$url = trim($url, '/');
	$arr = explode('/', $url);
	$string = SITE_PATH;
	if(URL_MODEL == 0){
		$string .= 'index.php?';
		$string .= 'm='.$arr[0].'&c='.$arr[1].'&a='.$arr[2];
		if($vars){
			if(is_array($vars)) $vars = http_build_query($vars);
			$string .= '&'.$vars;
		}
	}else{
		if(URL_MODEL == 1) $string .= 'index.php/';
		$string .= $url;
		if($vars){
			if(!is_array($vars)) parse_str($vars, $vars);			
            foreach ($vars as $var => $val){
                if(trim($val) !== '') $string .= '/'.$var.'/'.$val;
            } 
		}
        $string .= C('url_html_suffix');		
	}

	return $string;
}