<?php
namespace mmarouf\massets\web;

use yii\base\Exception;
use yii\web\AssetBundle as BaseMetronicAsset;

/**
 * Metronic AssetBundle
 * @since 0.1
 */
class MetronicAsset extends BaseMetronicAsset
{
    public $sourcePath = '@vendor/enjoy-life/metronic/assets';
    public $css = [
        //BEGIN LAYOUT FIRST STYLES
        '//fonts.googleapis.com/css?family=Oswald:400,300,700',
        
        //BEGIN GLOBAL MANDATORY STYLES
        'http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all',
        'global/plugins/font-awesome/css/font-awesome.min.css',
        'global/plugins/simple-line-icons/simple-line-icons.min.css',
        'global/plugins/bootstrap/css/bootstrap.min.css',
        'global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
        
        //BEGIN PAGE LEVEL PLUGINS
        'global/plugins/datatables/datatables.min.css',
        'global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css',
        
        'global/plugins/bootstrap-daterangepicker/daterangepicker.min.css',
        'global/plugins/morris/morris.css',
        'global/plugins/fullcalendar/fullcalendar.min.css',
        'global/plugins/jqvmap/jqvmap/jqvmap.css',
        
        //BEGIN THEME GLOBAL STYLES
        'global/css/components-md.min.css',
        'global/css/plugins-md.min.css',
    ];
    public $js = [
        //BEGIN CORE PLUGINS
        'global/plugins/bootstrap/js/bootstrap.min.js',
        'global/plugins/js.cookie.min.js',
        'global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
        'global/plugins/jquery.blockui.min.js',
        'global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
        
        //BEGIN PAGE LEVEL PLUGINS
        
        'global/scripts/datatable.js',
        'global/plugins/datatables/datatables.min.js',
        'global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js',
        'pages/scripts/table-datatables-responsive.min.js',
        
        
        'global/plugins/moment.min.js',
        'global/plugins/bootstrap-daterangepicker/daterangepicker.min.js',
        'global/plugins/morris/morris.min.js',
        'global/plugins/morris/raphael-min.js',
        'global/plugins/counterup/jquery.waypoints.min.js',
        'global/plugins/counterup/jquery.counterup.min.js',
        'global/plugins/amcharts/amcharts/amcharts.js',
        'global/plugins/amcharts/amcharts/serial.js',
        'global/plugins/amcharts/amcharts/pie.js',
        'global/plugins/amcharts/amcharts/radar.js',
        'global/plugins/amcharts/amcharts/themes/light.js',
        'global/plugins/amcharts/amcharts/themes/patterns.js',
        'global/plugins/amcharts/amcharts/themes/chalk.js',
        'global/plugins/amcharts/ammap/ammap.js',
        'global/plugins/amcharts/ammap/maps/js/worldLow.js',
        'global/plugins/amcharts/amstockcharts/amstock.js',
        'global/plugins/fullcalendar/fullcalendar.min.js',
        'global/plugins/horizontal-timeline/horizontal-timeline.js',
        'global/plugins/flot/jquery.flot.min.js',
        'global/plugins/flot/jquery.flot.resize.min.js',
        'global/plugins/flot/jquery.flot.categories.min.js',
        'global/plugins/jquery-easypiechart/jquery.easypiechart.min.js',
        'global/plugins/jquery.sparkline.min.js',
        'global/plugins/jqvmap/jqvmap/jquery.vmap.js',
        'global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js',
        'global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js',
        'global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js',
        'global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js',
        'global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js',
        'global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js',
        
        //BEGIN THEME GLOBAL SCRIPTS
        'global/scripts/app.min.js',
        
        //BEGIN PAGE LEVEL SCRIPTS
        'pages/scripts/dashboard.min.js',
        
        //BEGIN THEME LAYOUT SCRIPTS
        'layouts/global/scripts/quick-sidebar.min.js',
        'layouts/global/scripts/quick-nav.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

    /**
     * @var string|bool Choose skin color, eg. `'skin-blue'` or set `false` to disable skin loading
     * @see https://almsaeedstudio.com/themes/AdminLTE/documentation/index.html#layout
     */
    public $layout = 'layout';

    /**
     * @inheritdoc
     */
    public function init()
    {
        // Append skin color file if specified
        if ($this->layout) {
            if (('layout' !== $this->layout) && (strpos($this->layout, 'layout') !== 0)) {
                throw new Exception('Invalid layout specified');
            }

            $this->css[] = sprintf('layouts/%s/css/layout.min.css', $this->layout);
			$this->css[] = sprintf('layouts/%s/css/custom.min.css', $this->layout);
			
			$this->js[] = sprintf('layouts/%s/scripts/layout.min.js', $this->layout);
        }

        parent::init();
    }
}
