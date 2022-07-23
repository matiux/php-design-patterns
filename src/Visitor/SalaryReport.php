<?php

declare(strict_types=1);

namespace DesignPatterns\Visitor;

use NumberFormatter;

class SalaryReport implements Visitor
{
    public function visitCompany(Company $company): string
    {
        $output = '';
        $total = 0;

        foreach ($company->getDepartments() as $department) {
            $total += $department->getCost();
            $output .= "\n--".$this->visitDepartment($department);
        }

        $fmt = numfmt_create('it_IT', NumberFormatter::CURRENCY);
        $formattedTotal = numfmt_format_currency($fmt, $total, 'EUR');

        return $company->getName()." ({$formattedTotal})\n".$output;
    }

    public function visitDepartment(Department $department): string
    {
        $output = '';

        foreach ($department->getEmployees() as $employee) {
            $output .= '   '.$this->visitEmployee($employee);
        }

        $fmt = numfmt_create('it_IT', NumberFormatter::CURRENCY);
        $formattedCost = numfmt_format_currency($fmt, $department->getCost(), 'EUR');

        return $department->getName()." ({$formattedCost})\n\n".$output;
    }

    public function visitEmployee(Employee $employee): string
    {
        $fmt = numfmt_create('it_IT', NumberFormatter::CURRENCY);
        $formattedSalary = numfmt_format_currency($fmt, $employee->getSalary(), 'EUR');

        return $formattedSalary.
            ' '.$employee->getName().
            ' ('.$employee->getPosition().")\n";
    }
}
