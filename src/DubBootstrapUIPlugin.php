<?php

declare(strict_types=1);
/**
 * baserCMS :  Based Website Development Project <https://basercms.net>
 * Copyright (c) NPO baser foundation <https://baserfoundation.org/>
 *
 * @copyright     Copyright (c) NPO baser foundation
 * @link          https://basercms.net baserCMS Project
 * @since         5.0.0
 * @license       https://basercms.net/license/index.html MIT License
 */

namespace DubBootstrapUI;

use BaserCore\BcPlugin;
use BaserCore\Annotation\UnitTest;
use BaserCore\Annotation\NoTodo;
use BaserCore\Annotation\Checked;

/**
 * plugin for DubBootstrapUI
 */
class DubBootstrapUIPlugin extends BcPlugin
{

    public function install($options = []): bool
    {
        exec('composer require friendsofcake/bootstrap-ui');
        exec('bin/cake plugin load BootstrapUI');
        return parent::install($options);
    }
}
