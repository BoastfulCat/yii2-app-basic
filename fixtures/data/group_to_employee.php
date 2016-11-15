<?php

$result = [];
for ($u = 1; $u <= 6; $u++) {
    for ($s = 1; $s <= 4; $s++) {
        $result[] = ['employee_id' => $u, 'group_id' => $s];
    }
}

return array_map(function ($key) use ($result) {
    return $result[$key];
}, array_rand($result, 10));
