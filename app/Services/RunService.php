<?php

namespace App\Services;

use Exception;

class RunService
{
    public function validateAndFormat($run)
    {
        // Eliminar puntos y guiones del RUN
        $cleanRun = $this->cleanRun($run);

        // Validar la longitud del RUN
        if (! $this->isValidLength($cleanRun)) {
            throw new Exception('El RUN debe tener entre 7 y 8 dígitos.');
        }

        // Calcular el dígito verificador
        $dv = $this->calculateDV($cleanRun);

        // Formatear el RUN con el dígito verificador
        return $this->formatRun($cleanRun, $dv);
    }

    protected function cleanRun($run)
    {
        return preg_replace('/[^k0-9]/i', '', $run);
    }

    protected function isValidLength($run)
    {
        return strlen($run) >= 7 && strlen($run) <= 8;
    }

    protected function calculateDV($run)
    {
        $run = strrev($run);
        $sequence = [2, 3, 4, 5, 6, 7];
        $sum = array_reduce(str_split($run), function ($carry, $digit) use (&$sequence) {
            static $index = 0;
            $carry += $digit * $sequence[$index % count($sequence)];
            $index++;
            return $carry;
        }, 0);

        $remainder = 11 - ($sum % 11);

        return match ($remainder) {
            11 => '0',
            10 => 'K',
            default => (string)$remainder,
        };
    }

    protected function formatRun($run, $dv)
    {
        $runWithoutDV = substr($run, 0, -1);
        return number_format($runWithoutDV, 0, '', '.') . '-' . strtoupper($dv);
    }
}
