<?php
/**
 * @package    oakcms
 * @author     Hryvinskyi Volodymyr <script@email.ua>
 * @copyright  Copyright (c) 2015 - 2017. Hryvinskyi Volodymyr
 * @version    0.0.1-beta.0.1
 */
namespace app\modules\rbac;

class RbacModule extends \app\components\module\Module
{

    public static $urlRulesBackend = [
        '/admin/permission/<action>' => '/permit/access/<action>',
    ];


}
