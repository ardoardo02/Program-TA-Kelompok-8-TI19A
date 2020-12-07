<?php
function dasar($c1, $c2, $c3 = null)
{
    // -- Vokal A 2 Karakter -- //
    if ($c2 == 'a') {
        if ($c1 == 'h') return ['ꦲ', 2];
        elseif ($c1 == 'n') return ['ꦤ', 2];
        elseif ($c1 == 'c') return ['ꦕ', 2];
        elseif ($c1 == 'r') return ['ꦫ', 2];
        elseif ($c1 == 'k') return ['ꦏ', 2];
        elseif ($c1 == 'd') return ['ꦢ', 2];
        elseif ($c1 == 't') return ['ꦠ', 2];
        elseif ($c1 == 's') return ['ꦱ', 2];
        elseif ($c1 == 'w') return ['ꦮ', 2];
        elseif ($c1 == 'l') return ['ꦭ', 2];
        elseif ($c1 == 'p') return ['ꦥ', 2];
        elseif ($c1 == 'j') return ['ꦗ', 2];
        elseif ($c1 == 'y') return ['ꦪ', 2];
        elseif ($c1 == 'm') return ['ꦩ', 2];
        elseif ($c1 == 'g') return ['ꦒ', 2];
        elseif ($c1 == 'b') return ['ꦧ', 2];
        else return null;
    }
    // -- Vokal A 3 Karakter -- //
    elseif ($c3 == 'a') {
        if ($c1 == 'd' && $c2 == 'h') return ['ꦝ', 3];
        elseif ($c1 == 'n' && $c2 == 'y') return ['ꦚ', 3];
        elseif ($c1 == 't' && $c2 == 'h') return ['ꦛ', 3];
        elseif ($c1 == 'n' && $c2 == 'g') return ['ꦔ', 3];
        else return null;
    }
    // -- Vokal I 2 Karakter -- //
    elseif ($c2 == 'i') {
        if ($c1 == 'h') return ['ꦲꦶ', 2];
        elseif ($c1 == 'n') return ['ꦤꦶ', 2];
        elseif ($c1 == 'c') return ['ꦕꦶ', 2];
        elseif ($c1 == 'r') return ['ꦫꦶ', 2];
        elseif ($c1 == 'k') return ['ꦏꦶ', 2];
        elseif ($c1 == 'd') return ['ꦢꦶ', 2];
        elseif ($c1 == 't') return ['ꦠꦶ', 2];
        elseif ($c1 == 's') return ['ꦱꦶ', 2];
        elseif ($c1 == 'w') return ['ꦮꦶ', 2];
        elseif ($c1 == 'l') return ['ꦭꦶ', 2];
        elseif ($c1 == 'p') return ['ꦥꦶ', 2];
        elseif ($c1 == 'j') return ['ꦗꦶ', 2];
        elseif ($c1 == 'y') return ['ꦪꦶ', 2];
        elseif ($c1 == 'm') return ['ꦩꦶ', 2];
        elseif ($c1 == 'g') return ['ꦒꦶ', 2];
        elseif ($c1 == 'b') return ['ꦧꦶ', 2];
        else return null;
    }
    // -- Vokal I 3 Karakter -- //
    elseif ($c3 == 'i') {
        if ($c1 == 'd' && $c2 == 'h') return ['ꦝꦶ', 3];
        elseif ($c1 == 'n' && $c2 == 'y') return ['ꦚꦶ', 3];
        elseif ($c1 == 't' && $c2 == 'h') return ['ꦛꦶ', 3];
        elseif ($c1 == 'n' && $c2 == 'g') return ['ꦔꦶ', 3];
        else return null;
    }
    // -- Vokal U 2 Karakter -- //
    elseif ($c2 == 'u') {
        if ($c1 == 'h') return ['ꦲꦸ', 2];
        elseif ($c1 == 'n') return ['ꦤꦸ', 2];
        elseif ($c1 == 'c') return ['ꦕꦸ', 2];
        elseif ($c1 == 'r') return ['ꦫꦸ', 2];
        elseif ($c1 == 'k') return ['ꦏꦸ', 2];
        elseif ($c1 == 'd') return ['ꦢꦸ', 2];
        elseif ($c1 == 't') return ['ꦠꦸ', 2];
        elseif ($c1 == 's') return ['ꦱꦸ', 2];
        elseif ($c1 == 'w') return ['ꦮꦸ', 2];
        elseif ($c1 == 'l') return ['ꦭꦸ', 2];
        elseif ($c1 == 'p') return ['ꦥꦸ', 2];
        elseif ($c1 == 'j') return ['ꦗꦸ', 2];
        elseif ($c1 == 'y') return ['ꦪꦸ', 2];
        elseif ($c1 == 'm') return ['ꦩꦸ', 2];
        elseif ($c1 == 'g') return ['ꦒꦸ', 2];
        elseif ($c1 == 'b') return ['ꦧꦸ', 2];
        else return null;
    }
    // -- Vokal U 3 Karakter -- //
    elseif ($c3 == 'u') {
        if ($c1 == 'd' && $c2 == 'h') return ['ꦝꦸ', 3];
        elseif ($c1 == 'n' && $c2 == 'y') return ['ꦚꦸ', 3];
        elseif ($c1 == 't' && $c2 == 'h') return ['ꦛꦸ', 3];
        elseif ($c1 == 'n' && $c2 == 'g') return ['ꦔꦸ', 3];
        else return null;
    }
    // -- Vokal E 2 Karakter -- //
    if ($c2 == 'e') {
        if ($c1 == 'h') return ['ꦲꦺ', 2];
        elseif ($c1 == 'n') return ['ꦤꦺ', 2];
        elseif ($c1 == 'c') return ['ꦕꦺ', 2];
        elseif ($c1 == 'r') return ['ꦫꦺ', 2];
        elseif ($c1 == 'k') return ['ꦏꦺ', 2];
        elseif ($c1 == 'd') return ['ꦢꦺ', 2];
        elseif ($c1 == 't') return ['ꦠꦺ', 2];
        elseif ($c1 == 's') return ['ꦱꦺ', 2];
        elseif ($c1 == 'w') return ['ꦮꦺ', 2];
        elseif ($c1 == 'l') return ['ꦭꦺ', 2];
        elseif ($c1 == 'p') return ['ꦥꦺ', 2];
        elseif ($c1 == 'j') return ['ꦗꦺ', 2];
        elseif ($c1 == 'y') return ['ꦪꦺ', 2];
        elseif ($c1 == 'm') return ['ꦩꦺ', 2];
        elseif ($c1 == 'g') return ['ꦒꦺ', 2];
        elseif ($c1 == 'b') return ['ꦧꦺ', 2];
        else return null;
    }
    // -- Vokal E 3 Karakter -- //
    elseif ($c3 == 'e') {
        if ($c1 == 'd' && $c2 == 'h') return ['ꦝꦺ', 3];
        elseif ($c1 == 'n' && $c2 == 'y') return ['ꦚꦺ', 3];
        elseif ($c1 == 't' && $c2 == 'h') return ['ꦛꦺ', 3];
        elseif ($c1 == 'n' && $c2 == 'g') return ['ꦔꦺ', 3];
        else return null;
    }
    // -- Vokal O 2 Karakter -- //
    if ($c2 == 'o') {
        if ($c1 == 'h') return ['ꦲꦺꦴ', 2];
        elseif ($c1 == 'n') return ['ꦤꦺꦴ', 2];
        elseif ($c1 == 'c') return ['ꦕꦺꦴ', 2];
        elseif ($c1 == 'r') return ['ꦫꦺꦴ', 2];
        elseif ($c1 == 'k') return ['ꦏꦺꦴ', 2];
        elseif ($c1 == 'd') return ['ꦢꦺꦴ', 2];
        elseif ($c1 == 't') return ['ꦠꦺꦴ', 2];
        elseif ($c1 == 's') return ['ꦱꦺꦴ', 2];
        elseif ($c1 == 'w') return ['ꦮꦺꦴ', 2];
        elseif ($c1 == 'l') return ['ꦭꦺꦴ', 2];
        elseif ($c1 == 'p') return ['ꦥꦺꦴ', 2];
        elseif ($c1 == 'j') return ['ꦗꦺꦴ', 2];
        elseif ($c1 == 'y') return ['ꦪꦺꦴ', 2];
        elseif ($c1 == 'm') return ['ꦩꦺꦴ', 2];
        elseif ($c1 == 'g') return ['ꦒꦺꦴ', 2];
        elseif ($c1 == 'b') return ['ꦧꦺꦴ', 2];
        else return null;
    }
    // -- Vokal O 3 Karakter -- //
    elseif ($c3 == 'o') {
        if ($c1 == 'd' && $c2 == 'h') return ['ꦝꦺꦴ', 3];
        elseif ($c1 == 'n' && $c2 == 'y') return ['ꦚꦺꦴ', 3];
        elseif ($c1 == 't' && $c2 == 'h') return ['ꦛꦺꦴ', 3];
        elseif ($c1 == 'n' && $c2 == 'g') return ['ꦔꦺꦴ', 3];
        else return null;
    } else return null;
}

function vokal($v)
{
    if ($v == 'a') return 'ꦄ';
    elseif ($v == 'i') return 'ꦆ';
    elseif ($v == 'u') return 'ꦈ';
    elseif ($v == 'e') return 'ꦌ';
    elseif ($v == 'o') return 'ꦎ';
    else return '';
}

function angka($a)
{
    if ($a == 1) return '꧑';
    elseif ($a == 2) return '꧒';
    elseif ($a == 3) return '꧓';
    elseif ($a == 4) return '꧔';
    elseif ($a == 5) return '꧕';
    elseif ($a == 6) return '꧖';
    elseif ($a == 7) return '꧗';
    elseif ($a == 8) return '꧘';
    elseif ($a == 9) return '꧙';
    elseif ($a == 0) return '꧐';
    else return '';
}
