<?php

use Forge\Application;
use Forge\Application\Module;
use Forge\Application\Renderer\Php;

class Main extends Module {

	protected $menu;

	protected function getMenu() {
		if (!$this->menu) {
			$this->menu = $this->callHook('Menu');
		}
		return $this->menu;
	}

	public function globalConfig() {

//		$tpl = $this->getAppDir() . DS . 'web' . DS . 'themes' . DS . 'heroic' . DS . 'layout.phtml';
//		echo $tpl;
//		exit;
//		$this->setLayout($tpl);
		$this->setTheme('heroic');

//		$this->setDefaultModule('themer');
//		echo 'def: ' . Application::$defaultModule . '<br />';
		
		
		
//		echo $tpl;
//		exit;
	}

	public function main() {
		return 'test';
	}
 
	public function help() {
		
	}
	
//	public function getTemplate() {
//
//		$config = $this->getConfig();
//echo $this->getAppDir() . 'web' . DS . 'themes' . DS . $config->theme . DS . 'layout.phtml';
//echo '<pre>';
//print_r($this->getConfig());
//echo '</pre>';
//exit;
//
//		return parent::getTemplate();
//	}

	public function hookMenu() {
		return array('Main' => array(
			'url' => '#',
			'target' => 'main',
			'children' => array(
				'sub1' => array(
					'url' => '#'
				),
				'sub2' => array(
					'url' => '#'
				)
			)
		));
	}
}