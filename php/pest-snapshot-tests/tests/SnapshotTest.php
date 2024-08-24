<?php

declare(strict_types=1);

test('Snapshot-tests', function () {
    expect(json_render())->toMatchSnapshot();
});
