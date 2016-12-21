<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

//-------------- Start Assets Section ---------------
if (!function_exists('asset_url')) {

    function asset_url($asset_name, $asset_type = NULL) {
        $obj = & get_instance();
        $base_url = $obj->config->item('base_url');
        $asset_root = 'assets/';
        $asset_location = $base_url . $asset_root;

        if (is_array($asset_name)) {
            $cachename = md5(serialize($asset_name));
            $asset_location .= 'cache/' . $cachename . '.' . $asset_type;
            if (!is_file($asset_root . 'cache/' . $cachename . '.' . $asset_type)) {
                $out = fopen($asset_root . 'cache/' . $cachename . '.' . $asset_type, "w");
                foreach ($asset_name as $file) {
                    $file_content = file_get_contents($asset_root . $asset_type . '/' . $file);
                    fwrite($out, $file_content);
                }
                fclose($out);
            }
        } else {
            $asset_location .= $asset_type . '/' . $asset_name;
        }
        return $asset_location;
    }

}

if (!function_exists('css_asset')) {

    function css_asset($asset_name, $attributes = array()) {
        $attribute_str = _parse_asset_html($attributes);
        return '<link href="' . asset_url($asset_name, 'css') . '" rel="stylesheet" type="text/css"' . $attribute_str . ' />';
    }

}

if (!function_exists('css_plugin_asset')) {

    function css_plugin_asset($asset_name, $attributes = array()) {
        $attribute_str = _parse_asset_html($attributes);
        return '<link href="' . asset_url($asset_name, 'plugins') . '" rel="stylesheet" type="text/css"' . $attribute_str . ' />';
    }

}

if (!function_exists('js_asset')) {

    function js_asset($asset_name) {
        return '<script type="text/javascript" src="' . asset_url($asset_name, 'js') . '"></script>';
    }

}

if (!function_exists('js_plugin_asset')) {

    function js_plugin_asset($asset_name) {
        return '<script type="text/javascript" src="' . asset_url($asset_name, 'plugins') . '"></script>';
    }

}


if (!function_exists('image_asset')) {

    function image_asset($asset_name, $module_name = '', $attributes = array()) {
        $attribute_str = _parse_asset_html($attributes);
        return '<img src="' . asset_url($asset_name, 'img') . '"' . $attribute_str . ' />';
    }

}

if (!function_exists('_parse_asset_html')) {

    function _parse_asset_html($attributes = NULL) {
        if (is_array($attributes)):
            $attribute_str = '';
            foreach ($attributes as $key => $value):
                $attribute_str .= ' ' . $key . '="' . $value . '"';
            endforeach;
            return $attribute_str;
        endif;
        return '';
    }

}
//-------------- End Assets Section ---------------
//-------------- Start Url Section ------------------
if (!function_exists('back_url')) {

    function back_url($link) {
        $url = base_url('back/' . $link);
        return $url;
    }

}
//-------------- End Url Section ------------------

//-------------- Start Upload Section ---------------
if(!function_exists('upload')){
	function upload($file,$path,$name){
		$CI =& get_instance();		
		$CI->load->library('upload');
		//$pathnew = realpath(str_replace('','', APPPATH).'../assets/uploads/'.$path.'/');	
		$pathnew = realpath(FCPATH.'/assets/uploads/').'/'.$path.'/';
		if(!is_dir($pathnew)){
			mkdir($pathnew , 0777);
		}	
		$config = array(
			'allowed_types'	 => 'bmp|jpg|jpeg|gif|png|docx|xlsx|pdf',
			'upload_path'	 => $pathnew,
			'max_size'		 => 50000,
			'file_name'		 => $name,
			'overwrite'		 => TRUE
		);
		//echo "<pre>";
		//print_r($config);
		$CI->upload->initialize($config);
		$CI->upload->do_upload();
		$CI->upload->data();
	}
}

if(!function_exists('upload_thumbs')){
	function upload_thumbs($file,$path,$name,$width = 200,$height = 200){
		$error = '';
		$CI =& get_instance();
		$CI->load->library('upload');
		$pathnew 	= realpath(FCPATH.'/assets/uploads/').'/'.$path.'/';
		$paththumb 	= realpath(FCPATH.'/assets/uploads/').'/'.$path.'/thumbs';
		
		if(!is_dir($pathnew)){
			mkdir($pathnew , 0777);
		}

		$config_upload = array(
				'allowed_types'	 => 'bmp|jpg|jpeg|gif|png',
				'upload_path'	 => $pathnew,
				'max_size'		 => 50000,
				'file_name'		 => $name,
				'overwrite'		 => TRUE
		);

		$CI->upload->initialize($config_upload);
		if(!$CI->upload->do_upload($file)){
			$error = $CI->upload->display_errors();
		}else{
			$upload_data = $CI->upload->data();
			$CI->load->library('image_lib');
			
			$resize_conf = array(
					'source_image'  => $upload_data['full_path'],
					'new_image'     => $name,
					'maintain_ratio'=> TRUE,
					'master_dim'	=> 'width',
					'width'         => $width,
					'height'        => $height
			);
			
			$CI->image_lib->initialize($resize_conf);
			if ( ! $CI->image_lib->resize()) {
				$error = $CI->image_lib->display_errors();
			}
			$resize_conf = array(
					'source_image'  => $upload_data['full_path'],
					'new_image'     => $paththumb,
					'maintain_ratio'=> TRUE,
					'master_dim'	=> 'height',
					'width'         => 170,
					'height'        => 130
			);
				
			$CI->image_lib->initialize($resize_conf);
			
			if ( ! $CI->image_lib->resize()) {
				$error = $CI->image_lib->display_errors();
			}
		}
		if($error!='')
			return $name;
		else 
			return $error;
	}
}	

if(!function_exists('upload_resize')){
	function upload_resize($file,$path,$name,$width = 200,$height = 200){
		$error = '';
	  	$CI =& get_instance();
	  	$CI->load->library('upload');
	  	$pathnew = realpath(FCPATH.'/assets/uploads/').'\\'.$path.'\\';
	  	if(!is_dir($pathnew)){
	   		mkdir($pathnew , 0777);
	  	}

	  	$config_upload = array(
	    	'allowed_types' 	=> 'bmp|jpg|jpeg|gif|png',
	    	'upload_path'		=> $pathnew,
	   	 	'max_size'   		=> 50000,
	    	'file_name'   		=> $name,
	    	'overwrite'   		=> TRUE
	  	);

	 	//echo "<pre>";print_r($config_upload);exit;
	  	$CI->upload->initialize($config_upload);
	  	$CI->upload->do_upload();
	  	if(!$CI->upload->do_upload($file)){
	   		$error = $CI->upload->display_errors();
	  	}else{
	   		$upload_data = $CI->upload->data();
	   		// set the resize config 
	   		
		   	$resize_conf = array(
			     'source_image'  	=> $upload_data['full_path'],
			     'new_image'     	=> $name,
			     'maintain_ratio'	=> TRUE,
			     'master_dim' 		=> 'height',
			     'width'         	=> $width,
			     'height'        	=> $height
		   	);
		   	//echo "<pre>";print_r($config_upload);
		   	$CI->load->library('image_lib');
		  	$CI->image_lib->initialize($resize_conf);
		   	if ( ! $CI->image_lib->resize()) {
		    	$error = $CI->image_lib->display_errors();
		   	}else {    
		    	return $upload_data;
		   	}
	  	}
	  	if($error!='')
	   		return $name;
	  	else 
	   		return '';
	 }
}	

if(!function_exists('image_merge')){
	function image_merge($source_file,$dest_file){		
		$bgpath = realpath(FCPATH.'/assets/images/'.$source_file);
		$logopath = realpath(FCPATH.'/assets/uploads/tmp/'.$dest_file);
		$first_img = substr($bgpath, -3);
		// $second_img = substr($logopath, -3);
		// echo $first_img.'<br>';
		// echo $second_img.'<br>';
		// echo $bgpath.'<br>';
		// echo $logopath;exit;
		if($first_img == 'png'){
			$bg  = imagecreatefrompng($bgpath);
			$img = imagecreatefrompng($logopath);
		}elseif ($first_img == 'jpg') {
			$bg  = imagecreatefromjpeg($bgpath);
			$img = imagecreatefromjpeg($logopath);
		}

		$destW = imagesx($bg);
		$destH = imagesy($bg);
		
		$x_img = imagesx($img);
		$y_img = imagesy($img); 
		
		$srcX = $destW/2 - $x_img/2 ; 
		$srcY = $destH/2 - $y_img/2 ;  
		
		imagecopymerge($bg, $img, $srcX, $srcY, 0, 0, $x_img, $y_img, 100);
		
		imagejpeg($bg, $logopath, 100);
	}
}

if(!function_exists('file_name')){
	function file_name($file_name,$new_name){
		$ext = img_ext($file_name);
		
		return $new_name.'.'.$ext;
	}
}

if(!function_exists('img_ext')){
	function img_ext($img_name){
		return pathinfo($img_name, PATHINFO_EXTENSION);
	}	
}

//-------------- End Upload Section --------------


/*------ Encrypt/Decrypt --------*/
if(!function_exists('encrypt')){
	function encrypt($str){
		$CI =& get_instance();
		return $CI->encrypt->encode($str);
	}
}

if(!function_exists('decrypt')){
	function decrypt($str){
		$CI =& get_instance();
		return $CI->encrypt->decode($str);
	}
}

?>