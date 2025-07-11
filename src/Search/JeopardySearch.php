<?php

namespace App\Search;

use Mezcalito\UxSearchBundle\Attribute\AsSearch;
use Mezcalito\UxSearchBundle\Search\AbstractSearch;

#[AsSearch('Jeopardy', 'jeopardy')]
class JeopardySearch extends AbstractSearch
{
    public function build(array $options = []): void
    {
        $this->addFacet('category', 'Category');
        // ->addFacet('type', 'Type', null, ['limit' => 2])
        // ->addFacet('brand', 'Brand')
        // ->addFacet('rating', 'Rating')
    }
}
