<?php

class Students
{
    public $name;
    public $grade;
    public $group;

    public function __construct($name, $grade, $group)
    {
        $this->name = $name;
        $this->grade = $grade;
        $this->group = $group;
    }

    public function getAverage()
    {
        $group1Total;
        $group2Total;

        if ($this->group === "group1") {
            $group1Total += $this->grade;
        } if ($this->group === "group2") {
            $group2Total += $this->grade;
        }

        $group1Average = $group1Total / 10;
        $group2Average = $group2Total / 10;     

        return $group1Average;
    }
}