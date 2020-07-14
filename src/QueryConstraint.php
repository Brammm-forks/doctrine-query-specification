<?php

declare(strict_types=1);

namespace FrankDeJonge\DoctrineQuerySpecification;

use Doctrine\ORM\Query\Expr\Comparison;
use Doctrine\ORM\Query\Expr\Composite;
use Doctrine\ORM\Query\Expr\Func;
use Doctrine\ORM\Query\Expr\GroupBy;
use Doctrine\ORM\Query\Expr\Literal;
use Doctrine\ORM\Query\Expr\Math;
use Doctrine\ORM\Query\Expr\OrderBy;
use Doctrine\ORM\QueryBuilder;

interface QueryConstraint extends QuerySpecification
{
    /**
     * @param QueryBuilder $queryBuilder
     * @param string       $rootAlias
     *
     * @return Composite|Comparison|Func|GroupBy|Literal|Math|OrderBy|string|null
     */
    public function asQueryConstraint(QueryBuilder $queryBuilder, string $rootAlias);
}
