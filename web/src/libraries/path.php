<?php

function isPath(string $route, &$params = []): bool
{
    $path = $_SERVER["REQUEST_URI"];
    $pathSeparatorPattern = "#/#";

    $routeParts = preg_split($pathSeparatorPattern, trim($route, "/"));
    $pathParts = preg_split($pathSeparatorPattern, trim($path, "/"));

    if (count($routeParts) !== count($pathParts)) {
        return false;
    }

    $params = []; // Clear any previous parameters.

    foreach ($routeParts as $routePartIndex => $routePart) {
        $pathPart = $pathParts[$routePartIndex];

        if (str_starts_with($routePart, ":")) {
            $paramName = ltrim($routePart, ":");
            $params[$paramName] = $pathPart; // Extract the parameter value.
            continue;
        }

        if ($routePart !== $pathPart) {
            return false;
        }
    }

    return true;
}
