<?php
class Fatorial
{
    public function CalcFat($n)
    {
            $fat=1;
            for($c=1; $c<=$n; $c++)
            {
                $fat = $fat * $c;
            }
        return($fat);
    }
}