<?php

declare(strict_types=1);

require dirname(__DIR__).'/../vendor/autoload.php';

use DesignPatterns\Specification\AllowedHeightUserSpecification;
use DesignPatterns\Specification\MinorUserSpecification;
use DesignPatterns\Specification\Over70UserSpecification;
use DesignPatterns\Specification\User;
use DesignPatterns\Specification\UserAndSpecification;
use DesignPatterns\Specification\UserNotSpecification;
use DesignPatterns\Specification\UserOrSpecification;
use Webmozart\Assert\Assert;

$freeEnterSpecification = new UserOrSpecification(new MinorUserSpecification(), new Over70UserSpecification());

$matteo = User::create('Matteo', new DateTime('1985-12-28'), 1.76);
$alessandro = User::create('Alessandro', new DateTime('2005-12-28'), 1.50);

$matteoCanEnterForFree = $freeEnterSpecification->isSatisfiedBy($matteo);
Assert::false($matteoCanEnterForFree);

$alessandroCanEnterForFree = $freeEnterSpecification->isSatisfiedBy($alessandro);
Assert::true($alessandroCanEnterForFree);

$canPlayGameSpecification = new UserAndSpecification(
    new UserNotSpecification(new MinorUserSpecification()),
    new AllowedHeightUserSpecification()
);
$matteoCanPlayGame = $canPlayGameSpecification->isSatisfiedBy($matteo);
$alessandroCanPlayGame = $canPlayGameSpecification->isSatisfiedBy($alessandro);
Assert::true($matteoCanPlayGame);
Assert::false($alessandroCanPlayGame);
