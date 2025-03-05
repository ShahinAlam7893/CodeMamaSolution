<?php

function totalFrames($minutes, $fps) {
    return $minutes * 60 * $fps; // Convert minutes to seconds and multiply by FPS
}
fscanf(STDIN, "%d %d", $minutes, $fps);


echo totalFrames($minutes, $fps) . PHP_EOL;
?>
