<?php
namespace Verso\App;

class FizzBuzz {
    public function operate(int $start, int $end) : array{
        $output = [];

        if ($start <= 0 || $end <= 0 || $start > $end) {
            throw new \Exception("Invalid range: start and end values must be positive and start must be less than end.");
        }
        
        for($index = $start; $index <= $end; $index++)
        {
            $divisibilityOutput = "";

            if($index % 3 === 0)
            {
                $divisibilityOutput = "Fizz";
            }

            if($index % 5 === 0)
            {
                $divisibilityOutput .= "Buzz";
            }

            $output[] = $divisibilityOutput != "" ? $divisibilityOutput : "{$index}";
        }

        return $output;

    }
}