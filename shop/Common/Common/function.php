<?php

/*
 * 删除缓存方法
 */
function delFileByDir($dir) {

	$dh = opendir($dir);
	// 	dump($dir);die();

	//readdir() 函数返回目录中下一个文件的文件名
	while ($file = readdir($dh)) {

		if ($file != "." && $file != "..") {

			$fullpath = $dir . "/" . $file;
			if (is_dir($fullpath)) {
				delFileByDir($fullpath);
			} else {
				unlink($fullpath);
			}
		}
	}
	//关闭文件夹
	closedir($dh);
	return true;
}