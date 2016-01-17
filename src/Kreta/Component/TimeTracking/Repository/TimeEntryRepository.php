<?php

/*
 * This file is part of the Kreta package.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 * (c) Gorka Laucirica <gorka.lauzirika@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kreta\Component\TimeTracking\Repository;

use Kreta\Component\Core\Repository\EntityRepository;
use Kreta\Component\Issue\Model\Interfaces\IssueInterface;

/**
 * Class TimeEntryRepository.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
class TimeEntryRepository extends EntityRepository
{
    /**
     * Finds all the time entries of issue given.
     * Can do sorting, limit and offset.
     *
     * @param \Kreta\Component\Issue\Model\Interfaces\IssueInterface $issue   The issue
     * @param string                                                 $sorting The sorting filter
     * @param int                                                    $limit   The limit
     * @param int                                                    $offset  The offset
     *
     * @return \Kreta\Component\TimeTracking\Model\Interfaces\TimeEntryInterface[]
     */
    public function findByIssue(IssueInterface $issue, $sorting = null, $limit = null, $offset = null)
    {
        return $this->findBy(['issue' => $issue], $sorting, $limit, $offset);
    }

    /**
     * {@inheritdoc}
     */
    protected function getQueryBuilder()
    {
        return parent::getQueryBuilder()
            ->addSelect(['i'])
            ->join('t.issue', 'i');
    }

    /**
     * {@inheritdoc}
     */
    protected function getAlias()
    {
        return 't';
    }
}
