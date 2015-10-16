<?php

namespace Topxia\Service\Task\Dao;

interface TaskDao {

	public function getTask($id);

	/*public function getTaskBy($userId, $taskType, $targetId, $targetType);

	public function getActiveTaskBy($userId, $taskType, $targetId, $targetType);*/

	public function getTaskByParams(array $conditions);

	public function findUserTasksByBatchIdAndTaskType($userId, $batchId, $taskType);

	public function findUserCompletedTasks($userId, $batchId);

	public function addTask(array $fields);

	public function updateTask($id, array $fields);

	public function deleteTask($id);

	public function searchTasks($conditions, $orderBy, $start, $limit);

    public function searchTaskCount($conditions);

}