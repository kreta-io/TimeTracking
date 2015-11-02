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

namespace Kreta\Component\TimeTracking\Factory;

use Kreta\Component\Issue\Model\Interfaces\IssueInterface;

/**
 * Class TimeTrackingFactory.
 */
class TimeEntryFactory
{
    /**
     * The class name.
     *
     * @var string
     */
    protected $className;

    /**
     * Constructor.
     *
     * @param string $className The class name
     */
    public function __construct($className)
    {
        $this->className = $className;
    }

    /**
     * Creates an instance of a time entry.
     *
     * @param \Kreta\Component\Issue\Model\Interfaces\IssueInterface $issue The issue
     *
     * @return \Kreta\Component\TimeTracking\Model\Interfaces\TimeEntryInterface
     */
    public function create(IssueInterface $issue)
    {
        $timeEntry = new $this->className();

        return $timeEntry
            ->setDateReported(new \DateTime())
            ->setIssue($issue);
    }
}
