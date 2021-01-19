<?php
function v($var)
{
    $root_path = __DIR__ . '/../../';
    $ff = "font-family: 'Helvetica Neue',Arial,'Hiragino Kaku Gothic ProN','Hiragino Sans','BIZ UDPGothic',Meiryo,sans-serif !important;";
    $flex       = 'display: flex; align-items: center;';
    $py         = 'padding:6px 0;';
    $pl         = 'padding-left: 8px;';
    $border_dot = 'border-bottom:1px dotted #aaa;';
    $fs         = 'font-size: 11.5px;';
    $fb         = 'font-weight: bold;';
    $pink       = 'color: #E91E63;';
    $blue       = 'color: #2196F3;';
    $green      = 'color: #009688;';
    $br         = 'border-right: 1px solid #dcdcdc;';
    $mx         = 'margin: 0 8px;';
    $h          = 'height: 11px;';
    $wauto      = 'width: auto;';

    $b = debug_backtrace(null, 1)[0];
    $var_name = preg_match(sprintf('|%s\(([^\)]+?)\)|', $b['function']), preg_replace('/[[:space:]]/', '', implode('', array_slice(file($b['file']), $b['line'] - 1))), $m) ? ($m[1][0] === '$' ? $m[1] : null) : null;

    $file = '';
    $paths = array_values(array_filter(explode('/', str_replace($root_path, '', $b['file']))));
    $x = 1;
    foreach ($paths as $key => $path) {
        if ($x !== count($paths)) {
            $file .= "<span>/{$path}</span>";
        } else {
            $file .= "/<span style=\"{$fb}\">" . $path . "</span>";
        }
    }
    echo "<div style=\"{$ff} {$flex} {$wauto}\">\n";
    echo "\t<div style=\"{$fs} {$pink}\">\n";
    echo "\t\t" . $file . "\n";
    echo "\t</div>\n";
    echo "\t<div style=\"{$br} {$mx} {$h}\"></div>\n";
    echo "\t<div style=\"{$fs} {$blue}\">\n";
    echo "\t\tLine: <span style=\"{$fb}\">" . $b['line'] . "</span>\n";
    echo "\t</div>\n";
    echo "\t<div style=\"{$br} {$mx} {$h}\"></div>\n";
    echo "\t<div style=\"{$fs} {$green}\">\n";
    echo "\t\tArgs: <span style=\"{$fb}\">" . $var_name . "</span>\n";
    echo "\t</div>\n";
    echo "</div>\n\n";

    echo "<div style=\"{$py} {$pl} {$border_dot} {$wauto}\">\n";
    _v($var);
    echo "</div>\n";
}

function _v($var)
{
    $ff = "font-family: 'Helvetica Neue',Arial,'Hiragino Kaku Gothic ProN','Hiragino Sans','BIZ UDPGothic',Meiryo,sans-serif !important;";
    $m0         = 'margin:0;';
    $p          = 'padding: 6px;';
    $font       = 'font-size: 11.5px;';
    $collapse   = 'border-collapse: collapse;';
    $wauto      = 'width: auto;';

    if (is_array($var)) {
        echo "<table style=\"{$ff} {$font} {$collapse} {$wauto}\">\n";
        __v($var);
        echo "</table>\n";
    } else {
        echo "\t<pre style=\"{$ff} {$font} {$m0} {$p}\">\n";
        var_dump($var);
        echo "\t</pre>\n";
    }
}

function __v($var)
{
    $ff = "font-family: 'Helvetica Neue',Arial,'Hiragino Kaku Gothic ProN','Hiragino Sans','BIZ UDPGothic',Meiryo,sans-serif !important;";
    $bg     = 'background: #BBDEFB;';
    $bgi    = 'background: #E3F2FD;';
    $border = 'border: 1px solid #aaa;';
    $p      = 'padding: 2px;';
    $a      = 'text-align: left;';
    $fs     = 'font-size: 11.5px;';


    echo "<tr style=\"{$a}\">\n";
    echo "\t<th style=\"{$fs} {$border} {$bg} {$p}\">key</th>\n";
    echo "\t<th style=\"{$fs} {$border} {$bg} {$p}\">val</th>\n";
    echo "</tr>\n";
    foreach ($var as $key => $_var) {
        echo "<tr valign=\"middle\">\n";
        echo "\t<td style=\"{$fs} {$border} {$bgi} {$p}\">{$key}</td>\n";
        echo "\t<td style=\"{$fs} {$border} {$p}\">\n";
        if (is_array($_var)) {
            _v($_var);
        } else {
            echo $_var;
            echo "\t</td>\n";
            echo "</tr>\n";
        }
    }
}

function vv($val)
{
    $root_path = __DIR__ . '/../../';
    $ff = "font-family: 'Helvetica Neue',Arial,'Hiragino Kaku Gothic ProN','Hiragino Sans','BIZ UDPGothic',Meiryo,sans-serif !important;";
    $flex       = 'display: flex; align-items: center;';
    $py         = 'padding:6px 0;';
    $pl         = 'padding-left: 8px;';
    $border_dot = 'border-bottom:1px dotted #aaa;';
    $fs         = 'font-size: 11.5px;';
    $fb         = 'font-weight: bold;';
    $pink       = 'color: #E91E63;';
    $blue       = 'color: #2196F3;';
    $green      = 'color: #009688;';
    $br         = 'border-right: 1px solid #dcdcdc;';
    $mx         = 'margin: 0 8px;';
    $h          = 'height: 11px;';
    $wauto      = 'width: auto;';

    $b = debug_backtrace(null, 1)[0];
    $var_name = preg_match(sprintf('|%s\(([^\)]+?)\)|', $b['function']), preg_replace('/[[:space:]]/', '', implode('', array_slice(file($b['file']), $b['line'] - 1))), $m) ? ($m[1][0] === '$' ? $m[1] : null) : null;

    $file = '';
    $paths = array_values(array_filter(explode('/', str_replace($root_path, '', $b['file']))));
    $x = 1;
    foreach ($paths as $key => $path) {
        if ($x !== count($paths)) {
            $file .= "<span>/{$path}</span>";
        } else {
            $file .= "/<span style=\"{$fb}\">" . $path . "</span>";
        }
    }
    echo "<div class=\"aaa\" style=\"{$flex} {$wauto}\">\n";
    echo "\t<div style=\"{$fs} {$pink}\">\n";
    echo "\t\t" . $file . "\n";
    echo "\t</div>\n";
    echo "\t<div style=\"{$br} {$mx} {$h}\"></div>\n";
    echo "\t<div style=\"{$fs} {$blue}\">\n";
    echo "\t\tLine: <span style=\"{$fb}\">" . $b['line'] . "</span>\n";
    echo "\t</div>\n";
    echo "\t<div style=\"{$br} {$mx} {$h}\"></div>\n";
    echo "\t<div style=\"{$fs} {$green}\">\n";
    echo "\t\tArgs: <span style=\"{$fb}\">" . $var_name . "</span>\n";
    echo "\t</div>\n";
    echo "</div>\n\n";

    echo "<div style=\"{$ff}\">";
    echo "<pre>";
    var_dump($val);
    echo "</pre>";
    echo "</div>";
}

function memory()
{
    $usage = round(memory_get_usage() / (1024 * 1024), 2);
    $peak = round(memory_get_peak_usage() / (1024 * 1024), 2);
    $limit =  (int) rtrim(ini_get('memory_limit'), 'M');
    $usage_percent = round(($usage / $limit) * 100, 3) . '%';
    $peak_percent = round(($peak / $limit) * 100, 3) . '%';
    echo "<br>";
    echo "<strong style=\"color: skyblue;\">Usage</strong> : <strong>{$usage}MB</strong> / {$limit}MB = {$usage_percent} | ";
    echo "<strong style=\"color: skyblue;\">Peak</strong> : <strong>{$peak}MB</strong> / {$limit}MB = {$peak_percent}";
    echo "<br>";
}
