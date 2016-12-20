<?php
namespace Tests\User;

use Topxia\Service\Common\BaseTestCase;

class StatusServiceTest extends BaseTestCase
{
    public function testSearchStatusesCount()
    {
        $status = array('courseId' => 1, 'type' => 'course', 'objectType' => 'course', 'message' => 'sss', 'properties' => 'sss');
        $this->getStatusService()->publishStatus($status);
        $count = $this->getStatusService()->countStatuses(array('courseId' => 1));
        $this->assertEquals(1, $count);
    }

    protected function getStatusService()
    {
        return $this->createService('User:StatusService');
    }
}
