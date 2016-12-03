<?php

use Forge\Application\Module;

abstract class Base extends Module {

	protected $account;

	public function __construct() {
		$config = $this->getConfig();
		$this->assignRoles();
	}

	protected function assignRoles() {
		if ($this->hasAccount()) {
			if ($this->account === 'admin') {
				$this->addRole('admin');
			}
			$this->addRole('user');
		} else {
			$this->addRole('anonymous');
		}
	}

	public function routes() {
		return array(
			'get' => array(
				'/' => $this->getBaseUri() . '/main',
			),
		);
	}

	public function getAccount() {
		if (!$this->account) {
			$this->account = $this->getSession('account');
		}
		return $this->account;
	}

	public function hasAccount() {
		if (!empty(self::getAccount())) {
			return true;
		}
		return false;
	}
}