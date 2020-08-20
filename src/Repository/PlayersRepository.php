<?php

namespace App\Repository;

use App\Entity\Players;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Players|null find($id, $lockMode = null, $lockVersion = null)
 * @method Players|null findOneBy(array $criteria, array $orderBy = null)
 * @method Players[]    findAll()
 * @method Players[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlayersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $em)
    {
        parent::__construct($registry, Players::class);
        $this->em = $em;
    }

    public function savePlayer($name, $team, $position, $price)
    {
        $newPlayer = new Players();

        $newPlayer
            ->setName($name)
            ->setTeam($team)
            ->setPosition($position)
            ->setPrice($price);

        $this->em->persist($newPlayer);
        $this->em->flush();
        $this->em->close();
    }

    public function updatePlayer(Players $player)
    {
        $this->em->persist($player);
        $this->em->flush();
        $this->em->close();
    }

    public function removePlayer(Players $player)
    {
        $this->em->remove($player);
        $this->em->flush();
        $this->em->close();
    }
}
