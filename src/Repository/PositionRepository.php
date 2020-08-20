<?php

namespace App\Repository;

use App\Entity\Position;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Position|null find($id, $lockMode = null, $lockVersion = null)
 * @method Position|null findOneBy(array $criteria, array $orderBy = null)
 * @method Position[]    findAll()
 * @method Position[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PositionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $em)
    {
        parent::__construct($registry, Position::class);
        $this->em = $em;
    }

    public function savePosition($name)
    {
        $newPosition = new Position();

        $newPosition
            ->setName($name);

        $this->em->persist($newPosition);
        $this->em->flush();
        $this->em->close();
    }

    public function updatePosition(Position $position)
    {
        $this->em->persist($position);
        $this->em->flush();
        $this->em->close();
    }

    public function removePosition(Position $position)
    {
        $this->em->remove($position);
        $this->em->flush();
        $this->em->close();
    }
}
