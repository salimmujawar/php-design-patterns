<?php
class Comment
{

    public function saveRelatedComment($commentText, $entityId, $entity)
    {
        if ($entity->findById($entityId)) {
            $this->saveComment($commentText, $entityId);
        }
    }

    private function saveComment($commentText, $entityId)
    {
        echo "\n Saved: $commentText against: $entityId";
    }

}
