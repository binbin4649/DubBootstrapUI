<?php

namespace DubBootstrapUI\View\Helper;

use Cake\View\Helper;

/**
 * BcSampleHelper
 *
 * テーマで利用したヘルパー（表示用関数）を記載したい場合にはここに記載します。
 * クラス名は任意です。Helperフォルダに配置したヘルパーが利用できます。
 *
 * 利用例：<?php $this->BcSample->show() ?>
 * 
 * 参考
 * https://binbin4649.github.io/friendsofcake/bootstrap-ui-ja
 */
class BootstrapUIHelper extends Helper
{

	protected array $helpers = [
		'UIForm' => ['className' => 'BootstrapUI.Form'],
		'UIHtml' => ['className' => 'BootstrapUI.Html'],
		'UIPaginator' => ['className' => 'BootstrapUI.Paginator'],
	];

	public function initialize(array $config): void
	{
		parent::initialize($config);
	}

	# Basic forms

	public function create($context, array $options = [])
	{
		return $this->UIForm->create($context, $options);
	}

	public function control($context, array $options = [])
	{
		return $this->UIForm->control($context, $options);
	}

	public function button($text, array $options = [])
	{
		return $this->UIForm->button($text, $options);
	}

	public function end()
	{
		return $this->UIForm->end();
	}

	# Badges

	public function badge($text, array $options = [])
	{
		return $this->UIHtml->badge($text, $options);
	}

	#Icons

	public function icon($icon, array $options = [])
	{
		return $this->UIHtml->icon($icon, $options);
	}

	#Pagination

	public function first($title = null, array $options = [])
	{
		return $this->UIPaginator->first($title, $options);
	}

	public function last($title = null, array $options = [])
	{
		return $this->UIPaginator->last($title, $options);
	}

	public function next($title = null, array $options = [])
	{
		return $this->UIPaginator->next($title, $options);
	}

	public function prev($title = null, array $options = [])
	{
		return $this->UIPaginator->prev($title, $options);
	}

	public function numbers(array $options = [])
	{
		return $this->UIPaginator->numbers($options);
	}

	public function links(array $options = [])
	{
		return $this->UIPaginator->links($options);
	}
}
