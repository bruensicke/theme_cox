<?php
if(file_exists(ELEMENTS.'admin/'.basename(__FILE__)))
{
	include_once ELEMENTS.'admin/'.basename(__FILE__);
	return;
}
