<?php

declare(strict_types=1);

namespace DesignPatterns\Visitor;

/**
 * The Visitor interface declares a set of visiting methods for each of the concrete Component classes.
 */
interface Visitor
{
    public function visitCompany(Company $company): string;

    public function visitDepartment(Department $department): string;

    public function visitEmployee(Employee $employee): string;
}
