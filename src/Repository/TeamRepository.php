<?php

namespace App\Repository;

use App\Entity\Team;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Team|null find($id, $lockMode = null, $lockVersion = null)
 * @method Team|null findOneBy(array $criteria, array $orderBy = null)
 * @method Team[]    findAll()
 * @method Team[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TeamRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $em)
    {
        parent::__construct($registry, Team::class);
        $this->em = $em;
    }

    public function saveTeam($name)
    {
        $newTeam = new Team();

        $newTeam
            ->setName($name);

        $this->em->persist($newTeam);
        $this->em->flush();
        $this->em->close();
    }

    public function updateTeam(Team $team)
    {
        $this->em->persist($team);
        $this->em->flush();
        $this->em->close();
    }

    public function removeTeam(Team $team)
    {
        $this->em->remove($team);
        $this->em->flush();
        $this->em->close();
    }
}
