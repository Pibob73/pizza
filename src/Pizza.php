<?php

namespace pepe\lw3;

abstract class Pizza
{
    public string $name;
    public string $sauce;
    public array $toppings;

    public function prepare(): string
    {
        $phrase = "Началась готовка пиццы " + $this->name + "\n";
        $phrase += "Добавлен соус " + "$this->sauce" + "\n";
        $phrase += "Добавлены топики: \n";
        foreach ($this->toppings as $part) {
            $phrase += $part + "\n";
        }
        return $phrase;
    }

    public function cut(): string
    {
        return "Данную пиццу нарезают по диагонали\n";
    }
}
