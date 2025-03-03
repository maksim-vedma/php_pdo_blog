<?php

function excerpt(string $content): string {
    if (strlen($content) < 60) {
        return $content;
    }
    return substr($content, 0, 60) . '...';
}
