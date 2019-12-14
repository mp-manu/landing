<?php
namespace app\components;

use yii\base\Component;

class LanguageComponent extends Component
{

    public function setValue($column, &$variable, $value) {
        if (empty($variable->$column))
            $variable->$column = $value;
    }
}
?>