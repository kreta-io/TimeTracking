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

namespace Kreta\Component\TimeTracking\Model\Interfaces;

use Kreta\Component\Issue\Model\Interfaces\IssueInterface;

/**
 * Interface TimeEntryInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
interface TimeEntryInterface
{
    /**
     * Gets id.
     *
     * @return string
     */
    public function getId();

    /**
     * Gets date when time entry was made.
     *
     * @return \Datetime
     */
    public function getDateReported();

    /**
     * Sets date when time entry was made.
     *
     * @param \DateTime $dateReported The date reported
     *
     * @return $this self Object
     */
    public function setDateReported(\DateTime $dateReported);

    /**
     * Gets entry description.
     *
     * @return string
     */
    public function getDescription();

    /**
     * Sets entry description.
     *
     * @param string $description The description
     *
     * @return $this self Object
     */
    public function setDescription($description);

    /**
     * Gets issue.
     *
     * @return \Kreta\Component\Issue\Model\Interfaces\IssueInterface
     */
    public function getIssue();

    /**
     * Sets issue.
     *
     * @param \Kreta\Component\Issue\Model\Interfaces\IssueInterface $issue The issue
     *
     * @return $this self Object
     */
    public function setIssue(IssueInterface $issue);

    /**
     * Gets time spent in seconds.
     *
     * @return int
     */
    public function getTimeSpent();

    /**
     * Sets time spent in seconds.
     *
     * @param int $timeSpent Seconds spent for the issue
     *
     * @return $this self Object
     */
    public function setTimeSpent($timeSpent);
}
