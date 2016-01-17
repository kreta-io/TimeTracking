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

namespace spec\Kreta\Component\TimeTracking\Factory;

use Kreta\Component\Issue\Model\Interfaces\IssueInterface;
use PhpSpec\ObjectBehavior;

/**
 * Class TimeEntryFactorySpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
class TimeEntryFactorySpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('Kreta\Component\TimeTracking\Model\TimeEntry');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Kreta\Component\TimeTracking\Factory\TimeEntryFactory');
    }

    function it_creates_time_entry(IssueInterface $issue)
    {
        $this->create($issue)
            ->shouldReturnAnInstanceOf('Kreta\Component\TimeTracking\Model\Interfaces\TimeEntryInterface');
    }
}
