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

namespace spec\Kreta\Component\TimeTracking\Model;

use Kreta\Component\Issue\Model\Interfaces\IssueInterface;
use PhpSpec\ObjectBehavior;

/**
 * Class TimeEntrySpec.
 */
class TimeEntrySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Kreta\Component\TimeTracking\Model\TimeEntry');
    }

    function it_implements_time_tracking_interface()
    {
        $this->shouldImplement('Kreta\Component\TimeTracking\Model\Interfaces\TimeEntryInterface');
    }

    function it_should_not_have_id_by_default()
    {
        $this->getId()->shouldReturn(null);
    }

    function its_date_reported_is_mutable(\DateTime $dateReported)
    {
        $this->setDateReported($dateReported)->shouldReturn($this);
        $this->getDateReported()->shouldReturn($dateReported);
    }

    function its_description_is_mutable()
    {
        $this->setDescription('Description')->shouldReturn($this);
        $this->getDescription()->shouldReturn('Description');
    }

    function its_issue_is_mutable(IssueInterface $issue)
    {
        $this->setIssue($issue)->shouldReturn($this);
        $this->getIssue()->shouldReturn($issue);
    }

    function its_time_spent_is_mutable()
    {
        $this->setTimeSpent(60 * 60)->shouldReturn($this);
        $this->getTimeSpent()->shouldReturn(60 * 60);
    }
}
