<?php

namespace app\Modules\Post\Services;

use Ramsey\Uuid\Uuid;

use app\Entitys\Posts;

use app\Helpers\EntityManagerHelper;

class AddPostService
{
	public static function handle(array $reqBody, string $userUuid): void
	{
		$entityManager = EntityManagerHelper::getEntityManager();

		$posts = new Posts(new \DateTime(), Uuid::uuid4());

		$posts->setUserUuid($userUuid);
		$posts->setTitle($reqBody["title"]);
		$posts->setContente($reqBody["contente"]);

		$entityManager->persist($posts);
		$entityManager->flush();
	}
}