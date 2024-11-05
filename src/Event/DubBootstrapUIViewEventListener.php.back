<?php

declare(strict_types=1);
/**
 * baserCMS :  Based Website Development Project <https://basercms.net>
 * Copyright (c) NPO baser foundation <https://baserfoundation.org/>
 *
 * @copyright     Copyright (c) NPO baser foundation
 * @link          https://basercms.net baserCMS Project
 * @since         5.0.7
 * @license       https://basercms.net/license/index.html MIT License
 */

namespace DubBootstrapUI\Event;

use BaserCore\Event\BcViewEventListener;
use Cake\Event\Event;

/**
 * DubManual View Event Listener
 */
class DubBootstrapUIViewEventListener extends BcViewEventListener
{

    /**
     * events
     * @var string[]
     */
    public $events = [
        'beforeRender'
    ];

    public function beforeRender(Event $event)
    {
        $view = $event->getSubject();
        $view->helpers()->unload('BcAdminForm');
        $view->loadHelper('BaserCore.BcAdminForm', ['templates' => 'DubBootstrapUi.bc_form']);
        \Cake\Log\Log::warning('beforeRender イベントが発火しました。');

        // $view->helpers()->unload('Mailform');
        // $view->loadHelper('BcMail.Mailform', ['templates' => 'DubBootstrapUi.bc_form']);
    }
}
