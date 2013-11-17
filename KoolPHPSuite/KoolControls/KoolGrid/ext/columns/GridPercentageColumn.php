<?php

class GridPercentageColumn extends GridColumn
{
	var $MaxValue=100;
	var $BackCss;
	var $FrontCss;
	var $BarWidth;
	var $BarHeight;
	var $BackColor;
	var $FrontColor;

	function Render($_row)
	{
		
		$_width_percent = ($_row->DataItem[$this->DataField]*100/$this->MaxValue)."%";
		
		$_tpl = "<div class='kgrPercentageColumn_Back {backcss}' style='{backcolor}{barwidth}' title='{width_percent}'><div class='kgrPercentageColumn_Front {frontcss}' style='min-height:5px;{frontcolor}{barheight}width:{width_percent}'></div></div>";
		$_main = str_replace("{backcss}",$this->BackCss,$_tpl);
		$_main = str_replace("{frontcss}",$this->FrontCss,$_main);
		$_main = str_replace("{barwidth}",($this->BarWidth===null)?"":"width:".$this->BarWidth,$_main);
		$_main = str_replace("{barheight}",($this->BarHeight===null)?"":"height:".$this->BarHeight.";",$_main);

		$_main = str_replace("{backcolor}",($this->BackColor===null)?"":"background:".$this->BackColor.";",$_main);
		$_main = str_replace("{frontcolor}",($this->FrontColor===null)?"":"background:".$this->FrontColor.";",$_main);

		$_main = str_replace("{width_percent}",$_width_percent,$_main);
		
		return $_main;
	}
	function InlineEditRender($_row)
	{
		
	}
	function CreateInstance($_instance = null)
	{
		if($_instance===null)
		{
			$_instance = new GridPercentageColumn();		
		}
		parent::CreateInstance($_instance);
		$_instance->MaxValue = $this->MaxValue;
		$_instance->BackCss = $this->BackCss;
		$_instance->FrontCss = $this->FrontCss;
		$_instance->BarWidth = $this->BarWidth;
		$_instance->BarHeight = $this->BarHeight;
		$_instance->BackColor = $this->BackColor;
		$_instance->FrontColor = $this->FrontColor;
		return $_instance;
	}	
}
?>