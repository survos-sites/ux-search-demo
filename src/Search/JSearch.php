<?php

namespace App\Search;

use App\Entity\Jeopardy;
use Mezcalito\UxSearchBundle\Attribute\AsSearch;
use Mezcalito\UxSearchBundle\Search\AbstractSearch;

#[AsSearch(Jeopardy::class, 'j2', 'orm')]
class JSearch extends AbstractSearch
{
    public function build(array $options = []): void
    {
        $this->addFacet('category', 'Category');
        $this->addFacet('value', 'Value');
        // ->addFacet('type', 'Type', null, ['limit' => 2])
        // ->addFacet('brand', 'Brand')
        // ->addFacet('rating', 'Rating')
    }
}
