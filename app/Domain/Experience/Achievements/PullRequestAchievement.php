<?php

namespace App\Domain\Experience\Achievements;

class PullRequestAchievement implements Achievement
{
    public function __construct(
        private string $slug,
        private string $title,
        private string $description,
        private int $countRequirement,
    ) {
    }

    public function matches(int $count): bool
    {
        return $count === $this->countRequirement;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
