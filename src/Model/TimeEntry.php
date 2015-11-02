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

namespace Kreta\Component\TimeTracking\Model;

use Kreta\Component\Issue\Model\Interfaces\IssueInterface;
use Kreta\Component\TimeTracking\Model\Interfaces\TimeEntryInterface;

/**
 * Class TimeEntry.
 */
class TimeEntry implements TimeEntryInterface
{
    /**
     * The id.
     *
     * @var string
     */
    protected $id;

    /**
     * The datetime when the time entry was done.
     *
     * @var \DateTime
     */
    protected $dateReported;

    /**
     * An string describing what was done.
     *
     * @var string
     */
    protected $description;

    /**
     * An issue associated.
     *
     * @var \Kreta\Component\Issue\Model\Interfaces\IssueInterface
     */
    protected $issue;

    /**
     * Time spent in seconds.
     *
     * @var int
     */
    protected $timeSpent;

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getDateReported()
    {
        return $this->dateReported;
    }

    /**
     * {@inheritdoc}
     */
    public function setDateReported(\DateTime $dateReported)
    {
        $this->dateReported = $dateReported;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * {@inheritdoc}
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getIssue()
    {
        return $this->issue;
    }

    /**
     * {@inheritdoc}
     */
    public function setIssue(IssueInterface $issue)
    {
        $this->issue = $issue;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTimeSpent()
    {
        return $this->timeSpent;
    }

    /**
     * {@inheritdoc}
     */
    public function setTimeSpent($timeSpent)
    {
        $this->timeSpent = $timeSpent;

        return $this;
    }
}
