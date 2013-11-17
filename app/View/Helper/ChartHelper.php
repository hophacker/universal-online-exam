<?php
/*
 * This file is ready to run as standalone example. However, please do:
 * 1. Add tags <html><head><body> to make a complete page
 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
 */

class ChartHelper extends AppHelper {

    public $KoolControlsFolder = "../../vendors/KoolPHPSuite/KoolControls"; //Relative path to "KoolPHPSuite/KoolControls" folder

    public function columnChart($title, $labels, $data, $unit) {
        
//        debug($title);
//        debug($labels);
//        debug($data);
//        debug($unit);
//        debug(array_values($data));
//        return;
//        if (sizeof($data) == 1){
//            $data[] = $data[0]+1;
//            $labels[] = '参照物';
//        }
        require $this->KoolControlsFolder . "/KoolChart/koolchart.php";
        $chart = new KoolChart("chart");
        $chart->scriptFolder = $this->KoolControlsFolder . "/KoolChart";
        $chart->Title->Text = $title;
        $chart->Width = 820;
        $chart->Height = 500;
//$chart->BackgroundColor = "#ffffee";
        
//        $chart->PlotArea->XAxis->Title = "Quarters";
        if (count($data) == 0)
            $maxV = 0;
        else $maxV = max($data);
        $chart->PlotArea->XAxis->Set($labels);
        $chart->PlotArea->YAxis->MinValue = 0;
        $chart->PlotArea->YAxis->MaxValue = $maxV;
        $chart->PlotArea->YAxis->Title = "注册人数 ( .$unit)";
        $chart->PlotArea->YAxis->LabelsAppearance->DataFormatString = "$ {0}";
        $chart->PlotArea->YAxis->MajorStep = ($maxV < 5)? $maxV: (int)($maxV/5);
        
        $series = new ColumnSeries();
        $series->Name = "人数";
        $series->TooltipsAppearance->DataFormatString = "$ {0} $unit";
        $series->ArrayData($data);
        
        $chart->PlotArea->AddSeries($series);
        
//        $chart->Render();
        return $chart->Render();
//        debug($chart);

//        $series = new ColumnSeries();
//        $series->Name = "Computers";
//        $series->TooltipsAppearance->DataFormatString = "$ {0} millions";
//        $series->ArrayData(array(34, 55, 10, 40));
//        $chart->PlotArea->AddSeries($series);
//
//        $series = new ColumnSeries();
//        $series->Name = "Tablets & e-readers";
//        $series->TooltipsAppearance->DataFormatString = "$ {0} millions";
//        $series->ArrayData(array(56, 23, 56, 80));
//        $chart->PlotArea->AddSeries($series);
    }

}
?>
