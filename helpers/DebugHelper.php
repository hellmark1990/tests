<?php

namespace helpers;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Debug
 *
 * @author Mark
 */
class DebugHelper {

    public static function dd() {
        echo '<pre>';
        var_dump(func_get_args());
        echo '</pre>';
    }

}
