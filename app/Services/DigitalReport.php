<?php

namespace App\Services;

/**
 *
 */
class DigitalReport
{
    /**
     * вычисление процента оценок
     *
     * @param      integer  $marks  The marks
     * @param      integer  $students     The students
     *
     * @return     integer  процент оценок
     */
    function percentageMark($marks, $students)
    {
        return round($marks / $students * 100);
    }

    /**
     * Вычисление КПУ
     *
     * @param      array   $marks     кол-во 5, 4, 3
     * @param      integer  $students  The students
     *
     * @return     integer   КПУ
     */
    public function kpu($marks, $students)
    {
        return round(($marks['mark5'] + $marks['mark4'] + $marks['mark3']) / $students * 100);
    }

    /**
     * Вычисление ПУ
     *
     * @param      array   $marks     кол-во 5 и 4
     * @param      integer  $students  The students
     *
     * @return     integer   ПУ
     */
    public function pu($marks, $students)
    {
        return round(($marks['mark5'] + $marks['mark4']) / $students * 100);
    }

    /**
     * Вычисление С/А
     *
     * @param      array   $marks     кол-во 5, 4, 3, 2
     * @param      integer  $students  The students
     *
     * @return     integer   С/А
     */
    public function ca($marks, $students)
    {
        return round((($marks['mark5'] * 5 + $marks['mark4'] * 4 + $marks['mark3'] * 3 + $marks['mark2'] * 2) / $students), 2);
    }

    /**
     * балансировка погрешности при округлении процентов
     *
     * @param      array  $percents  The percents
     *
     * @return     array  проценты оценок
     */
    public function balancing($percents)
    {
        $percentsSumm = array_sum($percents);

        arsort($percents);

        $difference = 100 - $percentsSumm;

        if ($difference > 0) {
            foreach ($percents as $key => $value) {
               $percents[$key] = ++$value;
               if ($difference == 1) {
                   break;
               }
               $difference--;
            }
        } elseif ($difference < 0) {
            foreach ($percents as $key => $value) {
               $percents[$key] = --$value;
               if ($difference == -1) {
                   break;
               }
               $difference++;
            }
        }

        return $percents;

    }
}
