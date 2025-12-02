<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Text
{
    //
    /**
     * Remove Arabic diacritics and other accents from a string.
     *
     * @param string $text
     * @return string
     */
    static function unaccent(string $text): string
    {
        // Arabic diacritics
        $diacritics = [
            'ّ', // Shadda
            'َ', // Fatha
            'ً', // Fathatan
            'ُ', // Damma
            'ٌ', // Dammatan
            'ِ', // Kasra
            'ٍ', // Kasratan
            'ْ', // Sukun
            'ٰ', // Superscript Alef
        ];

        // Normalize some common variations (optional)
        $replacements = [
            'أ' => 'ا',
            'إ' => 'ا',
            'آ' => 'ا',
            'ء' => '',  // remove hamza
            'ؤ' => 'و',
            'ئ' => 'ي',
        ];

        $text = str_replace($diacritics, '', $text);
        $text = strtr($text, $replacements);

        return $text;
    }
}
