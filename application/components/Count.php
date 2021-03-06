<?php


namespace app\components;


class Count
{
    /**
     * @var int a counter used to generate [[id]] for widgets.
     * @internal
     */
    public static $counter = 0;

    /**
     * @var string the prefix to the automatically generated widget IDs.
     * @see getId()
     */
    public static $autoIdPrefix = 'c';

    /**
     * Returns the ID of the widget.
     * @return string ID of the widget.
     */
    public function getIndex()
    {
        return static::$autoIdPrefix . static::$counter++;
    }
}
