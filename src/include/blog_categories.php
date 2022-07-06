<?php
$blog_categories = file_get_contents('include/categories.php');

$arrCategories = explode("\n", trim($blog_categories));

foreach($arrCategories as $strCategory)
{
	list($key,$value)=explode(". ",$strCategory);
	
	$category_link = $this->category_link($key, $value);
	
	echo '<li><a href="'.$category_link.'">'.$value.'</a></li>';
}
?>