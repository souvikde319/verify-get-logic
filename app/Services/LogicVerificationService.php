<?php
namespace App\Services;

class LogicVerificationService
{
    public function processFile($file)
    {
        $handle = fopen($file, 'r');

        $results = [];
        $headerSkipped = false;

        while (($row = fgetcsv($handle)) !== false) {

            if (!$headerSkipped) {
                $headerSkipped = true;
                continue;
            }

            $chipId = $row[0];
            $A = (int)$row[1];
            $B = (int)$row[2];
            $C = (int)$row[3];
            $D = (int)$row[4];
            $O = (int)$row[5];

            // MAIN LOGIC (customize as needed)
            $expected = $this->calculateOutput($A, $B, $C, $D);

            $results[] = [
                'chip_id' => $chipId,
                'input' => "$A,$B,$C,$D",
                'expected' => (int)$expected,
                'actual' => $O,
                'status' => $expected == $O ? 'PASS' : 'FAIL'
            ];
        }

        fclose($handle);

        return $results;
    }

    private function calculateOutput($A, $B, $C, $D)
    {
        //  CHANGE BASED ON YOUR ASSIGNMENT CIRCUIT

        // Example:
        return ($A && $B) || ($C && $D);

        // Other options:
        // return $A && $B; // AND
        // return $A || $B; // OR
        // return !($A && $B); // NAND
        // return !($A || $B); // NOR
    }
}