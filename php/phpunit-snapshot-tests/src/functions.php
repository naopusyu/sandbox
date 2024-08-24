<?php

declare(strict_types=1);

function json_render(): string
{
    $values = [
        [
            'name' => 'りんご',
            'price' => 150,
            "stock" => 10,
        ],
        [
            'name' => 'バナナ',
            'price' => 200,
            "stock" => 5,
        ],
        [
            'name' => 'みかん',
            'price' => 120,
            "stock" => 8,
        ],
    ];
    return json_encode($values);
}
